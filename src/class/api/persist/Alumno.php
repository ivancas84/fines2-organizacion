<?php


require_once("class/api/Persist.php");
require_once("function/rest.php");

class AlumnoPersistApi extends PersistApi{
  /**
   * Comportamiento general de persistencia
   */

  
  public function main(){
    $data = Filter::jsonPostRequired();

    if(empty($data)) throw new Exception("Se está intentando persistir un conjunto de datos vacío");
    
    $p = $this->container->getPersist();
    
    $value = $this->container->getValue("persona")->_fromArray($data, "set");

    $value->_call("reset")->_call("_check");
    if($value->_getLogs()->isError()) throw new Exception($value->_getLogs()->toString());
      
    $row = $this->container->getDb()->unique("persona", $data);
    if (!empty($row)){
      $value->setId($row["id"]);
      $sql = $this->container->getSqlo("persona")->update($value->_toArray("sql"));
    } else {
      $value->_call("setDefault");
      $value->setId(uniqid());
      $sql = $this->container->getSqlo("persona")->insert($value->_toArray("sql"));
    }

    return $row;
  
  }
}



