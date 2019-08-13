<?php

require_once("class/view/Admin.php");
require_once("class/controller/Initialize.php");
require_once("class/model/Entity.php");

class ClasificacionPlanViewAdminMain extends EntityViewAdmin {

  public function __construct() {
    $this->entity = Entity::getInstanceRequire("clasificacion_plan");
    $this->initialize = EntityInitializeController::getInstanceRequire("clasificacion_plan");
  }
  
}
