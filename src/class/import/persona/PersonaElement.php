<?php
require_once("class/import/Element.php");

class ImportPersonaElement extends ImportElement {
    
  public function setEntities($row) {
      $this->entities["persona"] = null;

      $this->setEntity($row, "persona");
  }

  public function update($name, $existente){
    $this->entities[$name]->setId($existente->id());
    $compare =  $this->entities[$name]->_equalTo($existente);
    if($compare !== true) {
      $this->process = false;
      
      $this->logs->addLog("persona","error","El registro debe ser actualizado, comparar {$compare}");
    } elseif (
        ($this->entities[$name]->archivo2019() && !$existente->archivo2019()) || 
        ($this->entities[$name]->archivo2020() && !$existente->archivo2020())
    ) {
        $this->logs->addLog("persona","info","Registro existente, se actualizara el campo archivo");

        $persona = EntityValues::getInstanceRequire("persona");
        $persona->setId($this->entities[$name]->id());
        if(!Validation::is_empty($this->entities[$name]->archivo2019())) $persona->setArchivo2019($this->entities[$name]->archivo2019());
        if(!Validation::is_empty($this->entities[$name]->archivo2020())) $persona->setArchivo2020($this->entities[$name]->archivo2020());
        $persist = EntitySqlo::getInstanceRequire($name)->update($persona->_toArray());
        $this->sql .= $persist["sql"];
    } else {
        $this->process = false;
        $this->logs->addLog("persona","info","Registros existente, no se realizara ninguna actualizacion");
    }
}
  

}