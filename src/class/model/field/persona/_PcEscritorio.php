<?php

require_once("class/model/Field.php");

class _FieldPersonaPcEscritorio extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $default = "0";
  public $length = "3";  
  public $name = "pc_escritorio";
  public $alias = "pe";
  public $entityName = "persona";


}
