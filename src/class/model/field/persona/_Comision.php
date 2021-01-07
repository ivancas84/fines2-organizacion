<?php

require_once("class/model/Field.php");

class _FieldPersonaComision extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $name = "comision";
  public $alias = "com";
  public $entityName = "persona";
  public $dataType = "string";  
  public $subtype = "text";  
  public $length = "45";  


}
