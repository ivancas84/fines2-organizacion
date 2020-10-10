<?php

require_once("class/model/Field.php");

class _FieldPersonaIngreso extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $length = "45";  
  public $name = "ingreso";
  public $alias = "ing";
  public $entityName = "persona";


}
