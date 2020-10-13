<?php

require_once("class/tools/Filter.php");
require_once("class/api/Base.php");
require_once("function/rest.php");


class CursoInfoApi extends BaseApi {


  public function main(){
    $id = Filter::jsonPostRequired(); //id persona

    $persona = $this->container->getDb()->get("persona", $id);

    if(!$persona["id_comision"]) return ["persona"=>$persona, "cursos"=>[]];
    
    $cursos = rest(CURSOS_API, "curso", "all", ["params"=>["com_identificacion"=>$persona["id_comision"]]]);
    $idCursos = array_column($cursos, "id");      
    $tomas = rest(CURSOS_API, "toma", "all", 
      [
        "condition"=>[
          ["curso","=",$idCursos], 
          ["estado","=","Aprobada"], 
          ["estado_contralor","=","Pasar"]
        ]
      ]
    );

    foreach($tomas as $toma){
      foreach($cursos as &$curso){
        $curso["toma_activa"] = null;               
        if($curso["id"] == $toma["curso"]) {
          $curso["toma_activa"] = $toma;
          break;
        }
      }
    }

    return ["persona"=>$persona, "cursos"=>$cursos];
  }  
}