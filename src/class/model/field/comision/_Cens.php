<?php

require_once("class/model/Field.php");

class _FieldComisionCens extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $name = "cens";
  public $alias = "cen";
  public $entityName = "comision";
  public $dataType = "string";  
  public $subtype = "text";  
  public $length = "255";  


}
