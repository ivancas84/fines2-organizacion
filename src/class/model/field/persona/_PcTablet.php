<?php

require_once("class/model/Field.php");

class _FieldPersonaPcTablet extends Field {

  public $type = "tinyint";
  public $fieldType = "nf";
  public $unique = false;
  public $notNull = true;
  public $default = "0";
  public $length = "3";
  public $main = false;
  public $name = "pc_tablet";
  public $alias = "pt";


  public function getEntity(){ return $this->container->getEntity('persona'); }


}
