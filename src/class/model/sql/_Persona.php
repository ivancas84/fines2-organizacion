<?php
require_once("class/model/Sql.php");

class _PersonaSql extends EntitySql{

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
      case $p.'archivo_2019': return $t.".archivo_2019";
      case $p.'archivo_2020': return $t.".archivo_2020";
      case $p.'drive': return $t.".drive";
      case $p.'cuil': return $t.".cuil";
      case $p.'analitico_dni': return $t.".analitico_dni";
      case $p.'analitico_cuil': return $t.".analitico_cuil";
      case $p.'analitico_partida': return $t.".analitico_partida";
      case $p.'analitico_certificado': return $t.".analitico_certificado";
      case $p.'fecha_nacimiento': return $t.".fecha_nacimiento";
      case $p.'ingreso': return $t.".ingreso";
      case $p.'observaciones': return $t.".observaciones";
      case $p.'activo': return $t.".activo";
      case $p.'fila': return $t.".fila";

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

      case $p.'min_archivo_2019': return "MIN({$t}.archivo_2019)";
      case $p.'max_archivo_2019': return "MAX({$t}.archivo_2019)";
      case $p.'count_archivo_2019': return "COUNT({$t}.archivo_2019)";

      case $p.'min_archivo_2020': return "MIN({$t}.archivo_2020)";
      case $p.'max_archivo_2020': return "MAX({$t}.archivo_2020)";
      case $p.'count_archivo_2020': return "COUNT({$t}.archivo_2020)";

      case $p.'min_drive': return "MIN({$t}.drive)";
      case $p.'max_drive': return "MAX({$t}.drive)";
      case $p.'count_drive': return "COUNT({$t}.drive)";

      case $p.'min_cuil': return "MIN({$t}.cuil)";
      case $p.'max_cuil': return "MAX({$t}.cuil)";
      case $p.'count_cuil': return "COUNT({$t}.cuil)";

      case $p.'min_analitico_dni': return "MIN({$t}.analitico_dni)";
      case $p.'max_analitico_dni': return "MAX({$t}.analitico_dni)";
      case $p.'count_analitico_dni': return "COUNT({$t}.analitico_dni)";

      case $p.'min_analitico_cuil': return "MIN({$t}.analitico_cuil)";
      case $p.'max_analitico_cuil': return "MAX({$t}.analitico_cuil)";
      case $p.'count_analitico_cuil': return "COUNT({$t}.analitico_cuil)";

      case $p.'min_analitico_partida': return "MIN({$t}.analitico_partida)";
      case $p.'max_analitico_partida': return "MAX({$t}.analitico_partida)";
      case $p.'count_analitico_partida': return "COUNT({$t}.analitico_partida)";

      case $p.'min_analitico_certificado': return "MIN({$t}.analitico_certificado)";
      case $p.'max_analitico_certificado': return "MAX({$t}.analitico_certificado)";
      case $p.'count_analitico_certificado': return "COUNT({$t}.analitico_certificado)";

      case $p.'avg_fecha_nacimiento': return "AVG({$t}.fecha_nacimiento)";
      case $p.'min_fecha_nacimiento': return "MIN({$t}.fecha_nacimiento)";
      case $p.'max_fecha_nacimiento': return "MAX({$t}.fecha_nacimiento)";
      case $p.'count_fecha_nacimiento': return "COUNT({$t}.fecha_nacimiento)";

      case $p.'min_ingreso': return "MIN({$t}.ingreso)";
      case $p.'max_ingreso': return "MAX({$t}.ingreso)";
      case $p.'count_ingreso': return "COUNT({$t}.ingreso)";

      case $p.'min_observaciones': return "MIN({$t}.observaciones)";
      case $p.'max_observaciones': return "MAX({$t}.observaciones)";
      case $p.'count_observaciones': return "COUNT({$t}.observaciones)";

      case $p.'min_activo': return "MIN({$t}.activo)";
      case $p.'max_activo': return "MAX({$t}.activo)";
      case $p.'count_activo': return "COUNT({$t}.activo)";

      case $p.'sum_fila': return "SUM({$t}.fila)";
      case $p.'avg_fila': return "AVG({$t}.fila)";
      case $p.'min_fila': return "MIN({$t}.fila)";
      case $p.'max_fila': return "MAX({$t}.fila)";
      case $p.'count_fila': return "COUNT({$t}.fila)";

