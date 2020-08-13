<?php

require_once("class/model/Field.php");

class _FieldPersonaAnaliticoDni extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $unique = false;
  public $notNull = true;
  public $default = false;
  public $length = "3";
  public $main = false;
  public $name = "analitico_dni";
  public $alias = "ad";


  public function getEntity(){ return Entity::getInstanceRequire('persona'); }


}
