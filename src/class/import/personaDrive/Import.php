<?php
require_once("class/import/persona/Import.php");
require_once("class/import/personaDrive/Import.php");
require_once("class/tools/Validation.php");

class PersonaDriveImport extends PersonaImport {
  
  public $comision;
  public $idComision;
  public $tramo;
  
  public function element($i, $data){
 
    /**
     * Definir elemento a procear
     */
    $element = $this->container->getImportElement($this->entityName);
    $element->index = $i;
    $element->comision = $this->comision;
    $element->idComision = $this->idComision;
    $element->tramo = $this->tramo;
    $element->actualizado = $this->actualizado;
    
    $element->setEntities($data);
    array_push($this->elements, $element);
  }

  

 
}