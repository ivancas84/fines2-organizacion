<?php

require_once("class/model/Field.php");

class _FieldPersonaCorreo extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $unique = false;
  public $notNull = false;
  public $default = null;
  public $length = "255";
  public $main = false;
  public $name = "correo";
  public $alias = "cor";


  public function getEntity(){ return $this->container->getEntity('persona'); }


}
