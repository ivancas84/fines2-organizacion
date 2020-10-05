<?php
require_once("class/model/entityOptions/Mapping.php");

class _PersonaMapping extends MappingEntityOptions{

  public function id() { return $this->_pt() . ".id"; }
  public function region() { return $this->_pt() . ".region"; }
  public function distrito() { return $this->_pt() . ".distrito"; }
  public function localidad() { return $this->_pt() . ".localidad"; }
  public function programa() { return $this->_pt() . ".programa"; }
  public function inscripcionMen() { return $this->_pt() . ".inscripcion_men"; }
  public function cens() { return $this->_pt() . ".cens"; }
  public function sede() { return $this->_pt() . ".sede"; }
  public function comision() { return $this->_pt() . ".comision"; }
  public function tramo() { return $this->_pt() . ".tramo"; }
  public function identificador() { return $this->_pt() . ".identificador"; }
  public function numeroInscripcion() { return $this->_pt() . ".numero_inscripcion"; }
  public function numeroDocumento() { return $this->_pt() . ".numero_documento"; }
  public function apellidos() { return $this->_pt() . ".apellidos"; }
  public function nombres() { return $this->_pt() . ".nombres"; }
  public function genero() { return $this->_pt() . ".genero"; }
  public function telefono() { return $this->_pt() . ".telefono"; }
  public function correo() { return $this->_pt() . ".correo"; }
  public function trayectoriaEducativa() { return $this->_pt() . ".trayectoria_educativa"; }
  public function turno() { return $this->_pt() . ".turno"; }
  public function pcEscritorio() { return $this->_pt() . ".pc_escritorio"; }
  public function netNotebook() { return $this->_pt() . ".net_notebook"; }
  public function tablet() { return $this->_pt() . ".tablet"; }
  public function pcTablet() { return $this->_pt() . ".pc_tablet"; }
  public function impresora() { return $this->_pt() . ".impresora"; }
  public function conexionInternetPaga() { return $this->_pt() . ".conexion_internet_paga"; }
  public function telefonoCelular() { return $this->_pt() . ".telefono_celular"; }
  public function comision2020() { return $this->_pt() . ".comision_2020"; }
  public function archivo2019() { return $this->_pt() . ".archivo_2019"; }
  public function archivo2020() { return $this->_pt() . ".archivo_2020"; }
  public function drive() { return $this->_pt() . ".drive"; }
  public function cuil() { return $this->_pt() . ".cuil"; }
  public function analiticoDni() { return $this->_pt() . ".analitico_dni"; }
  public function analiticoCuil() { return $this->_pt() . ".analitico_cuil"; }
  public function analiticoPartida() { return $this->_pt() . ".analitico_partida"; }
  public function analiticoCertificado() { return $this->_pt() . ".analitico_certificado"; }
  public function fechaNacimiento() { return $this->_pt() . ".fecha_nacimiento"; }
  public function ingreso() { return $this->_pt() . ".ingreso"; }
  public function observaciones() { return $this->_pt() . ".observaciones"; }
  public function activo() { return $this->_pt() . ".activo"; }
  public function fila() { return $this->_pt() . ".fila"; }
  public function error() { return $this->_pt() . ".error"; }
  public function idComision() { return $this->_pt() . ".id_comision"; }
  public function actualizado() { return $this->_pt() . ".actualizado"; }
  public function actualizadoDate() { return "CAST({$this->_pt()}.actualizado AS DATE)"; }
  public function actualizadoYm() { return "DATE_FORMAT({$this->_pt()}.actualizado, '%Y-%m')"; }
  public function actualizadoY() { return "DATE_FORMAT({$this->_pt()}.actualizado, '%Y')"; }
  public function informado() { return $this->_pt() . ".informado"; }
  public function informadoDate() { return "CAST({$this->_pt()}.informado AS DATE)"; }
  public function informadoYm() { return "DATE_FORMAT({$this->_pt()}.informado, '%Y-%m')"; }
  public function informadoY() { return "DATE_FORMAT({$this->_pt()}.informado, '%Y')"; }

  public function minId() { return "MIN({$this->_pt()}.id)"; }
  public function maxId() { return "MAX({$this->_pt()}.id)"; }
  public function countId() { return "COUNT({$this->_pt()}.id)"; }

