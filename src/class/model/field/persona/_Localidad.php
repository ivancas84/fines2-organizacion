<?php

require_once("class/model/Field.php");

class _FieldPersonaLocalidad extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $length = "255";  
  public $name = "localidad";
  public $alias = "loc";
  public $entityName = "persona";


}
