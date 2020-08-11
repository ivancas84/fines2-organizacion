<?php

require_once("class/tools/Format.php");
require_once("class/model/Values.php");

class _Persona extends EntityValues {
  protected $id = UNDEFINED;
  protected $nombres = UNDEFINED;
  protected $apellidos = UNDEFINED;
  protected $genero = UNDEFINED;
  protected $telefono = UNDEFINED;
  protected $email = UNDEFINED;
  protected $trayectoriaEducativa = UNDEFINED;
  protected $turno = UNDEFINED;
  protected $pcEscritorio = UNDEFINED;
  protected $netNetbook = UNDEFINED;
  protected $tablet = UNDEFINED;
  protected $pcOTablet = UNDEFINED;
  protected $impresora = UNDEFINED;
  protected $conexionInternetPaga = UNDEFINED;
  protected $telefonoCelular = UNDEFINED;
  protected $numeroDocumento = UNDEFINED;

  public function _setDefault(){
    if($this->id == UNDEFINED) $this->setId(null);
    if($this->nombres == UNDEFINED) $this->setNombres(null);
    if($this->apellidos == UNDEFINED) $this->setApellidos(null);
    if($this->genero == UNDEFINED) $this->setGenero(null);
    if($this->telefono == UNDEFINED) $this->setTelefono(null);
    if($this->email == UNDEFINED) $this->setEmail(null);
    if($this->trayectoriaEducativa == UNDEFINED) $this->setTrayectoriaEducativa(null);
    if($this->turno == UNDEFINED) $this->setTurno(null);
    if($this->pcEscritorio == UNDEFINED) $this->setPcEscritorio(null);
    if($this->netNetbook == UNDEFINED) $this->setNetNetbook(null);
    if($this->tablet == UNDEFINED) $this->setTablet(null);
    if($this->pcOTablet == UNDEFINED) $this->setPcOTablet(null);
    if($this->impresora == UNDEFINED) $this->setImpresora(null);
    if($this->conexionInternetPaga == UNDEFINED) $this->setConexionInternetPaga(null);
    if($this->telefonoCelular == UNDEFINED) $this->setTelefonoCelular(null);
    if($this->numeroDocumento == UNDEFINED) $this->setNumeroDocumento(null);
    return $this;
  }

  public function _fromArray(array $row = NULL, string $p = ""){
    if(empty($row)) return;
    if(isset($row[$p."id"])) $this->setId($row[$p."id"]);
    if(isset($row[$p."nombres"])) $this->setNombres($row[$p."nombres"]);
    if(isset($row[$p."apellidos"])) $this->setApellidos($row[$p."apellidos"]);
    if(isset($row[$p."genero"])) $this->setGenero($row[$p."genero"]);
    if(isset($row[$p."telefono"])) $this->setTelefono($row[$p."telefono"]);
    if(isset($row[$p."email"])) $this->setEmail($row[$p."email"]);
    if(isset($row[$p."trayectoria_educativa"])) $this->setTrayectoriaEducativa($row[$p."trayectoria_educativa"]);
    if(isset($row[$p."turno"])) $this->setTurno($row[$p."turno"]);
    if(isset($row[$p."pc_escritorio"])) $this->setPcEscritorio($row[$p."pc_escritorio"]);
    if(isset($row[$p."net_netbook"])) $this->setNetNetbook($row[$p."net_netbook"]);
    if(isset($row[$p."tablet"])) $this->setTablet($row[$p."tablet"]);
    if(isset($row[$p."pc_o_tablet"])) $this->setPcOTablet($row[$p."pc_o_tablet"]);
    if(isset($row[$p."impresora"])) $this->setImpresora($row[$p."impresora"]);
    if(isset($row[$p."conexion_internet_paga"])) $this->setConexionInternetPaga($row[$p."conexion_internet_paga"]);
    if(isset($row[$p."telefono_celular"])) $this->setTelefonoCelular($row[$p."telefono_celular"]);
    if(isset($row[$p."numero_documento"])) $this->setNumeroDocumento($row[$p."numero_documento"]);
    return $this;
  }

