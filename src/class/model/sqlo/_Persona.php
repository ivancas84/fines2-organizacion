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
    $sql .= "nombres, " ;
    $sql .= "apellidos, " ;
    $sql .= "genero, " ;
    $sql .= "telefono, " ;
    $sql .= "email, " ;
    $sql .= "trayectoria_educativa, " ;
    $sql .= "turno, " ;
    $sql .= "pc_escritorio, " ;
    $sql .= "net_netbook, " ;
    $sql .= "tablet, " ;
    $sql .= "pc_o_tablet, " ;
    $sql .= "impresora, " ;
    $sql .= "conexion_internet_paga, " ;
    $sql .= "telefono_celular, " ;
    $sql .= "numero_documento, " ;
    $sql = substr($sql, 0, -2); //eliminar ultima coma

    $sql .= ")
VALUES ( ";
    $sql .= $row['id'] . ", " ;
    $sql .= $row['nombres'] . ", " ;
    $sql .= $row['apellidos'] . ", " ;
    $sql .= $row['genero'] . ", " ;
    $sql .= $row['telefono'] . ", " ;
    $sql .= $row['email'] . ", " ;
    $sql .= $row['trayectoria_educativa'] . ", " ;
    $sql .= $row['turno'] . ", " ;
    $sql .= $row['pc_escritorio'] . ", " ;
    $sql .= $row['net_netbook'] . ", " ;
    $sql .= $row['tablet'] . ", " ;
    $sql .= $row['pc_o_tablet'] . ", " ;
    $sql .= $row['impresora'] . ", " ;
    $sql .= $row['conexion_internet_paga'] . ", " ;
    $sql .= $row['telefono_celular'] . ", " ;
    $sql .= $row['numero_documento'] . ", " ;
    $sql = substr($sql, 0, -2); //eliminar ultima coma

    $sql .= ");
";

    return $sql;
  }

  protected function _update(array $row){ //@override
    $sql = "
UPDATE " . $this->entity->sn_() . " SET
";
    if (isset($row['nombres'] )) $sql .= "nombres = " . $row['nombres'] . " ," ;
    if (isset($row['apellidos'] )) $sql .= "apellidos = " . $row['apellidos'] . " ," ;
    if (isset($row['genero'] )) $sql .= "genero = " . $row['genero'] . " ," ;
    if (isset($row['telefono'] )) $sql .= "telefono = " . $row['telefono'] . " ," ;
    if (isset($row['email'] )) $sql .= "email = " . $row['email'] . " ," ;
    if (isset($row['trayectoria_educativa'] )) $sql .= "trayectoria_educativa = " . $row['trayectoria_educativa'] . " ," ;
    if (isset($row['turno'] )) $sql .= "turno = " . $row['turno'] . " ," ;
    if (isset($row['pc_escritorio'] )) $sql .= "pc_escritorio = " . $row['pc_escritorio'] . " ," ;
    if (isset($row['net_netbook'] )) $sql .= "net_netbook = " . $row['net_netbook'] . " ," ;
    if (isset($row['tablet'] )) $sql .= "tablet = " . $row['tablet'] . " ," ;
    if (isset($row['pc_o_tablet'] )) $sql .= "pc_o_tablet = " . $row['pc_o_tablet'] . " ," ;
    if (isset($row['impresora'] )) $sql .= "impresora = " . $row['impresora'] . " ," ;
    if (isset($row['conexion_internet_paga'] )) $sql .= "conexion_internet_paga = " . $row['conexion_internet_paga'] . " ," ;
    if (isset($row['telefono_celular'] )) $sql .= "telefono_celular = " . $row['telefono_celular'] . " ," ;
    if (isset($row['numero_documento'] )) $sql .= "numero_documento = " . $row['numero_documento'] . " ," ;
    //eliminar ultima coma
    $sql = substr($sql, 0, -2);

    return $sql;
  }



}
