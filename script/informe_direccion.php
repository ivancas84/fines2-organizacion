<?php

require_once("../config/config.php");
require_once("class/Container.php");
require_once("function/array_combine_key.php");

$render = new Render();
$render->setSize(false);
$render->setCondition([
  ["cens","=",'456'],
  ["fila","=", true],
  ["id_comision","=", true],
  ["error","=",false],
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

<?for($i = 5; $i <= $cantidad; $i++):?>
  <?if (array_key_exists($i, $personas)):?>
  <? $p = $container->getSqlo("persona")->values($personas[$i])["persona"] ?>
    <tr>
      <td>1</td>
      <td>LA PLATA</td>
      <td><?=$p->cens()?></td>
      <td><?=$p->idComision()?></td>
      <td><?=$p->tramo()?></td>
      <td><?=$p->identificador()?></td>
      <td><?=$p->numeroInscripcion()?></td>
      <td><?=$p->numeroDocumento()?></td>
      <td><?=$p->apellidos()?></td>
      <td><?=$p->nombres()?></td>
      <td><?=$p->telefono()?></td>
      <td><?=$p->correo()?></td>
      <td><?=($p->netNotebook() || $p->pcEscritorio()) ? "Si":"No"?></td>
      <td><?=($p->conexionInternetPaga()) ? "Si":"No"?></td>
      <td><?=(strpos($p->telefonoCelular(), "Plan") !== false) ? "Si":"No"?></td>
      <td><?=$p->fechaNacimiento("d/m/Y")?></td>
      <td><?=$p->idComision()?></td>
      <td>CORRECTO</td>
      <td>
        <?if($p->identificador()) { echo "EN NACIÓN CON ID"; } 
        elseif($p->comision()) { echo "CONTINUIDAD 2019 SIN ID"; } 
        else { echo "EN TERRITORIO SIN ID"; }?>
        </td>      
    </tr>
  <?else:?>
    <?=renglonVacio()?>
  <?endif?>
<?endfor?>
</table>
</body>
</html>
