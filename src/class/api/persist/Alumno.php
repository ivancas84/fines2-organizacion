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
    $persist = $p->unique("persona", $data);
    $this->container->getDb()->multi_query_transaction_log($persist["sql"]);
    return ["id" => $persist["id"], "detail" => ["persona".$persist["id"]]];
  }
}



