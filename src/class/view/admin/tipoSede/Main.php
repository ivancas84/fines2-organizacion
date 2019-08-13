<?php

require_once("class/view/Admin.php");
require_once("class/controller/Initialize.php");
require_once("class/model/Entity.php");

class TipoSedeViewAdminMain extends EntityViewAdmin {

  public function __construct() {
    $this->entity = Entity::getInstanceRequire("tipo_sede");
    $this->initialize = EntityInitializeController::getInstanceRequire("tipo_sede");
  }
  
}
