<?php

require_once("class/model/Entity.php");
require_once("class/model/Field.php");

class _ComisionEntity extends Entity {
  public $name = "comision";
  public $alias = "comi";
  public $nf = ['id_comision', 'sede', 'tramo', 'comision_2020', 'cens', 'domicilio', 'clasificacion', 'orientacion', 'turno'];
  public $mu = [];
  public $_u = [];
  public $notNull = ['id'];
  public $unique = ['id'];


}
