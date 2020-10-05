<?php
require_once("class/model/entityOptions/FieldAlias.php");

class _PersonaFieldAlias extends FieldAliasEntityOptions{

  public function id() { return $this->mapping->id() . " AS " . $this->_pf() . "id"; }
  public function region() { return $this->mapping->region() . " AS " . $this->_pf() . "region"; }
  public function distrito() { return $this->mapping->distrito() . " AS " . $this->_pf() . "distrito"; }
  public function localidad() { return $this->mapping->localidad() . " AS " . $this->_pf() . "localidad"; }
  public function programa() { return $this->mapping->programa() . " AS " . $this->_pf() . "programa"; }
  public function inscripcionMen() { return $this->mapping->inscripcionMen() . " AS " . $this->_pf() . "inscripcion_men"; }
  public function cens() { return $this->mapping->cens() . " AS " . $this->_pf() . "cens"; }
  public function sede() { return $this->mapping->sede() . " AS " . $this->_pf() . "sede"; }
  public function comision() { return $this->mapping->comision() . " AS " . $this->_pf() . "comision"; }
  public function tramo() { return $this->mapping->tramo() . " AS " . $this->_pf() . "tramo"; }
  public function identificador() { return $this->mapping->identificador() . " AS " . $this->_pf() . "identificador"; }
  public function numeroInscripcion() { return $this->mapping->numeroInscripcion() . " AS " . $this->_pf() . "numero_inscripcion"; }
  public function numeroDocumento() { return $this->mapping->numeroDocumento() . " AS " . $this->_pf() . "numero_documento"; }
  public function apellidos() { return $this->mapping->apellidos() . " AS " . $this->_pf() . "apellidos"; }
  public function nombres() { return $this->mapping->nombres() . " AS " . $this->_pf() . "nombres"; }
  public function genero() { return $this->mapping->genero() . " AS " . $this->_pf() . "genero"; }
  public function telefono() { return $this->mapping->telefono() . " AS " . $this->_pf() . "telefono"; }
  public function correo() { return $this->mapping->correo() . " AS " . $this->_pf() . "correo"; }
  public function trayectoriaEducativa() { return $this->mapping->trayectoriaEducativa() . " AS " . $this->_pf() . "trayectoria_educativa"; }
  public function turno() { return $this->mapping->turno() . " AS " . $this->_pf() . "turno"; }
  public function pcEscritorio() { return $this->mapping->pcEscritorio() . " AS " . $this->_pf() . "pc_escritorio"; }
  public function netNotebook() { return $this->mapping->netNotebook() . " AS " . $this->_pf() . "net_notebook"; }
  public function tablet() { return $this->mapping->tablet() . " AS " . $this->_pf() . "tablet"; }
  public function pcTablet() { return $this->mapping->pcTablet() . " AS " . $this->_pf() . "pc_tablet"; }
  public function impresora() { return $this->mapping->impresora() . " AS " . $this->_pf() . "impresora"; }
  public function conexionInternetPaga() { return $this->mapping->conexionInternetPaga() . " AS " . $this->_pf() . "conexion_internet_paga"; }
  public function telefonoCelular() { return $this->mapping->telefonoCelular() . " AS " . $this->_pf() . "telefono_celular"; }
  public function comision2020() { return $this->mapping->comision2020() . " AS " . $this->_pf() . "comision_2020"; }
  public function archivo2019() { return $this->mapping->archivo2019() . " AS " . $this->_pf() . "archivo_2019"; }
  public function archivo2020() { return $this->mapping->archivo2020() . " AS " . $this->_pf() . "archivo_2020"; }
  public function drive() { return $this->mapping->drive() . " AS " . $this->_pf() . "drive"; }
  public function cuil() { return $this->mapping->cuil() . " AS " . $this->_pf() . "cuil"; }
  public function analiticoDni() { return $this->mapping->analiticoDni() . " AS " . $this->_pf() . "analitico_dni"; }
  public function analiticoCuil() { return $this->mapping->analiticoCuil() . " AS " . $this->_pf() . "analitico_cuil"; }
  public function analiticoPartida() { return $this->mapping->analiticoPartida() . " AS " . $this->_pf() . "analitico_partida"; }
  public function analiticoCertificado() { return $this->mapping->analiticoCertificado() . " AS " . $this->_pf() . "analitico_certificado"; }
  public function fechaNacimiento() { return $this->mapping->fechaNacimiento() . " AS " . $this->_pf() . "fecha_nacimiento"; }
  public function ingreso() { return $this->mapping->ingreso() . " AS " . $this->_pf() . "ingreso"; }
  public function observaciones() { return $this->mapping->observaciones() . " AS " . $this->_pf() . "observaciones"; }
  public function activo() { return $this->mapping->activo() . " AS " . $this->_pf() . "activo"; }
  public function fila() { return $this->mapping->fila() . " AS " . $this->_pf() . "fila"; }
  public function error() { return $this->mapping->error() . " AS " . $this->_pf() . "error"; }
  public function idComision() { return $this->mapping->idComision() . " AS " . $this->_pf() . "id_comision"; }
  public function actualizado() { return $this->mapping->actualizado() . " AS " . $this->_pf() . "actualizado"; }
  public function actualizadoDate() { return $this->mapping->actualizadoDate() . " AS " . $this->_pf() . "actualizado_date"; }
  public function actualizadoYm() { return $this->mapping->actualizadoYm() . " AS " . $this->_pf() . "actualizado_ym"; }
  public function actualizadoY() { return $this->mapping->actualizadoY() . " AS " . $this->_pf() . "actualizado_y"; }
  public function informado() { return $this->mapping->informado() . " AS " . $this->_pf() . "informado"; }
  public function informadoDate() { return $this->mapping->informadoDate() . " AS " . $this->_pf() . "informado_date"; }
  public function informadoYm() { return $this->mapping->informadoYm() . " AS " . $this->_pf() . "informado_ym"; }
  public function informadoY() { return $this->mapping->informadoY() . " AS " . $this->_pf() . "informado_y"; }

