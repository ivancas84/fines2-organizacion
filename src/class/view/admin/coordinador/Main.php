<?php

require_once("class/view/Admin.php");
require_once("class/controller/Initialize.php");
require_once("class/model/Entity.php");

class CoordinadorViewAdminMain extends EntityViewAdmin {

  public function __construct() {
    $this->entity = Entity::getInstanceRequire("coordinador");
    $this->initialize = EntityInitializeController::getInstanceRequire("coordinador");
  }
  
}
