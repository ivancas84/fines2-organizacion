<?php

require_once("class/model/Field.php");

class _FieldComisionClasificacion extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $length = "255";  
  public $name = "clasificacion";
  public $alias = "cla";
  public $entityName = "comision";


}
