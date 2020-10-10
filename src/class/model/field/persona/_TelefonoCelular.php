<?php

require_once("class/model/Field.php");

class _FieldPersonaTelefonoCelular extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $length = "255";  
  public $name = "telefono_celular";
  public $alias = "tc";
  public $entityName = "persona";


}
