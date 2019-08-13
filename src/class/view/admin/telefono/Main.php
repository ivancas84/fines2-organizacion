<?php

require_once("class/view/Admin.php");
require_once("class/controller/Initialize.php");
require_once("class/model/Entity.php");

class TelefonoViewAdminMain extends EntityViewAdmin {

  public function __construct() {
    $this->entity = Entity::getInstanceRequire("telefono");
    $this->initialize = EntityInitializeController::getInstanceRequire("telefono");
  }
  
}
