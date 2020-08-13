<?php
require_once("class/import/Element.php");

class ImportPersonaElement extends ImportElement {
    
  public function setEntities($row) {
      $this->entities["persona"] = null;

      $this->setEntity($row, "persona");
  }


  

}