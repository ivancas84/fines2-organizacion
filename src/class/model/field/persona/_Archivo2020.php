<?php

require_once("class/model/Field.php");

class _FieldPersonaArchivo2020 extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $unique = false;
  public $notNull = true;
  public $default = "0";
  public $length = "3";
  public $main = false;
  public $name = "archivo_2020";
  public $alias = "a2a";


  public function getEntity(){ return $this->container->getEntity('persona'); }


}
