<?php

require_once("class/model/Field.php");

class _FieldPersonaTurno extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $name = "turno";
  public $alias = "tur";
  public $entityName = "persona";
  public $dataType = "string";  
  public $subtype = "text";  
  public $length = "45";  


}
