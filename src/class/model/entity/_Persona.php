<?php

require_once("class/model/Entity.php");
require_once("class/model/Field.php");

class _PersonaEntity extends Entity {
  public $name = "persona";
  public $alias = "pers";
 
  public function getPk(){
    return Field::getInstanceRequire("persona", "id");
  }

  public function getFieldsNf(){
    return array(
      Field::getInstanceRequire("persona", "nombres"),
      Field::getInstanceRequire("persona", "apellidos"),
      Field::getInstanceRequire("persona", "genero"),
      Field::getInstanceRequire("persona", "telefono"),
      Field::getInstanceRequire("persona", "email"),
      Field::getInstanceRequire("persona", "trayectoria_educativa"),
      Field::getInstanceRequire("persona", "turno"),
      Field::getInstanceRequire("persona", "pc_escritorio"),
      Field::getInstanceRequire("persona", "net_netbook"),
      Field::getInstanceRequire("persona", "tablet"),
      Field::getInstanceRequire("persona", "pc_o_tablet"),
      Field::getInstanceRequire("persona", "impresora"),
      Field::getInstanceRequire("persona", "conexion_internet_paga"),
      Field::getInstanceRequire("persona", "telefono_celular"),
      Field::getInstanceRequire("persona", "numero_documento"),
    );
  }


}
