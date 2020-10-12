<?php
require_once("class/model/entityOptions/Value.php");

class _ComisionValue extends ValueEntityOptions{

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

  public function setDefaultId() { $this->setId(uniqid()); }
  public function setDefaultIdComision() { $this->setIdComision(null); }
  public function setDefaultSede() { $this->setSede(null); }
  public function setDefaultTramo() { $this->setTramo(null); }
  public function setDefaultComision2020() { $this->setComision2020(null); }
  public function setDefaultCens() { $this->setCens(null); }
  public function setDefaultDomicilio() { $this->setDomicilio(null); }
  public function setDefaultClasificacion() { $this->setClasificacion(null); }
  public function setDefaultOrientacion() { $this->setOrientacion(null); }
  public function setDefaultTurno() { $this->setTurno(null); }

  public function setDefaultUndefinedId() { if($this->id === UNDEFINED) $this->setDefaultId(); }
  public function setDefaultUndefinedIdComision() { if($this->idComision === UNDEFINED) $this->setDefaultIdComision(); }
  public function setDefaultUndefinedSede() { if($this->sede === UNDEFINED) $this->setDefaultSede(); }
  public function setDefaultUndefinedTramo() { if($this->tramo === UNDEFINED) $this->setDefaultTramo(); }
  public function setDefaultUndefinedComision2020() { if($this->comision2020 === UNDEFINED) $this->setDefaultComision2020(); }
  public function setDefaultUndefinedCens() { if($this->cens === UNDEFINED) $this->setDefaultCens(); }
  public function setDefaultUndefinedDomicilio() { if($this->domicilio === UNDEFINED) $this->setDefaultDomicilio(); }
  public function setDefaultUndefinedClasificacion() { if($this->clasificacion === UNDEFINED) $this->setDefaultClasificacion(); }
  public function setDefaultUndefinedOrientacion() { if($this->orientacion === UNDEFINED) $this->setDefaultOrientacion(); }
  public function setDefaultUndefinedTurno() { if($this->turno === UNDEFINED) $this->setDefaultTurno(); }

  public function isEmptyId() { if(!Validation::is_empty($this->id)) return false; }
  public function isEmptyIdComision() { if(!Validation::is_empty($this->idComision)) return false; }
  public function isEmptySede() { if(!Validation::is_empty($this->sede)) return false; }
  public function isEmptyTramo() { if(!Validation::is_empty($this->tramo)) return false; }
  public function isEmptyComision2020() { if(!Validation::is_empty($this->comision2020)) return false; }
  public function isEmptyCens() { if(!Validation::is_empty($this->cens)) return false; }
  public function isEmptyDomicilio() { if(!Validation::is_empty($this->domicilio)) return false; }
  public function isEmptyClasificacion() { if(!Validation::is_empty($this->clasificacion)) return false; }
  public function isEmptyOrientacion() { if(!Validation::is_empty($this->orientacion)) return false; }
  public function isEmptyTurno() { if(!Validation::is_empty($this->turno)) return false; }

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

  public function resetId() { if(!Validation::is_empty($this->id)) $this->id = preg_replace('/\s\s+/', ' ', trim($this->id)); }
  public function resetIdComision() { if(!Validation::is_empty($this->idComision)) $this->idComision = preg_replace('/\s\s+/', ' ', trim($this->idComision)); }
  public function resetSede() { if(!Validation::is_empty($this->sede)) $this->sede = preg_replace('/\s\s+/', ' ', trim($this->sede)); }
  public function resetTramo() { if(!Validation::is_empty($this->tramo)) $this->tramo = preg_replace('/\s\s+/', ' ', trim($this->tramo)); }
  public function resetComision2020() { if(!Validation::is_empty($this->comision2020)) $this->comision2020 = preg_replace('/\s\s+/', ' ', trim($this->comision2020)); }
  public function resetCens() { if(!Validation::is_empty($this->cens)) $this->cens = preg_replace('/\s\s+/', ' ', trim($this->cens)); }
  public function resetDomicilio() { if(!Validation::is_empty($this->domicilio)) $this->domicilio = preg_replace('/\s\s+/', ' ', trim($this->domicilio)); }
  public function resetClasificacion() { if(!Validation::is_empty($this->clasificacion)) $this->clasificacion = preg_replace('/\s\s+/', ' ', trim($this->clasificacion)); }
  public function resetOrientacion() { if(!Validation::is_empty($this->orientacion)) $this->orientacion = preg_replace('/\s\s+/', ' ', trim($this->orientacion)); }
  public function resetTurno() { if(!Validation::is_empty($this->turno)) $this->turno = preg_replace('/\s\s+/', ' ', trim($this->turno)); }