  public function minRegion() { return "MIN({$this->_pt()}.region)"; }
  public function maxRegion() { return "MAX({$this->_pt()}.region)"; }
  public function countRegion() { return "COUNT({$this->_pt()}.region)"; }

  public function minDistrito() { return "MIN({$this->_pt()}.distrito)"; }
  public function maxDistrito() { return "MAX({$this->_pt()}.distrito)"; }
  public function countDistrito() { return "COUNT({$this->_pt()}.distrito)"; }

  public function minLocalidad() { return "MIN({$this->_pt()}.localidad)"; }
  public function maxLocalidad() { return "MAX({$this->_pt()}.localidad)"; }
  public function countLocalidad() { return "COUNT({$this->_pt()}.localidad)"; }

  public function minPrograma() { return "MIN({$this->_pt()}.programa)"; }
  public function maxPrograma() { return "MAX({$this->_pt()}.programa)"; }
  public function countPrograma() { return "COUNT({$this->_pt()}.programa)"; }

  public function minInscripcionMen() { return "MIN({$this->_pt()}.inscripcion_men)"; }
  public function maxInscripcionMen() { return "MAX({$this->_pt()}.inscripcion_men)"; }
  public function countInscripcionMen() { return "COUNT({$this->_pt()}.inscripcion_men)"; }

  public function minCens() { return "MIN({$this->_pt()}.cens)"; }
  public function maxCens() { return "MAX({$this->_pt()}.cens)"; }
  public function countCens() { return "COUNT({$this->_pt()}.cens)"; }

  public function minSede() { return "MIN({$this->_pt()}.sede)"; }
  public function maxSede() { return "MAX({$this->_pt()}.sede)"; }
  public function countSede() { return "COUNT({$this->_pt()}.sede)"; }

  public function minComision() { return "MIN({$this->_pt()}.comision)"; }
  public function maxComision() { return "MAX({$this->_pt()}.comision)"; }
  public function countComision() { return "COUNT({$this->_pt()}.comision)"; }

  public function minTramo() { return "MIN({$this->_pt()}.tramo)"; }
  public function maxTramo() { return "MAX({$this->_pt()}.tramo)"; }
  public function countTramo() { return "COUNT({$this->_pt()}.tramo)"; }

  public function minIdentificador() { return "MIN({$this->_pt()}.identificador)"; }
  public function maxIdentificador() { return "MAX({$this->_pt()}.identificador)"; }
  public function countIdentificador() { return "COUNT({$this->_pt()}.identificador)"; }

  public function minNumeroInscripcion() { return "MIN({$this->_pt()}.numero_inscripcion)"; }
  public function maxNumeroInscripcion() { return "MAX({$this->_pt()}.numero_inscripcion)"; }
  public function countNumeroInscripcion() { return "COUNT({$this->_pt()}.numero_inscripcion)"; }

  public function minNumeroDocumento() { return "MIN({$this->_pt()}.numero_documento)"; }
  public function maxNumeroDocumento() { return "MAX({$this->_pt()}.numero_documento)"; }
  public function countNumeroDocumento() { return "COUNT({$this->_pt()}.numero_documento)"; }

  public function minApellidos() { return "MIN({$this->_pt()}.apellidos)"; }
  public function maxApellidos() { return "MAX({$this->_pt()}.apellidos)"; }
  public function countApellidos() { return "COUNT({$this->_pt()}.apellidos)"; }

  public function minNombres() { return "MIN({$this->_pt()}.nombres)"; }
  public function maxNombres() { return "MAX({$this->_pt()}.nombres)"; }
  public function countNombres() { return "COUNT({$this->_pt()}.nombres)"; }

  public function minGenero() { return "MIN({$this->_pt()}.genero)"; }
  public function maxGenero() { return "MAX({$this->_pt()}.genero)"; }
  public function countGenero() { return "COUNT({$this->_pt()}.genero)"; }

  public function minTelefono() { return "MIN({$this->_pt()}.telefono)"; }
  public function maxTelefono() { return "MAX({$this->_pt()}.telefono)"; }
  public function countTelefono() { return "COUNT({$this->_pt()}.telefono)"; }

