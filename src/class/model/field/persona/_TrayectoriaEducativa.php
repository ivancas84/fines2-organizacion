<?php

require_once("class/model/Field.php");

class _FieldPersonaTrayectoriaEducativa extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $length = "255";  
  public $name = "trayectoria_educativa";
  public $alias = "te";
  public $entityName = "persona";


}
