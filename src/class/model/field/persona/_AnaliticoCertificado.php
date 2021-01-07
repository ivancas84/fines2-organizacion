<?php

require_once("class/model/Field.php");

class _FieldPersonaAnaliticoCertificado extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $default = "0";
  public $name = "analitico_certificado";
  public $alias = "aca";
  public $entityName = "persona";
  public $dataType = "boolean";  
  public $subtype = "checkbox";  
  public $length = "3";  


}
