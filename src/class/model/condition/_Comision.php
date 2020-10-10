<?php
require_once("class/model/entityOptions/Condition.php");

class _ComisionCondition extends ConditionEntityOptions{

  public function id($option, $value) { 
    $field = $this->mapping->id();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setId($value);
    if(!$this->value->checkId()) throw new Exception("Valor incorrecto: Id");
    return "({$field} {$option} {$this->value->sqlId()})";  
  }

  public function idIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->id(), $option, settypebool($value));
  }

  public function idComision($option, $value) { 
    $field = $this->mapping->idComision();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setIdComision($value);
    if(!$this->value->checkIdComision()) throw new Exception("Valor incorrecto: Id Comision");
    return "({$field} {$option} {$this->value->sqlIdComision()})";  
  }

  public function idComisionIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->idComision(), $option, settypebool($value));
  }

  public function sede($option, $value) { 
    $field = $this->mapping->sede();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setSede($value);
    if(!$this->value->checkSede()) throw new Exception("Valor incorrecto: Sede");
    return "({$field} {$option} {$this->value->sqlSede()})";  
  }

  public function sedeIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->sede(), $option, settypebool($value));
  }

  public function tramo($option, $value) { 
    $field = $this->mapping->tramo();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setTramo($value);
    if(!$this->value->checkTramo()) throw new Exception("Valor incorrecto: Tramo");
    return "({$field} {$option} {$this->value->sqlTramo()})";  
  }

  public function tramoIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->tramo(), $option, settypebool($value));
  }

  public function comision2020($option, $value) { 
    $field = $this->mapping->comision2020();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setComision2020($value);
    if(!$this->value->checkComision2020()) throw new Exception("Valor incorrecto: Comision 2020");
    return "({$field} {$option} {$this->value->sqlComision2020()})";  
  }

  public function comision2020IsSet($option, $value) { 
    return $this->sql->exists($this->mapping->comision2020(), $option, settypebool($value));
  }

  public function cens($option, $value) { 
    $field = $this->mapping->cens();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setCens($value);
    if(!$this->value->checkCens()) throw new Exception("Valor incorrecto: Cens");
    return "({$field} {$option} {$this->value->sqlCens()})";  
  }

  public function censIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->cens(), $option, settypebool($value));
  }

  public function domicilio($option, $value) { 
    $field = $this->mapping->domicilio();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setDomicilio($value);
    if(!$this->value->checkDomicilio()) throw new Exception("Valor incorrecto: Domicilio");
    return "({$field} {$option} {$this->value->sqlDomicilio()})";  
  }

  public function domicilioIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->domicilio(), $option, settypebool($value));
  }

  public function clasificacion($option, $value) { 
    $field = $this->mapping->clasificacion();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setClasificacion($value);
    if(!$this->value->checkClasificacion()) throw new Exception("Valor incorrecto: Clasificacion");
    return "({$field} {$option} {$this->value->sqlClasificacion()})";  
  }

  public function clasificacionIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->clasificacion(), $option, settypebool($value));
  }

  public function orientacion($option, $value) { 
    $field = $this->mapping->orientacion();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setOrientacion($value);
    if(!$this->value->checkOrientacion()) throw new Exception("Valor incorrecto: Orientacion");
    return "({$field} {$option} {$this->value->sqlOrientacion()})";  
  }

  public function orientacionIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->orientacion(), $option, settypebool($value));
  }

  public function turno($option, $value) { 
    $field = $this->mapping->turno();
    if($c = $this->sql->exists($field, $option, $value)) return $c;
    if($c = $this->sql->approx($field, $option, $value)) return $c;
    $this->value->setTurno($value);
    if(!$this->value->checkTurno()) throw new Exception("Valor incorrecto: Turno");
    return "({$field} {$option} {$this->value->sqlTurno()})";  
  }

  public function turnoIsSet($option, $value) { 
    return $this->sql->exists($this->mapping->turno(), $option, settypebool($value));
  }




}
