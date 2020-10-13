<?php

require_once("class/api/Base.php");

class CantidadAlumnosInfoApi extends BaseApi {


  public function main(){
    return $this->container->getController("model_tools")->cantidadAlumnos();
  }
}