<?php

require_once("class/model/Field.php");

class _FieldPersonaInformado extends Field {

  public $type = "timestamp";
  public $fieldType = "nf";
  public $default = null;
  public $length = false;  
  public $name = "informado";
  public $alias = "inf";
  public $entityName = "persona";


}
