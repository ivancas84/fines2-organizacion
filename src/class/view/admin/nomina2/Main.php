<?php

require_once("class/view/Admin.php");
require_once("class/controller/Initialize.php");
require_once("class/model/Entity.php");

class Nomina2ViewAdminMain extends EntityViewAdmin {

  public function __construct() {
    $this->entity = Entity::getInstanceRequire("nomina2");
    $this->initialize = EntityInitializeController::getInstanceRequire("nomina2");
  }
  
}
