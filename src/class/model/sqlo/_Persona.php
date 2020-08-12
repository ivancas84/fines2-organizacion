<?php

require_once("class/model/Sqlo.php");
require_once("class/model/Sql.php");
require_once("class/model/Entity.php");
require_once("class/model/Values.php");

class _PersonaSqlo extends EntitySqlo {

  public $entityName = "persona";

  protected function _insert(array $row){ //@override
      $sql = "
  INSERT INTO " . $this->entity->sn_() . " (";
      $sql .= "id, " ;
    $sql .= "region, " ;
    $sql .= "distrito, " ;
    $sql .= "localidad, " ;
    $sql .= "programa, " ;
    $sql .= "inscripcion_men, " ;
    $sql .= "cens, " ;
    $sql .= "sede, " ;
    $sql .= "comision, " ;
    $sql .= "tramo, " ;
    $sql .= "identificador, " ;
    $sql .= "numero_inscripcion, " ;
    $sql .= "numero_documento, " ;
    $sql .= "apellidos, " ;
    $sql .= "nombres, " ;
    $sql .= "genero, " ;
    $sql .= "telefono, " ;
    $sql .= "correo, " ;
    $sql .= "trayectoria_educativa, " ;
    $sql .= "turno, " ;
    $sql .= "pc_escritorio, " ;
    $sql .= "net_notebook, " ;
    $sql .= "tablet, " ;
    $sql .= "pc_tablet, " ;
    $sql .= "impresora, " ;
    $sql .= "conexion_internet_paga, " ;
    $sql .= "telefono_celular, " ;
    $sql .= "comision_2020, " ;
    $sql .= "archivo_2019, " ;
    $sql .= "archivo_2020, " ;
    $sql = substr($sql, 0, -2); //eliminar ultima coma

    $sql .= ")
VALUES ( ";
    $sql .= $row['id'] . ", " ;
    $sql .= $row['region'] . ", " ;
    $sql .= $row['distrito'] . ", " ;
    $sql .= $row['localidad'] . ", " ;
    $sql .= $row['programa'] . ", " ;
    $sql .= $row['inscripcion_men'] . ", " ;
    $sql .= $row['cens'] . ", " ;
    $sql .= $row['sede'] . ", " ;
    $sql .= $row['comision'] . ", " ;
    $sql .= $row['tramo'] . ", " ;
    $sql .= $row['identificador'] . ", " ;
    $sql .= $row['numero_inscripcion'] . ", " ;
    $sql .= $row['numero_documento'] . ", " ;
    $sql .= $row['apellidos'] . ", " ;
    $sql .= $row['nombres'] . ", " ;
    $sql .= $row['genero'] . ", " ;
    $sql .= $row['telefono'] . ", " ;
    $sql .= $row['correo'] . ", " ;
    $sql .= $row['trayectoria_educativa'] . ", " ;
    $sql .= $row['turno'] . ", " ;
    $sql .= $row['pc_escritorio'] . ", " ;
    $sql .= $row['net_notebook'] . ", " ;
    $sql .= $row['tablet'] . ", " ;
    $sql .= $row['pc_tablet'] . ", " ;
    $sql .= $row['impresora'] . ", " ;
    $sql .= $row['conexion_internet_paga'] . ", " ;
    $sql .= $row['telefono_celular'] . ", " ;
    $sql .= $row['comision_2020'] . ", " ;
    $sql .= $row['archivo_2019'] . ", " ;
    $sql .= $row['archivo_2020'] . ", " ;
    $sql = substr($sql, 0, -2); //eliminar ultima coma

    $sql .= ");
";

    return $sql;
  }

  protected function _update(array $row){ //@override
    $sql = "
UPDATE " . $this->entity->sn_() . " SET
";
    if (isset($row['region'] )) $sql .= "region = " . $row['region'] . " ," ;
    if (isset($row['distrito'] )) $sql .= "distrito = " . $row['distrito'] . " ," ;
    if (isset($row['localidad'] )) $sql .= "localidad = " . $row['localidad'] . " ," ;
    if (isset($row['programa'] )) $sql .= "programa = " . $row['programa'] . " ," ;
    if (isset($row['inscripcion_men'] )) $sql .= "inscripcion_men = " . $row['inscripcion_men'] . " ," ;
    if (isset($row['cens'] )) $sql .= "cens = " . $row['cens'] . " ," ;
    if (isset($row['sede'] )) $sql .= "sede = " . $row['sede'] . " ," ;
    if (isset($row['comision'] )) $sql .= "comision = " . $row['comision'] . " ," ;
    if (isset($row['tramo'] )) $sql .= "tramo = " . $row['tramo'] . " ," ;
    if (isset($row['identificador'] )) $sql .= "identificador = " . $row['identificador'] . " ," ;
    if (isset($row['numero_inscripcion'] )) $sql .= "numero_inscripcion = " . $row['numero_inscripcion'] . " ," ;
    if (isset($row['numero_documento'] )) $sql .= "numero_documento = " . $row['numero_documento'] . " ," ;
    if (isset($row['apellidos'] )) $sql .= "apellidos = " . $row['apellidos'] . " ," ;
    if (isset($row['nombres'] )) $sql .= "nombres = " . $row['nombres'] . " ," ;
    if (isset($row['genero'] )) $sql .= "genero = " . $row['genero'] . " ," ;
    if (isset($row['telefono'] )) $sql .= "telefono = " . $row['telefono'] . " ," ;
    if (isset($row['correo'] )) $sql .= "correo = " . $row['correo'] . " ," ;
    if (isset($row['trayectoria_educativa'] )) $sql .= "trayectoria_educativa = " . $row['trayectoria_educativa'] . " ," ;
    if (isset($row['turno'] )) $sql .= "turno = " . $row['turno'] . " ," ;
    if (isset($row['pc_escritorio'] )) $sql .= "pc_escritorio = " . $row['pc_escritorio'] . " ," ;
    if (isset($row['net_notebook'] )) $sql .= "net_notebook = " . $row['net_notebook'] . " ," ;
    if (isset($row['tablet'] )) $sql .= "tablet = " . $row['tablet'] . " ," ;
    if (isset($row['pc_tablet'] )) $sql .= "pc_tablet = " . $row['pc_tablet'] . " ," ;
    if (isset($row['impresora'] )) $sql .= "impresora = " . $row['impresora'] . " ," ;
    if (isset($row['conexion_internet_paga'] )) $sql .= "conexion_internet_paga = " . $row['conexion_internet_paga'] . " ," ;
    if (isset($row['telefono_celular'] )) $sql .= "telefono_celular = " . $row['telefono_celular'] . " ," ;
    if (isset($row['comision_2020'] )) $sql .= "comision_2020 = " . $row['comision_2020'] . " ," ;
    if (isset($row['archivo_2019'] )) $sql .= "archivo_2019 = " . $row['archivo_2019'] . " ," ;
    if (isset($row['archivo_2020'] )) $sql .= "archivo_2020 = " . $row['archivo_2020'] . " ," ;
    //eliminar ultima coma
    $sql = substr($sql, 0, -2);

    return $sql;
  }



}
