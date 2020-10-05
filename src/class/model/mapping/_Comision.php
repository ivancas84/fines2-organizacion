<?php
require_once("class/model/entityOptions/Mapping.php");

class _ComisionMapping extends MappingEntityOptions{

  public function id() { return $this->_pt() . ".id"; }
  public function idComision() { return $this->_pt() . ".id_comision"; }
  public function sede() { return $this->_pt() . ".sede"; }
  public function tramo() { return $this->_pt() . ".tramo"; }
  public function comision2020() { return $this->_pt() . ".comision_2020"; }
  public function cens() { return $this->_pt() . ".cens"; }
  public function domicilio() { return $this->_pt() . ".domicilio"; }
  public function clasificacion() { return $this->_pt() . ".clasificacion"; }
  public function orientacion() { return $this->_pt() . ".orientacion"; }
  public function turno() { return $this->_pt() . ".turno"; }

  public function minId() { return "MIN({$this->_pt()}.id)"; }
  public function maxId() { return "MAX({$this->_pt()}.id)"; }
  public function countId() { return "COUNT({$this->_pt()}.id)"; }

  public function minIdComision() { return "MIN({$this->_pt()}.id_comision)"; }
  public function maxIdComision() { return "MAX({$this->_pt()}.id_comision)"; }
  public function countIdComision() { return "COUNT({$this->_pt()}.id_comision)"; }

  public function minSede() { return "MIN({$this->_pt()}.sede)"; }
  public function maxSede() { return "MAX({$this->_pt()}.sede)"; }
  public function countSede() { return "COUNT({$this->_pt()}.sede)"; }

  public function minTramo() { return "MIN({$this->_pt()}.tramo)"; }
  public function maxTramo() { return "MAX({$this->_pt()}.tramo)"; }
  public function countTramo() { return "COUNT({$this->_pt()}.tramo)"; }

  public function minComision2020() { return "MIN({$this->_pt()}.comision_2020)"; }
  public function maxComision2020() { return "MAX({$this->_pt()}.comision_2020)"; }
  public function countComision2020() { return "COUNT({$this->_pt()}.comision_2020)"; }

  public function minCens() { return "MIN({$this->_pt()}.cens)"; }
  public function maxCens() { return "MAX({$this->_pt()}.cens)"; }
  public function countCens() { return "COUNT({$this->_pt()}.cens)"; }

  public function minDomicilio() { return "MIN({$this->_pt()}.domicilio)"; }
  public function maxDomicilio() { return "MAX({$this->_pt()}.domicilio)"; }
  public function countDomicilio() { return "COUNT({$this->_pt()}.domicilio)"; }

  public function minClasificacion() { return "MIN({$this->_pt()}.clasificacion)"; }
  public function maxClasificacion() { return "MAX({$this->_pt()}.clasificacion)"; }
  public function countClasificacion() { return "COUNT({$this->_pt()}.clasificacion)"; }

  public function minOrientacion() { return "MIN({$this->_pt()}.orientacion)"; }
  public function maxOrientacion() { return "MAX({$this->_pt()}.orientacion)"; }
  public function countOrientacion() { return "COUNT({$this->_pt()}.orientacion)"; }

  public function minTurno() { return "MIN({$this->_pt()}.turno)"; }
  public function maxTurno() { return "MAX({$this->_pt()}.turno)"; }
  public function countTurno() { return "COUNT({$this->_pt()}.turno)"; }

  public function label() {
    return "CONCAT_WS(' ', {$this->_pt()}.id)"; 
  }


}
