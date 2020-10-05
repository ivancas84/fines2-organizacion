<?php
require_once("class/model/entityOptions/Value.php");

class _PersonaValue extends ValueEntityOptions{

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
  protected $fila = UNDEFINED;
  protected $error = UNDEFINED;
  protected $idComision = UNDEFINED;
  protected $actualizado = UNDEFINED;
  protected $informado = UNDEFINED;

  public function setDefaultId() { if($this->id === UNDEFINED) $this->setId(uniqid()); }
  public function setDefaultRegion() { if($this->region === UNDEFINED) $this->setRegion('1'); }
  public function setDefaultDistrito() { if($this->distrito === UNDEFINED) $this->setDistrito('La Plata'); }
  public function setDefaultLocalidad() { if($this->localidad === UNDEFINED) $this->setLocalidad(null); }
  public function setDefaultPrograma() { if($this->programa === UNDEFINED) $this->setPrograma(null); }
  public function setDefaultInscripcionMen() { if($this->inscripcionMen === UNDEFINED) $this->setInscripcionMen(false); }
  public function setDefaultCens() { if($this->cens === UNDEFINED) $this->setCens(null); }
  public function setDefaultSede() { if($this->sede === UNDEFINED) $this->setSede(null); }
  public function setDefaultComision() { if($this->comision === UNDEFINED) $this->setComision(null); }
  public function setDefaultTramo() { if($this->tramo === UNDEFINED) $this->setTramo(null); }
  public function setDefaultIdentificador() { if($this->identificador === UNDEFINED) $this->setIdentificador(null); }
  public function setDefaultNumeroInscripcion() { if($this->numeroInscripcion === UNDEFINED) $this->setNumeroInscripcion(null); }
  public function setDefaultNumeroDocumento() { if($this->numeroDocumento === UNDEFINED) $this->setNumeroDocumento(null); }
  public function setDefaultApellidos() { if($this->apellidos === UNDEFINED) $this->setApellidos(null); }
  public function setDefaultNombres() { if($this->nombres === UNDEFINED) $this->setNombres(null); }
  public function setDefaultGenero() { if($this->genero === UNDEFINED) $this->setGenero(null); }
  public function setDefaultTelefono() { if($this->telefono === UNDEFINED) $this->setTelefono(null); }
  public function setDefaultCorreo() { if($this->correo === UNDEFINED) $this->setCorreo(null); }
  public function setDefaultTrayectoriaEducativa() { if($this->trayectoriaEducativa === UNDEFINED) $this->setTrayectoriaEducativa(null); }
  public function setDefaultTurno() { if($this->turno === UNDEFINED) $this->setTurno(null); }
  public function setDefaultPcEscritorio() { if($this->pcEscritorio === UNDEFINED) $this->setPcEscritorio(false); }
  public function setDefaultNetNotebook() { if($this->netNotebook === UNDEFINED) $this->setNetNotebook(false); }
  public function setDefaultTablet() { if($this->tablet === UNDEFINED) $this->setTablet(false); }
  public function setDefaultPcTablet() { if($this->pcTablet === UNDEFINED) $this->setPcTablet(false); }
  public function setDefaultImpresora() { if($this->impresora === UNDEFINED) $this->setImpresora(false); }
  public function setDefaultConexionInternetPaga() { if($this->conexionInternetPaga === UNDEFINED) $this->setConexionInternetPaga(false); }
  public function setDefaultTelefonoCelular() { if($this->telefonoCelular === UNDEFINED) $this->setTelefonoCelular(null); }
  public function setDefaultComision2020() { if($this->comision2020 === UNDEFINED) $this->setComision2020(null); }
  public function setDefaultArchivo2019() { if($this->archivo2019 === UNDEFINED) $this->setArchivo2019(false); }
  public function setDefaultArchivo2020() { if($this->archivo2020 === UNDEFINED) $this->setArchivo2020(false); }
  public function setDefaultDrive() { if($this->drive === UNDEFINED) $this->setDrive(false); }
  public function setDefaultCuil() { if($this->cuil === UNDEFINED) $this->setCuil(null); }
  public function setDefaultAnaliticoDni() { if($this->analiticoDni === UNDEFINED) $this->setAnaliticoDni(false); }
  public function setDefaultAnaliticoCuil() { if($this->analiticoCuil === UNDEFINED) $this->setAnaliticoCuil(false); }
  public function setDefaultAnaliticoPartida() { if($this->analiticoPartida === UNDEFINED) $this->setAnaliticoPartida(false); }
  public function setDefaultAnaliticoCertificado() { if($this->analiticoCertificado === UNDEFINED) $this->setAnaliticoCertificado(false); }
  public function setDefaultFechaNacimiento() { if($this->fechaNacimiento === UNDEFINED) $this->setFechaNacimiento(null); }
  public function setDefaultIngreso() { if($this->ingreso === UNDEFINED) $this->setIngreso(null); }
  public function setDefaultObservaciones() { if($this->observaciones === UNDEFINED) $this->setObservaciones(null); }
  public function setDefaultActivo() { if($this->activo === UNDEFINED) $this->setActivo(true); }
  public function setDefaultFila() { if($this->fila === UNDEFINED) $this->setFila(null); }
  public function setDefaultError() { if($this->error === UNDEFINED) $this->setError(null); }
  public function setDefaultIdComision() { if($this->idComision === UNDEFINED) $this->setIdComision(null); }
  public function setDefaultActualizado() { if($this->actualizado === UNDEFINED) $this->setActualizado(null); }
  public function setDefaultInformado() { if($this->informado === UNDEFINED) $this->setInformado(null); }

