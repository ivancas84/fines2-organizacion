<?php

require_once("function/nombres_parecidos.php");
require_once("function/strto.php");
require_once("class/model/values/_Persona.php");

class Persona extends _Persona {

  public function nombre(){
    $array = [];
    if(!Validation::is_undefined($this->nombres)) array_push($array, $this->nombres());
    if(!Validation::is_undefined($this->apellidos)) array_push($array, $this->apellidos());
    return empty($array) ? UNDEFINED : implode(" ", $array);
  }

  public function setCuilODni($cuilODni){
    $cuilODni = str_replace(" ", "", str_replace("-", "", str_replace(".", "", (string)$cuilODni)));
    
    if(strlen($cuilODni) == 11){      
      $this->cuil = $cuilODni;
      $this->numeroDocumento = substr($cuilODni, 2, 8);
    } else {
      $this->numeroDocumento = $cuilODni;
    }
  }

  public function setFechaNacimientoAux($fechaNacimiento){
    $this->_logs->resetLogs("fecha_nacimiento");

    if(empty($fechaNacimiento)){
      $this->_logs->addLog("fecha_nacimiento", "error", "Fecha de nacimiento vacía");
      return;
    }

    $fechaNacimiento = trim(str_replace("-", " ", str_replace("/", " ", $fechaNacimiento)));
    $fechas = explode(" ",$fechaNacimiento);
    if(count($fechas) != 3) {
      $this->_logs->addLog("fecha_nacimiento", "error", "Sintaxis incorrecta");
      return;
    }

    for($i = 0; $i < 2; $i++){
    /**
     * No conocemos como esta definida la fecha
     * Se van a realizar dos iteraciones para intentar definir la fecha
     */      
      $this->_logs->resetLogs("fecha_nacimiento");

      $mes = intval($fechas[1]);
      if($i===0){
        $dia = intval($fechas[0]);
        $anio = $fechas[2];
      } else {
        $dia = intval($fechas[2]);
        $anio = $fechas[0];
      }
    
      if(($dia < 1) || ($dia > 31)) {
        $this->_logs->addLog("fecha_nacimiento", "error", "Dia erroneo");
        continue;
      }

      if(($mes < 1) || ($mes > 12)) {
        $this->_logs->addLog("fecha_nacimiento", "error", "Mes erroneo");
        continue;
      }

      if((strlen($anio) != 2) && (strlen($anio) != 4)) {
        $this->_logs->addLog("fecha_nacimiento", "error", "Año erroneo");
        continue;
      }

      if(!$this->_logs->isErrorKey("fecha_nacimiento")) break;
    }

    if($this->_logs->isErrorKey("fecha_nacimiento")) return;

    if($dia < 10) $dia = "0".$dia;
    if($mes < 10) $mes = "0".$mes;

    if(strlen($anio) == 2) {
      $pre = ((intval($anio) >= 0) && (intval($anio) < intval(date("y")))) ? "20" : "19";
      $anio = $pre.$anio;
    }

    $fechaNacimiento = DateTime::createFromFormat("dmY",  $dia.$mes.$anio);
    
    if(!$fechaNacimiento) {
      $this->_logs->addLog("fecha_nacimiento", "error", "No se pudo definir fecha de nacimiento");
      return;
    }

    if($fechaNacimiento) $fechaNacimiento->setTimeZone(new DateTimeZone(date_default_timezone_get()));
    $fechaNacimiento->setTime(0,0,0);
    
    if($fechaNacimiento->diff(new DateTime())->y < 18) {
      $this->_logs->addLog("fecha_nacimiento", "error", "Menor a 18 años");
      return;
    }

    if($fechaNacimiento->diff(new DateTime())->y > 99) {
      $this->_logs->addLog("fecha_nacimiento", "error", "Tiene 100 años o más");
      return;
    }

    $this->fechaNacimiento = $fechaNacimiento;
  }
  

