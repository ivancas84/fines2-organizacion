<?php
require_once("class/import/Import.php");
require_once("class/Container.php");
require_once("class/tools/Validation.php");

class ComisionImport extends Import {
  
  public function identify(){
    $this->ids["comision"] = [];

    foreach($this->elements as &$element){
      $element->entities["comision"]->resetIdComision();
      $idComision = $element->entities["comision"]->idComision();
      
      if(Validation::is_empty($idComision)){
        $element->process = false;                
        $element->logs->addLog("comision", "error", "El id no se encuentra definido");
        continue;
      }

      if(in_array($idComision, $this->ids["comision"])) {
        $element->process = false;
        $element->logs->addLog("comision", "error", "El id esta duplicado");
        continue;
      }
  
      array_push($this->ids["comision"], $idComision);        
    }
  }        
   
  public function query(){
    $this->queryEntityField("comision","id_comision");
  }

  public function process(){
    foreach($this->elements as &$element){
      if(!$element->process) continue;

      $idComision = $element->entities["comision"]->idComision(); 
      $this->processElement($element,  "comision", $idComision);
      if($element->process) $this->dbs["comision"][$idComision] = $element->entities["comision"]->_toArray();
    }
  }

}