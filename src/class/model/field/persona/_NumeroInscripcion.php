<?php

require_once("class/model/Field.php");

class _FieldPersonaNumeroInscripcion extends Field {

  public $type = "varchar";
  public $fieldType = "nf";
  public $unique = false;
  public $notNull = false;
  public $default = null;
  public $length = "45";
  public $main = false;
  public $name = "numero_inscripcion";
  public $alias = "ni";


  public function getEntity(){ return $this->container->getEntity('persona'); }


}
