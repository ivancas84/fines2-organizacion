<?php
require_once("class/import/persona/Element.php");

class PersonaDriveImportElement extends PersonaImportElement {


  public $comision;
  public $idComision;
  public $tramo;
  public $actualizado;
  
  public function setEntities($row) {
    $this->entities["persona"] = null;

    $this->setEntity($row, "persona");
    if(!empty($row)){
      $this->entities["persona"]->setCuilODni($row["cuil_dni"]);
      $this->entities["persona"]->setFechaNacimientoAux($row["fecha_nacimiento_aux"]);
      $this->entities["persona"]->setComision2020($this->comision);
      $this->entities["persona"]->setIdComision($this->idComision);
      $this->entities["persona"]->setTramo($this->tramo);
      $this->entities["persona"]->setDrive(true);
      $this->entities["persona"]->setCens('456');
      $this->entities["persona"]->setActualizado($this->actualizado);
    }
  }

  public function update($name, $existente){
    $this->entities[$name]->setId($existente->id());

    if(($compare = $this->compare($this->entities[$name], $existente)) !== true) {
      //cens, comision_2020, id_comision

      $error = [];
      if(strpos($compare, "cens") !== false) array_push($error, "CENS (nuevo: " . $this->entities[$name]->cens() . " existente: " . $existente->cens() . ")");
      if(strpos($compare, "comision_2020") !== false) array_push($error, "COMISION 2020 (nuevo: " . $this->entities[$name]->comision2020() . " existente: " . $existente->comision2020(). ")");
      if(strpos($compare, "id_comision") !== false) array_push($error, "ID COMISION (nuevo: " . $this->entities[$name]->idComision() . " existente: " . $existente->idComision(). ")");

      $this->logs->addLog("persona","error","Error al comparar " . implode(", ", $error));
      $persona = $this->container->getValues("persona");
      $persona->setId($this->entities[$name]->id());
      //if(!Validation::is_empty($existente->error())) array_push($error, "ERROR ANTERIOR: (" . $existente->error(). ")");
      $persona->setError(implode(", ", $error));

      $persist = $this->container->getSqlo($name)->update($persona->_toArray());
      $this->sql .= $persist["sql"];
    } elseif (($compare = $this->compareUpdate($this->entities[$name], $existente)) !== true) {
      $this->logs->addLog("persona","info","Registro existente, se actualizara campos {$compare}");

      $persona = $this->container->getValues("persona");
      $persona->setId($this->entities[$name]->id());
      $persona->setDrive(true);
      $persona->setComision2020($this->entities[$name]->comision2020());
      $persona->setIdComision($this->entities[$name]->idComision());
      $persona->setTramo($this->entities[$name]->tramo());
      $persona->setCens('456');
      $persona->setActualizado($this->entities[$name]->actualizado());
      $persona->setError(null);

      if(!Validation::is_undefined($this->entities[$name]->activo())){
        $persona->setActivo($this->entities[$name]->activo());
      }

      if(!Validation::is_undefined($this->entities[$name]->analiticoDni())) 
        $persona->setAnaliticoDni($this->entities[$name]->analiticoDni());

      if(!Validation::is_undefined($this->entities[$name]->analiticoCuil())) 
        $persona->setAnaliticoCuil($this->entities[$name]->analiticoCuil());

      if(!Validation::is_undefined($this->entities[$name]->analiticoPartida())) 
        $persona->setAnaliticoPartida($this->entities[$name]->analiticoPartida());

      if(!Validation::is_undefined($this->entities[$name]->analiticoCertificado())) 
        $persona->setAnaliticoCertificado($this->entities[$name]->analiticoCertificado());

      if(!Validation::is_empty($this->entities[$name]->fechaNacimiento())) 
        $persona->setFechaNacimiento($this->entities[$name]->fechaNacimiento());

      if(!Validation::is_empty($this->entities[$name]->cuil())) 
        $persona->setCuil($this->entities[$name]->cuil());

      if(!Validation::is_empty($this->entities[$name]->telefono()) && Validation::is_empty($existente->telefono())) 
        $persona->setTelefono($this->entities[$name]->telefono());
        
      if(!Validation::is_empty($this->entities[$name]->ingreso())) 
        $persona->setIngreso($this->entities[$name]->ingreso());
    
      if(!Validation::is_empty($this->entities[$name]->observaciones())) 
        $persona->setObservaciones($this->entities[$name]->observaciones());
    
      if(!Validation::is_empty($this->entities[$name]->nombres())) 
        $persona->setNombres($this->entities[$name]->nombres());
      
      if(!Validation::is_empty($this->entities[$name]->apellidos())) 
        $persona->setApellidos($this->entities[$name]->apellidos());
      
        if(!Validation::is_empty($this->entities[$name]->correo()) && Validation::is_empty($existente->correo())) 
        $persona->setCorreo($this->entities[$name]->correo());
    
      if(!Validation::is_empty($this->entities[$name]->programa())) 
        $persona->setPrograma($this->entities[$name]->programa());
      
      if(!Validation::is_empty($this->entities[$name]->genero())) 
        $persona->setGenero($this->entities[$name]->genero());
      $persist = $this->container->getSqlo($name)->update($persona->_toArray());
      $this->sql .= $persist["sql"];
    } else {
      $this->process = false;
    }
  }
  
  public function compare($nueva, $existente){
    $a = $nueva->_toArray();
    $b = $existente->_toArray();    
  
    $compare = [];
    if(!Validation::is_undefined($nueva->nombre()) && !Validation::is_undefined($existente->nombre())){
      if(!nombres_parecidos($nueva->nombre(), $existente->nombre())) array_push($compare, "nombres y apellidos");
    }

    foreach($a as $ka => $va) {
      switch($ka){
        case "apellidos":
        case "nombres":
        case "cuil":
        case "genero":
        case "telefono":
        case "analitico_dni":
        case "analitico_cuil":  
        case "analitico_partida":
        case "analitico_certificado":
        case "ingreso":
        case "observaciones":
        case "programa":
        case "activo":
        case "correo":
        case "fecha_nacimiento":
        case "drive":
        case "tramo":
        case "actualizado":
          break;
        default:
          //cens, comision_2020, id_comision
          if(is_null($va) || !key_exists($ka, $b) || is_null($b[$ka])) break;
          if($b[$ka] !== $va) array_push($compare, $ka);
      }
      
    }
    return (empty($compare)) ? true : implode(", ", $compare);
  }

  public function compareUpdate($nueva, $existente){
    $a = $nueva->_toArray();
    $b = $existente->_toArray();    
      
    $compare = [];

    foreach($a as $ka => $va) {
      switch($ka){
        case "cens":
        case "tramo":
        case "comision_2020":
        case "id_comision":

        case "apellidos":
        case "nombres":
        case "cuil":
        case "genero":
        case "telefono":
        case "ingreso":
        case "observaciones":
        case "programa":
        case "activo":
        case "correo":
        case "fecha_nacimiento":
        case "drive": 
        case "error":
          if(is_null($va)) break;
          
          if(($b[$ka] !== $va) || !key_exists($ka, $b)){
            array_push($compare, $ka);
          }
      }
      
    }
    return (empty($compare)) ? true : implode(", ", $compare);
  }



  

}