<?php

require_once("class/model/Field.php");

class _FieldPersonaAnaliticoPartida extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $default = "0";
  public $length = "3";  
  public $name = "analitico_partida";
  public $alias = "ap";
  public $entityName = "persona";


}