  public function minCorreo() { return "MIN({$this->_pt()}.correo)"; }
  public function maxCorreo() { return "MAX({$this->_pt()}.correo)"; }
  public function countCorreo() { return "COUNT({$this->_pt()}.correo)"; }

  public function minTrayectoriaEducativa() { return "MIN({$this->_pt()}.trayectoria_educativa)"; }
  public function maxTrayectoriaEducativa() { return "MAX({$this->_pt()}.trayectoria_educativa)"; }
  public function countTrayectoriaEducativa() { return "COUNT({$this->_pt()}.trayectoria_educativa)"; }

  public function minTurno() { return "MIN({$this->_pt()}.turno)"; }
  public function maxTurno() { return "MAX({$this->_pt()}.turno)"; }
  public function countTurno() { return "COUNT({$this->_pt()}.turno)"; }

  public function minPcEscritorio() { return "MIN({$this->_pt()}.pc_escritorio)"; }
  public function maxPcEscritorio() { return "MAX({$this->_pt()}.pc_escritorio)"; }
  public function countPcEscritorio() { return "COUNT({$this->_pt()}.pc_escritorio)"; }

  public function minNetNotebook() { return "MIN({$this->_pt()}.net_notebook)"; }
  public function maxNetNotebook() { return "MAX({$this->_pt()}.net_notebook)"; }
  public function countNetNotebook() { return "COUNT({$this->_pt()}.net_notebook)"; }

  public function minTablet() { return "MIN({$this->_pt()}.tablet)"; }
  public function maxTablet() { return "MAX({$this->_pt()}.tablet)"; }
  public function countTablet() { return "COUNT({$this->_pt()}.tablet)"; }

  public function minPcTablet() { return "MIN({$this->_pt()}.pc_tablet)"; }
  public function maxPcTablet() { return "MAX({$this->_pt()}.pc_tablet)"; }
  public function countPcTablet() { return "COUNT({$this->_pt()}.pc_tablet)"; }

  public function minImpresora() { return "MIN({$this->_pt()}.impresora)"; }
  public function maxImpresora() { return "MAX({$this->_pt()}.impresora)"; }
  public function countImpresora() { return "COUNT({$this->_pt()}.impresora)"; }

  public function minConexionInternetPaga() { return "MIN({$this->_pt()}.conexion_internet_paga)"; }
  public function maxConexionInternetPaga() { return "MAX({$this->_pt()}.conexion_internet_paga)"; }
  public function countConexionInternetPaga() { return "COUNT({$this->_pt()}.conexion_internet_paga)"; }

  public function minTelefonoCelular() { return "MIN({$this->_pt()}.telefono_celular)"; }
  public function maxTelefonoCelular() { return "MAX({$this->_pt()}.telefono_celular)"; }
  public function countTelefonoCelular() { return "COUNT({$this->_pt()}.telefono_celular)"; }

  public function minComision2020() { return "MIN({$this->_pt()}.comision_2020)"; }
  public function maxComision2020() { return "MAX({$this->_pt()}.comision_2020)"; }
  public function countComision2020() { return "COUNT({$this->_pt()}.comision_2020)"; }

  public function minArchivo2019() { return "MIN({$this->_pt()}.archivo_2019)"; }
  public function maxArchivo2019() { return "MAX({$this->_pt()}.archivo_2019)"; }
  public function countArchivo2019() { return "COUNT({$this->_pt()}.archivo_2019)"; }

  public function minArchivo2020() { return "MIN({$this->_pt()}.archivo_2020)"; }
  public function maxArchivo2020() { return "MAX({$this->_pt()}.archivo_2020)"; }
  public function countArchivo2020() { return "COUNT({$this->_pt()}.archivo_2020)"; }

  public function minDrive() { return "MIN({$this->_pt()}.drive)"; }
  public function maxDrive() { return "MAX({$this->_pt()}.drive)"; }
  public function countDrive() { return "COUNT({$this->_pt()}.drive)"; }

  public function minCuil() { return "MIN({$this->_pt()}.cuil)"; }
  public function maxCuil() { return "MAX({$this->_pt()}.cuil)"; }
  public function countCuil() { return "COUNT({$this->_pt()}.cuil)"; }

