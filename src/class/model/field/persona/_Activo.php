<?php

require_once("class/model/Field.php");

class _FieldPersonaActivo extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $default = "1";
  public $length = "3";  
  public $name = "activo";
  public $alias = "act";
  public $entityName = "persona";


}
