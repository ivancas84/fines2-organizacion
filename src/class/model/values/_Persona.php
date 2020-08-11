<?php

require_once("class/tools/Format.php");
require_once("class/model/Values.php");

class _Persona extends EntityValues {
  protected $id = UNDEFINED;
  protected $region = UNDEFINED;
  protected $distrito = UNDEFINED;
  protected $localidad = UNDEFINED;
  protected $programa = UNDEFINED;
  protected $inscripcionMen = UNDEFINED;
  protected $cens = UNDEFINED;
  protected $sede = UNDEFINED;
  protected $comision = UNDEFINED;
  protected $tramo = UNDEFINED;
  protected $identificador = UNDEFINED;
  protected $numeroInscripcion = UNDEFINED;
  protected $numeroDocumento = UNDEFINED;
  protected $apellidos = UNDEFINED;
  protected $nombres = UNDEFINED;
  protected $genero = UNDEFINED;
  protected $telefono = UNDEFINED;
  protected $correo = UNDEFINED;
  protected $trayectoriaEducativa = UNDEFINED;
  protected $turno = UNDEFINED;
  protected $pcEscritorio = UNDEFINED;
  protected $netNotebook = UNDEFINED;
  protected $tablet = UNDEFINED;
  protected $pcTablet = UNDEFINED;
  protected $impresora = UNDEFINED;
  protected $conexionInternetPaga = UNDEFINED;
  protected $telefonoCelular = UNDEFINED;
  protected $comision2020 = UNDEFINED;

  public function _setDefault(){
    if($this->id == UNDEFINED) $this->setId(null);
    if($this->region == UNDEFINED) $this->setRegion('1');
    if($this->distrito == UNDEFINED) $this->setDistrito('La Plata');
    if($this->localidad == UNDEFINED) $this->setLocalidad(null);
    if($this->programa == UNDEFINED) $this->setPrograma(null);
    if($this->inscripcionMen == UNDEFINED) $this->setInscripcionMen(null);
    if($this->cens == UNDEFINED) $this->setCens(null);
    if($this->sede == UNDEFINED) $this->setSede(null);
    if($this->comision == UNDEFINED) $this->setComision(null);
    if($this->tramo == UNDEFINED) $this->setTramo(null);
    if($this->identificador == UNDEFINED) $this->setIdentificador(null);
    if($this->numeroInscripcion == UNDEFINED) $this->setNumeroInscripcion(null);
    if($this->numeroDocumento == UNDEFINED) $this->setNumeroDocumento(null);
    if($this->apellidos == UNDEFINED) $this->setApellidos(null);
    if($this->nombres == UNDEFINED) $this->setNombres(null);
    if($this->genero == UNDEFINED) $this->setGenero(null);
    if($this->telefono == UNDEFINED) $this->setTelefono(null);
    if($this->correo == UNDEFINED) $this->setCorreo(null);
    if($this->trayectoriaEducativa == UNDEFINED) $this->setTrayectoriaEducativa(null);
    if($this->turno == UNDEFINED) $this->setTurno(null);
    if($this->pcEscritorio == UNDEFINED) $this->setPcEscritorio(null);
    if($this->netNotebook == UNDEFINED) $this->setNetNotebook(null);
    if($this->tablet == UNDEFINED) $this->setTablet(null);
    if($this->pcTablet == UNDEFINED) $this->setPcTablet(null);
    if($this->impresora == UNDEFINED) $this->setImpresora(null);
    if($this->conexionInternetPaga == UNDEFINED) $this->setConexionInternetPaga(null);
    if($this->telefonoCelular == UNDEFINED) $this->setTelefonoCelular(null);
    if($this->comision2020 == UNDEFINED) $this->setComision2020(null);
    return $this;
  }

