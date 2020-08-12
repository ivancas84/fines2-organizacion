<?php

require_once("class/model/Field.php");

class _FieldPersonaInscripcionMen extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $unique = false;
  public $notNull = true;
  public $default = false;
  public $length = "3";
  public $main = false;
  public $name = "inscripcion_men";
  public $alias = "im";


  public function getEntity(){ return Entity::getInstanceRequire('persona'); }


}
