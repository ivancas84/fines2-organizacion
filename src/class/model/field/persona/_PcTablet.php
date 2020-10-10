<?php

require_once("class/model/Field.php");

class _FieldPersonaPcTablet extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $default = "0";
  public $length = "3";  
  public $name = "pc_tablet";
  public $alias = "pt";
  public $entityName = "persona";


}
