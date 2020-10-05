<?php
require_once("class/import/Element.php");

class PersonaDireccionImportElement extends ImportElement {
    
  public function setEntities($row) {
      $this->entities["persona"] = null;

      $this->setEntity($row, "persona");
      if($row){

        if(!empty($row["fecha_nacimiento_aux"]) && strpos(strtolower($row["fecha_nacimiento_aux"]), "dup") !== false) {
          $this->process = false;
        }
        if(empty($row["nombres"]) && empty($row["numero_documento"]) && empty($row["apellidos"])){
          $this->process = false;
        }
        $this->entities["persona"]->setCuilODni($row["cuil_dni"]);
        $this->entities["persona"]->setFila($this->index);
        $this->entities["persona"]->setFechaNacimientoAux($row["fecha_nacimiento_aux"]);
      } else {
        echo "Que paso con " . $this->index;
      }
  }

  public function update($name, $existente){
    $this->entities[$name]->setId($existente->id());
    
    if(($compare = $this->compare($this->entities[$name], $existente)) !== true) {
      $error = [];
      if(strpos($compare, "cens") !== false) array_push($error, "CENS (nuevo: " . $this->entities[$name]->cens() . " existente: " . $existente->cens() . ")");
      
      $this->logs->addLog("persona","error","Error al comparar {$compare}:" . implode(", ", $error));
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
        if(!Validation::is_empty($this->entities[$name]->cens())) $persona->setCens($this->entities[$name]->cens());
        if(!Validation::is_empty($this->entities[$name]->telefono())) $persona->setTelefono($this->entities[$name]->telefono());
        if(!Validation::is_empty($this->entities[$name]->tramo())) $persona->setTramo($this->entities[$name]->tramo());
        if(!Validation::is_empty($this->entities[$name]->sede())) $persona->setSede($this->entities[$name]->sede());
        if(!Validation::is_empty($this->entities[$name]->nombres())) $persona->setNombres($this->entities[$name]->nombres());
        if(!Validation::is_empty($this->entities[$name]->apellidos())) $persona->setApellidos($this->entities[$name]->apellidos());
        if(!Validation::is_empty($this->entities[$name]->correo())) $persona->setCorreo($this->entities[$name]->correo());
        //if(!Validation::is_empty($this->entities[$name]->telefonoCelular())) $persona->setTelefonoCelular($this->entities[$name]->telefonoCelular());
        if(!Validation::is_empty($this->entities[$name]->fila())) $persona->setFila($this->entities[$name]->fila());
        if(!Validation::is_empty($this->entities[$name]->idComision())) $persona->setIdComision($this->entities[$name]->idComision());
        
        if(!Validation::is_empty($this->entities[$name]->fechaNacimiento())) 
          $persona->setFechaNacimiento($this->entities[$name]->fechaNacimiento());

        if(!Validation::is_empty($this->entities[$name]->conexionInternetPaga()) && settypebool($this->entities[$name]->conexionInternetPaga())) 
          $persona->setConexionInternetPaga($this->entities[$name]->conexionInternetPaga());

        
        if(!Validation::is_empty($this->entities[$name]->pcEscritorio()) && settypebool($this->entities[$name]->pcEscritorio())) 
          $persona->setPcEscritorio($this->entities[$name]->pcEscritorio());

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
        case "region":
        case "distrito":
        case "apellidos":
        case "nombres":
        case "telefono":
        case "correo":
        case "pc_escritorio":
        case "conexion_internet_paga":
        case "telefono_celular":  
        case "fila":
        case "sede":
        case "tramo":
        case "fecha_nacimiento":
        case "id_comision":
          break;
        case "cens":
          if(is_null($va) || !key_exists($ka, $b) || is_null($b[$ka])) break;
          if((($va == "456") || ($b[$ka] == "456")) && ($b[$ka] !== $va)) array_push($compare, $ka);
          else break;
        default:
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
        case "region":
        case "distrito":
        case "apellidos":
        case "nombres":
        case "telefono":
        case "correo":
        //case "telefono_celular":
        case "fila":
        case "sede":
        case "tramo":   
        case "fecha_nacimiento":
        case "id_comision":
        case "cens":
          if(is_null($va)) break;

          if($ka == "456") {
            if(($va == "456") || (key_exists($ka, $b) && $b[$ka] == "456")) break;
          }

          if(!key_exists($ka, $b) || ($b[$ka] !== $va)){
            array_push($compare, $ka);
          }
      }
      
    }
    return (empty($compare)) ? true : implode(", ", $compare);
  }

}