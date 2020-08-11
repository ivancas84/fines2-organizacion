<?php
require_once("class/model/Sql.php");

class _PersonaSql extends EntitySql{

  public function __construct(){
    parent::__construct();
    $this->entity = Entity::getInstanceRequire('persona');
  }


  public function _mappingField($field){
    $p = $this->prf();
    $t = $this->prt();

    if($f = $this->_mappingFieldMain($field)) return $f;
    switch ($field) {
      case $p.'id': return $t.".id";
      case $p.'nombres': return $t.".nombres";
      case $p.'apellidos': return $t.".apellidos";
      case $p.'genero': return $t.".genero";
      case $p.'telefono': return $t.".telefono";
      case $p.'email': return $t.".email";
      case $p.'trayectoria_educativa': return $t.".trayectoria_educativa";
      case $p.'turno': return $t.".turno";
      case $p.'pc_escritorio': return $t.".pc_escritorio";
      case $p.'net_netbook': return $t.".net_netbook";
      case $p.'tablet': return $t.".tablet";
      case $p.'pc_o_tablet': return $t.".pc_o_tablet";
      case $p.'impresora': return $t.".impresora";
      case $p.'conexion_internet_paga': return $t.".conexion_internet_paga";
      case $p.'telefono_celular': return $t.".telefono_celular";
      case $p.'numero_documento': return $t.".numero_documento";

      case $p.'min_id': return "MIN({$t}.id)";
      case $p.'max_id': return "MAX({$t}.id)";
      case $p.'count_id': return "COUNT({$t}.id)";

      case $p.'min_nombres': return "MIN({$t}.nombres)";
      case $p.'max_nombres': return "MAX({$t}.nombres)";
      case $p.'count_nombres': return "COUNT({$t}.nombres)";

      case $p.'min_apellidos': return "MIN({$t}.apellidos)";
      case $p.'max_apellidos': return "MAX({$t}.apellidos)";
      case $p.'count_apellidos': return "COUNT({$t}.apellidos)";

      case $p.'min_genero': return "MIN({$t}.genero)";
      case $p.'max_genero': return "MAX({$t}.genero)";
      case $p.'count_genero': return "COUNT({$t}.genero)";

      case $p.'min_telefono': return "MIN({$t}.telefono)";
      case $p.'max_telefono': return "MAX({$t}.telefono)";
      case $p.'count_telefono': return "COUNT({$t}.telefono)";

      case $p.'min_email': return "MIN({$t}.email)";
      case $p.'max_email': return "MAX({$t}.email)";
      case $p.'count_email': return "COUNT({$t}.email)";

      case $p.'min_trayectoria_educativa': return "MIN({$t}.trayectoria_educativa)";
      case $p.'max_trayectoria_educativa': return "MAX({$t}.trayectoria_educativa)";
      case $p.'count_trayectoria_educativa': return "COUNT({$t}.trayectoria_educativa)";

      case $p.'min_turno': return "MIN({$t}.turno)";
      case $p.'max_turno': return "MAX({$t}.turno)";
      case $p.'count_turno': return "COUNT({$t}.turno)";

      case $p.'min_pc_escritorio': return "MIN({$t}.pc_escritorio)";
      case $p.'max_pc_escritorio': return "MAX({$t}.pc_escritorio)";
      case $p.'count_pc_escritorio': return "COUNT({$t}.pc_escritorio)";

      case $p.'min_net_netbook': return "MIN({$t}.net_netbook)";
      case $p.'max_net_netbook': return "MAX({$t}.net_netbook)";
      case $p.'count_net_netbook': return "COUNT({$t}.net_netbook)";

      case $p.'min_tablet': return "MIN({$t}.tablet)";
      case $p.'max_tablet': return "MAX({$t}.tablet)";
      case $p.'count_tablet': return "COUNT({$t}.tablet)";

      case $p.'min_pc_o_tablet': return "MIN({$t}.pc_o_tablet)";
      case $p.'max_pc_o_tablet': return "MAX({$t}.pc_o_tablet)";
      case $p.'count_pc_o_tablet': return "COUNT({$t}.pc_o_tablet)";

      case $p.'min_impresora': return "MIN({$t}.impresora)";
      case $p.'max_impresora': return "MAX({$t}.impresora)";
      case $p.'count_impresora': return "COUNT({$t}.impresora)";

      case $p.'min_conexion_internet_paga': return "MIN({$t}.conexion_internet_paga)";
      case $p.'max_conexion_internet_paga': return "MAX({$t}.conexion_internet_paga)";
      case $p.'count_conexion_internet_paga': return "COUNT({$t}.conexion_internet_paga)";

      case $p.'min_telefono_celular': return "MIN({$t}.telefono_celular)";
      case $p.'max_telefono_celular': return "MAX({$t}.telefono_celular)";
      case $p.'count_telefono_celular': return "COUNT({$t}.telefono_celular)";

      case $p.'min_numero_documento': return "MIN({$t}.numero_documento)";
      case $p.'max_numero_documento': return "MAX({$t}.numero_documento)";
      case $p.'count_numero_documento': return "COUNT({$t}.numero_documento)";

      case $p.'_label': return "CONCAT_WS(' ', {$t}.id)";
      default: return null;
    }
  }

