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
  
      array_push($this->ids["persona"], $element->entities["persona"]->numeroDocumento());        
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

      if(!$element->entities["persona"]->_reset()->_check()){
        $element->process = false;
        continue;
      }      
      if(key_exists($element->entities["persona"]->numeroDocumento(), $this->dbs["persona"])){
        $personaExistente = EntityValues::getInstanceRequire("persona");
        $dni= $element->entities["persona"]->numeroDocumento();
        $personaExistente->_fromArray($this->dbs["persona"][$dni]);
        if(!$element->entities["persona"]->checkNombresParecidos($personaExistente)){
          $element->process = false;                    
          $element->logs->addLog("persona", "error", "En la base existe una persona cuyos datos no coinciden");
          continue;
        }
      }
      $element->entities["persona"]->_reset();
      
      $this->processElement("persona", $element, $element->entities["persona"]->numeroDocumento());
    }
  }

  protected function updateElement(&$element, $name, $existente){
    $element->entities[$name]->setId($existente->id());
    if(!$element->entities[$name]->_equalTo($existente)) {
      $element->process = false;
      
      $element->logs->addLog("persona","error","El registro debe ser actualizado, comparar");
    } elseif (
        
        ($element->entities[$name]->archivo2019() && !$existente->archivo2019()) || 
        ($element->entities[$name]->archivo2020() && !$existente->archivo2020())
    ) {
        $element->logs->addLog("persona","info","Registro existente, se actualizara el campo archivo");

        $persona = EntityValues::getInstanceRequire("persona");
        $persona->setId($element->entities[$name]->id());
        if(!Validation::is_empty($element->entities[$name]->archivo2019())) $persona->setArchivo2019($element->entities[$name]->archivo2019());
        if(!Validation::is_empty($element->entities[$name]->archivo2020())) $persona->setArchivo2020($element->entities[$name]->archivo2020());
        $persist = EntitySqlo::getInstanceRequire($name)->update($persona->_toArray());
        $element->sql .= $persist["sql"];
    } else {
        $element->process = false;
        $element->logs->addLog("persona","info","Registros existente, no se realizara ninguna actualizacion");
    }
}

}