<?php

require_once("class/model/Field.php");

class _FieldPersonaPrograma extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $length = "255";  
  public $name = "programa";
  public $alias = "pro";
  public $entityName = "persona";


}
