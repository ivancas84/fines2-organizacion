<?php

require_once("class/model/Field.php");

class _FieldPersonaNumeroInscripcion extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $length = "45";  
  public $name = "numero_inscripcion";
  public $alias = "ni";
  public $entityName = "persona";


}
