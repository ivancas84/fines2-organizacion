<?php

require_once("class/model/Field.php");

class _FieldPersonaPcTablet extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $default = "0";
  public $name = "pc_tablet";
  public $alias = "pt";
  public $entityName = "persona";
  public $dataType = "boolean";  
  public $subtype = "checkbox";  
  public $length = "3";  


}
