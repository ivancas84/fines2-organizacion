<?php

require_once("class/model/Entity.php");
require_once("class/model/Field.php");

class _ComisionEntity extends Entity {
  public $name = "comision";
  public $alias = "comi";
 
  public function getPk(){
    return $this->container->getField("comision", "id");
  }

  public function getFieldsNf(){
    return array(
      $this->container->getField("comision", "id_comision"),
      $this->container->getField("comision", "sede"),
      $this->container->getField("comision", "tramo"),
      $this->container->getField("comision", "comision_2020"),
      $this->container->getField("comision", "cens"),
      $this->container->getField("comision", "domicilio"),
      $this->container->getField("comision", "clasificacion"),
      $this->container->getField("comision", "orientacion"),
      $this->container->getField("comision", "turno"),
    );
  }


}