      case $p.'_label': return "CONCAT_WS(' ', {$t}.id)";
      default: return null;
    }
  }

  public function _fields(){
    //No todos los campos se extraen de la entidad, por eso es necesario mapearlos
    $p = $this->prf();
    return '
' . $this->_mappingField($p.'id') . ' AS ' . $p.'id, ' . $this->_mappingField($p.'region') . ' AS ' . $p.'region, ' . $this->_mappingField($p.'distrito') . ' AS ' . $p.'distrito, ' . $this->_mappingField($p.'localidad') . ' AS ' . $p.'localidad, ' . $this->_mappingField($p.'programa') . ' AS ' . $p.'programa, ' . $this->_mappingField($p.'inscripcion_men') . ' AS ' . $p.'inscripcion_men, ' . $this->_mappingField($p.'cens') . ' AS ' . $p.'cens, ' . $this->_mappingField($p.'sede') . ' AS ' . $p.'sede, ' . $this->_mappingField($p.'comision') . ' AS ' . $p.'comision, ' . $this->_mappingField($p.'tramo') . ' AS ' . $p.'tramo, ' . $this->_mappingField($p.'identificador') . ' AS ' . $p.'identificador, ' . $this->_mappingField($p.'numero_inscripcion') . ' AS ' . $p.'numero_inscripcion, ' . $this->_mappingField($p.'numero_documento') . ' AS ' . $p.'numero_documento, ' . $this->_mappingField($p.'apellidos') . ' AS ' . $p.'apellidos, ' . $this->_mappingField($p.'nombres') . ' AS ' . $p.'nombres, ' . $this->_mappingField($p.'genero') . ' AS ' . $p.'genero, ' . $this->_mappingField($p.'telefono') . ' AS ' . $p.'telefono, ' . $this->_mappingField($p.'correo') . ' AS ' . $p.'correo, ' . $this->_mappingField($p.'trayectoria_educativa') . ' AS ' . $p.'trayectoria_educativa, ' . $this->_mappingField($p.'turno') . ' AS ' . $p.'turno, ' . $this->_mappingField($p.'pc_escritorio') . ' AS ' . $p.'pc_escritorio, ' . $this->_mappingField($p.'net_notebook') . ' AS ' . $p.'net_notebook, ' . $this->_mappingField($p.'tablet') . ' AS ' . $p.'tablet, ' . $this->_mappingField($p.'pc_tablet') . ' AS ' . $p.'pc_tablet, ' . $this->_mappingField($p.'impresora') . ' AS ' . $p.'impresora, ' . $this->_mappingField($p.'conexion_internet_paga') . ' AS ' . $p.'conexion_internet_paga, ' . $this->_mappingField($p.'telefono_celular') . ' AS ' . $p.'telefono_celular, ' . $this->_mappingField($p.'comision_2020') . ' AS ' . $p.'comision_2020, ' . $this->_mappingField($p.'archivo_2019') . ' AS ' . $p.'archivo_2019, ' . $this->_mappingField($p.'archivo_2020') . ' AS ' . $p.'archivo_2020, ' . $this->_mappingField($p.'drive') . ' AS ' . $p.'drive, ' . $this->_mappingField($p.'cuil') . ' AS ' . $p.'cuil, ' . $this->_mappingField($p.'analitico_dni') . ' AS ' . $p.'analitico_dni, ' . $this->_mappingField($p.'analitico_cuil') . ' AS ' . $p.'analitico_cuil, ' . $this->_mappingField($p.'analitico_partida') . ' AS ' . $p.'analitico_partida, ' . $this->_mappingField($p.'analitico_certificado') . ' AS ' . $p.'analitico_certificado, ' . $this->_mappingField($p.'fecha_nacimiento') . ' AS ' . $p.'fecha_nacimiento, ' . $this->_mappingField($p.'ingreso') . ' AS ' . $p.'ingreso, ' . $this->_mappingField($p.'observaciones') . ' AS ' . $p.'observaciones, ' . $this->_mappingField($p.'activo') . ' AS ' . $p.'activo, ' . $this->_mappingField($p.'fila') . ' AS ' . $p.'fila';
  }

  public function _fieldsExclusive(){
    $p = $this->prf();
    return '
' . $this->_mappingField($p.'id') . ', ' . $this->_mappingField($p.'region') . ', ' . $this->_mappingField($p.'distrito') . ', ' . $this->_mappingField($p.'localidad') . ', ' . $this->_mappingField($p.'programa') . ', ' . $this->_mappingField($p.'inscripcion_men') . ', ' . $this->_mappingField($p.'cens') . ', ' . $this->_mappingField($p.'sede') . ', ' . $this->_mappingField($p.'comision') . ', ' . $this->_mappingField($p.'tramo') . ', ' . $this->_mappingField($p.'identificador') . ', ' . $this->_mappingField($p.'numero_inscripcion') . ', ' . $this->_mappingField($p.'numero_documento') . ', ' . $this->_mappingField($p.'apellidos') . ', ' . $this->_mappingField($p.'nombres') . ', ' . $this->_mappingField($p.'genero') . ', ' . $this->_mappingField($p.'telefono') . ', ' . $this->_mappingField($p.'correo') . ', ' . $this->_mappingField($p.'trayectoria_educativa') . ', ' . $this->_mappingField($p.'turno') . ', ' . $this->_mappingField($p.'pc_escritorio') . ', ' . $this->_mappingField($p.'net_notebook') . ', ' . $this->_mappingField($p.'tablet') . ', ' . $this->_mappingField($p.'pc_tablet') . ', ' . $this->_mappingField($p.'impresora') . ', ' . $this->_mappingField($p.'conexion_internet_paga') . ', ' . $this->_mappingField($p.'telefono_celular') . ', ' . $this->_mappingField($p.'comision_2020') . ', ' . $this->_mappingField($p.'archivo_2019') . ', ' . $this->_mappingField($p.'archivo_2020') . ', ' . $this->_mappingField($p.'drive') . ', ' . $this->_mappingField($p.'cuil') . ', ' . $this->_mappingField($p.'analitico_dni') . ', ' . $this->_mappingField($p.'analitico_cuil') . ', ' . $this->_mappingField($p.'analitico_partida') . ', ' . $this->_mappingField($p.'analitico_certificado') . ', ' . $this->_mappingField($p.'fecha_nacimiento') . ', ' . $this->_mappingField($p.'ingreso') . ', ' . $this->_mappingField($p.'observaciones') . ', ' . $this->_mappingField($p.'activo') . ', ' . $this->_mappingField($p.'fila') . '';
  }

  public function _conditionFieldStruct($field, $option, $value){
    $p = $this->prf();

    switch ($field){
      case "{$p}id": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}id_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}id"), $value, $option);

      case "{$p}region": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}region_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}region"), $value, $option);

      case "{$p}distrito": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}distrito_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}distrito"), $value, $option);

      case "{$p}localidad": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}localidad_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}localidad"), $value, $option);

      case "{$p}programa": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}programa_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}programa"), $value, $option);

      case "{$p}inscripcion_men": return $this->format->conditionBoolean($this->_mappingField($field), $value);
    case "{$p}inscripcion_men_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}inscripcion_men"), $value, $option);

      case "{$p}cens": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}cens_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}cens"), $value, $option);

      case "{$p}sede": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}sede_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}sede"), $value, $option);

      case "{$p}comision": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}comision_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}comision"), $value, $option);

      case "{$p}tramo": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}tramo_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}tramo"), $value, $option);

      case "{$p}identificador": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}identificador_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}identificador"), $value, $option);

      case "{$p}numero_inscripcion": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}numero_inscripcion_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}numero_inscripcion"), $value, $option);

      case "{$p}numero_documento": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}numero_documento_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}numero_documento"), $value, $option);

      case "{$p}apellidos": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}apellidos_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}apellidos"), $value, $option);

      case "{$p}nombres": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}nombres_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}nombres"), $value, $option);

      case "{$p}genero": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}genero_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}genero"), $value, $option);

      case "{$p}telefono": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}telefono_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}telefono"), $value, $option);

      case "{$p}correo": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}correo_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}correo"), $value, $option);

      case "{$p}trayectoria_educativa": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}trayectoria_educativa_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}trayectoria_educativa"), $value, $option);

      case "{$p}turno": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}turno_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}turno"), $value, $option);

      case "{$p}pc_escritorio": return $this->format->conditionBoolean($this->_mappingField($field), $value);
    case "{$p}pc_escritorio_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}pc_escritorio"), $value, $option);

      case "{$p}net_notebook": return $this->format->conditionBoolean($this->_mappingField($field), $value);
    case "{$p}net_notebook_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}net_notebook"), $value, $option);

      case "{$p}tablet": return $this->format->conditionBoolean($this->_mappingField($field), $value);
    case "{$p}tablet_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}tablet"), $value, $option);

      case "{$p}pc_tablet": return $this->format->conditionBoolean($this->_mappingField($field), $value);
    case "{$p}pc_tablet_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}pc_tablet"), $value, $option);

      case "{$p}impresora": return $this->format->conditionBoolean($this->_mappingField($field), $value);
    case "{$p}impresora_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}impresora"), $value, $option);

      case "{$p}conexion_internet_paga": return $this->format->conditionBoolean($this->_mappingField($field), $value);
    case "{$p}conexion_internet_paga_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}conexion_internet_paga"), $value, $option);

      case "{$p}telefono_celular": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}telefono_celular_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}telefono_celular"), $value, $option);

      case "{$p}comision_2020": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}comision_2020_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}comision_2020"), $value, $option);

      case "{$p}archivo_2019": return $this->format->conditionBoolean($this->_mappingField($field), $value);
    case "{$p}archivo_2019_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}archivo_2019"), $value, $option);

      case "{$p}archivo_2020": return $this->format->conditionBoolean($this->_mappingField($field), $value);
    case "{$p}archivo_2020_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}archivo_2020"), $value, $option);

      case "{$p}drive": return $this->format->conditionBoolean($this->_mappingField($field), $value);
    case "{$p}drive_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}drive"), $value, $option);

      case "{$p}cuil": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}cuil_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}cuil"), $value, $option);

      case "{$p}analitico_dni": return $this->format->conditionBoolean($this->_mappingField($field), $value);
    case "{$p}analitico_dni_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}analitico_dni"), $value, $option);

      case "{$p}analitico_cuil": return $this->format->conditionBoolean($this->_mappingField($field), $value);
    case "{$p}analitico_cuil_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}analitico_cuil"), $value, $option);

      case "{$p}analitico_partida": return $this->format->conditionBoolean($this->_mappingField($field), $value);
    case "{$p}analitico_partida_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}analitico_partida"), $value, $option);

      case "{$p}analitico_certificado": return $this->format->conditionBoolean($this->_mappingField($field), $value);
    case "{$p}analitico_certificado_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}analitico_certificado"), $value, $option);

      case "{$p}fecha_nacimiento": return $this->format->conditionDate($this->_mappingField($field), $value, $option);
      case "{$p}fecha_nacimiento_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}fecha_nacimiento"), $value, $option);

      case "{$p}ingreso": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}ingreso_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}ingreso"), $value, $option);

      case "{$p}observaciones": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}observaciones_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}observaciones"), $value, $option);

      case "{$p}activo": return $this->format->conditionBoolean($this->_mappingField($field), $value);
    case "{$p}activo_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}activo"), $value, $option);

      case "{$p}fila": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}fila_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}fila"), $value, $option);


      case "{$p}max_id": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_id_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_id"), $value, $option);

      case "{$p}min_id": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_id_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_id"), $value, $option);

      case "{$p}count_id": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_id_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_id"), $value, $option);


      case "{$p}max_region": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_region_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_region"), $value, $option);

      case "{$p}min_region": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_region_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_region"), $value, $option);

      case "{$p}count_region": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_region_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_region"), $value, $option);


      case "{$p}max_distrito": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_distrito_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_distrito"), $value, $option);

      case "{$p}min_distrito": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_distrito_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_distrito"), $value, $option);

      case "{$p}count_distrito": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_distrito_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_distrito"), $value, $option);


      case "{$p}max_localidad": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_localidad_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_localidad"), $value, $option);

      case "{$p}min_localidad": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_localidad_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_localidad"), $value, $option);

      case "{$p}count_localidad": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_localidad_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_localidad"), $value, $option);


      case "{$p}max_programa": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_programa_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_programa"), $value, $option);

      case "{$p}min_programa": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_programa_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_programa"), $value, $option);

      case "{$p}count_programa": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_programa_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_programa"), $value, $option);


      case "{$p}max_inscripcion_men": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_inscripcion_men_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_inscripcion_men"), $value, $option);

      case "{$p}min_inscripcion_men": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_inscripcion_men_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_inscripcion_men"), $value, $option);

      case "{$p}count_inscripcion_men": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_inscripcion_men_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_inscripcion_men"), $value, $option);


      case "{$p}max_cens": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_cens_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_cens"), $value, $option);

      case "{$p}min_cens": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_cens_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_cens"), $value, $option);

      case "{$p}count_cens": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_cens_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_cens"), $value, $option);


      case "{$p}max_sede": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_sede_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_sede"), $value, $option);

      case "{$p}min_sede": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_sede_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_sede"), $value, $option);

      case "{$p}count_sede": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_sede_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_sede"), $value, $option);


      case "{$p}max_comision": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_comision_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_comision"), $value, $option);

      case "{$p}min_comision": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_comision_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_comision"), $value, $option);

      case "{$p}count_comision": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_comision_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_comision"), $value, $option);


      case "{$p}max_tramo": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_tramo_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_tramo"), $value, $option);

      case "{$p}min_tramo": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_tramo_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_tramo"), $value, $option);

      case "{$p}count_tramo": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_tramo_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_tramo"), $value, $option);


      case "{$p}max_identificador": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_identificador_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_identificador"), $value, $option);

      case "{$p}min_identificador": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_identificador_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_identificador"), $value, $option);

      case "{$p}count_identificador": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_identificador_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_identificador"), $value, $option);


      case "{$p}max_numero_inscripcion": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_numero_inscripcion_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_numero_inscripcion"), $value, $option);

      case "{$p}min_numero_inscripcion": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_numero_inscripcion_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_numero_inscripcion"), $value, $option);

      case "{$p}count_numero_inscripcion": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_numero_inscripcion_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_numero_inscripcion"), $value, $option);


      case "{$p}max_numero_documento": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_numero_documento_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_numero_documento"), $value, $option);

      case "{$p}min_numero_documento": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_numero_documento_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_numero_documento"), $value, $option);

      case "{$p}count_numero_documento": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_numero_documento_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_numero_documento"), $value, $option);


      case "{$p}max_apellidos": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_apellidos_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_apellidos"), $value, $option);

      case "{$p}min_apellidos": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_apellidos_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_apellidos"), $value, $option);

      case "{$p}count_apellidos": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_apellidos_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_apellidos"), $value, $option);


      case "{$p}max_nombres": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_nombres_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_nombres"), $value, $option);

      case "{$p}min_nombres": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_nombres_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_nombres"), $value, $option);

      case "{$p}count_nombres": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_nombres_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_nombres"), $value, $option);


      case "{$p}max_genero": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_genero_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_genero"), $value, $option);

      case "{$p}min_genero": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_genero_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_genero"), $value, $option);

      case "{$p}count_genero": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_genero_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_genero"), $value, $option);


      case "{$p}max_telefono": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_telefono_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_telefono"), $value, $option);

      case "{$p}min_telefono": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_telefono_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_telefono"), $value, $option);

      case "{$p}count_telefono": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_telefono_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_telefono"), $value, $option);


      case "{$p}max_correo": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_correo_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_correo"), $value, $option);

      case "{$p}min_correo": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_correo_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_correo"), $value, $option);

      case "{$p}count_correo": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_correo_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_correo"), $value, $option);


      case "{$p}max_trayectoria_educativa": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_trayectoria_educativa_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_trayectoria_educativa"), $value, $option);

      case "{$p}min_trayectoria_educativa": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_trayectoria_educativa_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_trayectoria_educativa"), $value, $option);

      case "{$p}count_trayectoria_educativa": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_trayectoria_educativa_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_trayectoria_educativa"), $value, $option);


      case "{$p}max_turno": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_turno_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_turno"), $value, $option);

      case "{$p}min_turno": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_turno_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_turno"), $value, $option);

      case "{$p}count_turno": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_turno_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_turno"), $value, $option);


      case "{$p}max_pc_escritorio": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_pc_escritorio_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_pc_escritorio"), $value, $option);

      case "{$p}min_pc_escritorio": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_pc_escritorio_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_pc_escritorio"), $value, $option);

      case "{$p}count_pc_escritorio": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_pc_escritorio_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_pc_escritorio"), $value, $option);


      case "{$p}max_net_notebook": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_net_notebook_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_net_notebook"), $value, $option);

      case "{$p}min_net_notebook": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_net_notebook_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_net_notebook"), $value, $option);

      case "{$p}count_net_notebook": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_net_notebook_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_net_notebook"), $value, $option);


      case "{$p}max_tablet": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_tablet_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_tablet"), $value, $option);

      case "{$p}min_tablet": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_tablet_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_tablet"), $value, $option);

      case "{$p}count_tablet": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_tablet_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_tablet"), $value, $option);


      case "{$p}max_pc_tablet": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_pc_tablet_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_pc_tablet"), $value, $option);

      case "{$p}min_pc_tablet": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_pc_tablet_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_pc_tablet"), $value, $option);

      case "{$p}count_pc_tablet": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_pc_tablet_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_pc_tablet"), $value, $option);


      case "{$p}max_impresora": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_impresora_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_impresora"), $value, $option);

      case "{$p}min_impresora": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_impresora_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_impresora"), $value, $option);

      case "{$p}count_impresora": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_impresora_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_impresora"), $value, $option);


      case "{$p}max_conexion_internet_paga": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_conexion_internet_paga_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_conexion_internet_paga"), $value, $option);

      case "{$p}min_conexion_internet_paga": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_conexion_internet_paga_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_conexion_internet_paga"), $value, $option);

      case "{$p}count_conexion_internet_paga": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_conexion_internet_paga_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_conexion_internet_paga"), $value, $option);


      case "{$p}max_telefono_celular": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_telefono_celular_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_telefono_celular"), $value, $option);

      case "{$p}min_telefono_celular": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_telefono_celular_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_telefono_celular"), $value, $option);

      case "{$p}count_telefono_celular": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_telefono_celular_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_telefono_celular"), $value, $option);


      case "{$p}max_comision_2020": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_comision_2020_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_comision_2020"), $value, $option);

      case "{$p}min_comision_2020": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_comision_2020_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_comision_2020"), $value, $option);

      case "{$p}count_comision_2020": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_comision_2020_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_comision_2020"), $value, $option);


      case "{$p}max_archivo_2019": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_archivo_2019_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_archivo_2019"), $value, $option);

      case "{$p}min_archivo_2019": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_archivo_2019_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_archivo_2019"), $value, $option);

      case "{$p}count_archivo_2019": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_archivo_2019_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_archivo_2019"), $value, $option);


      case "{$p}max_archivo_2020": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_archivo_2020_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_archivo_2020"), $value, $option);

      case "{$p}min_archivo_2020": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_archivo_2020_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_archivo_2020"), $value, $option);

      case "{$p}count_archivo_2020": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_archivo_2020_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_archivo_2020"), $value, $option);


      case "{$p}max_drive": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_drive_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_drive"), $value, $option);

      case "{$p}min_drive": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_drive_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_drive"), $value, $option);

      case "{$p}count_drive": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_drive_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_drive"), $value, $option);


      case "{$p}max_cuil": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_cuil_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_cuil"), $value, $option);

      case "{$p}min_cuil": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_cuil_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_cuil"), $value, $option);

      case "{$p}count_cuil": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_cuil_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_cuil"), $value, $option);


      case "{$p}max_analitico_dni": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_analitico_dni_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_analitico_dni"), $value, $option);

      case "{$p}min_analitico_dni": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_analitico_dni_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_analitico_dni"), $value, $option);

      case "{$p}count_analitico_dni": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_analitico_dni_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_analitico_dni"), $value, $option);


      case "{$p}max_analitico_cuil": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_analitico_cuil_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_analitico_cuil"), $value, $option);

      case "{$p}min_analitico_cuil": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_analitico_cuil_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_analitico_cuil"), $value, $option);

      case "{$p}count_analitico_cuil": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_analitico_cuil_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_analitico_cuil"), $value, $option);


      case "{$p}max_analitico_partida": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_analitico_partida_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_analitico_partida"), $value, $option);

      case "{$p}min_analitico_partida": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_analitico_partida_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_analitico_partida"), $value, $option);

      case "{$p}count_analitico_partida": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_analitico_partida_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_analitico_partida"), $value, $option);


      case "{$p}max_analitico_certificado": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_analitico_certificado_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_analitico_certificado"), $value, $option);

      case "{$p}min_analitico_certificado": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_analitico_certificado_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_analitico_certificado"), $value, $option);

      case "{$p}count_analitico_certificado": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_analitico_certificado_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_analitico_certificado"), $value, $option);


      case "{$p}avg_fecha_nacimiento": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}avg_fecha_nacimiento_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}avg_fecha_nacimiento"), $value, $option);

      case "{$p}max_fecha_nacimiento": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_fecha_nacimiento_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_fecha_nacimiento"), $value, $option);

      case "{$p}min_fecha_nacimiento": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_fecha_nacimiento_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_fecha_nacimiento"), $value, $option);

      case "{$p}count_fecha_nacimiento": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_fecha_nacimiento_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_fecha_nacimiento"), $value, $option);


      case "{$p}max_ingreso": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_ingreso_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_ingreso"), $value, $option);

      case "{$p}min_ingreso": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_ingreso_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_ingreso"), $value, $option);

      case "{$p}count_ingreso": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_ingreso_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_ingreso"), $value, $option);


      case "{$p}max_observaciones": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_observaciones_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_observaciones"), $value, $option);

      case "{$p}min_observaciones": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_observaciones_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_observaciones"), $value, $option);

      case "{$p}count_observaciones": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_observaciones_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_observaciones"), $value, $option);


      case "{$p}max_activo": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_activo_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_activo"), $value, $option);

      case "{$p}min_activo": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_activo_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_activo"), $value, $option);

      case "{$p}count_activo": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_activo_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_activo"), $value, $option);


      case "{$p}sum_fila": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}sum_fila_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}sum_fila"), $value, $option);

      case "{$p}avg_fila": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}avg_fila_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}avg_fila"), $value, $option);

      case "{$p}max_fila": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_fila_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_fila"), $value, $option);

      case "{$p}min_fila": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_fila_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_fila"), $value, $option);

      case "{$p}count_fila": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_fila_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_fila"), $value, $option);


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
    if(array_key_exists('archivo_2019', $row)) $row_['archivo_2019'] = $this->format->boolean($row['archivo_2019']);
    if(array_key_exists('archivo_2020', $row)) $row_['archivo_2020'] = $this->format->boolean($row['archivo_2020']);
    if(array_key_exists('drive', $row)) $row_['drive'] = $this->format->boolean($row['drive']);
    if(array_key_exists('cuil', $row)) $row_['cuil'] = $this->format->string($row['cuil']);
    if(array_key_exists('analitico_dni', $row)) $row_['analitico_dni'] = $this->format->boolean($row['analitico_dni']);
    if(array_key_exists('analitico_cuil', $row)) $row_['analitico_cuil'] = $this->format->boolean($row['analitico_cuil']);
    if(array_key_exists('analitico_partida', $row)) $row_['analitico_partida'] = $this->format->boolean($row['analitico_partida']);
    if(array_key_exists('analitico_certificado', $row)) $row_['analitico_certificado'] = $this->format->boolean($row['analitico_certificado']);
    if(array_key_exists('fecha_nacimiento', $row)) $row_['fecha_nacimiento'] = $this->format->date($row['fecha_nacimiento']);
    if(array_key_exists('ingreso', $row)) $row_['ingreso'] = $this->format->string($row['ingreso']);
    if(array_key_exists('observaciones', $row)) $row_['observaciones'] = $this->format->string($row['observaciones']);
    if(array_key_exists('activo', $row)) $row_['activo'] = $this->format->boolean($row['activo']);
    if(array_key_exists('fila', $row)) $row_['fila'] = $this->format->numeric($row['fila']);

    return $row_;
  }


}
