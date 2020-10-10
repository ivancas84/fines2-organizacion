<?php

require_once("class/model/Field.php");

class _FieldPersonaDistrito extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = "La Plata";
  public $length = "255";  
  public $name = "distrito";
  public $alias = "dis";
  public $entityName = "persona";


}
