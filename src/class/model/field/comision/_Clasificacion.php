<?php

require_once("class/model/Field.php");

class _FieldComisionClasificacion extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $name = "clasificacion";
  public $alias = "cla";
  public $entityName = "comision";
  public $dataType = "string";  
  public $subtype = "text";  
  public $length = "255";  


}
