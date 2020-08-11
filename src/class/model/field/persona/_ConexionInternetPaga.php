<?php

require_once("class/model/Field.php");

class _FieldPersonaConexionInternetPaga extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $unique = false;
  public $notNull = false;
  public $default = false;
  public $length = "3";
  public $main = false;
  public $name = "conexion_internet_paga";
  public $alias = "cip";


  public function getEntity(){ return Entity::getInstanceRequire('persona'); }


}
