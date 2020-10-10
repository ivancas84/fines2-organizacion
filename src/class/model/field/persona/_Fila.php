<?php

require_once("class/model/Field.php");

class _FieldPersonaFila extends Field {

  public $type = "int";
  public $fieldType = "nf";
  public $default = null;
  public $length = "10";  
  public $name = "fila";
  public $alias = "fil";
  public $entityName = "persona";


}
