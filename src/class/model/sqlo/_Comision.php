<?php

require_once("class/model/Sqlo.php");
require_once("class/model/Sql.php");
require_once("class/model/Entity.php");
require_once("class/model/Values.php");

class _ComisionSqlo extends EntitySqlo {

  public $entityName = "comision";

  public function insert(array $row){ //@override
      $sql = "
  INSERT INTO " . $this->entity->sn_() . " (";
      $sql .= "id, " ;
    $sql .= "id_comision, " ;
    $sql .= "sede, " ;
    $sql .= "tramo, " ;
    $sql .= "comision_2020, " ;
    $sql .= "cens, " ;
    $sql .= "domicilio, " ;
    $sql .= "clasificacion, " ;
    $sql .= "orientacion, " ;
    $sql .= "turno, " ;
    $sql = substr($sql, 0, -2); //eliminar ultima coma

    $sql .= ")
VALUES ( ";
    $sql .= $row['id'] . ", " ;
    $sql .= $row['id_comision'] . ", " ;
    $sql .= $row['sede'] . ", " ;
    $sql .= $row['tramo'] . ", " ;
    $sql .= $row['comision_2020'] . ", " ;
    $sql .= $row['cens'] . ", " ;
    $sql .= $row['domicilio'] . ", " ;
    $sql .= $row['clasificacion'] . ", " ;
    $sql .= $row['orientacion'] . ", " ;
    $sql .= $row['turno'] . ", " ;
    $sql = substr($sql, 0, -2); //eliminar ultima coma

    $sql .= ");
";

    return $sql;
  }

  public function _update(array $row){ //@override
    $sql = "
UPDATE " . $this->entity->sn_() . " SET
";
    if (isset($row['id_comision'] )) $sql .= "id_comision = " . $row['id_comision'] . " ," ;
    if (isset($row['sede'] )) $sql .= "sede = " . $row['sede'] . " ," ;
    if (isset($row['tramo'] )) $sql .= "tramo = " . $row['tramo'] . " ," ;
    if (isset($row['comision_2020'] )) $sql .= "comision_2020 = " . $row['comision_2020'] . " ," ;
    if (isset($row['cens'] )) $sql .= "cens = " . $row['cens'] . " ," ;
    if (isset($row['domicilio'] )) $sql .= "domicilio = " . $row['domicilio'] . " ," ;
    if (isset($row['clasificacion'] )) $sql .= "clasificacion = " . $row['clasificacion'] . " ," ;
    if (isset($row['orientacion'] )) $sql .= "orientacion = " . $row['orientacion'] . " ," ;
    if (isset($row['turno'] )) $sql .= "turno = " . $row['turno'] . " ," ;
    //eliminar ultima coma
    $sql = substr($sql, 0, -2);

    return $sql;
  }



}
