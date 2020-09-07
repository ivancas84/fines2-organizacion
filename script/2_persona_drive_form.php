<? require_once("../config/config.php"); 
$headers = (isset($_GET["headers"]))? $_GET["headers"] : "apellidos, nombres, cuil_dni, fecha_nacimiento_aux, sexo, teléfono, analitico_dni, analitico_cuil, analitico_partida, analitico_certificado, ingreso, observaciones, programa, activo, correo"; 
?>

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

<form action="../script/2_persona_drive.php" method="POST">
  <br>id:<br>
  <input type="text" name="id" value="<?=date('YmdHis')?>persona"/>
  <br>Comisión:<br>
  <input type="text" name="comision"></input>
  <br>Tramo:<br>
  <input type="text" name="tramo"></input>
  <br>Id Comisión:<br>
  <input type="text" name="idComision"></input>
  <br>Encabezados:<br>
  <textarea name="headers"><?=$headers?>
  </textarea>
  <br>Source:<br>
  <textarea name="source"></textarea>
  <br>  
  <input type="submit" value="Submit">
</form> 

</body>
</html>
