<?php

require_once("class/model/Field.php");

class _FieldPersonaTrayectoriaEducativa extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $name = "trayectoria_educativa";
  public $alias = "te";
  public $entityName = "persona";
  public $dataType = "string";  
  public $subtype = "text";  
  public $length = "255";  


}
