<?php

require_once("class/tools/Format.php");
require_once("class/model/Values.php");

class _Comision extends EntityValues {
  protected $id = UNDEFINED;
  protected $idComision = UNDEFINED;
  protected $sede = UNDEFINED;
  protected $tramo = UNDEFINED;
  protected $comision2020 = UNDEFINED;
  protected $cens = UNDEFINED;
  protected $domicilio = UNDEFINED;
  protected $clasificacion = UNDEFINED;
  protected $orientacion = UNDEFINED;
  protected $turno = UNDEFINED;

  public function _setDefault(){
    if($this->id === UNDEFINED) $this->setId(uniqid());
    if($this->idComision === UNDEFINED) $this->setIdComision(null);
    if($this->sede === UNDEFINED) $this->setSede(null);
    if($this->tramo === UNDEFINED) $this->setTramo(null);
    if($this->comision2020 === UNDEFINED) $this->setComision2020(null);
    if($this->cens === UNDEFINED) $this->setCens(null);
    if($this->domicilio === UNDEFINED) $this->setDomicilio(null);
    if($this->clasificacion === UNDEFINED) $this->setClasificacion(null);
    if($this->orientacion === UNDEFINED) $this->setOrientacion(null);
    if($this->turno === UNDEFINED) $this->setTurno(null);
    return $this;
  }

  public function _fromArray(array $row = NULL, string $p = ""){
    if(empty($row)) return;
    if(key_exists($p."id", $row)) $this->setId($row[$p."id"]);
    if(key_exists($p."id_comision", $row)) $this->setIdComision($row[$p."id_comision"]);
    if(key_exists($p."sede", $row)) $this->setSede($row[$p."sede"]);
    if(key_exists($p."tramo", $row)) $this->setTramo($row[$p."tramo"]);
    if(key_exists($p."comision_2020", $row)) $this->setComision2020($row[$p."comision_2020"]);
    if(key_exists($p."cens", $row)) $this->setCens($row[$p."cens"]);
    if(key_exists($p."domicilio", $row)) $this->setDomicilio($row[$p."domicilio"]);
    if(key_exists($p."clasificacion", $row)) $this->setClasificacion($row[$p."clasificacion"]);
    if(key_exists($p."orientacion", $row)) $this->setOrientacion($row[$p."orientacion"]);
    if(key_exists($p."turno", $row)) $this->setTurno($row[$p."turno"]);
    return $this;
  }

  public function _toArray(string $p = ""){
    $row = [];
    if($this->id !== UNDEFINED) $row[$p."id"] = $this->id();
    if($this->idComision !== UNDEFINED) $row[$p."id_comision"] = $this->idComision();
    if($this->sede !== UNDEFINED) $row[$p."sede"] = $this->sede();
    if($this->tramo !== UNDEFINED) $row[$p."tramo"] = $this->tramo();
    if($this->comision2020 !== UNDEFINED) $row[$p."comision_2020"] = $this->comision2020();
    if($this->cens !== UNDEFINED) $row[$p."cens"] = $this->cens();
    if($this->domicilio !== UNDEFINED) $row[$p."domicilio"] = $this->domicilio();
    if($this->clasificacion !== UNDEFINED) $row[$p."clasificacion"] = $this->clasificacion();
    if($this->orientacion !== UNDEFINED) $row[$p."orientacion"] = $this->orientacion();
    if($this->turno !== UNDEFINED) $row[$p."turno"] = $this->turno();
    return $row;
  }

  public function _isEmpty(){
    if(!Validation::is_empty($this->id)) return false;
    if(!Validation::is_empty($this->idComision)) return false;
    if(!Validation::is_empty($this->sede)) return false;
    if(!Validation::is_empty($this->tramo)) return false;
    if(!Validation::is_empty($this->comision2020)) return false;
    if(!Validation::is_empty($this->cens)) return false;
    if(!Validation::is_empty($this->domicilio)) return false;
    if(!Validation::is_empty($this->clasificacion)) return false;
    if(!Validation::is_empty($this->orientacion)) return false;
    if(!Validation::is_empty($this->turno)) return false;
    return true;
  }

  public function id() { return $this->id; }
  public function idComision($format = null) { return Format::convertCase($this->idComision, $format); }
  public function sede($format = null) { return Format::convertCase($this->sede, $format); }
  public function tramo($format = null) { return Format::convertCase($this->tramo, $format); }
  public function comision2020($format = null) { return Format::convertCase($this->comision2020, $format); }
  public function cens($format = null) { return Format::convertCase($this->cens, $format); }
  public function domicilio($format = null) { return Format::convertCase($this->domicilio, $format); }
  public function clasificacion($format = null) { return Format::convertCase($this->clasificacion, $format); }
  public function orientacion($format = null) { return Format::convertCase($this->orientacion, $format); }
  public function turno($format = null) { return Format::convertCase($this->turno, $format); }

  public function _setId(string $p = null) { return $this->id = $p; }  
  public function setId($p) { return $this->id = (is_null($p)) ? null : (string)$p; }

  public function _setIdComision(string $p = null) { return $this->idComision = $p; }  
  public function setIdComision($p) { return $this->idComision = (is_null($p)) ? null : (string)$p; }

