<?php

require_once("class/model/Field.php");

class _FieldPersonaIdComision extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $name = "id_comision";
  public $alias = "ic";
  public $entityName = "persona";
  public $dataType = "string";  
  public $subtype = "text";  
  public $length = "45";  


}
