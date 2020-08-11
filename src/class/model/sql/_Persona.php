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
      case $p.'region': return $t.".region";
      case $p.'distrito': return $t.".distrito";
      case $p.'localidad': return $t.".localidad";
      case $p.'programa': return $t.".programa";
      case $p.'inscripcion_men': return $t.".inscripcion_men";
      case $p.'cens': return $t.".cens";
      case $p.'sede': return $t.".sede";
      case $p.'comision': return $t.".comision";
      case $p.'tramo': return $t.".tramo";
      case $p.'identificador': return $t.".identificador";
      case $p.'numero_inscripcion': return $t.".numero_inscripcion";
      case $p.'numero_documento': return $t.".numero_documento";
      case $p.'apellidos': return $t.".apellidos";
      case $p.'nombres': return $t.".nombres";
      case $p.'genero': return $t.".genero";
      case $p.'telefono': return $t.".telefono";
      case $p.'correo': return $t.".correo";
      case $p.'trayectoria_educativa': return $t.".trayectoria_educativa";
      case $p.'turno': return $t.".turno";
      case $p.'pc_escritorio': return $t.".pc_escritorio";
      case $p.'net_notebook': return $t.".net_notebook";
      case $p.'tablet': return $t.".tablet";
      case $p.'pc_tablet': return $t.".pc_tablet";
      case $p.'impresora': return $t.".impresora";
      case $p.'conexion_internet_paga': return $t.".conexion_internet_paga";
      case $p.'telefono_celular': return $t.".telefono_celular";
      case $p.'comision_2020': return $t.".comision_2020";

      case $p.'min_id': return "MIN({$t}.id)";
      case $p.'max_id': return "MAX({$t}.id)";
      case $p.'count_id': return "COUNT({$t}.id)";

      case $p.'min_region': return "MIN({$t}.region)";
      case $p.'max_region': return "MAX({$t}.region)";
      case $p.'count_region': return "COUNT({$t}.region)";

      case $p.'min_distrito': return "MIN({$t}.distrito)";
      case $p.'max_distrito': return "MAX({$t}.distrito)";
      case $p.'count_distrito': return "COUNT({$t}.distrito)";

      case $p.'min_localidad': return "MIN({$t}.localidad)";
      case $p.'max_localidad': return "MAX({$t}.localidad)";
      case $p.'count_localidad': return "COUNT({$t}.localidad)";

      case $p.'min_programa': return "MIN({$t}.programa)";
      case $p.'max_programa': return "MAX({$t}.programa)";
      case $p.'count_programa': return "COUNT({$t}.programa)";

      case $p.'min_inscripcion_men': return "MIN({$t}.inscripcion_men)";
      case $p.'max_inscripcion_men': return "MAX({$t}.inscripcion_men)";
      case $p.'count_inscripcion_men': return "COUNT({$t}.inscripcion_men)";

      case $p.'min_cens': return "MIN({$t}.cens)";
      case $p.'max_cens': return "MAX({$t}.cens)";
      case $p.'count_cens': return "COUNT({$t}.cens)";

      case $p.'min_sede': return "MIN({$t}.sede)";
      case $p.'max_sede': return "MAX({$t}.sede)";
      case $p.'count_sede': return "COUNT({$t}.sede)";

      case $p.'min_comision': return "MIN({$t}.comision)";
      case $p.'max_comision': return "MAX({$t}.comision)";
      case $p.'count_comision': return "COUNT({$t}.comision)";

      case $p.'min_tramo': return "MIN({$t}.tramo)";
      case $p.'max_tramo': return "MAX({$t}.tramo)";
      case $p.'count_tramo': return "COUNT({$t}.tramo)";

      case $p.'min_identificador': return "MIN({$t}.identificador)";
      case $p.'max_identificador': return "MAX({$t}.identificador)";
      case $p.'count_identificador': return "COUNT({$t}.identificador)";

      case $p.'min_numero_inscripcion': return "MIN({$t}.numero_inscripcion)";
      case $p.'max_numero_inscripcion': return "MAX({$t}.numero_inscripcion)";
      case $p.'count_numero_inscripcion': return "COUNT({$t}.numero_inscripcion)";

      case $p.'min_numero_documento': return "MIN({$t}.numero_documento)";
      case $p.'max_numero_documento': return "MAX({$t}.numero_documento)";
      case $p.'count_numero_documento': return "COUNT({$t}.numero_documento)";

      case $p.'min_apellidos': return "MIN({$t}.apellidos)";
      case $p.'max_apellidos': return "MAX({$t}.apellidos)";
      case $p.'count_apellidos': return "COUNT({$t}.apellidos)";

      case $p.'min_nombres': return "MIN({$t}.nombres)";
      case $p.'max_nombres': return "MAX({$t}.nombres)";
      case $p.'count_nombres': return "COUNT({$t}.nombres)";

      case $p.'min_genero': return "MIN({$t}.genero)";
      case $p.'max_genero': return "MAX({$t}.genero)";
      case $p.'count_genero': return "COUNT({$t}.genero)";

      case $p.'min_telefono': return "MIN({$t}.telefono)";
      case $p.'max_telefono': return "MAX({$t}.telefono)";
      case $p.'count_telefono': return "COUNT({$t}.telefono)";

      case $p.'min_correo': return "MIN({$t}.correo)";
      case $p.'max_correo': return "MAX({$t}.correo)";
      case $p.'count_correo': return "COUNT({$t}.correo)";

      case $p.'min_trayectoria_educativa': return "MIN({$t}.trayectoria_educativa)";
      case $p.'max_trayectoria_educativa': return "MAX({$t}.trayectoria_educativa)";
      case $p.'count_trayectoria_educativa': return "COUNT({$t}.trayectoria_educativa)";

      case $p.'min_turno': return "MIN({$t}.turno)";
      case $p.'max_turno': return "MAX({$t}.turno)";
      case $p.'count_turno': return "COUNT({$t}.turno)";

      case $p.'min_pc_escritorio': return "MIN({$t}.pc_escritorio)";
      case $p.'max_pc_escritorio': return "MAX({$t}.pc_escritorio)";
      case $p.'count_pc_escritorio': return "COUNT({$t}.pc_escritorio)";

      case $p.'min_net_notebook': return "MIN({$t}.net_notebook)";
      case $p.'max_net_notebook': return "MAX({$t}.net_notebook)";
      case $p.'count_net_notebook': return "COUNT({$t}.net_notebook)";

      case $p.'min_tablet': return "MIN({$t}.tablet)";
      case $p.'max_tablet': return "MAX({$t}.tablet)";
      case $p.'count_tablet': return "COUNT({$t}.tablet)";

      case $p.'min_pc_tablet': return "MIN({$t}.pc_tablet)";
      case $p.'max_pc_tablet': return "MAX({$t}.pc_tablet)";
      case $p.'count_pc_tablet': return "COUNT({$t}.pc_tablet)";

      case $p.'min_impresora': return "MIN({$t}.impresora)";
      case $p.'max_impresora': return "MAX({$t}.impresora)";
      case $p.'count_impresora': return "COUNT({$t}.impresora)";

      case $p.'min_conexion_internet_paga': return "MIN({$t}.conexion_internet_paga)";
      case $p.'max_conexion_internet_paga': return "MAX({$t}.conexion_internet_paga)";
      case $p.'count_conexion_internet_paga': return "COUNT({$t}.conexion_internet_paga)";

      case $p.'min_telefono_celular': return "MIN({$t}.telefono_celular)";
      case $p.'max_telefono_celular': return "MAX({$t}.telefono_celular)";
      case $p.'count_telefono_celular': return "COUNT({$t}.telefono_celular)";

      case $p.'min_comision_2020': return "MIN({$t}.comision_2020)";
      case $p.'max_comision_2020': return "MAX({$t}.comision_2020)";
      case $p.'count_comision_2020': return "COUNT({$t}.comision_2020)";

      case $p.'_label': return "CONCAT_WS(' ', {$t}.id)";
      default: return null;
    }
  }

  public function _fields(){
    //No todos los campos se extraen de la entidad, por eso es necesario mapearlos
    $p = $this->prf();
    return '
' . $this->_mappingField($p.'id') . ' AS ' . $p.'id, ' . $this->_mappingField($p.'region') . ' AS ' . $p.'region, ' . $this->_mappingField($p.'distrito') . ' AS ' . $p.'distrito, ' . $this->_mappingField($p.'localidad') . ' AS ' . $p.'localidad, ' . $this->_mappingField($p.'programa') . ' AS ' . $p.'programa, ' . $this->_mappingField($p.'inscripcion_men') . ' AS ' . $p.'inscripcion_men, ' . $this->_mappingField($p.'cens') . ' AS ' . $p.'cens, ' . $this->_mappingField($p.'sede') . ' AS ' . $p.'sede, ' . $this->_mappingField($p.'comision') . ' AS ' . $p.'comision, ' . $this->_mappingField($p.'tramo') . ' AS ' . $p.'tramo, ' . $this->_mappingField($p.'identificador') . ' AS ' . $p.'identificador, ' . $this->_mappingField($p.'numero_inscripcion') . ' AS ' . $p.'numero_inscripcion, ' . $this->_mappingField($p.'numero_documento') . ' AS ' . $p.'numero_documento, ' . $this->_mappingField($p.'apellidos') . ' AS ' . $p.'apellidos, ' . $this->_mappingField($p.'nombres') . ' AS ' . $p.'nombres, ' . $this->_mappingField($p.'genero') . ' AS ' . $p.'genero, ' . $this->_mappingField($p.'telefono') . ' AS ' . $p.'telefono, ' . $this->_mappingField($p.'correo') . ' AS ' . $p.'correo, ' . $this->_mappingField($p.'trayectoria_educativa') . ' AS ' . $p.'trayectoria_educativa, ' . $this->_mappingField($p.'turno') . ' AS ' . $p.'turno, ' . $this->_mappingField($p.'pc_escritorio') . ' AS ' . $p.'pc_escritorio, ' . $this->_mappingField($p.'net_notebook') . ' AS ' . $p.'net_notebook, ' . $this->_mappingField($p.'tablet') . ' AS ' . $p.'tablet, ' . $this->_mappingField($p.'pc_tablet') . ' AS ' . $p.'pc_tablet, ' . $this->_mappingField($p.'impresora') . ' AS ' . $p.'impresora, ' . $this->_mappingField($p.'conexion_internet_paga') . ' AS ' . $p.'conexion_internet_paga, ' . $this->_mappingField($p.'telefono_celular') . ' AS ' . $p.'telefono_celular, ' . $this->_mappingField($p.'comision_2020') . ' AS ' . $p.'comision_2020';
  }

  public function _fieldsExclusive(){
    $p = $this->prf();
    return '
' . $this->_mappingField($p.'id') . ', ' . $this->_mappingField($p.'region') . ', ' . $this->_mappingField($p.'distrito') . ', ' . $this->_mappingField($p.'localidad') . ', ' . $this->_mappingField($p.'programa') . ', ' . $this->_mappingField($p.'inscripcion_men') . ', ' . $this->_mappingField($p.'cens') . ', ' . $this->_mappingField($p.'sede') . ', ' . $this->_mappingField($p.'comision') . ', ' . $this->_mappingField($p.'tramo') . ', ' . $this->_mappingField($p.'identificador') . ', ' . $this->_mappingField($p.'numero_inscripcion') . ', ' . $this->_mappingField($p.'numero_documento') . ', ' . $this->_mappingField($p.'apellidos') . ', ' . $this->_mappingField($p.'nombres') . ', ' . $this->_mappingField($p.'genero') . ', ' . $this->_mappingField($p.'telefono') . ', ' . $this->_mappingField($p.'correo') . ', ' . $this->_mappingField($p.'trayectoria_educativa') . ', ' . $this->_mappingField($p.'turno') . ', ' . $this->_mappingField($p.'pc_escritorio') . ', ' . $this->_mappingField($p.'net_notebook') . ', ' . $this->_mappingField($p.'tablet') . ', ' . $this->_mappingField($p.'pc_tablet') . ', ' . $this->_mappingField($p.'impresora') . ', ' . $this->_mappingField($p.'conexion_internet_paga') . ', ' . $this->_mappingField($p.'telefono_celular') . ', ' . $this->_mappingField($p.'comision_2020') . '';
  }

  public function _conditionFieldStruct($field, $option, $value){
    $p = $this->prf();

    $f = $this->_mappingField($field);
    switch ($field){
      case "{$p}id": return $this->format->conditionText($f, $value, $option);
      case "{$p}region": return $this->format->conditionText($f, $value, $option);
      case "{$p}distrito": return $this->format->conditionText($f, $value, $option);
      case "{$p}localidad": return $this->format->conditionText($f, $value, $option);
      case "{$p}programa": return $this->format->conditionText($f, $value, $option);
      case "{$p}inscripcion_men": return $this->format->conditionBoolean($f, $value);
      case "{$p}cens": return $this->format->conditionText($f, $value, $option);
      case "{$p}sede": return $this->format->conditionText($f, $value, $option);
      case "{$p}comision": return $this->format->conditionText($f, $value, $option);
      case "{$p}tramo": return $this->format->conditionText($f, $value, $option);
      case "{$p}identificador": return $this->format->conditionText($f, $value, $option);
      case "{$p}numero_inscripcion": return $this->format->conditionText($f, $value, $option);
      case "{$p}numero_documento": return $this->format->conditionText($f, $value, $option);
      case "{$p}apellidos": return $this->format->conditionText($f, $value, $option);
      case "{$p}nombres": return $this->format->conditionText($f, $value, $option);
      case "{$p}genero": return $this->format->conditionText($f, $value, $option);
      case "{$p}telefono": return $this->format->conditionText($f, $value, $option);
      case "{$p}correo": return $this->format->conditionText($f, $value, $option);
      case "{$p}trayectoria_educativa": return $this->format->conditionText($f, $value, $option);
      case "{$p}turno": return $this->format->conditionText($f, $value, $option);
      case "{$p}pc_escritorio": return $this->format->conditionBoolean($f, $value);
      case "{$p}net_notebook": return $this->format->conditionBoolean($f, $value);
      case "{$p}tablet": return $this->format->conditionBoolean($f, $value);
      case "{$p}pc_tablet": return $this->format->conditionBoolean($f, $value);
      case "{$p}impresora": return $this->format->conditionBoolean($f, $value);
      case "{$p}conexion_internet_paga": return $this->format->conditionBoolean($f, $value);
      case "{$p}telefono_celular": return $this->format->conditionText($f, $value, $option);
      case "{$p}comision_2020": return $this->format->conditionText($f, $value, $option);

      case "{$p}max_id": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_id": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_id": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_region": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_region": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_region": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_distrito": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_distrito": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_distrito": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_localidad": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_localidad": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_localidad": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_programa": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_programa": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_programa": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_inscripcion_men": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_inscripcion_men": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_inscripcion_men": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_cens": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_cens": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_cens": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_sede": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_sede": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_sede": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_comision": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_comision": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_comision": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_tramo": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_tramo": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_tramo": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_identificador": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_identificador": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_identificador": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_numero_inscripcion": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_numero_inscripcion": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_numero_inscripcion": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_numero_documento": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_numero_documento": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_numero_documento": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_apellidos": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_apellidos": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_apellidos": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_nombres": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_nombres": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_nombres": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_genero": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_genero": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_genero": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_telefono": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_telefono": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_telefono": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_correo": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_correo": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_correo": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_trayectoria_educativa": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_trayectoria_educativa": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_trayectoria_educativa": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_turno": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_turno": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_turno": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_pc_escritorio": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_pc_escritorio": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_pc_escritorio": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_net_notebook": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_net_notebook": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_net_notebook": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_tablet": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_tablet": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_tablet": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_pc_tablet": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_pc_tablet": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_pc_tablet": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_impresora": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_impresora": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_impresora": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_conexion_internet_paga": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_conexion_internet_paga": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_conexion_internet_paga": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_telefono_celular": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_telefono_celular": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_telefono_celular": return $this->format->conditionNumber($f, $value, $option);

      case "{$p}max_comision_2020": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}min_comision_2020": return $this->format->conditionNumber($f, $value, $option);
      case "{$p}count_comision_2020": return $this->format->conditionNumber($f, $value, $option);

      default: return $this->_conditionFieldStructMain($field, $option, $value);
    }
  }


  public function format(array $row){
    $row_ = array();
    if(array_key_exists('id', $row))  $row_['id'] = $this->format->string($row['id']);
    if(array_key_exists('region', $row)) $row_['region'] = $this->format->string($row['region']);
    if(array_key_exists('distrito', $row)) $row_['distrito'] = $this->format->string($row['distrito']);
    if(array_key_exists('localidad', $row)) $row_['localidad'] = $this->format->string($row['localidad']);
    if(array_key_exists('programa', $row)) $row_['programa'] = $this->format->string($row['programa']);
    if(array_key_exists('inscripcion_men', $row)) $row_['inscripcion_men'] = $this->format->boolean($row['inscripcion_men']);
    if(array_key_exists('cens', $row)) $row_['cens'] = $this->format->string($row['cens']);
    if(array_key_exists('sede', $row)) $row_['sede'] = $this->format->string($row['sede']);
    if(array_key_exists('comision', $row)) $row_['comision'] = $this->format->string($row['comision']);
    if(array_key_exists('tramo', $row)) $row_['tramo'] = $this->format->string($row['tramo']);
    if(array_key_exists('identificador', $row)) $row_['identificador'] = $this->format->string($row['identificador']);
    if(array_key_exists('numero_inscripcion', $row)) $row_['numero_inscripcion'] = $this->format->string($row['numero_inscripcion']);
    if(array_key_exists('numero_documento', $row)) $row_['numero_documento'] = $this->format->string($row['numero_documento']);
    if(array_key_exists('apellidos', $row)) $row_['apellidos'] = $this->format->string($row['apellidos']);
    if(array_key_exists('nombres', $row)) $row_['nombres'] = $this->format->string($row['nombres']);
    if(array_key_exists('genero', $row)) $row_['genero'] = $this->format->string($row['genero']);
    if(array_key_exists('telefono', $row)) $row_['telefono'] = $this->format->string($row['telefono']);
    if(array_key_exists('correo', $row)) $row_['correo'] = $this->format->string($row['correo']);
    if(array_key_exists('trayectoria_educativa', $row)) $row_['trayectoria_educativa'] = $this->format->string($row['trayectoria_educativa']);
    if(array_key_exists('turno', $row)) $row_['turno'] = $this->format->string($row['turno']);
    if(array_key_exists('pc_escritorio', $row)) $row_['pc_escritorio'] = $this->format->boolean($row['pc_escritorio']);
    if(array_key_exists('net_notebook', $row)) $row_['net_notebook'] = $this->format->boolean($row['net_notebook']);
    if(array_key_exists('tablet', $row)) $row_['tablet'] = $this->format->boolean($row['tablet']);
    if(array_key_exists('pc_tablet', $row)) $row_['pc_tablet'] = $this->format->boolean($row['pc_tablet']);
    if(array_key_exists('impresora', $row)) $row_['impresora'] = $this->format->boolean($row['impresora']);
    if(array_key_exists('conexion_internet_paga', $row)) $row_['conexion_internet_paga'] = $this->format->boolean($row['conexion_internet_paga']);
    if(array_key_exists('telefono_celular', $row)) $row_['telefono_celular'] = $this->format->string($row['telefono_celular']);
    if(array_key_exists('comision_2020', $row)) $row_['comision_2020'] = $this->format->string($row['comision_2020']);

    return $row_;
  }


}