  public function _setSede(string $p = null) { return $this->sede = $p; }  
  public function setSede($p) { return $this->sede = (is_null($p)) ? null : (string)$p; }

  public function _setTramo(string $p = null) { return $this->tramo = $p; }  
  public function setTramo($p) { return $this->tramo = (is_null($p)) ? null : (string)$p; }

  public function _setComision2020(string $p = null) { return $this->comision2020 = $p; }  
  public function setComision2020($p) { return $this->comision2020 = (is_null($p)) ? null : (string)$p; }

  public function _setCens(string $p = null) { return $this->cens = $p; }  
  public function setCens($p) { return $this->cens = (is_null($p)) ? null : (string)$p; }

  public function _setDomicilio(string $p = null) { return $this->domicilio = $p; }  
  public function setDomicilio($p) { return $this->domicilio = (is_null($p)) ? null : (string)$p; }

  public function _setClasificacion(string $p = null) { return $this->clasificacion = $p; }  
  public function setClasificacion($p) { return $this->clasificacion = (is_null($p)) ? null : (string)$p; }

  public function _setOrientacion(string $p = null) { return $this->orientacion = $p; }  
  public function setOrientacion($p) { return $this->orientacion = (is_null($p)) ? null : (string)$p; }

  public function _setTurno(string $p = null) { return $this->turno = $p; }  
  public function setTurno($p) { return $this->turno = (is_null($p)) ? null : (string)$p; }


  public function resetIdComision() { if(!Validation::is_empty($this->idComision)) $this->idComision = preg_replace('/\s\s+/', ' ', trim($this->idComision)); }
  public function resetSede() { if(!Validation::is_empty($this->sede)) $this->sede = preg_replace('/\s\s+/', ' ', trim($this->sede)); }
  public function resetTramo() { if(!Validation::is_empty($this->tramo)) $this->tramo = preg_replace('/\s\s+/', ' ', trim($this->tramo)); }
  public function resetComision2020() { if(!Validation::is_empty($this->comision2020)) $this->comision2020 = preg_replace('/\s\s+/', ' ', trim($this->comision2020)); }
  public function resetCens() { if(!Validation::is_empty($this->cens)) $this->cens = preg_replace('/\s\s+/', ' ', trim($this->cens)); }
  public function resetDomicilio() { if(!Validation::is_empty($this->domicilio)) $this->domicilio = preg_replace('/\s\s+/', ' ', trim($this->domicilio)); }
  public function resetClasificacion() { if(!Validation::is_empty($this->clasificacion)) $this->clasificacion = preg_replace('/\s\s+/', ' ', trim($this->clasificacion)); }
  public function resetOrientacion() { if(!Validation::is_empty($this->orientacion)) $this->orientacion = preg_replace('/\s\s+/', ' ', trim($this->orientacion)); }
  public function resetTurno() { if(!Validation::is_empty($this->turno)) $this->turno = preg_replace('/\s\s+/', ' ', trim($this->turno)); }

  public function checkId($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkIdComision($value) { 
    $this->_logs->resetLogs("id_comision");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(45);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("id_comision", "error", $error); }
    return $v->isSuccess();
  }

  public function checkSede($value) { 
    $this->_logs->resetLogs("sede");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(255);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("sede", "error", $error); }
    return $v->isSuccess();
  }

  public function checkTramo($value) { 
    $this->_logs->resetLogs("tramo");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(45);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("tramo", "error", $error); }
    return $v->isSuccess();
  }

  public function checkComision2020($value) { 
    $this->_logs->resetLogs("comision_2020");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(45);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("comision_2020", "error", $error); }
    return $v->isSuccess();
  }

  public function checkCens($value) { 
    $this->_logs->resetLogs("cens");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(255);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("cens", "error", $error); }
    return $v->isSuccess();
  }

  public function checkDomicilio($value) { 
    $this->_logs->resetLogs("domicilio");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(255);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("domicilio", "error", $error); }
    return $v->isSuccess();
  }

  public function checkClasificacion($value) { 
    $this->_logs->resetLogs("clasificacion");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(255);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("clasificacion", "error", $error); }
    return $v->isSuccess();
  }

  public function checkOrientacion($value) { 
    $this->_logs->resetLogs("orientacion");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(45);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("orientacion", "error", $error); }
    return $v->isSuccess();
  }

  public function checkTurno($value) { 
    $this->_logs->resetLogs("turno");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(45);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("turno", "error", $error); }
    return $v->isSuccess();
  }

  public function _check(){
    $this->checkId($this->id);
    $this->checkIdComision($this->idComision);
    $this->checkSede($this->sede);
    $this->checkTramo($this->tramo);
    $this->checkComision2020($this->comision2020);
    $this->checkCens($this->cens);
    $this->checkDomicilio($this->domicilio);
    $this->checkClasificacion($this->clasificacion);
    $this->checkOrientacion($this->orientacion);
    $this->checkTurno($this->turno);
    return !$this->_getLogs()->isError();
  }

  public function _reset(){
    $this->resetIdComision();
    $this->resetSede();
    $this->resetTramo();
    $this->resetComision2020();
    $this->resetCens();
    $this->resetDomicilio();
    $this->resetClasificacion();
    $this->resetOrientacion();
    $this->resetTurno();
    return $this;
  }



}
