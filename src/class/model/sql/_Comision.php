<?php
require_once("class/model/Sql.php");

class _ComisionSql extends EntitySql{

  public function _mappingField($field){
    $p = $this->prf();
    $t = $this->prt();

    if($f = $this->_mappingFieldMain($field)) return $f;
    switch ($field) {
      case $p.'id': return $t.".id";
      case $p.'id_comision': return $t.".id_comision";
      case $p.'sede': return $t.".sede";
      case $p.'tramo': return $t.".tramo";
      case $p.'comision_2020': return $t.".comision_2020";
      case $p.'cens': return $t.".cens";
      case $p.'domicilio': return $t.".domicilio";
      case $p.'clasificacion': return $t.".clasificacion";
      case $p.'orientacion': return $t.".orientacion";
      case $p.'turno': return $t.".turno";

      case $p.'min_id': return "MIN({$t}.id)";
      case $p.'max_id': return "MAX({$t}.id)";
      case $p.'count_id': return "COUNT({$t}.id)";

      case $p.'min_id_comision': return "MIN({$t}.id_comision)";
      case $p.'max_id_comision': return "MAX({$t}.id_comision)";
      case $p.'count_id_comision': return "COUNT({$t}.id_comision)";

      case $p.'min_sede': return "MIN({$t}.sede)";
      case $p.'max_sede': return "MAX({$t}.sede)";
      case $p.'count_sede': return "COUNT({$t}.sede)";

      case $p.'min_tramo': return "MIN({$t}.tramo)";
      case $p.'max_tramo': return "MAX({$t}.tramo)";
      case $p.'count_tramo': return "COUNT({$t}.tramo)";

      case $p.'min_comision_2020': return "MIN({$t}.comision_2020)";
      case $p.'max_comision_2020': return "MAX({$t}.comision_2020)";
      case $p.'count_comision_2020': return "COUNT({$t}.comision_2020)";

      case $p.'min_cens': return "MIN({$t}.cens)";
      case $p.'max_cens': return "MAX({$t}.cens)";
      case $p.'count_cens': return "COUNT({$t}.cens)";

      case $p.'min_domicilio': return "MIN({$t}.domicilio)";
      case $p.'max_domicilio': return "MAX({$t}.domicilio)";
      case $p.'count_domicilio': return "COUNT({$t}.domicilio)";

      case $p.'min_clasificacion': return "MIN({$t}.clasificacion)";
      case $p.'max_clasificacion': return "MAX({$t}.clasificacion)";
      case $p.'count_clasificacion': return "COUNT({$t}.clasificacion)";

      case $p.'min_orientacion': return "MIN({$t}.orientacion)";
      case $p.'max_orientacion': return "MAX({$t}.orientacion)";
      case $p.'count_orientacion': return "COUNT({$t}.orientacion)";

      case $p.'min_turno': return "MIN({$t}.turno)";
      case $p.'max_turno': return "MAX({$t}.turno)";
      case $p.'count_turno': return "COUNT({$t}.turno)";

      case $p.'_label': return "CONCAT_WS(' ', {$t}.id)";
      default: return null;
    }
  }

  public function _fields(){
    //No todos los campos se extraen de la entidad, por eso es necesario mapearlos
    $p = $this->prf();
    return '
' . $this->_mappingField($p.'id') . ' AS ' . $p.'id, ' . $this->_mappingField($p.'id_comision') . ' AS ' . $p.'id_comision, ' . $this->_mappingField($p.'sede') . ' AS ' . $p.'sede, ' . $this->_mappingField($p.'tramo') . ' AS ' . $p.'tramo, ' . $this->_mappingField($p.'comision_2020') . ' AS ' . $p.'comision_2020, ' . $this->_mappingField($p.'cens') . ' AS ' . $p.'cens, ' . $this->_mappingField($p.'domicilio') . ' AS ' . $p.'domicilio, ' . $this->_mappingField($p.'clasificacion') . ' AS ' . $p.'clasificacion, ' . $this->_mappingField($p.'orientacion') . ' AS ' . $p.'orientacion, ' . $this->_mappingField($p.'turno') . ' AS ' . $p.'turno';
  }

  public function _fieldsExclusive(){
    $p = $this->prf();
    return '
' . $this->_mappingField($p.'id') . ', ' . $this->_mappingField($p.'id_comision') . ', ' . $this->_mappingField($p.'sede') . ', ' . $this->_mappingField($p.'tramo') . ', ' . $this->_mappingField($p.'comision_2020') . ', ' . $this->_mappingField($p.'cens') . ', ' . $this->_mappingField($p.'domicilio') . ', ' . $this->_mappingField($p.'clasificacion') . ', ' . $this->_mappingField($p.'orientacion') . ', ' . $this->_mappingField($p.'turno') . '';
  }

  public function _conditionFieldStruct($field, $option, $value){
    $p = $this->prf();

    switch ($field){
      case "{$p}id": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}id_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}id"), $value, $option);