  public function isEmptyId() { if(!Validation::is_empty($this->id)) return false; }
  public function isEmptyRegion() { if(!Validation::is_empty($this->region)) return false; }
  public function isEmptyDistrito() { if(!Validation::is_empty($this->distrito)) return false; }
  public function isEmptyLocalidad() { if(!Validation::is_empty($this->localidad)) return false; }
  public function isEmptyPrograma() { if(!Validation::is_empty($this->programa)) return false; }
  public function isEmptyInscripcionMen() { if(!Validation::is_empty($this->inscripcionMen)) return false; }
  public function isEmptyCens() { if(!Validation::is_empty($this->cens)) return false; }
  public function isEmptySede() { if(!Validation::is_empty($this->sede)) return false; }
  public function isEmptyComision() { if(!Validation::is_empty($this->comision)) return false; }
  public function isEmptyTramo() { if(!Validation::is_empty($this->tramo)) return false; }
  public function isEmptyIdentificador() { if(!Validation::is_empty($this->identificador)) return false; }
  public function isEmptyNumeroInscripcion() { if(!Validation::is_empty($this->numeroInscripcion)) return false; }
  public function isEmptyNumeroDocumento() { if(!Validation::is_empty($this->numeroDocumento)) return false; }
  public function isEmptyApellidos() { if(!Validation::is_empty($this->apellidos)) return false; }
  public function isEmptyNombres() { if(!Validation::is_empty($this->nombres)) return false; }
  public function isEmptyGenero() { if(!Validation::is_empty($this->genero)) return false; }
  public function isEmptyTelefono() { if(!Validation::is_empty($this->telefono)) return false; }
  public function isEmptyCorreo() { if(!Validation::is_empty($this->correo)) return false; }
  public function isEmptyTrayectoriaEducativa() { if(!Validation::is_empty($this->trayectoriaEducativa)) return false; }
  public function isEmptyTurno() { if(!Validation::is_empty($this->turno)) return false; }
  public function isEmptyPcEscritorio() { if(!Validation::is_empty($this->pcEscritorio)) return false; }
  public function isEmptyNetNotebook() { if(!Validation::is_empty($this->netNotebook)) return false; }
  public function isEmptyTablet() { if(!Validation::is_empty($this->tablet)) return false; }
  public function isEmptyPcTablet() { if(!Validation::is_empty($this->pcTablet)) return false; }
  public function isEmptyImpresora() { if(!Validation::is_empty($this->impresora)) return false; }
  public function isEmptyConexionInternetPaga() { if(!Validation::is_empty($this->conexionInternetPaga)) return false; }
  public function isEmptyTelefonoCelular() { if(!Validation::is_empty($this->telefonoCelular)) return false; }
  public function isEmptyComision2020() { if(!Validation::is_empty($this->comision2020)) return false; }
  public function isEmptyArchivo2019() { if(!Validation::is_empty($this->archivo2019)) return false; }
  public function isEmptyArchivo2020() { if(!Validation::is_empty($this->archivo2020)) return false; }
  public function isEmptyDrive() { if(!Validation::is_empty($this->drive)) return false; }
  public function isEmptyCuil() { if(!Validation::is_empty($this->cuil)) return false; }
  public function isEmptyAnaliticoDni() { if(!Validation::is_empty($this->analiticoDni)) return false; }
  public function isEmptyAnaliticoCuil() { if(!Validation::is_empty($this->analiticoCuil)) return false; }
  public function isEmptyAnaliticoPartida() { if(!Validation::is_empty($this->analiticoPartida)) return false; }
  public function isEmptyAnaliticoCertificado() { if(!Validation::is_empty($this->analiticoCertificado)) return false; }
  public function isEmptyFechaNacimiento() { if(!Validation::is_empty($this->fechaNacimiento)) return false; }
  public function isEmptyIngreso() { if(!Validation::is_empty($this->ingreso)) return false; }
  public function isEmptyObservaciones() { if(!Validation::is_empty($this->observaciones)) return false; }
  public function isEmptyActivo() { if(!Validation::is_empty($this->activo)) return false; }
  public function isEmptyFila() { if(!Validation::is_empty($this->fila)) return false; }
  public function isEmptyError() { if(!Validation::is_empty($this->error)) return false; }
  public function isEmptyIdComision() { if(!Validation::is_empty($this->idComision)) return false; }
  public function isEmptyActualizado() { if(!Validation::is_empty($this->actualizado)) return false; }
  public function isEmptyInformado() { if(!Validation::is_empty($this->informado)) return false; }

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
  public function fila() { return $this->fila; }
  public function error($format = null) { return Format::convertCase($this->error, $format); }
  public function idComision($format = null) { return Format::convertCase($this->idComision, $format); }
  public function actualizado($format = null) { return Format::date($this->actualizado, $format); }
  public function informado($format = null) { return Format::date($this->informado, $format); }

