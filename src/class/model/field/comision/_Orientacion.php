<?php

require_once("class/model/Field.php");

class _FieldComisionOrientacion extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $name = "orientacion";
  public $alias = "ori";
  public $entityName = "comision";
  public $dataType = "string";  
  public $subtype = "text";  
  public $length = "45";  


}
