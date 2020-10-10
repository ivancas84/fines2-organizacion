<?php

require_once("class/model/Field.php");

class _FieldPersonaCorreo extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $length = "255";  
  public $name = "correo";
  public $alias = "cor";
  public $entityName = "persona";


}
