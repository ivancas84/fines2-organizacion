<?php

require_once("class/model/Field.php");

class _FieldPersonaConexionInternetPaga extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $default = "0";
  public $name = "conexion_internet_paga";
  public $alias = "cip";
  public $entityName = "persona";
  public $dataType = "boolean";  
  public $subtype = "checkbox";  
  public $length = "3";  


}
