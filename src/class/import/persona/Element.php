<?php
require_once("class/import/Element.php");

class PersonaElementImport extends ImportElement {
    
  public function setEntities($row) {
      $this->entities["persona"] = null;

      $this->setEntity($row, "persona");
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
        if(!Validation::is_empty($this->entities[$name]->archivo2019())) $persona->setArchivo2019($this->entities[$name]->archivo2019());
        if(!Validation::is_empty($this->entities[$name]->archivo2020())) $persona->setArchivo2020($this->entities[$name]->archivo2020());
        if(!Validation::is_empty($this->entities[$name]->telefono())) $persona->setTelefono($this->entities[$name]->telefono());
        if(!Validation::is_empty($this->entities[$name]->comision())) $persona->setComision($this->entities[$name]->comision());
        if(!Validation::is_empty($this->entities[$name]->tramo())) $persona->setTramo($this->entities[$name]->tramo());
        if(!Validation::is_empty($this->entities[$name]->sede())) $persona->setSede($this->entities[$name]->sede());
        if(!Validation::is_empty($this->entities[$name]->localidad())) $persona->setLocalidad($this->entities[$name]->localidad());
        if(!Validation::is_empty($this->entities[$name]->nombres())) $persona->setNombres($this->entities[$name]->nombres());
        if(!Validation::is_empty($this->entities[$name]->apellidos())) $persona->setApellidos($this->entities[$name]->apellidos());
        if(!Validation::is_empty($this->entities[$name]->correo())) $persona->setCorreo($this->entities[$name]->correo());
        

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
        case "telefono":
        case "tramo":
        case "inscripcion_men":
        case "identificador":
        case "numero_inscripcion":
        case "turno":
        case "pc_escritorio":
        case "net_notebook":
        case "tablet":
        case "pc_tablet":
        case "impresora":
        case "conexion_internet_paga":
        case "telefono_celular":
        case "archivo_2019":
        case "archivo_2020":
        case "nombres":
        case "apellidos":
        case "analitico_dni":
        case "analitico_cuil":
        case "analitico_partida":
        case "analitico_certificado":
        case "ingreso":
        case "observaciones":
        case "drive":
        case "fecha_nacimiento":
        case "comision":
        case "sede":
        case "localidad":
        case "correo": 
        
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
        case "telefono":
        case "tramo":
        case "nombres":
        case "apellidos":
        case "comision":
        case "sede":
        case "localidad":
        case "correo": 
         
          if(is_null($va) || !key_exists($ka, $b)) break;
          
          if($b[$ka] !== $va) {
            array_push($compare, $ka);
          }
      }
      
    }
    return (empty($compare)) ? true : implode(", ", $compare);
  }

}