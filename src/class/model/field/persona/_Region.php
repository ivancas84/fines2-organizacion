<?php

require_once("class/model/Field.php");

class _FieldPersonaRegion extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = "1";
  public $name = "region";
  public $alias = "reg";
  public $entityName = "persona";
  public $dataType = "string";  
  public $subtype = "text";  
  public $length = "255";  


}
