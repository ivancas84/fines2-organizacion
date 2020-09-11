<?php

require_once("../config/config.php");
require_once("class/Container.php");
require_once("function/array_combine_key.php");

$render = new Render();
$render->setSize(false);
$render->setCondition([
  ["cens","=",'456'],
  ["fila","=", false],
  ["id_comision","=", true],
  ["error","=",false],
]);

$container = new Container();
$ids = $container->getDb()->ids("persona", $render);

$row = ["informado" => new DateTime()];
$update = $container->getSqlo("persona")->updateAll($row, $ids);
$result = $container->getDb()->query($update["sql"]);
echo "Se han actualizado los registros";