<?php

require_once("class/model/Entity.php");
require_once("class/model/Field.php");

class _PersonaEntity extends Entity {
  public $name = "persona";
  public $alias = "pers";
  public $nf = ['region', 'distrito', 'localidad', 'programa', 'inscripcion_men', 'cens', 'sede', 'comision', 'tramo', 'identificador', 'numero_inscripcion', 'numero_documento', 'apellidos', 'nombres', 'genero', 'telefono', 'correo', 'trayectoria_educativa', 'turno', 'pc_escritorio', 'net_notebook', 'tablet', 'pc_tablet', 'impresora', 'conexion_internet_paga', 'telefono_celular', 'comision_2020', 'archivo_2019', 'archivo_2020', 'drive', 'cuil', 'analitico_dni', 'analitico_cuil', 'analitico_partida', 'analitico_certificado', 'fecha_nacimiento', 'ingreso', 'observaciones', 'activo', 'fila', 'error', 'id_comision', 'actualizado', 'informado'];
  public $mu = [];
  public $_u = [];
  public $notNull = ['id', 'region', 'distrito', 'inscripcion_men', 'numero_documento', 'pc_escritorio', 'net_notebook', 'tablet', 'pc_tablet', 'impresora', 'conexion_internet_paga', 'archivo_2019', 'archivo_2020', 'drive', 'analitico_dni', 'analitico_cuil', 'analitico_partida', 'analitico_certificado', 'activo'];
  public $unique = ['id', 'numero_documento'];
  public $admin = ['id', 'region', 'distrito', 'localidad', 'programa', 'inscripcion_men', 'cens', 'sede', 'comision', 'tramo', 'identificador', 'numero_inscripcion', 'numero_documento', 'apellidos', 'nombres', 'genero', 'telefono', 'correo', 'trayectoria_educativa', 'turno', 'pc_escritorio', 'net_notebook', 'tablet', 'pc_tablet', 'impresora', 'conexion_internet_paga', 'telefono_celular', 'comision_2020', 'archivo_2019', 'archivo_2020', 'drive', 'cuil', 'analitico_dni', 'analitico_cuil', 'analitico_partida', 'analitico_certificado', 'fecha_nacimiento', 'ingreso', 'observaciones', 'activo', 'fila', 'error', 'id_comision', 'actualizado', 'informado'];



}