  public function _fromArray(array $row = NULL, string $p = ""){
    if(empty($row)) return;
    if(isset($row[$p."id"])) $this->setId($row[$p."id"]);
    if(isset($row[$p."region"])) $this->setRegion($row[$p."region"]);
    if(isset($row[$p."distrito"])) $this->setDistrito($row[$p."distrito"]);
    if(isset($row[$p."localidad"])) $this->setLocalidad($row[$p."localidad"]);
    if(isset($row[$p."programa"])) $this->setPrograma($row[$p."programa"]);
    if(isset($row[$p."inscripcion_men"])) $this->setInscripcionMen($row[$p."inscripcion_men"]);
    if(isset($row[$p."cens"])) $this->setCens($row[$p."cens"]);
    if(isset($row[$p."sede"])) $this->setSede($row[$p."sede"]);
    if(isset($row[$p."comision"])) $this->setComision($row[$p."comision"]);
    if(isset($row[$p."tramo"])) $this->setTramo($row[$p."tramo"]);
    if(isset($row[$p."identificador"])) $this->setIdentificador($row[$p."identificador"]);
    if(isset($row[$p."numero_inscripcion"])) $this->setNumeroInscripcion($row[$p."numero_inscripcion"]);
    if(isset($row[$p."numero_documento"])) $this->setNumeroDocumento($row[$p."numero_documento"]);
    if(isset($row[$p."apellidos"])) $this->setApellidos($row[$p."apellidos"]);
    if(isset($row[$p."nombres"])) $this->setNombres($row[$p."nombres"]);
    if(isset($row[$p."genero"])) $this->setGenero($row[$p."genero"]);
    if(isset($row[$p."telefono"])) $this->setTelefono($row[$p."telefono"]);
    if(isset($row[$p."correo"])) $this->setCorreo($row[$p."correo"]);
    if(isset($row[$p."trayectoria_educativa"])) $this->setTrayectoriaEducativa($row[$p."trayectoria_educativa"]);
    if(isset($row[$p."turno"])) $this->setTurno($row[$p."turno"]);
    if(isset($row[$p."pc_escritorio"])) $this->setPcEscritorio($row[$p."pc_escritorio"]);
    if(isset($row[$p."net_notebook"])) $this->setNetNotebook($row[$p."net_notebook"]);
    if(isset($row[$p."tablet"])) $this->setTablet($row[$p."tablet"]);
    if(isset($row[$p."pc_tablet"])) $this->setPcTablet($row[$p."pc_tablet"]);
    if(isset($row[$p."impresora"])) $this->setImpresora($row[$p."impresora"]);
    if(isset($row[$p."conexion_internet_paga"])) $this->setConexionInternetPaga($row[$p."conexion_internet_paga"]);
    if(isset($row[$p."telefono_celular"])) $this->setTelefonoCelular($row[$p."telefono_celular"]);
    if(isset($row[$p."comision_2020"])) $this->setComision2020($row[$p."comision_2020"]);
    return $this;
  }

