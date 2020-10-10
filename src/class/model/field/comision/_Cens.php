<?php

require_once("class/model/Field.php");

class _FieldComisionCens extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $default = null;
  public $length = "255";  
  public $name = "cens";
  public $alias = "cen";
  public $entityName = "comision";


}
