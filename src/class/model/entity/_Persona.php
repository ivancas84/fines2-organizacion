<?php

require_once("class/model/Entity.php");
require_once("class/model/Field.php");

class _PersonaEntity extends Entity {
  public $name = "persona";
  public $alias = "pers";
 
  public function getPk(){
    return $this->container->getField("persona", "id");
  }

  public function getFieldsNf(){
    return array(
      $this->container->getField("persona", "region"),
      $this->container->getField("persona", "distrito"),
      $this->container->getField("persona", "localidad"),
      $this->container->getField("persona", "programa"),
      $this->container->getField("persona", "inscripcion_men"),
      $this->container->getField("persona", "cens"),
      $this->container->getField("persona", "sede"),
      $this->container->getField("persona", "comision"),
      $this->container->getField("persona", "tramo"),
      $this->container->getField("persona", "identificador"),
      $this->container->getField("persona", "numero_inscripcion"),
      $this->container->getField("persona", "numero_documento"),
      $this->container->getField("persona", "apellidos"),
      $this->container->getField("persona", "nombres"),
      $this->container->getField("persona", "genero"),
      $this->container->getField("persona", "telefono"),
      $this->container->getField("persona", "correo"),
      $this->container->getField("persona", "trayectoria_educativa"),
      $this->container->getField("persona", "turno"),
      $this->container->getField("persona", "pc_escritorio"),
      $this->container->getField("persona", "net_notebook"),
      $this->container->getField("persona", "tablet"),
      $this->container->getField("persona", "pc_tablet"),
      $this->container->getField("persona", "impresora"),
      $this->container->getField("persona", "conexion_internet_paga"),
      $this->container->getField("persona", "telefono_celular"),
      $this->container->getField("persona", "comision_2020"),
      $this->container->getField("persona", "archivo_2019"),
      $this->container->getField("persona", "archivo_2020"),
      $this->container->getField("persona", "drive"),
      $this->container->getField("persona", "cuil"),
      $this->container->getField("persona", "analitico_dni"),
      $this->container->getField("persona", "analitico_cuil"),
      $this->container->getField("persona", "analitico_partida"),
      $this->container->getField("persona", "analitico_certificado"),
      $this->container->getField("persona", "fecha_nacimiento"),
      $this->container->getField("persona", "ingreso"),
      $this->container->getField("persona", "observaciones"),
      $this->container->getField("persona", "activo"),
      $this->container->getField("persona", "fila"),
      $this->container->getField("persona", "error"),
      $this->container->getField("persona", "id_comision"),
      $this->container->getField("persona", "actualizado"),
      $this->container->getField("persona", "informado"),
    );
  }


}