  public function minId() { return $this->mapping->minId() . " AS " . $this->_pf() . "min_id"; }
  public function maxId() { return $this->mapping->maxId() . " AS " . $this->_pf() . "max_id"; }
  public function countId() { return $this->mapping->countId() . " AS " . $this->_pf() . "count_id"; }

  public function minRegion() { return $this->mapping->minRegion() . " AS " . $this->_pf() . "min_region"; }
  public function maxRegion() { return $this->mapping->maxRegion() . " AS " . $this->_pf() . "max_region"; }
  public function countRegion() { return $this->mapping->countRegion() . " AS " . $this->_pf() . "count_region"; }

  public function minDistrito() { return $this->mapping->minDistrito() . " AS " . $this->_pf() . "min_distrito"; }
  public function maxDistrito() { return $this->mapping->maxDistrito() . " AS " . $this->_pf() . "max_distrito"; }
  public function countDistrito() { return $this->mapping->countDistrito() . " AS " . $this->_pf() . "count_distrito"; }

  public function minLocalidad() { return $this->mapping->minLocalidad() . " AS " . $this->_pf() . "min_localidad"; }
  public function maxLocalidad() { return $this->mapping->maxLocalidad() . " AS " . $this->_pf() . "max_localidad"; }
  public function countLocalidad() { return $this->mapping->countLocalidad() . " AS " . $this->_pf() . "count_localidad"; }

  public function minPrograma() { return $this->mapping->minPrograma() . " AS " . $this->_pf() . "min_programa"; }
  public function maxPrograma() { return $this->mapping->maxPrograma() . " AS " . $this->_pf() . "max_programa"; }
  public function countPrograma() { return $this->mapping->countPrograma() . " AS " . $this->_pf() . "count_programa"; }

  public function minInscripcionMen() { return $this->mapping->minInscripcionMen() . " AS " . $this->_pf() . "min_inscripcion_men"; }
  public function maxInscripcionMen() { return $this->mapping->maxInscripcionMen() . " AS " . $this->_pf() . "max_inscripcion_men"; }
  public function countInscripcionMen() { return $this->mapping->countInscripcionMen() . " AS " . $this->_pf() . "count_inscripcion_men"; }

