<?php

require_once("class/model/Field.php");

class _FieldPersonaCens extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $unique = false;
  public $notNull = false;
  public $default = false;
  public $length = "255";
  public $main = false;
  public $name = "cens";
  public $alias = "cen";


  public function getEntity(){ return Entity::getInstanceRequire('persona'); }


}