  public function _toArray(string $p = ""){
    $row = [];
    if($this->id !== UNDEFINED) $row[$p."id"] = $this->id();
    if($this->region !== UNDEFINED) $row[$p."region"] = $this->region();
    if($this->distrito !== UNDEFINED) $row[$p."distrito"] = $this->distrito();
    if($this->localidad !== UNDEFINED) $row[$p."localidad"] = $this->localidad();
    if($this->programa !== UNDEFINED) $row[$p."programa"] = $this->programa();
    if($this->inscripcionMen !== UNDEFINED) $row[$p."inscripcion_men"] = $this->inscripcionMen();
    if($this->cens !== UNDEFINED) $row[$p."cens"] = $this->cens();
    if($this->sede !== UNDEFINED) $row[$p."sede"] = $this->sede();
    if($this->comision !== UNDEFINED) $row[$p."comision"] = $this->comision();
    if($this->tramo !== UNDEFINED) $row[$p."tramo"] = $this->tramo();
    if($this->identificador !== UNDEFINED) $row[$p."identificador"] = $this->identificador();
    if($this->numeroInscripcion !== UNDEFINED) $row[$p."numero_inscripcion"] = $this->numeroInscripcion();
    if($this->numeroDocumento !== UNDEFINED) $row[$p."numero_documento"] = $this->numeroDocumento();
    if($this->apellidos !== UNDEFINED) $row[$p."apellidos"] = $this->apellidos();
    if($this->nombres !== UNDEFINED) $row[$p."nombres"] = $this->nombres();
    if($this->genero !== UNDEFINED) $row[$p."genero"] = $this->genero();
    if($this->telefono !== UNDEFINED) $row[$p."telefono"] = $this->telefono();
    if($this->correo !== UNDEFINED) $row[$p."correo"] = $this->correo();
    if($this->trayectoriaEducativa !== UNDEFINED) $row[$p."trayectoria_educativa"] = $this->trayectoriaEducativa();
    if($this->turno !== UNDEFINED) $row[$p."turno"] = $this->turno();
    if($this->pcEscritorio !== UNDEFINED) $row[$p."pc_escritorio"] = $this->pcEscritorio();
    if($this->netNotebook !== UNDEFINED) $row[$p."net_notebook"] = $this->netNotebook();
    if($this->tablet !== UNDEFINED) $row[$p."tablet"] = $this->tablet();
    if($this->pcTablet !== UNDEFINED) $row[$p."pc_tablet"] = $this->pcTablet();
    if($this->impresora !== UNDEFINED) $row[$p."impresora"] = $this->impresora();
    if($this->conexionInternetPaga !== UNDEFINED) $row[$p."conexion_internet_paga"] = $this->conexionInternetPaga();
    if($this->telefonoCelular !== UNDEFINED) $row[$p."telefono_celular"] = $this->telefonoCelular();
    if($this->comision2020 !== UNDEFINED) $row[$p."comision_2020"] = $this->comision2020();
    return $row;
  }

  public function _isEmpty(){
    if(!Validation::is_empty($this->id)) return false;
    if(!Validation::is_empty($this->region)) return false;
    if(!Validation::is_empty($this->distrito)) return false;
    if(!Validation::is_empty($this->localidad)) return false;
    if(!Validation::is_empty($this->programa)) return false;
    if(!Validation::is_empty($this->inscripcionMen)) return false;
    if(!Validation::is_empty($this->cens)) return false;
    if(!Validation::is_empty($this->sede)) return false;
    if(!Validation::is_empty($this->comision)) return false;
    if(!Validation::is_empty($this->tramo)) return false;
    if(!Validation::is_empty($this->identificador)) return false;
    if(!Validation::is_empty($this->numeroInscripcion)) return false;
    if(!Validation::is_empty($this->numeroDocumento)) return false;
    if(!Validation::is_empty($this->apellidos)) return false;
    if(!Validation::is_empty($this->nombres)) return false;
    if(!Validation::is_empty($this->genero)) return false;
    if(!Validation::is_empty($this->telefono)) return false;
    if(!Validation::is_empty($this->correo)) return false;
    if(!Validation::is_empty($this->trayectoriaEducativa)) return false;
    if(!Validation::is_empty($this->turno)) return false;
    if(!Validation::is_empty($this->pcEscritorio)) return false;
    if(!Validation::is_empty($this->netNotebook)) return false;
    if(!Validation::is_empty($this->tablet)) return false;
    if(!Validation::is_empty($this->pcTablet)) return false;
    if(!Validation::is_empty($this->impresora)) return false;
    if(!Validation::is_empty($this->conexionInternetPaga)) return false;
    if(!Validation::is_empty($this->telefonoCelular)) return false;
    if(!Validation::is_empty($this->comision2020)) return false;
    return true;
  }

