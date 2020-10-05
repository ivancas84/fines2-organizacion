<?php
require_once("../config/config.php");
require_once("class/Container.php");

$container = new Container();
$sql = "
SELECT * 
FROM persona
WHERE  numero_documento LIKE '%,%' 
";
$result = $container->getDb()->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);


$result->free();
$documentos_numericos = array();

$personas = [];
foreach($rows as $row){
  $persona = $container->getValues("persona")->_fromArray($row);
  $persona->resetNumeroDocumento();
  array_push($documentos_numericos, $persona->numeroDocumento());
  array_push($personas, $persona);
}

if(empty($documentos_numericos)) die("No hay documentos numericos");

$personasExistentes = $container->getDb()->all("persona", ["numero_documento","=",$documentos_numericos]);
$documentos_numericos_existentes = array_column($personasExistentes, "numero_documento");
foreach($personas as $persona){
  if(in_array($persona->numeroDocumento(), $documentos_numericos_existentes)) {
    echo "<br>".$container->getSqlo("persona")->delete($persona->id())["sql"];
  }
}