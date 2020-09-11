<?php

class ModelTools {


  public $container;

  public function cantidadAlumnos(){
    
    $sql = 	"
SELECT comision.id_comision, comision.tramo, comision.orientacion, comision.comision_2020, comision.tramo, COUNT(persona.id) AS cantidad
FROM persona
RIGHT JOIN comision ON (comision.id_comision = persona.id_comision)
WHERE comision.cens = '456'
GROUP BY comision.id_comision;   
";    

    $result = $this->container->getDb()->query($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    $result->free();
    return $rows;    
  }
}