<?php
require_once("class/model/entityOptions/Condition.php");

class _PersonaCondition extends ConditionEntityOptions{

  public function id($option, $value) { 
    $field = $this->mapping->id();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setId($value);
    if(!$this->value->checkId()) throw new Exception("Valor incorrecto: Id");
    return "({$field} {$option} {$this->value->sqlId()})";  
  }

  public function idIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->id(), $option, settypebool($value));
  }

  public function region($option, $value) { 
    $field = $this->mapping->region();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setRegion($value);
    if(!$this->value->checkRegion()) throw new Exception("Valor incorrecto: Region");
    return "({$field} {$option} {$this->value->sqlRegion()})";  
  }

  public function regionIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->region(), $option, settypebool($value));
  }

  public function distrito($option, $value) { 
    $field = $this->mapping->distrito();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setDistrito($value);
    if(!$this->value->checkDistrito()) throw new Exception("Valor incorrecto: Distrito");
    return "({$field} {$option} {$this->value->sqlDistrito()})";  
  }

  public function distritoIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->distrito(), $option, settypebool($value));
  }

  public function localidad($option, $value) { 
    $field = $this->mapping->localidad();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setLocalidad($value);
    if(!$this->value->checkLocalidad()) throw new Exception("Valor incorrecto: Localidad");
    return "({$field} {$option} {$this->value->sqlLocalidad()})";  
  }

  public function localidadIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->localidad(), $option, settypebool($value));
  }

  public function programa($option, $value) { 
    $field = $this->mapping->programa();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setPrograma($value);
    if(!$this->value->checkPrograma()) throw new Exception("Valor incorrecto: Programa");
    return "({$field} {$option} {$this->value->sqlPrograma()})";  
  }

  public function programaIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->programa(), $option, settypebool($value));
  }

  public function inscripcionMen($option, $value) { 
    $field = $this->mapping->inscripcionMen();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    $this->value->setInscripcionMen($value);
    if(!$this->value->checkInscripcionMen()) throw new Exception("Valor incorrecto: Inscripcion Men ");
    return "({$field} {$option} {$this->value->sqlInscripcionMen()})";  
  }
  
  public function cens($option, $value) { 
    $field = $this->mapping->cens();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setCens($value);
    if(!$this->value->checkCens()) throw new Exception("Valor incorrecto: Cens");
    return "({$field} {$option} {$this->value->sqlCens()})";  
  }

  public function censIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->cens(), $option, settypebool($value));
  }

  public function sede($option, $value) { 
    $field = $this->mapping->sede();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setSede($value);
    if(!$this->value->checkSede()) throw new Exception("Valor incorrecto: Sede");
    return "({$field} {$option} {$this->value->sqlSede()})";  
  }

  public function sedeIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->sede(), $option, settypebool($value));
  }

  public function comision($option, $value) { 
    $field = $this->mapping->comision();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setComision($value);
    if(!$this->value->checkComision()) throw new Exception("Valor incorrecto: Comision");
    return "({$field} {$option} {$this->value->sqlComision()})";  
  }

  public function comisionIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->comision(), $option, settypebool($value));
  }

  public function tramo($option, $value) { 
    $field = $this->mapping->tramo();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setTramo($value);
    if(!$this->value->checkTramo()) throw new Exception("Valor incorrecto: Tramo");
    return "({$field} {$option} {$this->value->sqlTramo()})";  
  }

  public function tramoIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->tramo(), $option, settypebool($value));
  }

  public function identificador($option, $value) { 
    $field = $this->mapping->identificador();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setIdentificador($value);
    if(!$this->value->checkIdentificador()) throw new Exception("Valor incorrecto: Identificador");
    return "({$field} {$option} {$this->value->sqlIdentificador()})";  
  }

  public function identificadorIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->identificador(), $option, settypebool($value));
  }

  public function numeroInscripcion($option, $value) { 
    $field = $this->mapping->numeroInscripcion();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setNumeroInscripcion($value);
    if(!$this->value->checkNumeroInscripcion()) throw new Exception("Valor incorrecto: Numero Inscripcion");
    return "({$field} {$option} {$this->value->sqlNumeroInscripcion()})";  
  }

  public function numeroInscripcionIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->numeroInscripcion(), $option, settypebool($value));
  }

  public function numeroDocumento($option, $value) { 
    $field = $this->mapping->numeroDocumento();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setNumeroDocumento($value);
    if(!$this->value->checkNumeroDocumento()) throw new Exception("Valor incorrecto: Numero Documento");
    return "({$field} {$option} {$this->value->sqlNumeroDocumento()})";  
  }

  public function numeroDocumentoIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->numeroDocumento(), $option, settypebool($value));
  }

  public function apellidos($option, $value) { 
    $field = $this->mapping->apellidos();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setApellidos($value);
    if(!$this->value->checkApellidos()) throw new Exception("Valor incorrecto: Apellidos");
    return "({$field} {$option} {$this->value->sqlApellidos()})";  
  }

  public function apellidosIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->apellidos(), $option, settypebool($value));
  }

  public function nombres($option, $value) { 
    $field = $this->mapping->nombres();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setNombres($value);
    if(!$this->value->checkNombres()) throw new Exception("Valor incorrecto: Nombres");
    return "({$field} {$option} {$this->value->sqlNombres()})";  
  }

  public function nombresIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->nombres(), $option, settypebool($value));
  }

  public function genero($option, $value) { 
    $field = $this->mapping->genero();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setGenero($value);
    if(!$this->value->checkGenero()) throw new Exception("Valor incorrecto: Genero");
    return "({$field} {$option} {$this->value->sqlGenero()})";  
  }

  public function generoIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->genero(), $option, settypebool($value));
  }

  public function telefono($option, $value) { 
    $field = $this->mapping->telefono();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setTelefono($value);
    if(!$this->value->checkTelefono()) throw new Exception("Valor incorrecto: Telefono");
    return "({$field} {$option} {$this->value->sqlTelefono()})";  
  }

  public function telefonoIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->telefono(), $option, settypebool($value));
  }

  public function correo($option, $value) { 
    $field = $this->mapping->correo();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setCorreo($value);
    if(!$this->value->checkCorreo()) throw new Exception("Valor incorrecto: Correo");
    return "({$field} {$option} {$this->value->sqlCorreo()})";  
  }

  public function correoIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->correo(), $option, settypebool($value));
  }

  public function trayectoriaEducativa($option, $value) { 
    $field = $this->mapping->trayectoriaEducativa();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setTrayectoriaEducativa($value);
    if(!$this->value->checkTrayectoriaEducativa()) throw new Exception("Valor incorrecto: Trayectoria Educativa");
    return "({$field} {$option} {$this->value->sqlTrayectoriaEducativa()})";  
  }

  public function trayectoriaEducativaIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->trayectoriaEducativa(), $option, settypebool($value));
  }

  public function turno($option, $value) { 
    $field = $this->mapping->turno();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setTurno($value);
    if(!$this->value->checkTurno()) throw new Exception("Valor incorrecto: Turno");
    return "({$field} {$option} {$this->value->sqlTurno()})";  
  }

  public function turnoIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->turno(), $option, settypebool($value));
  }

  public function pcEscritorio($option, $value) { 
    $field = $this->mapping->pcEscritorio();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    $this->value->setPcEscritorio($value);
    if(!$this->value->checkPcEscritorio()) throw new Exception("Valor incorrecto: Pc Escritorio ");
    return "({$field} {$option} {$this->value->sqlPcEscritorio()})";  
  }
  
  public function netNotebook($option, $value) { 
    $field = $this->mapping->netNotebook();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    $this->value->setNetNotebook($value);
    if(!$this->value->checkNetNotebook()) throw new Exception("Valor incorrecto: Net Notebook ");
    return "({$field} {$option} {$this->value->sqlNetNotebook()})";  
  }
  
  public function tablet($option, $value) { 
    $field = $this->mapping->tablet();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    $this->value->setTablet($value);
    if(!$this->value->checkTablet()) throw new Exception("Valor incorrecto: Tablet ");
    return "({$field} {$option} {$this->value->sqlTablet()})";  
  }
  
  public function pcTablet($option, $value) { 
    $field = $this->mapping->pcTablet();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    $this->value->setPcTablet($value);
    if(!$this->value->checkPcTablet()) throw new Exception("Valor incorrecto: Pc Tablet ");
    return "({$field} {$option} {$this->value->sqlPcTablet()})";  
  }
  
  public function impresora($option, $value) { 
    $field = $this->mapping->impresora();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    $this->value->setImpresora($value);
    if(!$this->value->checkImpresora()) throw new Exception("Valor incorrecto: Impresora ");
    return "({$field} {$option} {$this->value->sqlImpresora()})";  
  }
  
  public function conexionInternetPaga($option, $value) { 
    $field = $this->mapping->conexionInternetPaga();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    $this->value->setConexionInternetPaga($value);
    if(!$this->value->checkConexionInternetPaga()) throw new Exception("Valor incorrecto: Conexion Internet Paga ");
    return "({$field} {$option} {$this->value->sqlConexionInternetPaga()})";  
  }
  
  public function telefonoCelular($option, $value) { 
    $field = $this->mapping->telefonoCelular();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setTelefonoCelular($value);
    if(!$this->value->checkTelefonoCelular()) throw new Exception("Valor incorrecto: Telefono Celular");
    return "({$field} {$option} {$this->value->sqlTelefonoCelular()})";  
  }

  public function telefonoCelularIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->telefonoCelular(), $option, settypebool($value));
  }

  public function comision2020($option, $value) { 
    $field = $this->mapping->comision2020();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setComision2020($value);
    if(!$this->value->checkComision2020()) throw new Exception("Valor incorrecto: Comision 2020");
    return "({$field} {$option} {$this->value->sqlComision2020()})";  
  }

  public function comision2020IsSet($option, $value) { 
    return $this->sql->exists($this->mapping->comision2020(), $option, settypebool($value));
  }

  public function archivo2019($option, $value) { 
    $field = $this->mapping->archivo2019();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    $this->value->setArchivo2019($value);
    if(!$this->value->checkArchivo2019()) throw new Exception("Valor incorrecto: Archivo 2019 ");
    return "({$field} {$option} {$this->value->sqlArchivo2019()})";  
  }
  
  public function archivo2020($option, $value) { 
    $field = $this->mapping->archivo2020();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    $this->value->setArchivo2020($value);
    if(!$this->value->checkArchivo2020()) throw new Exception("Valor incorrecto: Archivo 2020 ");
    return "({$field} {$option} {$this->value->sqlArchivo2020()})";  
  }
  
  public function drive($option, $value) { 
    $field = $this->mapping->drive();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    $this->value->setDrive($value);
    if(!$this->value->checkDrive()) throw new Exception("Valor incorrecto: Drive ");
    return "({$field} {$option} {$this->value->sqlDrive()})";  
  }
  
  public function cuil($option, $value) { 
    $field = $this->mapping->cuil();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setCuil($value);
    if(!$this->value->checkCuil()) throw new Exception("Valor incorrecto: Cuil");
    return "({$field} {$option} {$this->value->sqlCuil()})";  
  }

  public function cuilIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->cuil(), $option, settypebool($value));
  }

  public function analiticoDni($option, $value) { 
    $field = $this->mapping->analiticoDni();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    $this->value->setAnaliticoDni($value);
    if(!$this->value->checkAnaliticoDni()) throw new Exception("Valor incorrecto: Analitico Dni ");
    return "({$field} {$option} {$this->value->sqlAnaliticoDni()})";  
  }
  
  public function analiticoCuil($option, $value) { 
    $field = $this->mapping->analiticoCuil();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    $this->value->setAnaliticoCuil($value);
    if(!$this->value->checkAnaliticoCuil()) throw new Exception("Valor incorrecto: Analitico Cuil ");
    return "({$field} {$option} {$this->value->sqlAnaliticoCuil()})";  
  }
  
  public function analiticoPartida($option, $value) { 
    $field = $this->mapping->analiticoPartida();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    $this->value->setAnaliticoPartida($value);
    if(!$this->value->checkAnaliticoPartida()) throw new Exception("Valor incorrecto: Analitico Partida ");
    return "({$field} {$option} {$this->value->sqlAnaliticoPartida()})";  
  }
  
  public function analiticoCertificado($option, $value) { 
    $field = $this->mapping->analiticoCertificado();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    $this->value->setAnaliticoCertificado($value);
    if(!$this->value->checkAnaliticoCertificado()) throw new Exception("Valor incorrecto: Analitico Certificado ");
    return "({$field} {$option} {$this->value->sqlAnaliticoCertificado()})";  
  }
  
  public function fechaNacimiento($option, $value) { 
    $field = $this->mapping->fechaNacimiento();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approxCast($field, $option, $value)) return $c;
    $this->value->setFechaNacimiento($value);
    if(!$this->value->checkFechaNacimiento()) throw new Exception("Valor incorrecto: Fecha Nacimiento ");
    return "({$field} {$option} {$this->value->sqlFechaNacimiento()})";  
  }

  public function fechaNacimientoYm($option, $value) { 
    $field = $this->mapping->fechaNacimientoYm();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approxCast($field, $option, $value)) return $c;
    $this->value->setFechaNacimiento($value);
    if(!$this->value->checkFechaNacimiento()) throw new Exception("Valor incorrecto: Fecha Nacimiento Ym");
    return "({$field} {$option} {$this->value->sqlFechaNacimientoYm()})";  
  }

  public function fechaNacimientoY($option, $value) { 
    $field = $this->mapping->fechaNacimientoY();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approxCast($field, $option, $value)) return $c;
    $this->value->setFechaNacimientoY($value);
    if(!$this->value->checkFechaNacimiento()) throw new Exception("Valor incorrecto: Fecha Nacimiento Y");
    return "({$field} {$option} {$this->value->sqlFechaNacimientoY()})";  
  }

  public function fechaNacimientoIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->fechaNacimiento(), $option, settypebool($value));
  }

  public function ingreso($option, $value) { 
    $field = $this->mapping->ingreso();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setIngreso($value);
    if(!$this->value->checkIngreso()) throw new Exception("Valor incorrecto: Ingreso");
    return "({$field} {$option} {$this->value->sqlIngreso()})";  
  }

  public function ingresoIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->ingreso(), $option, settypebool($value));
  }

  public function observaciones($option, $value) { 
    $field = $this->mapping->observaciones();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setObservaciones($value);
    if(!$this->value->checkObservaciones()) throw new Exception("Valor incorrecto: Observaciones");
    return "({$field} {$option} {$this->value->sqlObservaciones()})";  
  }

  public function observacionesIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->observaciones(), $option, settypebool($value));
  }

  public function activo($option, $value) { 
    $field = $this->mapping->activo();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    $this->value->setActivo($value);
    if(!$this->value->checkActivo()) throw new Exception("Valor incorrecto: Activo ");
    return "({$field} {$option} {$this->value->sqlActivo()})";  
  }
  
  public function fila($option, $value) { 
    $field = $this->mapping->fila();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approxCast($field, $option, $value)) return $c;
    $this->value->setFila($value);
    if(!$this->value->checkFila()) throw new Exception("Valor incorrecto: Fila ");
    return "({$field} {$option} {$this->value->sqlFila()})";  
  }

    public function filaIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->fila(), $option, settypebool($value));
  }

  public function error($option, $value) { 
    $field = $this->mapping->error();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setError($value);
    if(!$this->value->checkError()) throw new Exception("Valor incorrecto: Error");
    return "({$field} {$option} {$this->value->sqlError()})";  
  }

  public function errorIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->error(), $option, settypebool($value));
  }

  public function idComision($option, $value) { 
    $field = $this->mapping->idComision();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setIdComision($value);
    if(!$this->value->checkIdComision()) throw new Exception("Valor incorrecto: Id Comision");
    return "({$field} {$option} {$this->value->sqlIdComision()})";  
  }

  public function idComisionIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->idComision(), $option, settypebool($value));
  }

  public function actualizado($option, $value) { 
    $field = $this->mapping->actualizado();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approxCast($field, $option, $value)) return $c;
    $this->value->setActualizado($value);
    if(!$this->value->checkActualizado()) throw new Exception("Valor incorrecto: Actualizado ");
    return "({$field} {$option} {$this->value->sqlActualizado()})";  
  }

  public function actualizadoDate($option, $value) { 
    $field = $this->mapping->actualizadoDate();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approxCast($field, $option, $value)) return $c;
    $this->value->setActualizado($value);
    if(!$this->value->checkActualizado()) throw new Exception("Valor incorrecto: Actualizado Date");
    return "({$field} {$option} {$this->value->sqlActualizadoDate()})";  
  }

  public function actualizadoYm($option, $value) { 
    $field = $this->mapping->actualizadoYm();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approxCast($field, $option, $value)) return $c;
    $this->value->setActualizado($value);
    if(!$this->value->checkActualizado()) throw new Exception("Valor incorrecto: Actualizado Ym");
    return "({$field} {$option} {$this->value->sqlActualizadoYm()})";  
  }

  public function actualizadoY($option, $value) { 
    $field = $this->mapping->actualizadoY();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approxCast($field, $option, $value)) return $c;
    $this->value->setActualizadoY($value);
    if(!$this->value->checkActualizado()) throw new Exception("Valor incorrecto: Actualizado Y");
    return "({$field} {$option} {$this->value->sqlActualizadoY()})";  
  }

  public function actualizadoIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->actualizado(), $option, settypebool($value));
  }

  public function informado($option, $value) { 
    $field = $this->mapping->informado();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approxCast($field, $option, $value)) return $c;
    $this->value->setInformado($value);
    if(!$this->value->checkInformado()) throw new Exception("Valor incorrecto: Informado ");
    return "({$field} {$option} {$this->value->sqlInformado()})";  
  }

  public function informadoDate($option, $value) { 
    $field = $this->mapping->informadoDate();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approxCast($field, $option, $value)) return $c;
    $this->value->setInformado($value);
    if(!$this->value->checkInformado()) throw new Exception("Valor incorrecto: Informado Date");
    return "({$field} {$option} {$this->value->sqlInformadoDate()})";  
  }

  public function informadoYm($option, $value) { 
    $field = $this->mapping->informadoYm();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approxCast($field, $option, $value)) return $c;
    $this->value->setInformado($value);
    if(!$this->value->checkInformado()) throw new Exception("Valor incorrecto: Informado Ym");
    return "({$field} {$option} {$this->value->sqlInformadoYm()})";  
  }

  public function informadoY($option, $value) { 
    $field = $this->mapping->informadoY();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approxCast($field, $option, $value)) return $c;
    $this->value->setInformadoY($value);
    if(!$this->value->checkInformado()) throw new Exception("Valor incorrecto: Informado Y");
    return "({$field} {$option} {$this->value->sqlInformadoY()})";  
  }

  public function informadoIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->informado(), $option, settypebool($value));
  }




}
