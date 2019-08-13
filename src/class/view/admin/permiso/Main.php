<?php

require_once("class/view/Admin.php");
require_once("class/controller/Initialize.php");
require_once("class/model/Entity.php");

class PermisoViewAdminMain extends EntityViewAdmin {

  public function __construct() {
    $this->entity = Entity::getInstanceRequire("permiso");
    $this->initialize = EntityInitializeController::getInstanceRequire("permiso");
  }
  
}
