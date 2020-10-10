<?php

require_once("class/model/Field.php");

class _FieldPersonaIdentificador extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $length = "45";  
  public $name = "identificador";
  public $alias = "ide";
  public $entityName = "persona";


}
