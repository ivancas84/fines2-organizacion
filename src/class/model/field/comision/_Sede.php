<?php

require_once("class/model/Field.php");

class _FieldComisionSede extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $name = "sede";
  public $alias = "sed";
  public $entityName = "comision";
  public $dataType = "string";  
  public $subtype = "text";  
  public $length = "255";  


}
