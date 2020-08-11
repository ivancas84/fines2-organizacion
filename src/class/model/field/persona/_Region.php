<?php

require_once("class/model/Field.php");

class _FieldPersonaRegion extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $unique = false;
  public $notNull = true;
  public $default = "'1'";
  public $length = "45";
  public $main = false;
  public $name = "region";
  public $alias = "reg";


  public function getEntity(){ return Entity::getInstanceRequire('persona'); }


}
