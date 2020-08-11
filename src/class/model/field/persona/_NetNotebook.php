<?php

require_once("class/model/Field.php");

class _FieldPersonaNetNotebook extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $unique = false;
  public $notNull = false;
  public $default = false;
  public $length = "3";
  public $main = false;
  public $name = "net_notebook";
  public $alias = "nn";


  public function getEntity(){ return Entity::getInstanceRequire('persona'); }


}
