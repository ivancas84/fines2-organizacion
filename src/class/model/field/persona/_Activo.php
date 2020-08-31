<?php

require_once("class/model/Field.php");

class _FieldPersonaActivo extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $unique = false;
  public $notNull = true;
  public $default = "1";
  public $length = "3";
  public $main = false;
  public $name = "activo";
  public $alias = "act";


  public function getEntity(){ return $this->container->getEntity('persona'); }


}
