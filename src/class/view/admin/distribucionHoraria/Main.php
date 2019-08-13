<?php

require_once("class/view/Admin.php");
require_once("class/controller/Initialize.php");
require_once("class/model/Entity.php");

class DistribucionHorariaViewAdminMain extends EntityViewAdmin {

  public function __construct() {
    $this->entity = Entity::getInstanceRequire("distribucion_horaria");
    $this->initialize = EntityInitializeController::getInstanceRequire("distribucion_horaria");
  }
  
}