  public function minCens() { return $this->mapping->minCens() . " AS " . $this->_pf() . "min_cens"; }
  public function maxCens() { return $this->mapping->maxCens() . " AS " . $this->_pf() . "max_cens"; }
  public function countCens() { return $this->mapping->countCens() . " AS " . $this->_pf() . "count_cens"; }

  public function minSede() { return $this->mapping->minSede() . " AS " . $this->_pf() . "min_sede"; }
  public function maxSede() { return $this->mapping->maxSede() . " AS " . $this->_pf() . "max_sede"; }
  public function countSede() { return $this->mapping->countSede() . " AS " . $this->_pf() . "count_sede"; }

  public function minComision() { return $this->mapping->minComision() . " AS " . $this->_pf() . "min_comision"; }
  public function maxComision() { return $this->mapping->maxComision() . " AS " . $this->_pf() . "max_comision"; }
  public function countComision() { return $this->mapping->countComision() . " AS " . $this->_pf() . "count_comision"; }

  public function minTramo() { return $this->mapping->minTramo() . " AS " . $this->_pf() . "min_tramo"; }
  public function maxTramo() { return $this->mapping->maxTramo() . " AS " . $this->_pf() . "max_tramo"; }
  public function countTramo() { return $this->mapping->countTramo() . " AS " . $this->_pf() . "count_tramo"; }

  public function minIdentificador() { return $this->mapping->minIdentificador() . " AS " . $this->_pf() . "min_identificador"; }
  public function maxIdentificador() { return $this->mapping->maxIdentificador() . " AS " . $this->_pf() . "max_identificador"; }
  public function countIdentificador() { return $this->mapping->countIdentificador() . " AS " . $this->_pf() . "count_identificador"; }

  public function minNumeroInscripcion() { return $this->mapping->minNumeroInscripcion() . " AS " . $this->_pf() . "min_numero_inscripcion"; }
  public function maxNumeroInscripcion() { return $this->mapping->maxNumeroInscripcion() . " AS " . $this->_pf() . "max_numero_inscripcion"; }
  public function countNumeroInscripcion() { return $this->mapping->countNumeroInscripcion() . " AS " . $this->_pf() . "count_numero_inscripcion"; }

  public function minNumeroDocumento() { return $this->mapping->minNumeroDocumento() . " AS " . $this->_pf() . "min_numero_documento"; }
  public function maxNumeroDocumento() { return $this->mapping->maxNumeroDocumento() . " AS " . $this->_pf() . "max_numero_documento"; }
  public function countNumeroDocumento() { return $this->mapping->countNumeroDocumento() . " AS " . $this->_pf() . "count_numero_documento"; }

  public function minApellidos() { return $this->mapping->minApellidos() . " AS " . $this->_pf() . "min_apellidos"; }
  public function maxApellidos() { return $this->mapping->maxApellidos() . " AS " . $this->_pf() . "max_apellidos"; }
  public function countApellidos() { return $this->mapping->countApellidos() . " AS " . $this->_pf() . "count_apellidos"; }

  public function minNombres() { return $this->mapping->minNombres() . " AS " . $this->_pf() . "min_nombres"; }
  public function maxNombres() { return $this->mapping->maxNombres() . " AS " . $this->_pf() . "max_nombres"; }
  public function countNombres() { return $this->mapping->countNombres() . " AS " . $this->_pf() . "count_nombres"; }

  public function minGenero() { return $this->mapping->minGenero() . " AS " . $this->_pf() . "min_genero"; }
  public function maxGenero() { return $this->mapping->maxGenero() . " AS " . $this->_pf() . "max_genero"; }
  public function countGenero() { return $this->mapping->countGenero() . " AS " . $this->_pf() . "count_genero"; }

  public function minTelefono() { return $this->mapping->minTelefono() . " AS " . $this->_pf() . "min_telefono"; }
  public function maxTelefono() { return $this->mapping->maxTelefono() . " AS " . $this->_pf() . "max_telefono"; }
  public function countTelefono() { return $this->mapping->countTelefono() . " AS " . $this->_pf() . "count_telefono"; }