  public function id() { return $this->id; }
  public function region($format = null) { return Format::convertCase($this->region, $format); }
  public function distrito($format = null) { return Format::convertCase($this->distrito, $format); }
  public function localidad($format = null) { return Format::convertCase($this->localidad, $format); }
  public function programa($format = null) { return Format::convertCase($this->programa, $format); }
  public function inscripcionMen($format = null) { return Format::boolean($this->inscripcionMen, $format); }
  public function cens($format = null) { return Format::convertCase($this->cens, $format); }
  public function sede($format = null) { return Format::convertCase($this->sede, $format); }
  public function comision($format = null) { return Format::convertCase($this->comision, $format); }
  public function tramo($format = null) { return Format::convertCase($this->tramo, $format); }
  public function identificador($format = null) { return Format::convertCase($this->identificador, $format); }
  public function numeroInscripcion($format = null) { return Format::convertCase($this->numeroInscripcion, $format); }
  public function numeroDocumento($format = null) { return Format::convertCase($this->numeroDocumento, $format); }
  public function apellidos($format = null) { return Format::convertCase($this->apellidos, $format); }
  public function nombres($format = null) { return Format::convertCase($this->nombres, $format); }
  public function genero($format = null) { return Format::convertCase($this->genero, $format); }
  public function telefono($format = null) { return Format::convertCase($this->telefono, $format); }
  public function correo($format = null) { return Format::convertCase($this->correo, $format); }
  public function trayectoriaEducativa($format = null) { return Format::convertCase($this->trayectoriaEducativa, $format); }
  public function turno($format = null) { return Format::convertCase($this->turno, $format); }
  public function pcEscritorio($format = null) { return Format::boolean($this->pcEscritorio, $format); }
  public function netNotebook($format = null) { return Format::boolean($this->netNotebook, $format); }
  public function tablet($format = null) { return Format::boolean($this->tablet, $format); }
  public function pcTablet($format = null) { return Format::boolean($this->pcTablet, $format); }
  public function impresora($format = null) { return Format::boolean($this->impresora, $format); }
  public function conexionInternetPaga($format = null) { return Format::boolean($this->conexionInternetPaga, $format); }
  public function telefonoCelular($format = null) { return Format::convertCase($this->telefonoCelular, $format); }
  public function comision2020($format = null) { return Format::convertCase($this->comision2020, $format); }

  public function setId($p) { $this->id = (is_null($p)) ? null : (string)$p; }

  public function setRegion($p) { $this->region = (is_null($p)) ? null : (string)$p; }

  public function setDistrito($p) { $this->distrito = (is_null($p)) ? null : (string)$p; }

  public function setLocalidad($p) { $this->localidad = (is_null($p)) ? null : (string)$p; }

  public function setPrograma($p) { $this->programa = (is_null($p)) ? null : (string)$p; }

  public function setInscripcionMen($p) { $this->inscripcionMen = settypebool(trim($p)); }

  public function setCens($p) { $this->cens = (is_null($p)) ? null : (string)$p; }

  public function setSede($p) { $this->sede = (is_null($p)) ? null : (string)$p; }

  public function setComision($p) { $this->comision = (is_null($p)) ? null : (string)$p; }

  public function setTramo($p) { $this->tramo = (is_null($p)) ? null : (string)$p; }

  public function setIdentificador($p) { $this->identificador = (is_null($p)) ? null : (string)$p; }

  public function setNumeroInscripcion($p) { $this->numeroInscripcion = (is_null($p)) ? null : (string)$p; }

  public function setNumeroDocumento($p) { $this->numeroDocumento = (is_null($p)) ? null : (string)$p; }

  public function setApellidos($p) { $this->apellidos = (is_null($p)) ? null : (string)$p; }

  public function setNombres($p) { $this->nombres = (is_null($p)) ? null : (string)$p; }

  public function setGenero($p) { $this->genero = (is_null($p)) ? null : (string)$p; }

  public function setTelefono($p) { $this->telefono = (is_null($p)) ? null : (string)$p; }

  public function setCorreo($p) { $this->correo = (is_null($p)) ? null : (string)$p; }

  public function setTrayectoriaEducativa($p) { $this->trayectoriaEducativa = (is_null($p)) ? null : (string)$p; }

  public function setTurno($p) { $this->turno = (is_null($p)) ? null : (string)$p; }

  public function setPcEscritorio($p) { $this->pcEscritorio = settypebool(trim($p)); }

  public function setNetNotebook($p) { $this->netNotebook = settypebool(trim($p)); }

  public function setTablet($p) { $this->tablet = settypebool(trim($p)); }

