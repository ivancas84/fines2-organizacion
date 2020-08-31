<?php

require_once("class/model/Field.php");

class _FieldPersonaDistrito extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $unique = false;
  public $notNull = true;
  public $default = "La Plata";
  public $length = "255";
  public $main = false;
  public $name = "distrito";
  public $alias = "dis";


  public function getEntity(){ return $this->container->getEntity('persona'); }


}
