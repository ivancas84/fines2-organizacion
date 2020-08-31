<?php

require_once("class/Container.php");

$container = new Container();
$structure = array (
  $container->getEntity("persona"),
);

  Entity::setStructure($structure);

