<?php

require_once("class/view/Admin.php");
require_once("class/controller/Initialize.php");
require_once("class/model/Entity.php");

class AsignaturaViewAdminMain extends EntityViewAdmin {

  public function __construct() {
    $this->entity = Entity::getInstanceRequire("asignatura");
    $this->initialize = EntityInitializeController::getInstanceRequire("asignatura");
  }
  
}
