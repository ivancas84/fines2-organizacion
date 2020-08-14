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
  protected $archivo2019 = UNDEFINED;
  protected $archivo2020 = UNDEFINED;
  protected $drive = UNDEFINED;
  protected $cuil = UNDEFINED;
  protected $analiticoDni = UNDEFINED;
  protected $analiticoCuil = UNDEFINED;
  protected $analiticoPartida = UNDEFINED;
  protected $analiticoCertificado = UNDEFINED;
  protected $fechaNacimiento = UNDEFINED;
  protected $ingreso = UNDEFINED;
  protected $observaciones = UNDEFINED;
  protected $activo = UNDEFINED;

  public function _setDefault(){
    if($this->id == UNDEFINED) $this->setId(null);
    if($this->region == UNDEFINED) $this->setRegion('1');
    if($this->distrito == UNDEFINED) $this->setDistrito('La Plata');
    if($this->localidad == UNDEFINED) $this->setLocalidad(null);
    if($this->programa == UNDEFINED) $this->setPrograma(null);
    if($this->inscripcionMen == UNDEFINED) $this->setInscripcionMen(false);
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
    if($this->pcEscritorio == UNDEFINED) $this->setPcEscritorio(false);
    if($this->netNotebook == UNDEFINED) $this->setNetNotebook(false);
    if($this->tablet == UNDEFINED) $this->setTablet(false);
    if($this->pcTablet == UNDEFINED) $this->setPcTablet(false);
    if($this->impresora == UNDEFINED) $this->setImpresora(false);
    if($this->conexionInternetPaga == UNDEFINED) $this->setConexionInternetPaga(false);
    if($this->telefonoCelular == UNDEFINED) $this->setTelefonoCelular(null);
    if($this->comision2020 == UNDEFINED) $this->setComision2020(null);
    if($this->archivo2019 == UNDEFINED) $this->setArchivo2019(false);
    if($this->archivo2020 == UNDEFINED) $this->setArchivo2020(false);
    if($this->drive == UNDEFINED) $this->setDrive(false);
    if($this->cuil == UNDEFINED) $this->setCuil(null);
    if($this->analiticoDni == UNDEFINED) $this->setAnaliticoDni(false);
    if($this->analiticoCuil == UNDEFINED) $this->setAnaliticoCuil(false);
    if($this->analiticoPartida == UNDEFINED) $this->setAnaliticoPartida(false);
    if($this->analiticoCertificado == UNDEFINED) $this->setAnaliticoCertificado(false);
    if($this->fechaNacimiento == UNDEFINED) $this->setFechaNacimiento(null);
    if($this->ingreso == UNDEFINED) $this->setIngreso(null);
    if($this->observaciones == UNDEFINED) $this->setObservaciones(null);
    if($this->activo == UNDEFINED) $this->setActivo(true);
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
    if(isset($row[$p."archivo_2019"])) $this->setArchivo2019($row[$p."archivo_2019"]);
    if(isset($row[$p."archivo_2020"])) $this->setArchivo2020($row[$p."archivo_2020"]);
    if(isset($row[$p."drive"])) $this->setDrive($row[$p."drive"]);
    if(isset($row[$p."cuil"])) $this->setCuil($row[$p."cuil"]);
    if(isset($row[$p."analitico_dni"])) $this->setAnaliticoDni($row[$p."analitico_dni"]);
    if(isset($row[$p."analitico_cuil"])) $this->setAnaliticoCuil($row[$p."analitico_cuil"]);
    if(isset($row[$p."analitico_partida"])) $this->setAnaliticoPartida($row[$p."analitico_partida"]);
    if(isset($row[$p."analitico_certificado"])) $this->setAnaliticoCertificado($row[$p."analitico_certificado"]);
    if(isset($row[$p."fecha_nacimiento"])) $this->setFechaNacimiento($row[$p."fecha_nacimiento"]);
    if(isset($row[$p."ingreso"])) $this->setIngreso($row[$p."ingreso"]);
    if(isset($row[$p."observaciones"])) $this->setObservaciones($row[$p."observaciones"]);
    if(isset($row[$p."activo"])) $this->setActivo($row[$p."activo"]);
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
    if($this->archivo2019 !== UNDEFINED) $row[$p."archivo_2019"] = $this->archivo2019();
    if($this->archivo2020 !== UNDEFINED) $row[$p."archivo_2020"] = $this->archivo2020();
    if($this->drive !== UNDEFINED) $row[$p."drive"] = $this->drive();
    if($this->cuil !== UNDEFINED) $row[$p."cuil"] = $this->cuil();
    if($this->analiticoDni !== UNDEFINED) $row[$p."analitico_dni"] = $this->analiticoDni();
    if($this->analiticoCuil !== UNDEFINED) $row[$p."analitico_cuil"] = $this->analiticoCuil();
    if($this->analiticoPartida !== UNDEFINED) $row[$p."analitico_partida"] = $this->analiticoPartida();
    if($this->analiticoCertificado !== UNDEFINED) $row[$p."analitico_certificado"] = $this->analiticoCertificado();
    if($this->fechaNacimiento !== UNDEFINED) $row[$p."fecha_nacimiento"] = $this->fechaNacimiento("c");
    if($this->ingreso !== UNDEFINED) $row[$p."ingreso"] = $this->ingreso();
    if($this->observaciones !== UNDEFINED) $row[$p."observaciones"] = $this->observaciones();
    if($this->activo !== UNDEFINED) $row[$p."activo"] = $this->activo();
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
    if(!Validation::is_empty($this->archivo2019)) return false;
    if(!Validation::is_empty($this->archivo2020)) return false;
    if(!Validation::is_empty($this->drive)) return false;
    if(!Validation::is_empty($this->cuil)) return false;
    if(!Validation::is_empty($this->analiticoDni)) return false;
    if(!Validation::is_empty($this->analiticoCuil)) return false;
    if(!Validation::is_empty($this->analiticoPartida)) return false;
    if(!Validation::is_empty($this->analiticoCertificado)) return false;
    if(!Validation::is_empty($this->fechaNacimiento)) return false;
    if(!Validation::is_empty($this->ingreso)) return false;
    if(!Validation::is_empty($this->observaciones)) return false;
    if(!Validation::is_empty($this->activo)) return false;
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
  public function archivo2019($format = null) { return Format::boolean($this->archivo2019, $format); }
  public function archivo2020($format = null) { return Format::boolean($this->archivo2020, $format); }
  public function drive($format = null) { return Format::boolean($this->drive, $format); }
  public function cuil($format = null) { return Format::convertCase($this->cuil, $format); }
  public function analiticoDni($format = null) { return Format::boolean($this->analiticoDni, $format); }
  public function analiticoCuil($format = null) { return Format::boolean($this->analiticoCuil, $format); }
  public function analiticoPartida($format = null) { return Format::boolean($this->analiticoPartida, $format); }
  public function analiticoCertificado($format = null) { return Format::boolean($this->analiticoCertificado, $format); }
  public function fechaNacimiento($format = null) { return Format::date($this->fechaNacimiento, $format); }
  public function ingreso($format = null) { return Format::convertCase($this->ingreso, $format); }
  public function observaciones($format = null) { return Format::convertCase($this->observaciones, $format); }
  public function activo($format = null) { return Format::boolean($this->activo, $format); }

  public function setId($p) { $this->id = (is_null($p)) ? null : (string)$p; }
  public function setRegion($p) { $this->region = (is_null($p)) ? null : (string)$p; }
  public function setDistrito($p) { $this->distrito = (is_null($p)) ? null : (string)$p; }
  public function setLocalidad($p) { $this->localidad = (is_null($p)) ? null : (string)$p; }
  public function setPrograma($p) { $this->programa = (is_null($p)) ? null : (string)$p; }
  public function setInscripcionMen($p) { $this->inscripcionMen = settypebool($p); }
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
  public function setPcEscritorio($p) { $this->pcEscritorio = settypebool($p); }
  public function setNetNotebook($p) { $this->netNotebook = settypebool($p); }
  public function setTablet($p) { $this->tablet = settypebool($p); }
  public function setPcTablet($p) { $this->pcTablet = settypebool($p); }
  public function setImpresora($p) { $this->impresora = settypebool($p); }
  public function setConexionInternetPaga($p) { $this->conexionInternetPaga = settypebool($p); }
  public function setTelefonoCelular($p) { $this->telefonoCelular = (is_null($p)) ? null : (string)$p; }
  public function setComision2020($p) { $this->comision2020 = (is_null($p)) ? null : (string)$p; }
  public function setArchivo2019($p) { $this->archivo2019 = settypebool($p); }
  public function setArchivo2020($p) { $this->archivo2020 = settypebool($p); }
  public function setDrive($p) { $this->drive = settypebool($p); }
  public function setCuil($p) { $this->cuil = (is_null($p)) ? null : (string)$p; }
  public function setAnaliticoDni($p) { $this->analiticoDni = settypebool($p); }
  public function setAnaliticoCuil($p) { $this->analiticoCuil = settypebool($p); }
  public function setAnaliticoPartida($p) { $this->analiticoPartida = settypebool($p); }
  public function setAnaliticoCertificado($p) { $this->analiticoCertificado = settypebool($p); }
  public function _setFechaNacimiento(DateTime $p = null) { $this->fechaNacimiento = $p; }

  public function setFechaNacimiento($p) {
    if(!is_null($p)) {
      $p = new SpanishDateTime($p);
      if($p) $p->setTimeZone(new DateTimeZone(date_default_timezone_get()));
      $p->setTime(0,0,0);
    }
    $this->fechaNacimiento = $p;
  }

  public function setIngreso($p) { $this->ingreso = (is_null($p)) ? null : (string)$p; }
  public function setObservaciones($p) { $this->observaciones = (is_null($p)) ? null : (string)$p; }
  public function setActivo($p) { $this->activo = settypebool($p); }

  public function resetRegion() { if(!Validation::is_empty($this->region)) $this->region = preg_replace('/\s\s+/', ' ', trim($this->region)); }
  public function resetDistrito() { if(!Validation::is_empty($this->distrito)) $this->distrito = preg_replace('/\s\s+/', ' ', trim($this->distrito)); }
  public function resetLocalidad() { if(!Validation::is_empty($this->localidad)) $this->localidad = preg_replace('/\s\s+/', ' ', trim($this->localidad)); }
  public function resetPrograma() { if(!Validation::is_empty($this->programa)) $this->programa = preg_replace('/\s\s+/', ' ', trim($this->programa)); }
  public function resetCens() { if(!Validation::is_empty($this->cens)) $this->cens = preg_replace('/\s\s+/', ' ', trim($this->cens)); }
  public function resetSede() { if(!Validation::is_empty($this->sede)) $this->sede = preg_replace('/\s\s+/', ' ', trim($this->sede)); }
  public function resetComision() { if(!Validation::is_empty($this->comision)) $this->comision = preg_replace('/\s\s+/', ' ', trim($this->comision)); }
  public function resetTramo() { if(!Validation::is_empty($this->tramo)) $this->tramo = preg_replace('/\s\s+/', ' ', trim($this->tramo)); }
  public function resetIdentificador() { if(!Validation::is_empty($this->identificador)) $this->identificador = preg_replace('/\s\s+/', ' ', trim($this->identificador)); }
  public function resetNumeroInscripcion() { if(!Validation::is_empty($this->numeroInscripcion)) $this->numeroInscripcion = preg_replace('/\s\s+/', ' ', trim($this->numeroInscripcion)); }
  public function resetNumeroDocumento() { if(!Validation::is_empty($this->numeroDocumento)) $this->numeroDocumento = preg_replace('/\s\s+/', ' ', trim($this->numeroDocumento)); }
  public function resetApellidos() { if(!Validation::is_empty($this->apellidos)) $this->apellidos = preg_replace('/\s\s+/', ' ', trim($this->apellidos)); }
  public function resetNombres() { if(!Validation::is_empty($this->nombres)) $this->nombres = preg_replace('/\s\s+/', ' ', trim($this->nombres)); }
  public function resetGenero() { if(!Validation::is_empty($this->genero)) $this->genero = preg_replace('/\s\s+/', ' ', trim($this->genero)); }
  public function resetTelefono() { if(!Validation::is_empty($this->telefono)) $this->telefono = preg_replace('/\s\s+/', ' ', trim($this->telefono)); }
  public function resetCorreo() { if(!Validation::is_empty($this->correo)) $this->correo = preg_replace('/\s\s+/', ' ', trim($this->correo)); }
  public function resetTrayectoriaEducativa() { if(!Validation::is_empty($this->trayectoriaEducativa)) $this->trayectoriaEducativa = preg_replace('/\s\s+/', ' ', trim($this->trayectoriaEducativa)); }
  public function resetTurno() { if(!Validation::is_empty($this->turno)) $this->turno = preg_replace('/\s\s+/', ' ', trim($this->turno)); }
  public function resetTelefonoCelular() { if(!Validation::is_empty($this->telefonoCelular)) $this->telefonoCelular = preg_replace('/\s\s+/', ' ', trim($this->telefonoCelular)); }
  public function resetComision2020() { if(!Validation::is_empty($this->comision2020)) $this->comision2020 = preg_replace('/\s\s+/', ' ', trim($this->comision2020)); }
  public function resetCuil() { if(!Validation::is_empty($this->cuil)) $this->cuil = preg_replace('/\s\s+/', ' ', trim($this->cuil)); }
  public function resetIngreso() { if(!Validation::is_empty($this->ingreso)) $this->ingreso = preg_replace('/\s\s+/', ' ', trim($this->ingreso)); }
  public function resetObservaciones() { if(!Validation::is_empty($this->observaciones)) $this->observaciones = preg_replace('/\s\s+/', ' ', trim($this->observaciones)); }

  public function checkId($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkRegion($value) { 
    $this->_logs->resetLogs("region");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("region", "error", $error); }
    return $v->isSuccess();
  }

  public function checkDistrito($value) { 
    $this->_logs->resetLogs("distrito");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("distrito", "error", $error); }
    return $v->isSuccess();
  }

  public function checkLocalidad($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkPrograma($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkInscripcionMen($value) { 
    $this->_logs->resetLogs("inscripcion_men");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("inscripcion_men", "error", $error); }
    return $v->isSuccess();
  }

  public function checkCens($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkSede($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkComision($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkTramo($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkIdentificador($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkNumeroInscripcion($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkNumeroDocumento($value) { 
    $this->_logs->resetLogs("numero_documento");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("numero_documento", "error", $error); }
    return $v->isSuccess();
  }

  public function checkApellidos($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkNombres($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkGenero($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkTelefono($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkCorreo($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkTrayectoriaEducativa($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkTurno($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkPcEscritorio($value) { 
    $this->_logs->resetLogs("pc_escritorio");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("pc_escritorio", "error", $error); }
    return $v->isSuccess();
  }

  public function checkNetNotebook($value) { 
    $this->_logs->resetLogs("net_notebook");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("net_notebook", "error", $error); }
    return $v->isSuccess();
  }

  public function checkTablet($value) { 
    $this->_logs->resetLogs("tablet");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("tablet", "error", $error); }
    return $v->isSuccess();
  }

  public function checkPcTablet($value) { 
    $this->_logs->resetLogs("pc_tablet");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("pc_tablet", "error", $error); }
    return $v->isSuccess();
  }

  public function checkImpresora($value) { 
    $this->_logs->resetLogs("impresora");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("impresora", "error", $error); }
    return $v->isSuccess();
  }

  public function checkConexionInternetPaga($value) { 
    $this->_logs->resetLogs("conexion_internet_paga");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("conexion_internet_paga", "error", $error); }
    return $v->isSuccess();
  }

  public function checkTelefonoCelular($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkComision2020($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkArchivo2019($value) { 
    $this->_logs->resetLogs("archivo_2019");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("archivo_2019", "error", $error); }
    return $v->isSuccess();
  }

  public function checkArchivo2020($value) { 
    $this->_logs->resetLogs("archivo_2020");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("archivo_2020", "error", $error); }
    return $v->isSuccess();
  }

  public function checkDrive($value) { 
    $this->_logs->resetLogs("drive");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("drive", "error", $error); }
    return $v->isSuccess();
  }

  public function checkCuil($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkAnaliticoDni($value) { 
    $this->_logs->resetLogs("analitico_dni");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("analitico_dni", "error", $error); }
    return $v->isSuccess();
  }

  public function checkAnaliticoCuil($value) { 
    $this->_logs->resetLogs("analitico_cuil");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("analitico_cuil", "error", $error); }
    return $v->isSuccess();
  }

  public function checkAnaliticoPartida($value) { 
    $this->_logs->resetLogs("analitico_partida");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("analitico_partida", "error", $error); }
    return $v->isSuccess();
  }

  public function checkAnaliticoCertificado($value) { 
    $this->_logs->resetLogs("analitico_certificado");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("analitico_certificado", "error", $error); }
    return $v->isSuccess();
  }

  public function checkFechaNacimiento($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkIngreso($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkObservaciones($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkActivo($value) { 
    $this->_logs->resetLogs("activo");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("activo", "error", $error); }
    return $v->isSuccess();
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
    $this->checkArchivo2019($this->archivo2019);
    $this->checkArchivo2020($this->archivo2020);
    $this->checkDrive($this->drive);
    $this->checkCuil($this->cuil);
    $this->checkAnaliticoDni($this->analiticoDni);
    $this->checkAnaliticoCuil($this->analiticoCuil);
    $this->checkAnaliticoPartida($this->analiticoPartida);
    $this->checkAnaliticoCertificado($this->analiticoCertificado);
    $this->checkFechaNacimiento($this->fechaNacimiento);
    $this->checkIngreso($this->ingreso);
    $this->checkObservaciones($this->observaciones);
    $this->checkActivo($this->activo);
    return !$this->_getLogs()->isError();
  }

  public function _reset(){
    $this->resetRegion();
    $this->resetDistrito();
    $this->resetLocalidad();
    $this->resetPrograma();
    $this->resetCens();
    $this->resetSede();
    $this->resetComision();
    $this->resetTramo();
    $this->resetIdentificador();
    $this->resetNumeroInscripcion();
    $this->resetNumeroDocumento();
    $this->resetApellidos();
    $this->resetNombres();
    $this->resetGenero();
    $this->resetTelefono();
    $this->resetCorreo();
    $this->resetTrayectoriaEducativa();
    $this->resetTurno();
    $this->resetTelefonoCelular();
    $this->resetComision2020();
    $this->resetCuil();
    $this->resetIngreso();
    $this->resetObservaciones();
    return $this;
  }



}
