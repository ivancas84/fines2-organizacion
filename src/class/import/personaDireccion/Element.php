<?php
require_once("class/import/Element.php");

class PersonaDireccionElementImport extends ImportElement {
    
  public function setEntities($row) {
      $this->entities["persona"] = null;

      $this->setEntity($row, "persona");
      $this->entities["persona"]->setFila($this->index);
  }

  public function update($name, $existente){
    $this->entities[$name]->setId($existente->id());
    
    if(($compare = $this->compare($this->entities[$name], $existente)) !== true) {
      $this->process = false;
      
      $this->logs->addLog("persona","error","El registro debe ser actualizado, comparar {$compare}");
    } elseif (($compare = $this->compareUpdate($this->entities[$name], $existente)) !== true) {
        $this->logs->addLog("persona","info","Registro existente, se actualizara campos {$compare}");

        $persona = $this->container->getValues("persona");
        $persona->setId($this->entities[$name]->id());
        if(!Validation::is_empty($this->entities[$name]->telefono())) $persona->setTelefono($this->entities[$name]->telefono());
        if(!Validation::is_empty($this->entities[$name]->tramo())) $persona->setTramo($this->entities[$name]->tramo());
        if(!Validation::is_empty($this->entities[$name]->sede())) $persona->setSede($this->entities[$name]->sede());
        if(!Validation::is_empty($this->entities[$name]->nombres())) $persona->setNombres($this->entities[$name]->nombres());
        if(!Validation::is_empty($this->entities[$name]->apellidos())) $persona->setApellidos($this->entities[$name]->apellidos());
        if(!Validation::is_empty($this->entities[$name]->correo())) $persona->setCorreo($this->entities[$name]->correo());
        if(!Validation::is_empty($this->entities[$name]->telefonoCelular())) $persona->setTelefonoCelular($this->entities[$name]->telefonoCelular());
        if(!Validation::is_empty($this->entities[$name]->fila())) $persona->setFila($this->entities[$name]->fila());
        if(settypebool(!Validation::is_empty($this->entities[$name]->pcEscritorio()))) $persona->setPcEscritorio($this->entities[$name]->pcEscritorio());
        if(settypebool(!Validation::is_empty($this->entities[$name]->conexionInternetPaga()))) $persona->setConexionInternetPaga($this->entities[$name]->conexionInternetPaga());

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
          break;
        default:
          if(is_null($va) || !key_exists($ka, $b)) break;
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
        case "pc_escritorio":
        case "conexion_internet_paga":
        case "telefono_celular":
        case "fila":  
          if(is_null($va)) break;
          
          if(($b[$ka] !== $va) || !key_exists($ka, $b)){
            array_push($compare, $ka);
          }
      }
      
    }
    return (empty($compare)) ? true : implode(", ", $compare);
  }

}