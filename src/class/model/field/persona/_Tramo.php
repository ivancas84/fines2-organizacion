<?php

require_once("class/model/Field.php");

class _FieldPersonaTramo extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $name = "tramo";
  public $alias = "tra";
  public $entityName = "persona";
  public $dataType = "string";  
  public $subtype = "text";  
  public $length = "45";  


}
