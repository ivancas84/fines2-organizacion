<?php
require_once("class/import/Import.php");
require_once("class/import/persona/PersonaElement.php");
require_once("class/tools/Validation.php");

class ImportPersona extends Import {
  
  public function element($i, $data){
    
    /**
     * Definir elemento a procear
     */
    $element = new ImportPersonaElement($i, $data); 
    array_push($this->elements, $element);
  }

  public function identify(){
    $this->ids["persona"] = [];

    foreach($this->elements as &$element){
      $dni = $element->entities["persona"]->numeroDocumento();
      if(Validation::is_empty($dni)){
          $element->process = false;                
          $element->logs->addLog("persona", "error", "El número de documento no se encuentra definido");
          continue;
      }
  
      array_push($this->ids["persona"], $dni);        
    }
  }        
   
  public function query(){
    $this->queryEntityField("persona","numero_documento");
  }

  public function process(){
    $this->processPersonas();
  }

  public function processPersonas(){
    foreach($this->elements as &$element) {
      if(!$element->process) continue;

      $element->resetAndcheckEntities();
      $dni= $element->entities["persona"]->numeroDocumento();

      if(key_exists($element->entities["persona"]->numeroDocumento(), $this->dbs["persona"])){
        $personaExistente = EntityValues::getInstanceRequire("persona");
        $personaExistente->_fromArray($this->dbs["persona"][$dni]);
        if(!$element->entities["persona"]->checkNombresParecidos($personaExistente)){
          $element->process = false;                    
          $element->logs->addLog("persona", "error", "En la base existe una persona cuyos datos no coinciden");
          continue;
        }
      }

      $this->processElement($element, "persona", $dni);
      if($element->process) $this->dbs["persona"][$dni] = $element->entities["persona"]->_toArray();
    }
  }

  

}