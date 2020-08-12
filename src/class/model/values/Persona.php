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

  public function checkNombresParecidos($existente){
    $this->_logs->resetLogs("nombres_parecidos");

    if(!nombres_parecidos($this->nombre(), $existente->nombre())){
      $this->_logs->addLog("nombres_parecidos","error", "En la base existe una persona cuyos datos no coinciden");
      return false;
    }
    
    return true;
  }

  public function checkNombres($value) { 
    $this->_logs->resetLogs("nombres");
    if(Validation::is_undefined($value)) return null;
    
    //advertencias
    $v = Validation::getInstanceValue($value)->empty()->name()->abbreviation();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("nombres", "warning", $error); }
    return true;
  }

  public function checkApellidos($value) { 
    $this->_logs->resetLogs("apellidos");
    if(Validation::is_undefined($value)) return null;
    
    //advertencias
    $v = Validation::getInstanceValue($value)->empty()->name()->abbreviation();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("apellidos", "warning", $error); }
    return true;
  }

  public function checkNombresApellidos(){
    $this->_logs->resetLogs("nombres_apellidos");

    //advertencias
    $v = Validation::getInstanceValue($this->nombres)->differentWords($this->apellidos);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("nombres_apellidos", "warning", $error); }
    return true;
  }

  public function checkNumeroDocumento($value) { 
    $this->_logs->resetLogs("numero_documento");
    if(Validation::is_undefined($value)) return null;
    $v = Validation::getInstanceValue($value)->min(7)->pattern("int");
    foreach($v->getErrors() as $error){ $this->_logs->addLog("numero_documento", "warning", $error); }
    
    $v = Validation::getInstanceValue($value)->required();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("numero_documento", "error", $error); }
    return $v->isSuccess();
  }

  public function checkTelefono($value) { 
    $this->_logs->resetLogs("telefono");
    if(Validation::is_undefined($value)) return null;
    if(Validation::is_empty($value)) return true;

    $v = Validation::getInstanceValue($value)->min(6);
    if(!empty($v->getErrors())){
      foreach($v->getErrors() as $error){ $this->_logs->addLog("telefono", "warning", $error . "(no será almacenado)"); }
      $this->setTelefono(null);
    }
    return true;
  }

  public function checkCorreo($value) { 
    $this->_logs->resetLogs("correo");
    if(Validation::is_undefined($value)) return null;
    if(Validation::is_empty($value)) return true;
    $v = Validation::getInstanceValue($value)->email();
    if(!empty($v->getErrors())){
      foreach($v->getErrors() as $error){ $this->_logs->addLog("correo", "warning", $error . "(no será almacenado)"); }
      $this->setTelefono(null);
    }
    return true;
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
    if(!Validation::is_empty($this->genero)){
      parent::resetApellidos(); 
      $this->apellidos = strto($this->apellidos, "Xx Yy");
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
          break;
        default:
          if(is_null($va) || !key_exists($ka, $b)) break;
          if($b[$ka] !== $va) {
            //echo "distinto" . $ka;
            return false;
          }
      }
      
    }
    return true;
  }
  
  
}