  public function _setId(string $p = null) { return $this->id = $p; }  
  public function setId($p) { return $this->id = (is_null($p)) ? null : (string)$p; }

  public function _setRegion(string $p = null) { return $this->region = $p; }  
  public function setRegion($p) { return $this->region = (is_null($p)) ? null : (string)$p; }

  public function _setDistrito(string $p = null) { return $this->distrito = $p; }  
  public function setDistrito($p) { return $this->distrito = (is_null($p)) ? null : (string)$p; }

  public function _setLocalidad(string $p = null) { return $this->localidad = $p; }  
  public function setLocalidad($p) { return $this->localidad = (is_null($p)) ? null : (string)$p; }

  public function _setPrograma(string $p = null) { return $this->programa = $p; }  
  public function setPrograma($p) { return $this->programa = (is_null($p)) ? null : (string)$p; }

  public function _setInscripcionMen(boolean $p = null) { return $this->inscripcionMen = $p; }  
  public function setInscripcionMen($p) { return $this->inscripcionMen = settypebool($p); }

  public function _setCens(string $p = null) { return $this->cens = $p; }  
  public function setCens($p) { return $this->cens = (is_null($p)) ? null : (string)$p; }

  public function _setSede(string $p = null) { return $this->sede = $p; }  
  public function setSede($p) { return $this->sede = (is_null($p)) ? null : (string)$p; }

  public function _setComision(string $p = null) { return $this->comision = $p; }  
  public function setComision($p) { return $this->comision = (is_null($p)) ? null : (string)$p; }

  public function _setTramo(string $p = null) { return $this->tramo = $p; }  
  public function setTramo($p) { return $this->tramo = (is_null($p)) ? null : (string)$p; }

  public function _setIdentificador(string $p = null) { return $this->identificador = $p; }  
  public function setIdentificador($p) { return $this->identificador = (is_null($p)) ? null : (string)$p; }

  public function _setNumeroInscripcion(string $p = null) { return $this->numeroInscripcion = $p; }  
  public function setNumeroInscripcion($p) { return $this->numeroInscripcion = (is_null($p)) ? null : (string)$p; }

  public function _setNumeroDocumento(string $p = null) { return $this->numeroDocumento = $p; }  
  public function setNumeroDocumento($p) { return $this->numeroDocumento = (is_null($p)) ? null : (string)$p; }

  public function _setApellidos(string $p = null) { return $this->apellidos = $p; }  
  public function setApellidos($p) { return $this->apellidos = (is_null($p)) ? null : (string)$p; }

  public function _setNombres(string $p = null) { return $this->nombres = $p; }  
  public function setNombres($p) { return $this->nombres = (is_null($p)) ? null : (string)$p; }

  public function _setGenero(string $p = null) { return $this->genero = $p; }  
  public function setGenero($p) { return $this->genero = (is_null($p)) ? null : (string)$p; }

  public function _setTelefono(string $p = null) { return $this->telefono = $p; }  
  public function setTelefono($p) { return $this->telefono = (is_null($p)) ? null : (string)$p; }

  public function _setCorreo(string $p = null) { return $this->correo = $p; }  
  public function setCorreo($p) { return $this->correo = (is_null($p)) ? null : (string)$p; }

  public function _setTrayectoriaEducativa(string $p = null) { return $this->trayectoriaEducativa = $p; }  
  public function setTrayectoriaEducativa($p) { return $this->trayectoriaEducativa = (is_null($p)) ? null : (string)$p; }

  public function _setTurno(string $p = null) { return $this->turno = $p; }  
  public function setTurno($p) { return $this->turno = (is_null($p)) ? null : (string)$p; }

  public function _setPcEscritorio(boolean $p = null) { return $this->pcEscritorio = $p; }  
  public function setPcEscritorio($p) { return $this->pcEscritorio = settypebool($p); }

  public function _setNetNotebook(boolean $p = null) { return $this->netNotebook = $p; }  
  public function setNetNotebook($p) { return $this->netNotebook = settypebool($p); }

  public function _setTablet(boolean $p = null) { return $this->tablet = $p; }  
  public function setTablet($p) { return $this->tablet = settypebool($p); }

  public function _setPcTablet(boolean $p = null) { return $this->pcTablet = $p; }  
  public function setPcTablet($p) { return $this->pcTablet = settypebool($p); }

  public function _setImpresora(boolean $p = null) { return $this->impresora = $p; }  
  public function setImpresora($p) { return $this->impresora = settypebool($p); }

