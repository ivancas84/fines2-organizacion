<? require_once("../config/config.php"); 
$headers = (isset($_GET["headers"]))? $_GET["headers"] : "region, distrito, cens, sede, tramo, identificador, numero_inscripcion, numero_documento, apellidos, nombres, telefono, correo, pc_escritorio, conexion_internet_paga, telefono_celular"; 
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

<form action="../script/3_persona_direccion.php" method="POST">
  <br>id:<br>
  <input type="text" name="id" value="<?=date('YmdHis')?>persona"/>
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
