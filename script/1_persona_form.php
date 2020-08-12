<? require_once("../config/config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<style>
textarea {
  width: 1000px;
  height: 150px;
}
</style>
</head>
<body>


<h2>Importar Persona</h2>

<form action="../script/1_persona.php" method="POST">
  <br>id:<br>
  <input type="text" name="id" value="<?=date('YmdHis')?>persona"/>
  <br>Encabezados:<br>
  <textarea name="headers">region, distrito, localidad, programa, inscripcion_men, cens, sede, comision, tramo, identificador, numero_inscripcion, numero_documento, apellidos, nombres, genero, telefono, correo, trayectoria_educativa, turno, pc_escritorio, net_notebook, tablet, pc_tablet, impresora, conexion_internet_paga, telefono_celular, comision_2020, archivo_2019, archivo_2020
  </textarea>
  <br>Source:<br>
  <textarea name="source"></textarea>
  <br>  
  <input type="submit" value="Submit">
</form> 

</body>
</html>
