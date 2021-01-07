<?php

require_once("class/model/Field.php");

class _FieldPersonaDistrito extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = "La Plata";
  public $name = "distrito";
  public $alias = "dis";
  public $entityName = "persona";
  public $dataType = "string";  
  public $subtype = "text";  
  public $length = "255";  


}
