<?php

require_once("class/model/Field.php");

class _FieldComisionTramo extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $name = "tramo";
  public $alias = "tra";
  public $entityName = "comision";
  public $dataType = "string";  
  public $subtype = "text";  
  public $length = "45";  


}
