<?php

require_once("class/model/Field.php");

class _FieldPersonaFila extends Field {

  public $type = "int";
  public $fieldType = "nf";
  public $unique = false;
  public $notNull = false;
  public $default = null;
  public $length = "10";
  public $main = false;
  public $name = "fila";
  public $alias = "fil";


  public function getEntity(){ return $this->container->getEntity('persona'); }


}
