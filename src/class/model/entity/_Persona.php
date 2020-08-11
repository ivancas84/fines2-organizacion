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
      Field::getInstanceRequire("persona", "region"),
      Field::getInstanceRequire("persona", "distrito"),
      Field::getInstanceRequire("persona", "localidad"),
      Field::getInstanceRequire("persona", "programa"),
      Field::getInstanceRequire("persona", "inscripcion_men"),
      Field::getInstanceRequire("persona", "cens"),
      Field::getInstanceRequire("persona", "sede"),
      Field::getInstanceRequire("persona", "comision"),
      Field::getInstanceRequire("persona", "tramo"),
      Field::getInstanceRequire("persona", "identificador"),
      Field::getInstanceRequire("persona", "numero_inscripcion"),
      Field::getInstanceRequire("persona", "numero_documento"),
      Field::getInstanceRequire("persona", "apellidos"),
      Field::getInstanceRequire("persona", "nombres"),
      Field::getInstanceRequire("persona", "genero"),
      Field::getInstanceRequire("persona", "telefono"),
      Field::getInstanceRequire("persona", "correo"),
      Field::getInstanceRequire("persona", "trayectoria_educativa"),
      Field::getInstanceRequire("persona", "turno"),
      Field::getInstanceRequire("persona", "pc_escritorio"),
      Field::getInstanceRequire("persona", "net_notebook"),
      Field::getInstanceRequire("persona", "tablet"),
      Field::getInstanceRequire("persona", "pc_tablet"),
      Field::getInstanceRequire("persona", "impresora"),
      Field::getInstanceRequire("persona", "conexion_internet_paga"),
      Field::getInstanceRequire("persona", "telefono_celular"),
      Field::getInstanceRequire("persona", "comision_2020"),
    );
  }


}
