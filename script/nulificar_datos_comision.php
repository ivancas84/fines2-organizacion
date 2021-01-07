<?php

require_once("../config/config.php");
require_once("class/Container.php");
require_once("class/tools/Filter.php");

$container = new Container();

$id_comision = Filter::getRequired("id");

$sql = "
UPDATE persona 
SET comision_2020 = null, id_comision = null, cens = null, tramo = null 
WHERE id_comision = '" . $id_comision . "';";

echo "<pre>";
echo $sql;
$container->getDb()->query($sql);
