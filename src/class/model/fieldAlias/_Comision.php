<?php
require_once("class/model/entityOptions/FieldAlias.php");

class _ComisionFieldAlias extends FieldAliasEntityOptions{

  public function id() { return $this->mapping->id() . " AS " . $this->_pf() . "id"; }
  public function idComision() { return $this->mapping->idComision() . " AS " . $this->_pf() . "id_comision"; }
  public function sede() { return $this->mapping->sede() . " AS " . $this->_pf() . "sede"; }
  public function tramo() { return $this->mapping->tramo() . " AS " . $this->_pf() . "tramo"; }
  public function comision2020() { return $this->mapping->comision2020() . " AS " . $this->_pf() . "comision_2020"; }
  public function cens() { return $this->mapping->cens() . " AS " . $this->_pf() . "cens"; }
  public function domicilio() { return $this->mapping->domicilio() . " AS " . $this->_pf() . "domicilio"; }
  public function clasificacion() { return $this->mapping->clasificacion() . " AS " . $this->_pf() . "clasificacion"; }
  public function orientacion() { return $this->mapping->orientacion() . " AS " . $this->_pf() . "orientacion"; }
  public function turno() { return $this->mapping->turno() . " AS " . $this->_pf() . "turno"; }

  public function minId() { return $this->mapping->minId() . " AS " . $this->_pf() . "min_id"; }
  public function maxId() { return $this->mapping->maxId() . " AS " . $this->_pf() . "max_id"; }
  public function countId() { return $this->mapping->countId() . " AS " . $this->_pf() . "count_id"; }

  public function minIdComision() { return $this->mapping->minIdComision() . " AS " . $this->_pf() . "min_id_comision"; }
  public function maxIdComision() { return $this->mapping->maxIdComision() . " AS " . $this->_pf() . "max_id_comision"; }
  public function countIdComision() { return $this->mapping->countIdComision() . " AS " . $this->_pf() . "count_id_comision"; }

  public function minSede() { return $this->mapping->minSede() . " AS " . $this->_pf() . "min_sede"; }
  public function maxSede() { return $this->mapping->maxSede() . " AS " . $this->_pf() . "max_sede"; }
  public function countSede() { return $this->mapping->countSede() . " AS " . $this->_pf() . "count_sede"; }

  public function minTramo() { return $this->mapping->minTramo() . " AS " . $this->_pf() . "min_tramo"; }
  public function maxTramo() { return $this->mapping->maxTramo() . " AS " . $this->_pf() . "max_tramo"; }
  public function countTramo() { return $this->mapping->countTramo() . " AS " . $this->_pf() . "count_tramo"; }

  public function minComision2020() { return $this->mapping->minComision2020() . " AS " . $this->_pf() . "min_comision_2020"; }
  public function maxComision2020() { return $this->mapping->maxComision2020() . " AS " . $this->_pf() . "max_comision_2020"; }
  public function countComision2020() { return $this->mapping->countComision2020() . " AS " . $this->_pf() . "count_comision_2020"; }

  public function minCens() { return $this->mapping->minCens() . " AS " . $this->_pf() . "min_cens"; }
  public function maxCens() { return $this->mapping->maxCens() . " AS " . $this->_pf() . "max_cens"; }
  public function countCens() { return $this->mapping->countCens() . " AS " . $this->_pf() . "count_cens"; }

  public function minDomicilio() { return $this->mapping->minDomicilio() . " AS " . $this->_pf() . "min_domicilio"; }
  public function maxDomicilio() { return $this->mapping->maxDomicilio() . " AS " . $this->_pf() . "max_domicilio"; }
  public function countDomicilio() { return $this->mapping->countDomicilio() . " AS " . $this->_pf() . "count_domicilio"; }

  public function minClasificacion() { return $this->mapping->minClasificacion() . " AS " . $this->_pf() . "min_clasificacion"; }
  public function maxClasificacion() { return $this->mapping->maxClasificacion() . " AS " . $this->_pf() . "max_clasificacion"; }
  public function countClasificacion() { return $this->mapping->countClasificacion() . " AS " . $this->_pf() . "count_clasificacion"; }

  public function minOrientacion() { return $this->mapping->minOrientacion() . " AS " . $this->_pf() . "min_orientacion"; }
  public function maxOrientacion() { return $this->mapping->maxOrientacion() . " AS " . $this->_pf() . "max_orientacion"; }
  public function countOrientacion() { return $this->mapping->countOrientacion() . " AS " . $this->_pf() . "count_orientacion"; }

  public function minTurno() { return $this->mapping->minTurno() . " AS " . $this->_pf() . "min_turno"; }
  public function maxTurno() { return $this->mapping->maxTurno() . " AS " . $this->_pf() . "max_turno"; }
  public function countTurno() { return $this->mapping->countTurno() . " AS " . $this->_pf() . "count_turno"; }

  public function label() { return $this->mapping->label() . " AS " . $this->_pf() . "label"; }



}