  public function _setConexionInternetPaga(boolean $p = null) { return $this->conexionInternetPaga = $p; }  
  public function setConexionInternetPaga($p) { return $this->conexionInternetPaga = settypebool($p); }

  public function _setTelefonoCelular(string $p = null) { return $this->telefonoCelular = $p; }  
  public function setTelefonoCelular($p) { return $this->telefonoCelular = (is_null($p)) ? null : (string)$p; }

  public function _setComision2020(string $p = null) { return $this->comision2020 = $p; }  
  public function setComision2020($p) { return $this->comision2020 = (is_null($p)) ? null : (string)$p; }

  public function _setArchivo2019(boolean $p = null) { return $this->archivo2019 = $p; }  
  public function setArchivo2019($p) { return $this->archivo2019 = settypebool($p); }

  public function _setArchivo2020(boolean $p = null) { return $this->archivo2020 = $p; }  
  public function setArchivo2020($p) { return $this->archivo2020 = settypebool($p); }

  public function _setDrive(boolean $p = null) { return $this->drive = $p; }  
  public function setDrive($p) { return $this->drive = settypebool($p); }

  public function _setCuil(string $p = null) { return $this->cuil = $p; }  
  public function setCuil($p) { return $this->cuil = (is_null($p)) ? null : (string)$p; }

  public function _setAnaliticoDni(boolean $p = null) { return $this->analiticoDni = $p; }  
  public function setAnaliticoDni($p) { return $this->analiticoDni = settypebool($p); }

  public function _setAnaliticoCuil(boolean $p = null) { return $this->analiticoCuil = $p; }  
  public function setAnaliticoCuil($p) { return $this->analiticoCuil = settypebool($p); }

  public function _setAnaliticoPartida(boolean $p = null) { return $this->analiticoPartida = $p; }  
  public function setAnaliticoPartida($p) { return $this->analiticoPartida = settypebool($p); }

  public function _setAnaliticoCertificado(boolean $p = null) { return $this->analiticoCertificado = $p; }  
  public function setAnaliticoCertificado($p) { return $this->analiticoCertificado = settypebool($p); }

  public function _setFechaNacimiento(DateTime $p = null) { return $this->fechaNacimiento = $p; }  

  public function setFechaNacimiento($p) {
    if(!is_null($p) && !($p instanceof DateTime)) $p = new SpanishDateTime($p);
    if($p instanceof DateTime) $p->setTimeZone(new DateTimeZone(date_default_timezone_get()));
    return $this->fechaNacimiento = $p;
  }

  public function setFechaNacimientoY($p) {
    if(!is_null($p) && !($p instanceof DateTime)) {
      $p = (strlen($p) == 4) ? SpanishDateTime::createFromFormat('Y', $p) : new SpanishDateTime($p);
    }
    if($p instanceof DateTime) $p->setTimeZone(new DateTimeZone(date_default_timezone_get()));
    return $this->fechaNacimiento = $p;
  }

  public function _setIngreso(string $p = null) { return $this->ingreso = $p; }  
  public function setIngreso($p) { return $this->ingreso = (is_null($p)) ? null : (string)$p; }

  public function _setObservaciones(string $p = null) { return $this->observaciones = $p; }  
  public function setObservaciones($p) { return $this->observaciones = (is_null($p)) ? null : (string)$p; }

  public function _setActivo(boolean $p = null) { return $this->activo = $p; }  
  public function setActivo($p) { return $this->activo = settypebool($p); }

  public function _setFila(integer $p = null) { return $this->fila = $p; }    
  public function setFila($p) { return $this->fila = (is_null($p)) ? null : intval($p); }

  public function _setError(string $p = null) { return $this->error = $p; }  
  public function setError($p) { return $this->error = (is_null($p)) ? null : (string)$p; }

  public function _setIdComision(string $p = null) { return $this->idComision = $p; }  
  public function setIdComision($p) { return $this->idComision = (is_null($p)) ? null : (string)$p; }

  public function _setActualizado(DateTime $p = null) { return $this->actualizado = $p; }  

  public function setActualizado($p) {
    if(!is_null($p) && !($p instanceof DateTime)) $p = new SpanishDateTime($p);
    if($p instanceof DateTime) $p->setTimeZone(new DateTimeZone(date_default_timezone_get()));
    return $this->actualizado = $p;
  }

  public function setActualizadoY($p) {
    if(!is_null($p) && !($p instanceof DateTime)) {
      $p = (strlen($p) == 4) ? SpanishDateTime::createFromFormat('Y', $p) : new SpanishDateTime($p);
    }
    if($p instanceof DateTime) $p->setTimeZone(new DateTimeZone(date_default_timezone_get()));
    return $this->actualizado = $p;
  }

  public function _setInformado(DateTime $p = null) { return $this->informado = $p; }  

  public function setInformado($p) {
    if(!is_null($p) && !($p instanceof DateTime)) $p = new SpanishDateTime($p);
    if($p instanceof DateTime) $p->setTimeZone(new DateTimeZone(date_default_timezone_get()));
    return $this->informado = $p;
  }

