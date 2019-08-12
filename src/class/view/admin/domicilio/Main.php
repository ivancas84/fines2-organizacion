<?php

require_once("class/view/Admin.php");
require_once("class/model/Entity.php");

class DomicilioAdminControllerMain extends EntityAdminController {

  public function __construct() {
    $this->entity = Entity::getInstanceRequire("domicilio");
  }
  
}
