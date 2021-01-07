<?php

require_once("class/model/Field.php");

class _FieldPersonaTablet extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $default = "0";
  public $name = "tablet";
  public $alias = "tab";
  public $entityName = "persona";
  public $dataType = "boolean";  
  public $subtype = "checkbox";  
  public $length = "3";  


}
