<?php

require_once("class/model/Field.php");

class _FieldPersonaSede extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $length = "255";  
  public $name = "sede";
  public $alias = "sed";
  public $entityName = "persona";


}
