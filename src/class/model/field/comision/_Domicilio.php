<?php

require_once("class/model/Field.php");

class _FieldComisionDomicilio extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $length = "255";  
  public $name = "domicilio";
  public $alias = "dom";
  public $entityName = "comision";


}
