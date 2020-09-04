<?php

require_once("../config/config.php");
require_once("class/Container.php");
require_once("function/array_combine_key.php");

$render = new Render();
$render->setSize(false);
$render->setCondition([
  ["cens","=",'456'],
  ["fila","=", true],
]);

$container = new Container();
$personas = $container->getDb()->all("persona", $render);
$render = new Render();
$render->setAggregate(["max_fila"]);
$result = $container->getDb()->advanced("persona", $render);
$cantidad = intval($result[0]["max_fila"]);
$personas = array_combine_key($personas, "fila");

function renglonVacio(){
  echo "<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
";
}
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
<?=renglonVacio()?>
<?=renglonVacio()?>
<?=renglonVacio()?>
<tr>
  <td>REGIÓN</td>	
  <td>DISTRITO</td>	
  <td>LOCALIDAD</td>
  <td>PROGRAMA</td>
  <td>INSCRIPCIÓN  MEN</td>
  <td>CENS</td>	
  <td>SEDE</td>
  <td>COMISIÓN</td>
  <td>AÑO/CUATRI</td>
  <td>ID</td>
  <td>N° INSCRIPCIÓN</td>
  <td>DNI</td>
  <td>APELLIDO</td>
  <td>NOMBRE</td>
  <td>GÉNERO</td>
  <td>TELEFONO</td>
  <td>CORREO</td>
  <td>TRAYECTORIA
  <td>EDUCATIVA</td>
  <td>TURNO</td>
  <td>PC_ESCRITORIO</td>
  <td>NET_NOTEBOOK</td>
  <td>TABLET</td>
  <td>COMPUTADORA</td>
  <td>IMPRESORA</td>
  <td>CONEXIÓN A INTERNET</td>
  <td>CELULAR</td>
  <td>FECHA DE NACIMIENTO</td>
  <td>COMISIÓN</td>
  <td>SITUACIÓN DEL/DE LA ESTUDIANTE</td>
  <td>TIPO DE INSCRIPCIÓN</td>
</tr>

<?for($i = 5; $i <= $cantidad; $i++):?>
  <?if (array_key_exists($i, $personas)):?>
  <? $p = $container->getSqlo("persona")->values($personas[$i])["persona"] ?>
    <tr>
      <td>1</td>
      <td>LA PLATA</td>
      <td><?=$p->cens()?></td>
      <td><?=$p->sede()?></td>
      <td><?=$p->tramo()?></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  <?else:?>
    <?=renglonVacio()?>
  <?endif?>
<?endfor?>
</table>
</body>
</html>
