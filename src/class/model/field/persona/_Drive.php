<?php

require_once("class/model/Field.php");

class _FieldPersonaDrive extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $default = "0";
  public $name = "drive";
  public $alias = "dri";
  public $entityName = "persona";
  public $dataType = "boolean";  
  public $subtype = "checkbox";  
  public $length = "3";  


}
