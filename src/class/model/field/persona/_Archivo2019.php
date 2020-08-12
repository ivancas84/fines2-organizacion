<?php

require_once("class/model/Field.php");

class _FieldPersonaArchivo2019 extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $unique = false;
  public $notNull = true;
  public $default = false;
  public $length = "3";
  public $main = false;
  public $name = "archivo_2019";
  public $alias = "a2";


  public function getEntity(){ return Entity::getInstanceRequire('persona'); }


}