  public function _fields(){
    //No todos los campos se extraen de la entidad, por eso es necesario mapearlos
    $p = $this->prf();
    return '
' . $this->_mappingField($p.'id') . ' AS ' . $p.'id, ' . $this->_mappingField($p.'nombres') . ' AS ' . $p.'nombres, ' . $this->_mappingField($p.'apellidos') . ' AS ' . $p.'apellidos, ' . $this->_mappingField($p.'genero') . ' AS ' . $p.'genero, ' . $this->_mappingField($p.'telefono') . ' AS ' . $p.'telefono, ' . $this->_mappingField($p.'email') . ' AS ' . $p.'email, ' . $this->_mappingField($p.'trayectoria_educativa') . ' AS ' . $p.'trayectoria_educativa, ' . $this->_mappingField($p.'turno') . ' AS ' . $p.'turno, ' . $this->_mappingField($p.'pc_escritorio') . ' AS ' . $p.'pc_escritorio, ' . $this->_mappingField($p.'net_netbook') . ' AS ' . $p.'net_netbook, ' . $this->_mappingField($p.'tablet') . ' AS ' . $p.'tablet, ' . $this->_mappingField($p.'pc_o_tablet') . ' AS ' . $p.'pc_o_tablet, ' . $this->_mappingField($p.'impresora') . ' AS ' . $p.'impresora, ' . $this->_mappingField($p.'conexion_internet_paga') . ' AS ' . $p.'conexion_internet_paga, ' . $this->_mappingField($p.'telefono_celular') . ' AS ' . $p.'telefono_celular, ' . $this->_mappingField($p.'numero_documento') . ' AS ' . $p.'numero_documento';
  }

  public function _fieldsExclusive(){
    $p = $this->prf();
    return '
' . $this->_mappingField($p.'id') . ', ' . $this->_mappingField($p.'nombres') . ', ' . $this->_mappingField($p.'apellidos') . ', ' . $this->_mappingField($p.'genero') . ', ' . $this->_mappingField($p.'telefono') . ', ' . $this->_mappingField($p.'email') . ', ' . $this->_mappingField($p.'trayectoria_educativa') . ', ' . $this->_mappingField($p.'turno') . ', ' . $this->_mappingField($p.'pc_escritorio') . ', ' . $this->_mappingField($p.'net_netbook') . ', ' . $this->_mappingField($p.'tablet') . ', ' . $this->_mappingField($p.'pc_o_tablet') . ', ' . $this->_mappingField($p.'impresora') . ', ' . $this->_mappingField($p.'conexion_internet_paga') . ', ' . $this->_mappingField($p.'telefono_celular') . ', ' . $this->_mappingField($p.'numero_documento') . '';
  }

