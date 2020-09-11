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
  protected $fila = UNDEFINED;
  protected $error = UNDEFINED;
  protected $idComision = UNDEFINED;
  protected $actualizado = UNDEFINED;
  protected $informado = UNDEFINED;

  public function _setDefault(){
    if($this->id === UNDEFINED) $this->setId(uniqid());
    if($this->region === UNDEFINED) $this->setRegion('1');
    if($this->distrito === UNDEFINED) $this->setDistrito('La Plata');
    if($this->localidad === UNDEFINED) $this->setLocalidad(null);
    if($this->programa === UNDEFINED) $this->setPrograma(null);
    if($this->inscripcionMen === UNDEFINED) $this->setInscripcionMen(false);
    if($this->cens === UNDEFINED) $this->setCens(null);
    if($this->sede === UNDEFINED) $this->setSede(null);
    if($this->comision === UNDEFINED) $this->setComision(null);
    if($this->tramo === UNDEFINED) $this->setTramo(null);
    if($this->identificador === UNDEFINED) $this->setIdentificador(null);
    if($this->numeroInscripcion === UNDEFINED) $this->setNumeroInscripcion(null);
    if($this->numeroDocumento === UNDEFINED) $this->setNumeroDocumento(null);
    if($this->apellidos === UNDEFINED) $this->setApellidos(null);
    if($this->nombres === UNDEFINED) $this->setNombres(null);
    if($this->genero === UNDEFINED) $this->setGenero(null);
    if($this->telefono === UNDEFINED) $this->setTelefono(null);
    if($this->correo === UNDEFINED) $this->setCorreo(null);
    if($this->trayectoriaEducativa === UNDEFINED) $this->setTrayectoriaEducativa(null);
    if($this->turno === UNDEFINED) $this->setTurno(null);
    if($this->pcEscritorio === UNDEFINED) $this->setPcEscritorio(false);
    if($this->netNotebook === UNDEFINED) $this->setNetNotebook(false);
    if($this->tablet === UNDEFINED) $this->setTablet(false);
    if($this->pcTablet === UNDEFINED) $this->setPcTablet(false);
    if($this->impresora === UNDEFINED) $this->setImpresora(false);
    if($this->conexionInternetPaga === UNDEFINED) $this->setConexionInternetPaga(false);
    if($this->telefonoCelular === UNDEFINED) $this->setTelefonoCelular(null);
    if($this->comision2020 === UNDEFINED) $this->setComision2020(null);
    if($this->archivo2019 === UNDEFINED) $this->setArchivo2019(false);
    if($this->archivo2020 === UNDEFINED) $this->setArchivo2020(false);
    if($this->drive === UNDEFINED) $this->setDrive(false);
    if($this->cuil === UNDEFINED) $this->setCuil(null);
    if($this->analiticoDni === UNDEFINED) $this->setAnaliticoDni(false);
    if($this->analiticoCuil === UNDEFINED) $this->setAnaliticoCuil(false);
    if($this->analiticoPartida === UNDEFINED) $this->setAnaliticoPartida(false);
    if($this->analiticoCertificado === UNDEFINED) $this->setAnaliticoCertificado(false);
    if($this->fechaNacimiento === UNDEFINED) $this->setFechaNacimiento(null);
    if($this->ingreso === UNDEFINED) $this->setIngreso(null);
    if($this->observaciones === UNDEFINED) $this->setObservaciones(null);
    if($this->activo === UNDEFINED) $this->setActivo(true);
    if($this->fila === UNDEFINED) $this->setFila(null);
    if($this->error === UNDEFINED) $this->setError(null);
    if($this->idComision === UNDEFINED) $this->setIdComision(null);
    if($this->actualizado === UNDEFINED) $this->setActualizado(null);
    if($this->informado === UNDEFINED) $this->setInformado(null);
    return $this;
  }

  public function _fromArray(array $row = NULL, string $p = ""){
    if(empty($row)) return;
    if(key_exists($p."id", $row)) $this->setId($row[$p."id"]);
    if(key_exists($p."region", $row)) $this->setRegion($row[$p."region"]);
    if(key_exists($p."distrito", $row)) $this->setDistrito($row[$p."distrito"]);
    if(key_exists($p."localidad", $row)) $this->setLocalidad($row[$p."localidad"]);
    if(key_exists($p."programa", $row)) $this->setPrograma($row[$p."programa"]);
    if(key_exists($p."inscripcion_men", $row)) $this->setInscripcionMen($row[$p."inscripcion_men"]);
    if(key_exists($p."cens", $row)) $this->setCens($row[$p."cens"]);
    if(key_exists($p."sede", $row)) $this->setSede($row[$p."sede"]);
    if(key_exists($p."comision", $row)) $this->setComision($row[$p."comision"]);
    if(key_exists($p."tramo", $row)) $this->setTramo($row[$p."tramo"]);
    if(key_exists($p."identificador", $row)) $this->setIdentificador($row[$p."identificador"]);
    if(key_exists($p."numero_inscripcion", $row)) $this->setNumeroInscripcion($row[$p."numero_inscripcion"]);
    if(key_exists($p."numero_documento", $row)) $this->setNumeroDocumento($row[$p."numero_documento"]);
    if(key_exists($p."apellidos", $row)) $this->setApellidos($row[$p."apellidos"]);
    if(key_exists($p."nombres", $row)) $this->setNombres($row[$p."nombres"]);
    if(key_exists($p."genero", $row)) $this->setGenero($row[$p."genero"]);
    if(key_exists($p."telefono", $row)) $this->setTelefono($row[$p."telefono"]);
    if(key_exists($p."correo", $row)) $this->setCorreo($row[$p."correo"]);
    if(key_exists($p."trayectoria_educativa", $row)) $this->setTrayectoriaEducativa($row[$p."trayectoria_educativa"]);
    if(key_exists($p."turno", $row)) $this->setTurno($row[$p."turno"]);
    if(key_exists($p."pc_escritorio", $row)) $this->setPcEscritorio($row[$p."pc_escritorio"]);
    if(key_exists($p."net_notebook", $row)) $this->setNetNotebook($row[$p."net_notebook"]);
    if(key_exists($p."tablet", $row)) $this->setTablet($row[$p."tablet"]);
    if(key_exists($p."pc_tablet", $row)) $this->setPcTablet($row[$p."pc_tablet"]);
    if(key_exists($p."impresora", $row)) $this->setImpresora($row[$p."impresora"]);
    if(key_exists($p."conexion_internet_paga", $row)) $this->setConexionInternetPaga($row[$p."conexion_internet_paga"]);
    if(key_exists($p."telefono_celular", $row)) $this->setTelefonoCelular($row[$p."telefono_celular"]);
    if(key_exists($p."comision_2020", $row)) $this->setComision2020($row[$p."comision_2020"]);
    if(key_exists($p."archivo_2019", $row)) $this->setArchivo2019($row[$p."archivo_2019"]);
    if(key_exists($p."archivo_2020", $row)) $this->setArchivo2020($row[$p."archivo_2020"]);
    if(key_exists($p."drive", $row)) $this->setDrive($row[$p."drive"]);
    if(key_exists($p."cuil", $row)) $this->setCuil($row[$p."cuil"]);
    if(key_exists($p."analitico_dni", $row)) $this->setAnaliticoDni($row[$p."analitico_dni"]);
    if(key_exists($p."analitico_cuil", $row)) $this->setAnaliticoCuil($row[$p."analitico_cuil"]);
    if(key_exists($p."analitico_partida", $row)) $this->setAnaliticoPartida($row[$p."analitico_partida"]);
    if(key_exists($p."analitico_certificado", $row)) $this->setAnaliticoCertificado($row[$p."analitico_certificado"]);
    if(key_exists($p."fecha_nacimiento", $row)) $this->setFechaNacimiento($row[$p."fecha_nacimiento"]);
    if(key_exists($p."ingreso", $row)) $this->setIngreso($row[$p."ingreso"]);
    if(key_exists($p."observaciones", $row)) $this->setObservaciones($row[$p."observaciones"]);
    if(key_exists($p."activo", $row)) $this->setActivo($row[$p."activo"]);
    if(key_exists($p."fila", $row)) $this->setFila($row[$p."fila"]);
    if(key_exists($p."error", $row)) $this->setError($row[$p."error"]);
    if(key_exists($p."id_comision", $row)) $this->setIdComision($row[$p."id_comision"]);
    if(key_exists($p."actualizado", $row)) $this->setActualizado($row[$p."actualizado"]);
    if(key_exists($p."informado", $row)) $this->setInformado($row[$p."informado"]);
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
    if($this->fila !== UNDEFINED) $row[$p."fila"] = $this->fila();
    if($this->error !== UNDEFINED) $row[$p."error"] = $this->error();
    if($this->idComision !== UNDEFINED) $row[$p."id_comision"] = $this->idComision();
    if($this->actualizado !== UNDEFINED) $row[$p."actualizado"] = $this->actualizado("c");
    if($this->informado !== UNDEFINED) $row[$p."informado"] = $this->informado("c");
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
    if(!Validation::is_empty($this->fila)) return false;
    if(!Validation::is_empty($this->error)) return false;
    if(!Validation::is_empty($this->idComision)) return false;
    if(!Validation::is_empty($this->actualizado)) return false;
    if(!Validation::is_empty($this->informado)) return false;
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
    if($p instanceof DateTime) {
      $p->setTimeZone(new DateTimeZone(date_default_timezone_get()));
      $p->setTime(0,0,0);
    }
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

  public function _setInformado(DateTime $p = null) { return $this->informado = $p; }  
  public function setInformado($p) {
    if(!is_null($p) && !($p instanceof DateTime)) $p = new SpanishDateTime($p);
    if($p instanceof DateTime) $p->setTimeZone(new DateTimeZone(date_default_timezone_get()));
    return $this->informado = $p;
  }


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

  public function checkId($value) { 
      if(Validation::is_undefined($value)) return null;
      return true; 
  }

  public function checkRegion($value) { 
    $this->_logs->resetLogs("region");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(255);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("region", "error", $error); }
    return $v->isSuccess();
  }

  public function checkDistrito($value) { 
    $this->_logs->resetLogs("distrito");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(255);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("distrito", "error", $error); }
    return $v->isSuccess();
  }

  public function checkLocalidad($value) { 
    $this->_logs->resetLogs("localidad");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(255);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("localidad", "error", $error); }
    return $v->isSuccess();
  }

  public function checkPrograma($value) { 
    $this->_logs->resetLogs("programa");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(255);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("programa", "error", $error); }
    return $v->isSuccess();
  }

  public function checkInscripcionMen($value) { 
    $this->_logs->resetLogs("inscripcion_men");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(3);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("inscripcion_men", "error", $error); }
    return $v->isSuccess();
  }

  public function checkCens($value) { 
    $this->_logs->resetLogs("cens");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(255);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("cens", "error", $error); }
    return $v->isSuccess();
  }

  public function checkSede($value) { 
    $this->_logs->resetLogs("sede");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(255);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("sede", "error", $error); }
    return $v->isSuccess();
  }

  public function checkComision($value) { 
    $this->_logs->resetLogs("comision");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(45);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("comision", "error", $error); }
    return $v->isSuccess();
  }

  public function checkTramo($value) { 
    $this->_logs->resetLogs("tramo");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(45);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("tramo", "error", $error); }
    return $v->isSuccess();
  }

  public function checkIdentificador($value) { 
    $this->_logs->resetLogs("identificador");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(45);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("identificador", "error", $error); }
    return $v->isSuccess();
  }

  public function checkNumeroInscripcion($value) { 
    $this->_logs->resetLogs("numero_inscripcion");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(45);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("numero_inscripcion", "error", $error); }
    return $v->isSuccess();
  }

  public function checkNumeroDocumento($value) { 
    $this->_logs->resetLogs("numero_documento");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(45);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("numero_documento", "error", $error); }
    return $v->isSuccess();
  }

  public function checkApellidos($value) { 
    $this->_logs->resetLogs("apellidos");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(255);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("apellidos", "error", $error); }
    return $v->isSuccess();
  }

  public function checkNombres($value) { 
    $this->_logs->resetLogs("nombres");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(255);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("nombres", "error", $error); }
    return $v->isSuccess();
  }

  public function checkGenero($value) { 
    $this->_logs->resetLogs("genero");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(45);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("genero", "error", $error); }
    return $v->isSuccess();
  }

  public function checkTelefono($value) { 
    $this->_logs->resetLogs("telefono");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(255)->min(6);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("telefono", "error", $error); }
    return $v->isSuccess();
  }

  public function checkCorreo($value) { 
    $this->_logs->resetLogs("correo");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(255);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("correo", "error", $error); }
    return $v->isSuccess();
  }

  public function checkTrayectoriaEducativa($value) { 
    $this->_logs->resetLogs("trayectoria_educativa");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(255);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("trayectoria_educativa", "error", $error); }
    return $v->isSuccess();
  }

  public function checkTurno($value) { 
    $this->_logs->resetLogs("turno");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(45);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("turno", "error", $error); }
    return $v->isSuccess();
  }

  public function checkPcEscritorio($value) { 
    $this->_logs->resetLogs("pc_escritorio");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(3);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("pc_escritorio", "error", $error); }
    return $v->isSuccess();
  }

  public function checkNetNotebook($value) { 
    $this->_logs->resetLogs("net_notebook");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(3);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("net_notebook", "error", $error); }
    return $v->isSuccess();
  }

  public function checkTablet($value) { 
    $this->_logs->resetLogs("tablet");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(3);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("tablet", "error", $error); }
    return $v->isSuccess();
  }

  public function checkPcTablet($value) { 
    $this->_logs->resetLogs("pc_tablet");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(3);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("pc_tablet", "error", $error); }
    return $v->isSuccess();
  }

  public function checkImpresora($value) { 
    $this->_logs->resetLogs("impresora");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(3);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("impresora", "error", $error); }
    return $v->isSuccess();
  }

  public function checkConexionInternetPaga($value) { 
    $this->_logs->resetLogs("conexion_internet_paga");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(3);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("conexion_internet_paga", "error", $error); }
    return $v->isSuccess();
  }

  public function checkTelefonoCelular($value) { 
    $this->_logs->resetLogs("telefono_celular");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(255);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("telefono_celular", "error", $error); }
    return $v->isSuccess();
  }

  public function checkComision2020($value) { 
    $this->_logs->resetLogs("comision_2020");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(45);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("comision_2020", "error", $error); }
    return $v->isSuccess();
  }

  public function checkArchivo2019($value) { 
    $this->_logs->resetLogs("archivo_2019");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(3);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("archivo_2019", "error", $error); }
    return $v->isSuccess();
  }

  public function checkArchivo2020($value) { 
    $this->_logs->resetLogs("archivo_2020");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(3);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("archivo_2020", "error", $error); }
    return $v->isSuccess();
  }

  public function checkDrive($value) { 
    $this->_logs->resetLogs("drive");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(3);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("drive", "error", $error); }
    return $v->isSuccess();
  }

  public function checkCuil($value) { 
    $this->_logs->resetLogs("cuil");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(255);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("cuil", "error", $error); }
    return $v->isSuccess();
  }

  public function checkAnaliticoDni($value) { 
    $this->_logs->resetLogs("analitico_dni");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(3);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("analitico_dni", "error", $error); }
    return $v->isSuccess();
  }

  public function checkAnaliticoCuil($value) { 
    $this->_logs->resetLogs("analitico_cuil");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(3);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("analitico_cuil", "error", $error); }
    return $v->isSuccess();
  }

  public function checkAnaliticoPartida($value) { 
    $this->_logs->resetLogs("analitico_partida");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(3);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("analitico_partida", "error", $error); }
    return $v->isSuccess();
  }

  public function checkAnaliticoCertificado($value) { 
    $this->_logs->resetLogs("analitico_certificado");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(3);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("analitico_certificado", "error", $error); }
    return $v->isSuccess();
  }

  public function checkFechaNacimiento($value) { 
    $this->_logs->resetLogs("fecha_nacimiento");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->isA('DateTime');
    foreach($v->getErrors() as $error){ $this->_logs->addLog("fecha_nacimiento", "error", $error); }
    return $v->isSuccess();
  }

  public function checkIngreso($value) { 
    $this->_logs->resetLogs("ingreso");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(45);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("ingreso", "error", $error); }
    return $v->isSuccess();
  }

  public function checkObservaciones($value) { 
    $this->_logs->resetLogs("observaciones");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(65535);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("observaciones", "error", $error); }
    return $v->isSuccess();
  }

  public function checkActivo($value) { 
    $this->_logs->resetLogs("activo");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->required()->max(3);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("activo", "error", $error); }
    return $v->isSuccess();
  }

  public function checkFila($value) { 
    $this->_logs->resetLogs("fila");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(10);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("fila", "error", $error); }
    return $v->isSuccess();
  }

  public function checkError($value) { 
    $this->_logs->resetLogs("error");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(65535);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("error", "error", $error); }
    return $v->isSuccess();
  }

  public function checkIdComision($value) { 
    $this->_logs->resetLogs("id_comision");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->max(45);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("id_comision", "error", $error); }
    return $v->isSuccess();
  }

  public function checkActualizado($value) { 
    $this->_logs->resetLogs("actualizado");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->isA('DateTime');
    foreach($v->getErrors() as $error){ $this->_logs->addLog("actualizado", "error", $error); }
    return $v->isSuccess();
  }

  public function checkInformado($value) { 
    $this->_logs->resetLogs("informado");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->isA('DateTime');
    foreach($v->getErrors() as $error){ $this->_logs->addLog("informado", "error", $error); }
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
    $this->checkFila($this->fila);
    $this->checkError($this->error);
    $this->checkIdComision($this->idComision);
    $this->checkActualizado($this->actualizado);
    $this->checkInformado($this->informado);
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
    $this->resetError();
    $this->resetIdComision();
    return $this;
  }



}
