<?php

require_once("class/api/Base.php");

class CantidadAlumnosBaseApi extends BaseApi {


  public function main(){
    return $this->container->getController("model_tools")->cantidadAlumnos();
  }
}