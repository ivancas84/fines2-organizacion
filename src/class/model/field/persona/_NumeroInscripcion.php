<?php

require_once("class/model/Field.php");

class _FieldPersonaNumeroInscripcion extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $name = "numero_inscripcion";
  public $alias = "ni";
  public $entityName = "persona";
  public $dataType = "string";  
  public $subtype = "text";  
  public $length = "45";  


}
