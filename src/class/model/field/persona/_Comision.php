<?php

require_once("class/model/Field.php");

class _FieldPersonaComision extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $length = "45";  
  public $name = "comision";
  public $alias = "com";
  public $entityName = "persona";


}