  public function setInformadoY($p) {
    if(!is_null($p) && !($p instanceof DateTime)) {
      $p = (strlen($p) == 4) ? SpanishDateTime::createFromFormat('Y', $p) : new SpanishDateTime($p);
    }
    if($p instanceof DateTime) $p->setTimeZone(new DateTimeZone(date_default_timezone_get()));
    return $this->informado = $p;
  }

  public function resetId() { if(!Validation::is_empty($this->id)) $this->id = preg_replace('/\s\s+/', ' ', trim($this->id)); }
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
  public function resetError() { if(!Validation::is_empty($this->error)) $this->error = preg_replace('/\s\s+/', ' ', trim($this->error)); }
  public function resetIdComision() { if(!Validation::is_empty($this->idComision)) $this->idComision = preg_replace('/\s\s+/', ' ', trim($this->idComision)); }

  public function checkId() { 
      if(Validation::is_undefined($this->id)) return null;
      return true; 
  }

  public function checkRegion() { 
      $this->_logs->resetLogs("region");
      if(Validation::is_undefined($this->region)) return null;
      $v = Validation::getInstanceValue($this->region)->required()->max(255);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("region", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkDistrito() { 
      $this->_logs->resetLogs("distrito");
      if(Validation::is_undefined($this->distrito)) return null;
      $v = Validation::getInstanceValue($this->distrito)->required()->max(255);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("distrito", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkLocalidad() { 
      $this->_logs->resetLogs("localidad");
      if(Validation::is_undefined($this->localidad)) return null;
      $v = Validation::getInstanceValue($this->localidad)->max(255);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("localidad", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkPrograma() { 
      $this->_logs->resetLogs("programa");
      if(Validation::is_undefined($this->programa)) return null;
      $v = Validation::getInstanceValue($this->programa)->max(255);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("programa", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkInscripcionMen() { 
      $this->_logs->resetLogs("inscripcion_men");
      if(Validation::is_undefined($this->inscripcionMen)) return null;
      $v = Validation::getInstanceValue($this->inscripcionMen)->boolean();
      foreach($v->getErrors() as $error){ $this->_logs->addLog("inscripcion_men", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkCens() { 
      $this->_logs->resetLogs("cens");
      if(Validation::is_undefined($this->cens)) return null;
      $v = Validation::getInstanceValue($this->cens)->max(255);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("cens", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkSede() { 
      $this->_logs->resetLogs("sede");
      if(Validation::is_undefined($this->sede)) return null;
      $v = Validation::getInstanceValue($this->sede)->max(255);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("sede", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkComision() { 
      $this->_logs->resetLogs("comision");
      if(Validation::is_undefined($this->comision)) return null;
      $v = Validation::getInstanceValue($this->comision)->max(45);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("comision", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkTramo() { 
      $this->_logs->resetLogs("tramo");
      if(Validation::is_undefined($this->tramo)) return null;
      $v = Validation::getInstanceValue($this->tramo)->max(45);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("tramo", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkIdentificador() { 
      $this->_logs->resetLogs("identificador");
      if(Validation::is_undefined($this->identificador)) return null;
      $v = Validation::getInstanceValue($this->identificador)->max(45);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("identificador", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkNumeroInscripcion() { 
      $this->_logs->resetLogs("numero_inscripcion");
      if(Validation::is_undefined($this->numeroInscripcion)) return null;
      $v = Validation::getInstanceValue($this->numeroInscripcion)->max(45);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("numero_inscripcion", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkNumeroDocumento() { 
      $this->_logs->resetLogs("numero_documento");
      if(Validation::is_undefined($this->numeroDocumento)) return null;
      $v = Validation::getInstanceValue($this->numeroDocumento)->required()->max(45);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("numero_documento", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkApellidos() { 
      $this->_logs->resetLogs("apellidos");
      if(Validation::is_undefined($this->apellidos)) return null;
      $v = Validation::getInstanceValue($this->apellidos)->max(255);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("apellidos", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkNombres() { 
      $this->_logs->resetLogs("nombres");
      if(Validation::is_undefined($this->nombres)) return null;
      $v = Validation::getInstanceValue($this->nombres)->max(255);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("nombres", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkGenero() { 
      $this->_logs->resetLogs("genero");
      if(Validation::is_undefined($this->genero)) return null;
      $v = Validation::getInstanceValue($this->genero)->max(45);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("genero", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkTelefono() { 
      $this->_logs->resetLogs("telefono");
      if(Validation::is_undefined($this->telefono)) return null;
      $v = Validation::getInstanceValue($this->telefono)->max(255)->min(6);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("telefono", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkCorreo() { 
      $this->_logs->resetLogs("correo");
      if(Validation::is_undefined($this->correo)) return null;
      $v = Validation::getInstanceValue($this->correo)->max(255);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("correo", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkTrayectoriaEducativa() { 
      $this->_logs->resetLogs("trayectoria_educativa");
      if(Validation::is_undefined($this->trayectoriaEducativa)) return null;
      $v = Validation::getInstanceValue($this->trayectoriaEducativa)->max(255);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("trayectoria_educativa", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkTurno() { 
      $this->_logs->resetLogs("turno");
      if(Validation::is_undefined($this->turno)) return null;
      $v = Validation::getInstanceValue($this->turno)->max(45);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("turno", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkPcEscritorio() { 
      $this->_logs->resetLogs("pc_escritorio");
      if(Validation::is_undefined($this->pcEscritorio)) return null;
      $v = Validation::getInstanceValue($this->pcEscritorio)->boolean();
      foreach($v->getErrors() as $error){ $this->_logs->addLog("pc_escritorio", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkNetNotebook() { 
      $this->_logs->resetLogs("net_notebook");
      if(Validation::is_undefined($this->netNotebook)) return null;
      $v = Validation::getInstanceValue($this->netNotebook)->boolean();
      foreach($v->getErrors() as $error){ $this->_logs->addLog("net_notebook", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkTablet() { 
      $this->_logs->resetLogs("tablet");
      if(Validation::is_undefined($this->tablet)) return null;
      $v = Validation::getInstanceValue($this->tablet)->boolean();
      foreach($v->getErrors() as $error){ $this->_logs->addLog("tablet", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkPcTablet() { 
      $this->_logs->resetLogs("pc_tablet");
      if(Validation::is_undefined($this->pcTablet)) return null;
      $v = Validation::getInstanceValue($this->pcTablet)->boolean();
      foreach($v->getErrors() as $error){ $this->_logs->addLog("pc_tablet", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkImpresora() { 
      $this->_logs->resetLogs("impresora");
      if(Validation::is_undefined($this->impresora)) return null;
      $v = Validation::getInstanceValue($this->impresora)->boolean();
      foreach($v->getErrors() as $error){ $this->_logs->addLog("impresora", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkConexionInternetPaga() { 
      $this->_logs->resetLogs("conexion_internet_paga");
      if(Validation::is_undefined($this->conexionInternetPaga)) return null;
      $v = Validation::getInstanceValue($this->conexionInternetPaga)->boolean();
      foreach($v->getErrors() as $error){ $this->_logs->addLog("conexion_internet_paga", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkTelefonoCelular() { 
      $this->_logs->resetLogs("telefono_celular");
      if(Validation::is_undefined($this->telefonoCelular)) return null;
      $v = Validation::getInstanceValue($this->telefonoCelular)->max(255);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("telefono_celular", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkComision2020() { 
      $this->_logs->resetLogs("comision_2020");
      if(Validation::is_undefined($this->comision2020)) return null;
      $v = Validation::getInstanceValue($this->comision2020)->max(45);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("comision_2020", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkArchivo2019() { 
      $this->_logs->resetLogs("archivo_2019");
      if(Validation::is_undefined($this->archivo2019)) return null;
      $v = Validation::getInstanceValue($this->archivo2019)->boolean();
      foreach($v->getErrors() as $error){ $this->_logs->addLog("archivo_2019", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkArchivo2020() { 
      $this->_logs->resetLogs("archivo_2020");
      if(Validation::is_undefined($this->archivo2020)) return null;
      $v = Validation::getInstanceValue($this->archivo2020)->boolean();
      foreach($v->getErrors() as $error){ $this->_logs->addLog("archivo_2020", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkDrive() { 
      $this->_logs->resetLogs("drive");
      if(Validation::is_undefined($this->drive)) return null;
      $v = Validation::getInstanceValue($this->drive)->boolean();
      foreach($v->getErrors() as $error){ $this->_logs->addLog("drive", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkCuil() { 
      $this->_logs->resetLogs("cuil");
      if(Validation::is_undefined($this->cuil)) return null;
      $v = Validation::getInstanceValue($this->cuil)->max(255);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("cuil", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkAnaliticoDni() { 
      $this->_logs->resetLogs("analitico_dni");
      if(Validation::is_undefined($this->analiticoDni)) return null;
      $v = Validation::getInstanceValue($this->analiticoDni)->boolean();
      foreach($v->getErrors() as $error){ $this->_logs->addLog("analitico_dni", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkAnaliticoCuil() { 
      $this->_logs->resetLogs("analitico_cuil");
      if(Validation::is_undefined($this->analiticoCuil)) return null;
      $v = Validation::getInstanceValue($this->analiticoCuil)->boolean();
      foreach($v->getErrors() as $error){ $this->_logs->addLog("analitico_cuil", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkAnaliticoPartida() { 
      $this->_logs->resetLogs("analitico_partida");
      if(Validation::is_undefined($this->analiticoPartida)) return null;
      $v = Validation::getInstanceValue($this->analiticoPartida)->boolean();
      foreach($v->getErrors() as $error){ $this->_logs->addLog("analitico_partida", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkAnaliticoCertificado() { 
      $this->_logs->resetLogs("analitico_certificado");
      if(Validation::is_undefined($this->analiticoCertificado)) return null;
      $v = Validation::getInstanceValue($this->analiticoCertificado)->boolean();
      foreach($v->getErrors() as $error){ $this->_logs->addLog("analitico_certificado", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkFechaNacimiento() { 
      $this->_logs->resetLogs("fecha_nacimiento");
      if(Validation::is_undefined($this->fechaNacimiento)) return null;
      $v = Validation::getInstanceValue($this->fechaNacimiento)->isA('DateTime');
      foreach($v->getErrors() as $error){ $this->_logs->addLog("fecha_nacimiento", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkIngreso() { 
      $this->_logs->resetLogs("ingreso");
      if(Validation::is_undefined($this->ingreso)) return null;
      $v = Validation::getInstanceValue($this->ingreso)->max(45);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("ingreso", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkObservaciones() { 
      $this->_logs->resetLogs("observaciones");
      if(Validation::is_undefined($this->observaciones)) return null;
      $v = Validation::getInstanceValue($this->observaciones)->max(65535);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("observaciones", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkActivo() { 
      $this->_logs->resetLogs("activo");
      if(Validation::is_undefined($this->activo)) return null;
      $v = Validation::getInstanceValue($this->activo)->boolean();
      foreach($v->getErrors() as $error){ $this->_logs->addLog("activo", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkFila() { 
      if(Validation::is_undefined($this->fila)) return null;
      return true; 
  }

  public function checkError() { 
      $this->_logs->resetLogs("error");
      if(Validation::is_undefined($this->error)) return null;
      $v = Validation::getInstanceValue($this->error)->max(65535);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("error", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkIdComision() { 
      $this->_logs->resetLogs("id_comision");
      if(Validation::is_undefined($this->idComision)) return null;
      $v = Validation::getInstanceValue($this->idComision)->max(45);
      foreach($v->getErrors() as $error){ $this->_logs->addLog("id_comision", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkActualizado() { 
      $this->_logs->resetLogs("actualizado");
      if(Validation::is_undefined($this->actualizado)) return null;
      $v = Validation::getInstanceValue($this->actualizado)->isA('DateTime');
      foreach($v->getErrors() as $error){ $this->_logs->addLog("actualizado", "error", $error); }
      return $v->isSuccess();
    }
  
    public function checkInformado() { 
      $this->_logs->resetLogs("informado");
      if(Validation::is_undefined($this->informado)) return null;
      $v = Validation::getInstanceValue($this->informado)->isA('DateTime');
      foreach($v->getErrors() as $error){ $this->_logs->addLog("informado", "error", $error); }
      return $v->isSuccess();
    }
  
    public function sqlId() { return $this->sql->string($this->id); }
  public function sqlRegion() { return $this->sql->string($this->region); }
  public function sqlDistrito() { return $this->sql->string($this->distrito); }
  public function sqlLocalidad() { return $this->sql->string($this->localidad); }
  public function sqlPrograma() { return $this->sql->string($this->programa); }
  public function sqlInscripcionMen() { return $this->sql->boolean($this->inscripcionMen); }
  public function sqlCens() { return $this->sql->string($this->cens); }
  public function sqlSede() { return $this->sql->string($this->sede); }
  public function sqlComision() { return $this->sql->string($this->comision); }
  public function sqlTramo() { return $this->sql->string($this->tramo); }
  public function sqlIdentificador() { return $this->sql->string($this->identificador); }
  public function sqlNumeroInscripcion() { return $this->sql->string($this->numeroInscripcion); }
  public function sqlNumeroDocumento() { return $this->sql->string($this->numeroDocumento); }
  public function sqlApellidos() { return $this->sql->string($this->apellidos); }
  public function sqlNombres() { return $this->sql->string($this->nombres); }
  public function sqlGenero() { return $this->sql->string($this->genero); }
  public function sqlTelefono() { return $this->sql->string($this->telefono); }
  public function sqlCorreo() { return $this->sql->string($this->correo); }
  public function sqlTrayectoriaEducativa() { return $this->sql->string($this->trayectoriaEducativa); }
  public function sqlTurno() { return $this->sql->string($this->turno); }
  public function sqlPcEscritorio() { return $this->sql->boolean($this->pcEscritorio); }
  public function sqlNetNotebook() { return $this->sql->boolean($this->netNotebook); }
  public function sqlTablet() { return $this->sql->boolean($this->tablet); }
  public function sqlPcTablet() { return $this->sql->boolean($this->pcTablet); }
  public function sqlImpresora() { return $this->sql->boolean($this->impresora); }
  public function sqlConexionInternetPaga() { return $this->sql->boolean($this->conexionInternetPaga); }
  public function sqlTelefonoCelular() { return $this->sql->string($this->telefonoCelular); }
  public function sqlComision2020() { return $this->sql->string($this->comision2020); }
  public function sqlArchivo2019() { return $this->sql->boolean($this->archivo2019); }
  public function sqlArchivo2020() { return $this->sql->boolean($this->archivo2020); }
  public function sqlDrive() { return $this->sql->boolean($this->drive); }
  public function sqlCuil() { return $this->sql->string($this->cuil); }
  public function sqlAnaliticoDni() { return $this->sql->boolean($this->analiticoDni); }
  public function sqlAnaliticoCuil() { return $this->sql->boolean($this->analiticoCuil); }
  public function sqlAnaliticoPartida() { return $this->sql->boolean($this->analiticoPartida); }
  public function sqlAnaliticoCertificado() { return $this->sql->boolean($this->analiticoCertificado); }
  public function sqlFechaNacimiento() { return $this->sql->dateTime($this->fechaNacimiento, "Y-m-d"); }
  public function sqlFechaNacimientoYm() { return $this->sql->dateTime($this->fechaNacimiento, "Y-m"); }
  public function sqlFechaNacimientoY() { return $this->sql->dateTime($this->fechaNacimiento, "Y"); }
  public function sqlIngreso() { return $this->sql->string($this->ingreso); }
  public function sqlObservaciones() { return $this->sql->string($this->observaciones); }
  public function sqlActivo() { return $this->sql->boolean($this->activo); }
  public function sqlFila() { return $this->sql->Number($this->fila); }
  public function sqlError() { return $this->sql->string($this->error); }
  public function sqlIdComision() { return $this->sql->string($this->idComision); }
  public function sqlActualizado() { return $this->sql->dateTime($this->actualizado, "Y-m-d H:i:s"); }
  public function sqlActualizadoDate() { return $this->sql->dateTime($this->actualizado, "Y-m-d"); }
  public function sqlActualizadoYm() { return $this->sql->dateTime($this->actualizado, "Y-m"); }
  public function sqlActualizadoY() { return $this->sql->dateTime($this->actualizado, "Y"); }
  public function sqlInformado() { return $this->sql->dateTime($this->informado, "Y-m-d H:i:s"); }
  public function sqlInformadoDate() { return $this->sql->dateTime($this->informado, "Y-m-d"); }
  public function sqlInformadoYm() { return $this->sql->dateTime($this->informado, "Y-m"); }
  public function sqlInformadoY() { return $this->sql->dateTime($this->informado, "Y"); }

  public function jsonId() { return $this->id; }
  public function jsonRegion() { return $this->region; }
  public function jsonDistrito() { return $this->distrito; }
  public function jsonLocalidad() { return $this->localidad; }
  public function jsonPrograma() { return $this->programa; }
  public function jsonInscripcionMen() { return $this->inscripcionMen; }
  public function jsonCens() { return $this->cens; }
  public function jsonSede() { return $this->sede; }
  public function jsonComision() { return $this->comision; }
  public function jsonTramo() { return $this->tramo; }
  public function jsonIdentificador() { return $this->identificador; }
  public function jsonNumeroInscripcion() { return $this->numeroInscripcion; }
  public function jsonNumeroDocumento() { return $this->numeroDocumento; }
  public function jsonApellidos() { return $this->apellidos; }
  public function jsonNombres() { return $this->nombres; }
  public function jsonGenero() { return $this->genero; }
  public function jsonTelefono() { return $this->telefono; }
  public function jsonCorreo() { return $this->correo; }
  public function jsonTrayectoriaEducativa() { return $this->trayectoriaEducativa; }
  public function jsonTurno() { return $this->turno; }
  public function jsonPcEscritorio() { return $this->pcEscritorio; }
  public function jsonNetNotebook() { return $this->netNotebook; }
  public function jsonTablet() { return $this->tablet; }
  public function jsonPcTablet() { return $this->pcTablet; }
  public function jsonImpresora() { return $this->impresora; }
  public function jsonConexionInternetPaga() { return $this->conexionInternetPaga; }
  public function jsonTelefonoCelular() { return $this->telefonoCelular; }
  public function jsonComision2020() { return $this->comision2020; }
  public function jsonArchivo2019() { return $this->archivo2019; }
  public function jsonArchivo2020() { return $this->archivo2020; }
  public function jsonDrive() { return $this->drive; }
  public function jsonCuil() { return $this->cuil; }
  public function jsonAnaliticoDni() { return $this->analiticoDni; }
  public function jsonAnaliticoCuil() { return $this->analiticoCuil; }
  public function jsonAnaliticoPartida() { return $this->analiticoPartida; }
  public function jsonAnaliticoCertificado() { return $this->analiticoCertificado; }
  public function jsonFechaNacimiento() { return $this->fechaNacimiento('c'); }
  public function jsonIngreso() { return $this->ingreso; }
  public function jsonObservaciones() { return $this->observaciones; }
  public function jsonActivo() { return $this->activo; }
  public function jsonFila() { return $this->fila; }
  public function jsonError() { return $this->error; }
  public function jsonIdComision() { return $this->idComision; }
  public function jsonActualizado() { return $this->actualizado('c'); }
  public function jsonInformado() { return $this->informado('c'); }



}