  public function minAnaliticoDni() { return "MIN({$this->_pt()}.analitico_dni)"; }
  public function maxAnaliticoDni() { return "MAX({$this->_pt()}.analitico_dni)"; }
  public function countAnaliticoDni() { return "COUNT({$this->_pt()}.analitico_dni)"; }

  public function minAnaliticoCuil() { return "MIN({$this->_pt()}.analitico_cuil)"; }
  public function maxAnaliticoCuil() { return "MAX({$this->_pt()}.analitico_cuil)"; }
  public function countAnaliticoCuil() { return "COUNT({$this->_pt()}.analitico_cuil)"; }

  public function minAnaliticoPartida() { return "MIN({$this->_pt()}.analitico_partida)"; }
  public function maxAnaliticoPartida() { return "MAX({$this->_pt()}.analitico_partida)"; }
  public function countAnaliticoPartida() { return "COUNT({$this->_pt()}.analitico_partida)"; }

  public function minAnaliticoCertificado() { return "MIN({$this->_pt()}.analitico_certificado)"; }
  public function maxAnaliticoCertificado() { return "MAX({$this->_pt()}.analitico_certificado)"; }
  public function countAnaliticoCertificado() { return "COUNT({$this->_pt()}.analitico_certificado)"; }

  public function avgFechaNacimiento() { return "AVG({$this->_pt()}.fecha_nacimiento)"; }
  public function minFechaNacimiento() { return "MIN({$this->_pt()}.fecha_nacimiento)"; }
  public function maxFechaNacimiento() { return "MAX({$this->_pt()}.fecha_nacimiento)"; }
  public function countFechaNacimiento() { return "COUNT({$this->_pt()}.fecha_nacimiento)"; }

  public function minIngreso() { return "MIN({$this->_pt()}.ingreso)"; }
  public function maxIngreso() { return "MAX({$this->_pt()}.ingreso)"; }
  public function countIngreso() { return "COUNT({$this->_pt()}.ingreso)"; }

  public function minObservaciones() { return "MIN({$this->_pt()}.observaciones)"; }
  public function maxObservaciones() { return "MAX({$this->_pt()}.observaciones)"; }
  public function countObservaciones() { return "COUNT({$this->_pt()}.observaciones)"; }

  public function minActivo() { return "MIN({$this->_pt()}.activo)"; }
  public function maxActivo() { return "MAX({$this->_pt()}.activo)"; }
  public function countActivo() { return "COUNT({$this->_pt()}.activo)"; }

  public function sumFila() { return "SUM({$this->_pt()}.fila)"; }
  public function avgFila() { return "AVG({$this->_pt()}.fila)"; }
  public function minFila() { return "MIN({$this->_pt()}.fila)"; }
  public function maxFila() { return "MAX({$this->_pt()}.fila)"; }
  public function countFila() { return "COUNT({$this->_pt()}.fila)"; }

  public function minError() { return "MIN({$this->_pt()}.error)"; }
  public function maxError() { return "MAX({$this->_pt()}.error)"; }
  public function countError() { return "COUNT({$this->_pt()}.error)"; }

  public function minIdComision() { return "MIN({$this->_pt()}.id_comision)"; }
  public function maxIdComision() { return "MAX({$this->_pt()}.id_comision)"; }
  public function countIdComision() { return "COUNT({$this->_pt()}.id_comision)"; }

  public function avgActualizado() { return "AVG({$this->_pt()}.actualizado)"; }
  public function minActualizado() { return "MIN({$this->_pt()}.actualizado)"; }
  public function maxActualizado() { return "MAX({$this->_pt()}.actualizado)"; }
  public function countActualizado() { return "COUNT({$this->_pt()}.actualizado)"; }

  public function avgInformado() { return "AVG({$this->_pt()}.informado)"; }
  public function minInformado() { return "MIN({$this->_pt()}.informado)"; }
  public function maxInformado() { return "MAX({$this->_pt()}.informado)"; }
  public function countInformado() { return "COUNT({$this->_pt()}.informado)"; }

  public function label() {
    return "CONCAT_WS(' ', {$this->_pt()}.id)"; 
  }


}
