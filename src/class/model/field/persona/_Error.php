<?php

require_once("class/model/Field.php");

class _FieldPersonaError extends Field {

  public $type = "text";
  public $fieldType = "nf";
  public $default = null;
  public $name = "error";
  public $alias = "err";
  public $entityName = "persona";
  public $dataType = "text";  
  public $subtype = "textarea";  
  public $length = "65535";  


}
