<?php

require_once("class/model/Field.php");

class _FieldPersonaIdentificador extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $name = "identificador";
  public $alias = "ide";
  public $entityName = "persona";
  public $dataType = "string";  
  public $subtype = "text";  
  public $length = "45";  


}
