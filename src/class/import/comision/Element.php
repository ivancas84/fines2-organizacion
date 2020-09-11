<?php
require_once("class/import/Element.php");

class ComisionImportElement extends ImportElement {
    
  public function setEntities($row) {
      $this->entities["comision"] = null;

      $this->setEntity($row, "comision");
  }

}