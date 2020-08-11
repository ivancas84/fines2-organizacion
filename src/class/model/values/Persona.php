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
}
