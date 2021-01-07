<?php

require_once("class/model/Field.php");

class _FieldPersonaAnaliticoCuil extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $default = "0";
  public $name = "analitico_cuil";
  public $alias = "ac";
  public $entityName = "persona";
  public $dataType = "boolean";  
  public $subtype = "checkbox";  
  public $length = "3";  


}
