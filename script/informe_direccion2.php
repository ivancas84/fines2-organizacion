<?php

require_once("../config/config.php");
require_once("class/model/Render.php");
require_once("class/Container.php");
require_once("function/array_combine_key.php");

$container = new Container();

$render = new Render();
$render->setSize(false);
$render->setCondition([
  ["cens","=",'456'],
  ["id_comision","=", true],
]);
$render->setOrder(["id_comision"=>"ASC"]);
$personas = $container->getDb()->all("persona", $render);
$comisiones_ = $container->getDb()->all("comision", $render);
$comisiones = array_combine_key($comisiones_, "id_comision");

?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>
table, tr, th, td {
  border: 1px solid black ;
  border-collapse: collapse;
}
</style>
</head>
<body>
<table>
<tr>
  <td>REGION</td>	
  <td>DISTRITO</td>	
  <td>CENS</td>
  <td>SEDE</td>
  <td>AÑO/CUATRI</td>
  <td>ID</td>	
  <td>N° INSCRIPCION</td>
  <td>DNI</td>
  <td>APELLIDO</td>
  <td>NOMBRE</td>
  <td>TELEFONO</td>
  <td>CORREO</td>
  <td>COMPUTADORA</td>
  <td>CONEXION A INTERNET</td>
  <td>CELULAR</td>
  <td>FECHA DE NACIMIENTO</td>
  <td>COMISION</td>
  <td>SITUACION DEL ESTUDIANTE</td>
  <td>TIPO DE INSCRIPCION</td>
</tr>

<? foreach($personas as $persona): ?>  
  <? $v = $container->getRel("persona")->value($persona); ?>
  <? $p = $v["persona"]; ?>
  <? ?>
    <tr>
      <td>1</td>
      <td>LA PLATA</td>
      <td>456</td>
      <td><?=$comisiones[$p->_get("id_comision")]["sede"]?></td>
      <td><?=$p->_get("tramo")?></td>
      <td><?=$p->_get("identificador")?></td>
      <td><?=$p->_get("numero_inscripcion")?></td>
      <td><?=$p->_get("numero_documento")?></td>
      <td><?=$p->_get("apellidos")?></td>
      <td><?=$p->_get("nombres")?></td>
      <td><?=$p->_get("telefono")?></td>
      <td><?=$p->_get("correo")?></td>
      <td><?=($p->_get("net_notebook") || $p->_get("pc_escritorio")) ? "Si":"No"?></td>
      <td><?=($p->_get("conexion_internet_paga")) ? "Si":"No"?></td>
      <td><?=(strpos($p->_get("telefono_celular"), "Plan") !== false) ? "Si":"No"?></td>
      <td><?=$p->_get("fecha_nacimiento","d/m/Y")?></td>
      <td><?=$p->_get("id_comision")?></td>
      <td>CORRECTO</td>
      <td>
        <?if($p->_get("identificador")) { echo "EN NACIÓN CON ID"; } 
        //elseif($p->comision()) { echo "CONTINUIDAD 2019 SIN ID"; } 
        else { echo "EN TERRITORIO SIN ID"; }?>
        </td>      
    </tr>
<?endforeach?>
</table>
</body>
</html>
