<?php

require_once("class/model/Field.php");

class _FieldPersonaIngreso extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $name = "ingreso";
  public $alias = "ing";
  public $entityName = "persona";
  public $dataType = "string";  
  public $subtype = "text";  
  public $length = "45";  


}