  public function minCorreo() { return $this->mapping->minCorreo() . " AS " . $this->_pf() . "min_correo"; }
  public function maxCorreo() { return $this->mapping->maxCorreo() . " AS " . $this->_pf() . "max_correo"; }
  public function countCorreo() { return $this->mapping->countCorreo() . " AS " . $this->_pf() . "count_correo"; }

  public function minTrayectoriaEducativa() { return $this->mapping->minTrayectoriaEducativa() . " AS " . $this->_pf() . "min_trayectoria_educativa"; }
  public function maxTrayectoriaEducativa() { return $this->mapping->maxTrayectoriaEducativa() . " AS " . $this->_pf() . "max_trayectoria_educativa"; }
  public function countTrayectoriaEducativa() { return $this->mapping->countTrayectoriaEducativa() . " AS " . $this->_pf() . "count_trayectoria_educativa"; }

  public function minTurno() { return $this->mapping->minTurno() . " AS " . $this->_pf() . "min_turno"; }
  public function maxTurno() { return $this->mapping->maxTurno() . " AS " . $this->_pf() . "max_turno"; }
  public function countTurno() { return $this->mapping->countTurno() . " AS " . $this->_pf() . "count_turno"; }

  public function minPcEscritorio() { return $this->mapping->minPcEscritorio() . " AS " . $this->_pf() . "min_pc_escritorio"; }
  public function maxPcEscritorio() { return $this->mapping->maxPcEscritorio() . " AS " . $this->_pf() . "max_pc_escritorio"; }
  public function countPcEscritorio() { return $this->mapping->countPcEscritorio() . " AS " . $this->_pf() . "count_pc_escritorio"; }

  public function minNetNotebook() { return $this->mapping->minNetNotebook() . " AS " . $this->_pf() . "min_net_notebook"; }
  public function maxNetNotebook() { return $this->mapping->maxNetNotebook() . " AS " . $this->_pf() . "max_net_notebook"; }
  public function countNetNotebook() { return $this->mapping->countNetNotebook() . " AS " . $this->_pf() . "count_net_notebook"; }

  public function minTablet() { return $this->mapping->minTablet() . " AS " . $this->_pf() . "min_tablet"; }
  public function maxTablet() { return $this->mapping->maxTablet() . " AS " . $this->_pf() . "max_tablet"; }
  public function countTablet() { return $this->mapping->countTablet() . " AS " . $this->_pf() . "count_tablet"; }

  public function minPcTablet() { return $this->mapping->minPcTablet() . " AS " . $this->_pf() . "min_pc_tablet"; }
  public function maxPcTablet() { return $this->mapping->maxPcTablet() . " AS " . $this->_pf() . "max_pc_tablet"; }
  public function countPcTablet() { return $this->mapping->countPcTablet() . " AS " . $this->_pf() . "count_pc_tablet"; }

  public function minImpresora() { return $this->mapping->minImpresora() . " AS " . $this->_pf() . "min_impresora"; }
  public function maxImpresora() { return $this->mapping->maxImpresora() . " AS " . $this->_pf() . "max_impresora"; }
  public function countImpresora() { return $this->mapping->countImpresora() . " AS " . $this->_pf() . "count_impresora"; }

  public function minConexionInternetPaga() { return $this->mapping->minConexionInternetPaga() . " AS " . $this->_pf() . "min_conexion_internet_paga"; }
  public function maxConexionInternetPaga() { return $this->mapping->maxConexionInternetPaga() . " AS " . $this->_pf() . "max_conexion_internet_paga"; }
  public function countConexionInternetPaga() { return $this->mapping->countConexionInternetPaga() . " AS " . $this->_pf() . "count_conexion_internet_paga"; }

