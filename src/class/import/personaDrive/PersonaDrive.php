<?php
require_once("class/import/persona/Persona.php");
require_once("class/import/personaDrive/PersonaDriveElement.php");
require_once("class/tools/Validation.php");

class ImportPersonaDrive extends ImportPersona {
  
  public function element($i, $data){
 
    /**
     * Definir elemento a procear
     */
    $element = new ImportPersonaDriveElement($i, $data, $this->comision); 
    array_push($this->elements, $element);
  }

 
}