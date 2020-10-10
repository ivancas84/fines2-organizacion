<?php

require_once("class/model/Field.php");

class _FieldPersonaAnaliticoDni extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $default = "0";
  public $length = "3";  
  public $name = "analitico_dni";
  public $alias = "ad";
  public $entityName = "persona";


}