  public function checkNombresParecidos($existente){
    $this->_logs->resetLogs("nombres_parecidos");

    if(!nombres_parecidos($this->nombre(), $existente->nombre())){
      $this->_logs->addLog("nombres_parecidos","error", "Los nombre no son parecidos");
      return false;
    }
    
    return true;
  }

  
  public function checkFechaNacimiento($value){
    $this->_logs->resetLogs("fecha_nacimiento");
    if(Validation::is_undefined($value)) return null;
    
    $v = Validation::getInstanceValue($value)->date();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("fecha_nacimiento", "error", $error); }
    return $v->isSuccess();
  }
  
  public function checkNombres($value) { 
    $this->_logs->resetLogs("nombres");
    if(Validation::is_undefined($value)) return null;
    
    //advertencias
    $v = Validation::getInstanceValue($value)->abbreviation();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("nombres", "warning", $error); }
    
    $v = Validation::getInstanceValue($value)->required()->name();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("nombres", "error", $error); }
    if(!$v->isSuccess()) echo $value;
    return $v->isSuccess();
  }

  public function checkApellidos($value) { 
    $this->_logs->resetLogs("apellidos");
    if(Validation::is_undefined($value)) return null;
    
    //advertencias
    $v = Validation::getInstanceValue($value)->abbreviation();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("apellidos", "warning", $error); }
    
    $v = Validation::getInstanceValue($value)->required()->name();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("apellidos", "error", $error); }
    return $v->isSuccess();
  }

  public function checkNombresApellidos(){
    $this->_logs->resetLogs("nombres_apellidos");
    $v = Validation::getInstanceValue($this->nombres)->differentWords($this->apellidos);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("nombres_apellidos", "error", $error); }
    return $v->isSuccess();
  }

  public function checkNumeroDocumento($value) { 
    $this->_logs->resetLogs("numero_documento");
   
    if(Validation::is_undefined($value)) return null;
        $v = Validation::getInstanceValue($value)->min(7)->max(8)->pattern("int")->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("numero_documento", "error", $error); }
    
    return $v->isSuccess();
  }

  
  public function checkCuil($value) { 
    $this->_logs->resetLogs("cuil");
   
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->min(11)->max(11)->pattern("int");
    foreach($v->getErrors() as $error){ $this->_logs->addLog("cuil", "error", $error); }
    return $v->isSuccess();
  }

  public function checkTelefono($value) { 
    $this->_logs->resetLogs("telefono");
    if(Validation::is_undefined($value)) return null;
    if(Validation::is_empty($value)) return true;

    $v = Validation::getInstanceValue($value)->min(6);
    if(!empty($v->getErrors())){
      foreach($v->getErrors() as $error){ $this->_logs->addLog("telefono", "error", $error . "(no será almacenado)"); }
      $this->setTelefono(null);
    }
    return $v->isSuccess();
  }

  public function checkCorreo($value) { 
    $this->_logs->resetLogs("correo");
    if(Validation::is_undefined($value)) return null;
    if(Validation::is_empty($value)) return true;
    $v = Validation::getInstanceValue($value)->email();
    if(!empty($v->getErrors())){
      foreach($v->getErrors() as $error){ $this->_logs->addLog("correo", "error", $error . "(no será almacenado)"); }
      $this->setCorreo(null);
    }
    return $v->isSuccess();
  }

  public function resetGenero(){
    if(!Validation::is_empty($this->genero)) 
      $this->genero = (strpos(strtolower($this->genero), 'f') !== false) ? "Femenino" : "Masculino";
  }

  public function resetNumeroDocumento(){
    if(!Validation::is_empty($this->numeroDocumento)) { 
      parent::resetNumeroDocumento();
      $this->numeroDocumento = strto(
        str_replace("-", "", str_replace(".", "", (string)$this->numeroDocumento)), "x"
      );
    }
  }

  public function resetCorreo(){
    if(!Validation::is_empty($this->correo)){  
      parent::resetNumeroDocumento();  
      $this->correo = strto($this->correo, "xxyy");
    }
  }

  public function resetNombres(){
    if(!Validation::is_empty($this->nombres)){
      parent::resetNombres();
      $this->nombres = strto($this->nombres, "Xx Yy");
    }
  }
  
  public function resetApellidos(){
    if(!Validation::is_empty($this->apellidos)){
      parent::resetApellidos(); 
      $this->apellidos = strto($this->apellidos, "Xx Yy");
    }
  }
  public function resetDistrito(){
    if(!Validation::is_empty($this->distrito)){
      parent::resetApellidos(); 
      $this->distrito = strto($this->distrito, "Xx Yy");
    }
  }

  public function resetTelefono(){
    if(!Validation::is_empty($this->telefono)){
      parent::resetTelefono();
      $this->telefono = preg_replace( '/[^0-9]/i', '', $this->telefono);
      if(empty($this->telefono)) $this->telefono = null;
      elseif($this->telefono[0] == "0") $this->telefono = substr($this->telefono, 1); 
    }
  }

  public function _equalTo(EntityValues $entityValues, $strict = false){
    $a = $this->_toArray();
    $b = $entityValues->_toArray();    
    if($strict) return (empty(array_diff_assoc($a, $b)) && empty(array_diff_assoc($b, $a)))? true : false;
    
    if(!Validation::is_undefined($this->nombre()) && !Validation::is_undefined($entityValues->nombre())){
      if(!nombres_parecidos($this->nombre(), $entityValues->nombre())) return false;
    }
    //echo "<pre>";
    //print_r($a);
    //print_r($b);
    foreach($a as $ka => $va) {
      switch($ka){
        case "inscripcion_men":
        case "identificador":
        case "numero_inscripcion":
        case "turno":
        case "pc_escritorio":
        case "net_notebook":
        case "tablet":
        case "pc_tablet":
        case "impresora":
        case "conexion_internet_paga":
        case "telefono_celular":
        case "archivo_2019":
        case "archivo_2020":
        case "nombres":
        case "apellidos":
        case "analitico_dni":
        case "analitico_cuil":
        case "analitico_partida":
        case "analitico_certificado":
        case "ingreso":
        case "observaciones":
        case "drive":
        case "fecha_nacimiento":
          break;
        default:
          if(is_null($va) || !key_exists($ka, $b)) break;
          if($b[$ka] !== $va) {
            return $ka;
          }
      }
      
    }
    return true;
  }
  
  
}