  public function minTelefonoCelular() { return $this->mapping->minTelefonoCelular() . " AS " . $this->_pf() . "min_telefono_celular"; }
  public function maxTelefonoCelular() { return $this->mapping->maxTelefonoCelular() . " AS " . $this->_pf() . "max_telefono_celular"; }
  public function countTelefonoCelular() { return $this->mapping->countTelefonoCelular() . " AS " . $this->_pf() . "count_telefono_celular"; }

  public function minComision2020() { return $this->mapping->minComision2020() . " AS " . $this->_pf() . "min_comision_2020"; }
  public function maxComision2020() { return $this->mapping->maxComision2020() . " AS " . $this->_pf() . "max_comision_2020"; }
  public function countComision2020() { return $this->mapping->countComision2020() . " AS " . $this->_pf() . "count_comision_2020"; }

  public function minArchivo2019() { return $this->mapping->minArchivo2019() . " AS " . $this->_pf() . "min_archivo_2019"; }
  public function maxArchivo2019() { return $this->mapping->maxArchivo2019() . " AS " . $this->_pf() . "max_archivo_2019"; }
  public function countArchivo2019() { return $this->mapping->countArchivo2019() . " AS " . $this->_pf() . "count_archivo_2019"; }

  public function minArchivo2020() { return $this->mapping->minArchivo2020() . " AS " . $this->_pf() . "min_archivo_2020"; }
  public function maxArchivo2020() { return $this->mapping->maxArchivo2020() . " AS " . $this->_pf() . "max_archivo_2020"; }
  public function countArchivo2020() { return $this->mapping->countArchivo2020() . " AS " . $this->_pf() . "count_archivo_2020"; }

  public function minDrive() { return $this->mapping->minDrive() . " AS " . $this->_pf() . "min_drive"; }
  public function maxDrive() { return $this->mapping->maxDrive() . " AS " . $this->_pf() . "max_drive"; }
  public function countDrive() { return $this->mapping->countDrive() . " AS " . $this->_pf() . "count_drive"; }

  public function minCuil() { return $this->mapping->minCuil() . " AS " . $this->_pf() . "min_cuil"; }
  public function maxCuil() { return $this->mapping->maxCuil() . " AS " . $this->_pf() . "max_cuil"; }
  public function countCuil() { return $this->mapping->countCuil() . " AS " . $this->_pf() . "count_cuil"; }

  public function minAnaliticoDni() { return $this->mapping->minAnaliticoDni() . " AS " . $this->_pf() . "min_analitico_dni"; }
  public function maxAnaliticoDni() { return $this->mapping->maxAnaliticoDni() . " AS " . $this->_pf() . "max_analitico_dni"; }
  public function countAnaliticoDni() { return $this->mapping->countAnaliticoDni() . " AS " . $this->_pf() . "count_analitico_dni"; }

  public function minAnaliticoCuil() { return $this->mapping->minAnaliticoCuil() . " AS " . $this->_pf() . "min_analitico_cuil"; }
  public function maxAnaliticoCuil() { return $this->mapping->maxAnaliticoCuil() . " AS " . $this->_pf() . "max_analitico_cuil"; }
  public function countAnaliticoCuil() { return $this->mapping->countAnaliticoCuil() . " AS " . $this->_pf() . "count_analitico_cuil"; }

  public function minAnaliticoPartida() { return $this->mapping->minAnaliticoPartida() . " AS " . $this->_pf() . "min_analitico_partida"; }
  public function maxAnaliticoPartida() { return $this->mapping->maxAnaliticoPartida() . " AS " . $this->_pf() . "max_analitico_partida"; }
  public function countAnaliticoPartida() { return $this->mapping->countAnaliticoPartida() . " AS " . $this->_pf() . "count_analitico_partida"; }

  public function minAnaliticoCertificado() { return $this->mapping->minAnaliticoCertificado() . " AS " . $this->_pf() . "min_analitico_certificado"; }
  public function maxAnaliticoCertificado() { return $this->mapping->maxAnaliticoCertificado() . " AS " . $this->_pf() . "max_analitico_certificado"; }
  public function countAnaliticoCertificado() { return $this->mapping->countAnaliticoCertificado() . " AS " . $this->_pf() . "count_analitico_certificado"; }