  public function _conditionFieldStruct($field, $option, $value){
    $p = $this->prf();

    $f = $this->_mappingField($field);
    switch ($field){
      case "{$p}id": return $this->format->conditionText($f, $value, $option);
      case "{$p}nombres": return $this->format->conditionText($f, $value, $option);
      case "{$p}apellidos": return $this->format->conditionText($f, $value, $option);
      case "{$p}genero": return $this->format->conditionText($f, $value, $option);
      case "{$p}telefono": return $this->format->conditionText($f, $value, $option);
      case "{$p}email": return $this->format->conditionText($f, $value, $option);
      case "{$p}trayectoria_educativa": return $this->format->conditionText($f, $value, $option);
      case "{$p}turno": return $this->format->conditionText($f, $value, $option);
      case "{$p}pc_escritorio": return $this->format->conditionBoolean($f, $value);
      case "{$p}net_netbook": return $this->format->conditionBoolean($f, $value);
      case "{$p}tablet": return $this->format->conditionBoolean($f, $value);
      case "{$p}pc_o_tablet": return $this->format->conditionBoolean($f, $value);
      case "{$p}impresora": return $this->format->conditionBoolean($f, $value);
      case "{$p}conexion_internet_paga": return $this->format->conditionBoolean($f, $value);
      case "{$p}telefono_celular": return $this->format->conditionText($f, $value, $option);
      case "{$p}numero_documento": return $this->format->conditionText($f, $value, $option);

      case "{$p}max_id": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_id": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_id": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_nombres": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_nombres": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_nombres": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_apellidos": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_apellidos": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_apellidos": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_genero": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_genero": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_genero": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_telefono": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_telefono": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_telefono": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_email": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_email": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_email": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_trayectoria_educativa": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_trayectoria_educativa": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_trayectoria_educativa": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_turno": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_turno": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_turno": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_pc_escritorio": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_pc_escritorio": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_pc_escritorio": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_net_netbook": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_net_netbook": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_net_netbook": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_tablet": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_tablet": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_tablet": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_pc_o_tablet": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_pc_o_tablet": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_pc_o_tablet": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_impresora": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_impresora": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_impresora": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_conexion_internet_paga": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_conexion_internet_paga": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_conexion_internet_paga": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_telefono_celular": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_telefono_celular": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_telefono_celular": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_numero_documento": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_numero_documento": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_numero_documento": return $this->format->conditionNumber($f, $value, $option);

      default: return $this->_conditionFieldStructMain($field, $option, $value);
    }
  }


  public function format(array $row){
    $row_ = array();
    if(array_key_exists('id', $row))  $row_['id'] = $this->format->string($row['id']);
    if(array_key_exists('nombres', $row)) $row_['nombres'] = $this->format->string($row['nombres']);
    if(array_key_exists('apellidos', $row)) $row_['apellidos'] = $this->format->string($row['apellidos']);
    if(array_key_exists('genero', $row)) $row_['genero'] = $this->format->string($row['genero']);
    if(array_key_exists('telefono', $row)) $row_['telefono'] = $this->format->string($row['telefono']);
    if(array_key_exists('email', $row)) $row_['email'] = $this->format->string($row['email']);
    if(array_key_exists('trayectoria_educativa', $row)) $row_['trayectoria_educativa'] = $this->format->string($row['trayectoria_educativa']);
    if(array_key_exists('turno', $row)) $row_['turno'] = $this->format->string($row['turno']);
    if(array_key_exists('pc_escritorio', $row)) $row_['pc_escritorio'] = $this->format->boolean($row['pc_escritorio']);
    if(array_key_exists('net_netbook', $row)) $row_['net_netbook'] = $this->format->boolean($row['net_netbook']);
    if(array_key_exists('tablet', $row)) $row_['tablet'] = $this->format->boolean($row['tablet']);
    if(array_key_exists('pc_o_tablet', $row)) $row_['pc_o_tablet'] = $this->format->boolean($row['pc_o_tablet']);
    if(array_key_exists('impresora', $row)) $row_['impresora'] = $this->format->boolean($row['impresora']);
    if(array_key_exists('conexion_internet_paga', $row)) $row_['conexion_internet_paga'] = $this->format->boolean($row['conexion_internet_paga']);
    if(array_key_exists('telefono_celular', $row)) $row_['telefono_celular'] = $this->format->string($row['telefono_celular']);
    if(array_key_exists('numero_documento', $row)) $row_['numero_documento'] = $this->format->string($row['numero_documento']);

    return $row_;
  }


}
