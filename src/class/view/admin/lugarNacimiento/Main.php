<?php

require_once("class/view/Admin.php");
require_once("class/controller/Initialize.php");
require_once("class/model/Entity.php");

class LugarNacimientoViewAdminMain extends EntityViewAdmin {

  public function __construct() {
    $this->entity = Entity::getInstanceRequire("lugar_nacimiento");
    $this->initialize = EntityInitializeController::getInstanceRequire("lugar_nacimiento");
  }
  
}