  public function _toArray(string $p = ""){
    $row = [];
    if($this->id !== UNDEFINED) $row[$p."id"] = $this->id();
    if($this->nombres !== UNDEFINED) $row[$p."nombres"] = $this->nombres();
    if($this->apellidos !== UNDEFINED) $row[$p."apellidos"] = $this->apellidos();
    if($this->genero !== UNDEFINED) $row[$p."genero"] = $this->genero();
    if($this->telefono !== UNDEFINED) $row[$p."telefono"] = $this->telefono();
    if($this->email !== UNDEFINED) $row[$p."email"] = $this->email();
    if($this->trayectoriaEducativa !== UNDEFINED) $row[$p."trayectoria_educativa"] = $this->trayectoriaEducativa();
    if($this->turno !== UNDEFINED) $row[$p."turno"] = $this->turno();
    if($this->pcEscritorio !== UNDEFINED) $row[$p."pc_escritorio"] = $this->pcEscritorio();
    if($this->netNetbook !== UNDEFINED) $row[$p."net_netbook"] = $this->netNetbook();
    if($this->tablet !== UNDEFINED) $row[$p."tablet"] = $this->tablet();
    if($this->pcOTablet !== UNDEFINED) $row[$p."pc_o_tablet"] = $this->pcOTablet();
    if($this->impresora !== UNDEFINED) $row[$p."impresora"] = $this->impresora();
    if($this->conexionInternetPaga !== UNDEFINED) $row[$p."conexion_internet_paga"] = $this->conexionInternetPaga();
    if($this->telefonoCelular !== UNDEFINED) $row[$p."telefono_celular"] = $this->telefonoCelular();
    if($this->numeroDocumento !== UNDEFINED) $row[$p."numero_documento"] = $this->numeroDocumento();
    return $row;
  }

  public function _isEmpty(){
    if(!Validation::is_empty($this->id)) return false;
    if(!Validation::is_empty($this->nombres)) return false;
    if(!Validation::is_empty($this->apellidos)) return false;
    if(!Validation::is_empty($this->genero)) return false;
    if(!Validation::is_empty($this->telefono)) return false;
    if(!Validation::is_empty($this->email)) return false;
    if(!Validation::is_empty($this->trayectoriaEducativa)) return false;
    if(!Validation::is_empty($this->turno)) return false;
    if(!Validation::is_empty($this->pcEscritorio)) return false;
    if(!Validation::is_empty($this->netNetbook)) return false;
    if(!Validation::is_empty($this->tablet)) return false;
    if(!Validation::is_empty($this->pcOTablet)) return false;
    if(!Validation::is_empty($this->impresora)) return false;
    if(!Validation::is_empty($this->conexionInternetPaga)) return false;
    if(!Validation::is_empty($this->telefonoCelular)) return false;
    if(!Validation::is_empty($this->numeroDocumento)) return false;
    return true;
  }

  public function id() { return $this->id; }
  public function nombres($format = null) { return Format::convertCase($this->nombres, $format); }
  public function apellidos($format = null) { return Format::convertCase($this->apellidos, $format); }
  public function genero($format = null) { return Format::convertCase($this->genero, $format); }
  public function telefono($format = null) { return Format::convertCase($this->telefono, $format); }
  public function email($format = null) { return Format::convertCase($this->email, $format); }
  public function trayectoriaEducativa($format = null) { return Format::convertCase($this->trayectoriaEducativa, $format); }
  public function turno($format = null) { return Format::convertCase($this->turno, $format); }
  public function pcEscritorio($format = null) { return Format::boolean($this->pcEscritorio, $format); }
  public function netNetbook($format = null) { return Format::boolean($this->netNetbook, $format); }
  public function tablet($format = null) { return Format::boolean($this->tablet, $format); }
  public function pcOTablet($format = null) { return Format::boolean($this->pcOTablet, $format); }
  public function impresora($format = null) { return Format::boolean($this->impresora, $format); }
  public function conexionInternetPaga($format = null) { return Format::boolean($this->conexionInternetPaga, $format); }
  public function telefonoCelular($format = null) { return Format::convertCase($this->telefonoCelular, $format); }
  public function numeroDocumento($format = null) { return Format::convertCase($this->numeroDocumento, $format); }

