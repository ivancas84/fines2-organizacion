<?php
require_once("class/import/persona/PersonaElement.php");

class ImportPersonaDriveElement extends ImportPersonaElement {

  public $comision;

  public function __construct($i, $data, $comision){
    $this->comision = $comision;
    parent::__construct($i, $data);
  }

  public function setEntities($row) {
    $this->entities["persona"] = null;

    $this->setEntity($row, "persona");
    if(!empty($row)){
      $this->entities["persona"]->setCuilODni($row["cuil_dni"]);
      $this->entities["persona"]->setFechaNacimientoAux($row["fecha_nacimiento_aux"]);
      $this->entities["persona"]->setComision($this->comision);
      $this->entities["persona"]->setDrive(true);
      $this->entities["persona"]->setActivo(true);
      $this->entities["persona"]->setCens('456');
    }
  }

  public function update($name, $existente){
    $this->entities[$name]->setId($existente->id());
    $compare =  $this->entities[$name]->_equalTo($existente);
    if($compare !== true) {
      
      $persona = EntityValues::getInstanceRequire("persona");
      $this->process = false;
      echo "<pre>";
      echo $existente->fechaNacimiento("Y-m-d His");
      echo $this->entities[$name]->fechaNacimiento("Y-m-d His");
      echo "<br><br>";
      $this->logs->addLog("persona","error","El registro debe ser actualizado, comparar {$compare}");
    } elseif (!$existente->drive() || Validation::is_empty($existente->comision())) {
        $this->logs->addLog("persona","info","Registro existente, se actualizara los campos");

        $persona = EntityValues::getInstanceRequire("persona");
        $persona->setComision($this->entities[$name]->comision());
        $persona->setId($this->entities[$name]->id());
        $persona->setCuil($this->entities[$name]->cuil());
        $persona->_setFechaNacimiento($this->entities[$name]->fechaNacimiento());
        $persona->setAnaliticoDni($this->entities[$name]->analiticoDni());
        $persona->setAnaliticoCuil($this->entities[$name]->analiticoCuil());
        $persona->setAnaliticoPartida($this->entities[$name]->analiticoPartida());
        $persona->setAnaliticoCertificado($this->entities[$name]->analiticoCertificado());
        $persona->setIngreso($this->entities[$name]->ingreso());
        $persona->setObservaciones($this->entities[$name]->observaciones());
        $persona->setActivo(true);
        $persona->setDrive(true);
        
        $persist = EntitySqlo::getInstanceRequire($name)->update($persona->_toArray());
        $this->sql .= $persist["sql"];
    } else {
        $this->process = false;
        $this->logs->addLog("persona","info","Registro existente, no se realizara ninguna actualizacion");
    }
  }


  

}