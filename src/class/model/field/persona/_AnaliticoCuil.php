<?php

require_once("class/model/Field.php");

class _FieldPersonaAnaliticoCuil extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $default = "0";
  public $length = "3";  
  public $name = "analitico_cuil";
  public $alias = "ac";
  public $entityName = "persona";


}
