<?php

require_once("function/nombres_parecidos.php");
require_once("class/model/values/_Persona.php");

class Persona extends _Persona {

  public function nombre(){
    return trim($this->nombres() . " " . $this->apellidos());
  }

  public function checkNombresParecidos($existente){
    if(!nombres_parecidos($this->nombre(), $existente->nombre())){
      $this->_logs()->addLog("nombres_parecidos","error", "En la base existe una persona cuyos datos no coinciden");
      return false;
    }
    return true;
  }

  public function checkNombres($value) { 
    $this->_logs->resetLogs("nombres");

    //errores
    $v = Validation::getInstanceValue($value)->string();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("nombres", "error", $error); }
    $ret = $v->isSuccess();

    //advertencias
    $v = Validation::getInstanceValue($value)->empty()->name()->abbreviation();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("nombres", "warning", $error); }
    
    return $ret;
  }

  public function checkApellidos($value) { 
    $this->_logs->resetLogs("apellidos");


    //advertencias
    $v = Validation::getInstanceValue($value)->empty()->name()->abbreviation();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("apellidos", "warning", $error); }
    
    //errores
    $v = Validation::getInstanceValue($value)->string();
    foreach($v->getErrors() as $error){ $this->_logs->addLog("apellidos", "error", $error); }
    return $v->isSuccess();
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
    $v = Validation::getInstanceValue($val)->required()->string()->min(7)->pattern("int");
    foreach($v->getErrors() as $error){ $this->_logs->addLog("numero_documento", "error", $error); }
    return $v->isSuccess();
  }

  public function checkTelefono($value) { 
    $this->_logs->resetLogs("telefono");
    $v = Validation::getInstanceValue($val)->min(6);
    foreach($v->getErrors() as $error){ $this->_logs->addLog("numero_documento", "warning", $error); }
    return true;
  }

  public function resetGenero(){
    if(!Validation::is_empty($this->genero)) 
      $this->genero = (strpos(strtolower($genero), 'f') !== false) ? "Femenino" : "Masculino";
  }

  public function resetNumeroDocumento(){
    if(!Validation::is_empty($this->numeroDocumento)) { 
      parent::resetNumeroDocumento();
      $this->numeroDocumento = strto("x", str_replace("-", "", str_replace(".", "", (string)$this->numeroDocumento)));
    }
  }

  public function resetEmail(){
    if(!Validation::is_empty($this->email)){  
      parent::resetNumeroDocumento();  
      $this->email = strto("xxyy", $this->email);
    }
  }

  public function resetNombres(){
    if(!Validation::is_empty($this->nombres)){
      parent::resetNombres();
      $this->nombres = strto("Xx Yy", $this->nombres);
    }
  }
  
  public function resetApellidos(){
    if(!Validation::is_empty($this->genero)){
      parent::resetApellidos(); 
      $this->apellidos = strto("Xx Yy", $this->apellidos);
    }
  }

  public function resetTelefono(){
    if(!Validation::is_empty($this->genero)){
      parent::resetTelefono();
      $this->telefono = preg_replace( '/[^0-9]/i', '', $this->telefono);
      if($this->telefono[0] == "0") $this->telefono = substr($this->telefono, 1); 
  }
  
  
}