  public function avgFechaNacimiento() { return $this->mapping->avgFechaNacimiento() . " AS " . $this->_pf() . "avg_fecha_nacimiento"; }
  public function minFechaNacimiento() { return $this->mapping->minFechaNacimiento() . " AS " . $this->_pf() . "min_fecha_nacimiento"; }
  public function maxFechaNacimiento() { return $this->mapping->maxFechaNacimiento() . " AS " . $this->_pf() . "max_fecha_nacimiento"; }
  public function countFechaNacimiento() { return $this->mapping->countFechaNacimiento() . " AS " . $this->_pf() . "count_fecha_nacimiento"; }

  public function minIngreso() { return $this->mapping->minIngreso() . " AS " . $this->_pf() . "min_ingreso"; }
  public function maxIngreso() { return $this->mapping->maxIngreso() . " AS " . $this->_pf() . "max_ingreso"; }
  public function countIngreso() { return $this->mapping->countIngreso() . " AS " . $this->_pf() . "count_ingreso"; }

  public function minObservaciones() { return $this->mapping->minObservaciones() . " AS " . $this->_pf() . "min_observaciones"; }
  public function maxObservaciones() { return $this->mapping->maxObservaciones() . " AS " . $this->_pf() . "max_observaciones"; }
  public function countObservaciones() { return $this->mapping->countObservaciones() . " AS " . $this->_pf() . "count_observaciones"; }

  public function minActivo() { return $this->mapping->minActivo() . " AS " . $this->_pf() . "min_activo"; }
  public function maxActivo() { return $this->mapping->maxActivo() . " AS " . $this->_pf() . "max_activo"; }
  public function countActivo() { return $this->mapping->countActivo() . " AS " . $this->_pf() . "count_activo"; }

  public function sumFila() { return $this->mapping->sumFila() . " AS " . $this->_pf() . "sum_fila"; }
  public function avgFila() { return $this->mapping->avgFila() . " AS " . $this->_pf() . "avg_fila"; }
  public function minFila() { return $this->mapping->minFila() . " AS " . $this->_pf() . "min_fila"; }
  public function maxFila() { return $this->mapping->maxFila() . " AS " . $this->_pf() . "max_fila"; }
  public function countFila() { return $this->mapping->countFila() . " AS " . $this->_pf() . "count_fila"; }

  public function minError() { return $this->mapping->minError() . " AS " . $this->_pf() . "min_error"; }
  public function maxError() { return $this->mapping->maxError() . " AS " . $this->_pf() . "max_error"; }
  public function countError() { return $this->mapping->countError() . " AS " . $this->_pf() . "count_error"; }

  public function minIdComision() { return $this->mapping->minIdComision() . " AS " . $this->_pf() . "min_id_comision"; }
  public function maxIdComision() { return $this->mapping->maxIdComision() . " AS " . $this->_pf() . "max_id_comision"; }
  public function countIdComision() { return $this->mapping->countIdComision() . " AS " . $this->_pf() . "count_id_comision"; }

  public function avgActualizado() { return $this->mapping->avgActualizado() . " AS " . $this->_pf() . "avg_actualizado"; }
  public function minActualizado() { return $this->mapping->minActualizado() . " AS " . $this->_pf() . "min_actualizado"; }
  public function maxActualizado() { return $this->mapping->maxActualizado() . " AS " . $this->_pf() . "max_actualizado"; }
  public function countActualizado() { return $this->mapping->countActualizado() . " AS " . $this->_pf() . "count_actualizado"; }

  public function avgInformado() { return $this->mapping->avgInformado() . " AS " . $this->_pf() . "avg_informado"; }
  public function minInformado() { return $this->mapping->minInformado() . " AS " . $this->_pf() . "min_informado"; }
  public function maxInformado() { return $this->mapping->maxInformado() . " AS " . $this->_pf() . "max_informado"; }
  public function countInformado() { return $this->mapping->countInformado() . " AS " . $this->_pf() . "count_informado"; }

  public function label() { return $this->mapping->label() . " AS " . $this->_pf() . "label"; }



}
