<?php

require_once("class/view/Admin.php");
require_once("class/controller/Initialize.php");
require_once("class/model/Entity.php");

class DomicilioViewAdminMain extends EntityViewAdmin {

  public function __construct() {
    $this->entity = Entity::getInstanceRequire("domicilio");
    $this->initialize = EntityInitializeController::getInstanceRequire("domicilio");
  }
  
}
