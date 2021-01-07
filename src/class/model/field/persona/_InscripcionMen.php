<?php

require_once("class/model/Field.php");

class _FieldPersonaInscripcionMen extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $default = "0";
  public $name = "inscripcion_men";
  public $alias = "im";
  public $entityName = "persona";
  public $dataType = "boolean";  
  public $subtype = "checkbox";  
  public $length = "3";  


}
