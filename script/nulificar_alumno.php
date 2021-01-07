<?php

require_once("../config/config.php");
require_once("class/Container.php");
require_once("class/tools/Filter.php");

$container = new Container();

$numero_documento = Filter::getRequired("id");

$sql = "
UPDATE persona 
SET comision_2020 = null, id_comision = null, cens = null, tramo = null 
WHERE numero_documento = '" . $numero_documento . "';";

echo "<pre>";
echo $sql;
$container->getDb()->query($sql);
