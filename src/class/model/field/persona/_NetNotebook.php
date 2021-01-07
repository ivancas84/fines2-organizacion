<?php

require_once("class/model/Field.php");

class _FieldPersonaNetNotebook extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $default = "0";
  public $name = "net_notebook";
  public $alias = "nn";
  public $entityName = "persona";
  public $dataType = "boolean";  
  public $subtype = "checkbox";  
  public $length = "3";  


}
