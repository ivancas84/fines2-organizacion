<?php

require_once("class/model/Field.php");

class _FieldPersonaInformado extends Field {

  public $type = "timestamp";
  public $fieldType = "nf";
  public $default = null;
  public $name = "informado";
  public $alias = "inf";
  public $entityName = "persona";
  public $dataType = "timestamp";  
  public $subtype = "timestamp";  


}
