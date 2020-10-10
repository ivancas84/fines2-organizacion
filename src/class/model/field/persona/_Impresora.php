<?php

require_once("class/model/Field.php");

class _FieldPersonaImpresora extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $default = "0";
  public $length = "3";  
  public $name = "impresora";
  public $alias = "imp";
  public $entityName = "persona";


}