  public function setPcTablet($p) { $this->pcTablet = settypebool(trim($p)); }

  public function setImpresora($p) { $this->impresora = settypebool(trim($p)); }

  public function setConexionInternetPaga($p) { $this->conexionInternetPaga = settypebool(trim($p)); }

  public function setTelefonoCelular($p) { $this->telefonoCelular = (is_null($p)) ? null : (string)$p; }

  public function setComision2020($p) { $this->comision2020 = (is_null($p)) ? null : (string)$p; }

  public function checkId($value) { 
      return true; 
  }

  public function checkRegion($value) { 
    $v = Validation::getInstanceValue($value)->string()->required();
    return $this->_setLogsValidation("region", $v);
  }

  public function checkDistrito($value) { 
    $v = Validation::getInstanceValue($value)->string()->required();
    return $this->_setLogsValidation("distrito", $v);
  }

  public function checkLocalidad($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("localidad", $v);
  }

  public function checkPrograma($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("programa", $v);
  }

  public function checkInscripcionMen($value) { 
    $v = Validation::getInstanceValue($value)->boolean();
    return $this->_setLogsValidation("inscripcion_men", $v);
  }

  public function checkCens($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("cens", $v);
  }

  public function checkSede($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("sede", $v);
  }

  public function checkComision($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("comision", $v);
  }

  public function checkTramo($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("tramo", $v);
  }

  public function checkIdentificador($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("identificador", $v);
  }

  public function checkNumeroInscripcion($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("numero_inscripcion", $v);
  }

  public function checkNumeroDocumento($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("numero_documento", $v);
  }

  public function checkApellidos($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("apellidos", $v);
  }

  public function checkNombres($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("nombres", $v);
  }

  public function checkGenero($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("genero", $v);
  }

  public function checkTelefono($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("telefono", $v);
  }

  public function checkCorreo($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("correo", $v);
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

  public function checkNetNotebook($value) { 
    $v = Validation::getInstanceValue($value)->boolean();
    return $this->_setLogsValidation("net_notebook", $v);
  }

  public function checkTablet($value) { 
    $v = Validation::getInstanceValue($value)->boolean();
    return $this->_setLogsValidation("tablet", $v);
  }

  public function checkPcTablet($value) { 
    $v = Validation::getInstanceValue($value)->boolean();
    return $this->_setLogsValidation("pc_tablet", $v);
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

  public function checkComision2020($value) { 
    $v = Validation::getInstanceValue($value)->string();
    return $this->_setLogsValidation("comision_2020", $v);
  }

  public function _check(){
    $this->checkId($this->id);
    $this->checkRegion($this->region);
    $this->checkDistrito($this->distrito);
    $this->checkLocalidad($this->localidad);
    $this->checkPrograma($this->programa);
    $this->checkInscripcionMen($this->inscripcionMen);
    $this->checkCens($this->cens);
    $this->checkSede($this->sede);
    $this->checkComision($this->comision);
    $this->checkTramo($this->tramo);
    $this->checkIdentificador($this->identificador);
    $this->checkNumeroInscripcion($this->numeroInscripcion);
    $this->checkNumeroDocumento($this->numeroDocumento);
    $this->checkApellidos($this->apellidos);
    $this->checkNombres($this->nombres);
    $this->checkGenero($this->genero);
    $this->checkTelefono($this->telefono);
    $this->checkCorreo($this->correo);
    $this->checkTrayectoriaEducativa($this->trayectoriaEducativa);
    $this->checkTurno($this->turno);
    $this->checkPcEscritorio($this->pcEscritorio);
    $this->checkNetNotebook($this->netNotebook);
    $this->checkTablet($this->tablet);
    $this->checkPcTablet($this->pcTablet);
    $this->checkImpresora($this->impresora);
    $this->checkConexionInternetPaga($this->conexionInternetPaga);
    $this->checkTelefonoCelular($this->telefonoCelular);
    $this->checkComision2020($this->comision2020);
    return !$this->_getLogs()->isError();
  }



}
