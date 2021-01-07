<?php

require_once("class/model/Field.php");

class _FieldPersonaActualizado extends Field {

  public $type = "timestamp";
  public $fieldType = "nf";
  public $default = null;
  public $name = "actualizado";
  public $alias = "acb";
  public $entityName = "persona";
  public $dataType = "timestamp";  
  public $subtype = "timestamp";  


}