  public function checkId() { 
      if(Validation::is_undefined($this->id)) return null;
      return true; 
  }

  public function checkIdComision() { 
      $this->_logs->resetLogs("id_comision");
      if(Validation::is_undefined($this->idComision)) return null;
      $v = Validation::getInstanceValue($this->idComision)->max(45);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("id_comision", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkSede() { 
      $this->_logs->resetLogs("sede");
      if(Validation::is_undefined($this->sede)) return null;
      $v = Validation::getInstanceValue($this->sede)->max(255);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("sede", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkTramo() { 
      $this->_logs->resetLogs("tramo");
      if(Validation::is_undefined($this->tramo)) return null;
      $v = Validation::getInstanceValue($this->tramo)->max(45);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("tramo", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkComision2020() { 
      $this->_logs->resetLogs("comision_2020");
      if(Validation::is_undefined($this->comision2020)) return null;
      $v = Validation::getInstanceValue($this->comision2020)->max(45);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("comision_2020", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkCens() { 
      $this->_logs->resetLogs("cens");
      if(Validation::is_undefined($this->cens)) return null;
      $v = Validation::getInstanceValue($this->cens)->max(255);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("cens", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkDomicilio() { 
      $this->_logs->resetLogs("domicilio");
      if(Validation::is_undefined($this->domicilio)) return null;
      $v = Validation::getInstanceValue($this->domicilio)->max(255);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("domicilio", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkClasificacion() { 
      $this->_logs->resetLogs("clasificacion");
      if(Validation::is_undefined($this->clasificacion)) return null;
      $v = Validation::getInstanceValue($this->clasificacion)->max(255);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("clasificacion", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkOrientacion() { 
      $this->_logs->resetLogs("orientacion");
      if(Validation::is_undefined($this->orientacion)) return null;
      $v = Validation::getInstanceValue($this->orientacion)->max(45);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("orientacion", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkTurno() { 
      $this->_logs->resetLogs("turno");
      if(Validation::is_undefined($this->turno)) return null;
      $v = Validation::getInstanceValue($this->turno)->max(45);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("turno", "error", $error); }
      return $v->isSuccess();
    }
  
    public function sqlId() { return $this->sql->string($this->id); }
  public function sqlIdComision() { return $this->sql->string($this->idComision); }
  public function sqlSede() { return $this->sql->string($this->sede); }
  public function sqlTramo() { return $this->sql->string($this->tramo); }
  public function sqlComision2020() { return $this->sql->string($this->comision2020); }
  public function sqlCens() { return $this->sql->string($this->cens); }
  public function sqlDomicilio() { return $this->sql->string($this->domicilio); }
  public function sqlClasificacion() { return $this->sql->string($this->clasificacion); }
  public function sqlOrientacion() { return $this->sql->string($this->orientacion); }
  public function sqlTurno() { return $this->sql->string($this->turno); }

  public function jsonId() { return $this->id; }
  public function jsonIdComision() { return $this->idComision; }
  public function jsonSede() { return $this->sede; }
  public function jsonTramo() { return $this->tramo; }
  public function jsonComision2020() { return $this->comision2020; }
  public function jsonCens() { return $this->cens; }
  public function jsonDomicilio() { return $this->domicilio; }
  public function jsonClasificacion() { return $this->clasificacion; }
  public function jsonOrientacion() { return $this->orientacion; }
  public function jsonTurno() { return $this->turno; }



}
