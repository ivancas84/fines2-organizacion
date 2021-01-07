<?php

require_once("class/model/Field.php");

class _FieldPersonaArchivo2020 extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $default = "0";
  public $name = "archivo_2020";
  public $alias = "a2a";
  public $entityName = "persona";
  public $dataType = "boolean";  
  public $subtype = "checkbox";  
  public $length = "3";  


}