  public function setId($p) { $this->id = (is_null($p)) ? null : (string)$p; }

  public function setNombres($p) { $this->nombres = (is_null($p)) ? null : (string)$p; }

  public function setApellidos($p) { $this->apellidos = (is_null($p)) ? null : (string)$p; }

  public function setGenero($p) { $this->genero = (is_null($p)) ? null : (string)$p; }

  public function setTelefono($p) { $this->telefono = (is_null($p)) ? null : (string)$p; }

  public function setEmail($p) { $this->email = (is_null($p)) ? null : (string)$p; }

  public function setTrayectoriaEducativa($p) { $this->trayectoriaEducativa = (is_null($p)) ? null : (string)$p; }

  public function setTurno($p) { $this->turno = (is_null($p)) ? null : (string)$p; }

  public function setPcEscritorio($p) { $this->pcEscritorio = settypebool(trim($p)); }

  public function setNetNetbook($p) { $this->netNetbook = settypebool(trim($p)); }

  public function setTablet($p) { $this->tablet = settypebool(trim($p)); }

  public function setPcOTablet($p) { $this->pcOTablet = settypebool(trim($p)); }

  public function setImpresora($p) { $this->impresora = settypebool(trim($p)); }

  public function setConexionInternetPaga($p) { $this->conexionInternetPaga = settypebool(trim($p)); }

  public function setTelefonoCelular($p) { $this->telefonoCelular = (is_null($p)) ? null : (string)$p; }

  public function setNumeroDocumento($p) { $this->numeroDocumento = (is_null($p)) ? null : (string)$p; }

  public function checkId($value) { 
      return true; 
  }

  public function checkNombres($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("nombres", $v);
  }

  public function checkApellidos($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("apellidos", $v);
  }

  public function checkGenero($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("genero", $v);
  }

  public function checkTelefono($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("telefono", $v);
  }

  public function checkEmail($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("email", $v);
  }

  public function checkTrayectoriaEducativa($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("trayectoria_educativa", $v);
  }

  public function checkTurno($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("turno", $v);
  }

  public function checkPcEscritorio($value) { 
    $v = Validation::getInstanceValue($value)->boolean();
    return $this->_setLogsValidation("pc_escritorio", $v);
  }

  public function checkNetNetbook($value) { 
    $v = Validation::getInstanceValue($value)->boolean();
    return $this->_setLogsValidation("net_netbook", $v);
  }

  public function checkTablet($value) { 
    $v = Validation::getInstanceValue($value)->boolean();
    return $this->_setLogsValidation("tablet", $v);
  }

  public function checkPcOTablet($value) { 
    $v = Validation::getInstanceValue($value)->boolean();
    return $this->_setLogsValidation("pc_o_tablet", $v);
  }

  public function checkImpresora($value) { 
    $v = Validation::getInstanceValue($value)->boolean();
    return $this->_setLogsValidation("impresora", $v);
  }

  public function checkConexionInternetPaga($value) { 
    $v = Validation::getInstanceValue($value)->boolean();
    return $this->_setLogsValidation("conexion_internet_paga", $v);
  }

  public function checkTelefonoCelular($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("telefono_celular", $v);
  }

  public function checkNumeroDocumento($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("numero_documento", $v);
  }

  public function _check(){
    $this->checkId($this->id);
    $this->checkNombres($this->nombres);
    $this->checkApellidos($this->apellidos);
    $this->checkGenero($this->genero);
    $this->checkTelefono($this->telefono);
    $this->checkEmail($this->email);
    $this->checkTrayectoriaEducativa($this->trayectoriaEducativa);
    $this->checkTurno($this->turno);
    $this->checkPcEscritorio($this->pcEscritorio);
    $this->checkNetNetbook($this->netNetbook);
    $this->checkTablet($this->tablet);
    $this->checkPcOTablet($this->pcOTablet);
    $this->checkImpresora($this->impresora);
    $this->checkConexionInternetPaga($this->conexionInternetPaga);
    $this->checkTelefonoCelular($this->telefonoCelular);
    $this->checkNumeroDocumento($this->numeroDocumento);
    return !$this->_getLogs()->isError();
  }



}
