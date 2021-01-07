<?php

require_once("class/model/Field.php");

class _FieldPersonaPrograma extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $name = "programa";
  public $alias = "pro";
  public $entityName = "persona";
  public $dataType = "string";  
  public $subtype = "text";  
  public $length = "255";  


}
