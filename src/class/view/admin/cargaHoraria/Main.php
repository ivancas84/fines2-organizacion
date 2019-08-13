<?php

require_once("class/view/Admin.php");
require_once("class/controller/Initialize.php");
require_once("class/model/Entity.php");

class CargaHorariaViewAdminMain extends EntityViewAdmin {

  public function __construct() {
    $this->entity = Entity::getInstanceRequire("carga_horaria");
    $this->initialize = EntityInitializeController::getInstanceRequire("carga_horaria");
  }
  
}
