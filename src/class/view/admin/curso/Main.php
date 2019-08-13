<?php

require_once("class/view/Admin.php");
require_once("class/controller/Initialize.php");
require_once("class/model/Entity.php");

class CursoViewAdminMain extends EntityViewAdmin {

  public function __construct() {
    $this->entity = Entity::getInstanceRequire("curso");
    $this->initialize = EntityInitializeController::getInstanceRequire("curso");
  }
  
}