      case "{$p}id_comision": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}id_comision_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}id_comision"), $value, $option);

      case "{$p}sede": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}sede_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}sede"), $value, $option);

      case "{$p}tramo": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}tramo_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}tramo"), $value, $option);

      case "{$p}comision_2020": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}comision_2020_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}comision_2020"), $value, $option);

      case "{$p}cens": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}cens_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}cens"), $value, $option);

      case "{$p}domicilio": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}domicilio_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}domicilio"), $value, $option);

      case "{$p}clasificacion": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}clasificacion_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}clasificacion"), $value, $option);

      case "{$p}orientacion": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}orientacion_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}orientacion"), $value, $option);

      case "{$p}turno": return $this->format->conditionText($this->_mappingField($field), $value, $option);
      case "{$p}turno_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}turno"), $value, $option);


      case "{$p}max_id": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_id_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_id"), $value, $option);

      case "{$p}min_id": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_id_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_id"), $value, $option);

      case "{$p}count_id": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_id_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_id"), $value, $option);


      case "{$p}max_id_comision": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_id_comision_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_id_comision"), $value, $option);

      case "{$p}min_id_comision": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_id_comision_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_id_comision"), $value, $option);

      case "{$p}count_id_comision": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_id_comision_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_id_comision"), $value, $option);


      case "{$p}max_sede": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_sede_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_sede"), $value, $option);

      case "{$p}min_sede": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_sede_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_sede"), $value, $option);

      case "{$p}count_sede": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_sede_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_sede"), $value, $option);


      case "{$p}max_tramo": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_tramo_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_tramo"), $value, $option);

      case "{$p}min_tramo": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_tramo_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_tramo"), $value, $option);

      case "{$p}count_tramo": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_tramo_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_tramo"), $value, $option);


      case "{$p}max_comision_2020": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_comision_2020_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_comision_2020"), $value, $option);

      case "{$p}min_comision_2020": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_comision_2020_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_comision_2020"), $value, $option);

      case "{$p}count_comision_2020": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_comision_2020_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_comision_2020"), $value, $option);


      case "{$p}max_cens": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_cens_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_cens"), $value, $option);

      case "{$p}min_cens": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_cens_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_cens"), $value, $option);

      case "{$p}count_cens": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_cens_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_cens"), $value, $option);


      case "{$p}max_domicilio": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_domicilio_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_domicilio"), $value, $option);

      case "{$p}min_domicilio": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_domicilio_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_domicilio"), $value, $option);

      case "{$p}count_domicilio": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_domicilio_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_domicilio"), $value, $option);


      case "{$p}max_clasificacion": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_clasificacion_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_clasificacion"), $value, $option);

      case "{$p}min_clasificacion": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_clasificacion_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_clasificacion"), $value, $option);

      case "{$p}count_clasificacion": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_clasificacion_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_clasificacion"), $value, $option);


      case "{$p}max_orientacion": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_orientacion_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_orientacion"), $value, $option);

      case "{$p}min_orientacion": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_orientacion_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_orientacion"), $value, $option);

      case "{$p}count_orientacion": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_orientacion_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_orientacion"), $value, $option);


      case "{$p}max_turno": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}max_turno_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}max_turno"), $value, $option);

      case "{$p}min_turno": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}min_turno_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}min_turno"), $value, $option);

      case "{$p}count_turno": return $this->format->conditionNumber($this->_mappingField($field), $value, $option);
      case "{$p}count_turno_is_set": return $this->format->conditionIsSet($this->_mappingField("{$p}count_turno"), $value, $option);


      default: return $this->_conditionFieldStructMain($field, $option, $value);
    }
  }


  public function format(array $row){
    $row_ = array();
    if(array_key_exists('id', $row))  $row_['id'] = $this->format->string($row['id']);
    if(array_key_exists('id_comision', $row)) $row_['id_comision'] = $this->format->string($row['id_comision']);
    if(array_key_exists('sede', $row)) $row_['sede'] = $this->format->string($row['sede']);
    if(array_key_exists('tramo', $row)) $row_['tramo'] = $this->format->string($row['tramo']);
    if(array_key_exists('comision_2020', $row)) $row_['comision_2020'] = $this->format->string($row['comision_2020']);
    if(array_key_exists('cens', $row)) $row_['cens'] = $this->format->string($row['cens']);
    if(array_key_exists('domicilio', $row)) $row_['domicilio'] = $this->format->string($row['domicilio']);
    if(array_key_exists('clasificacion', $row)) $row_['clasificacion'] = $this->format->string($row['clasificacion']);
    if(array_key_exists('orientacion', $row)) $row_['orientacion'] = $this->format->string($row['orientacion']);
    if(array_key_exists('turno', $row)) $row_['turno'] = $this->format->string($row['turno']);

    return $row_;
  }


}
