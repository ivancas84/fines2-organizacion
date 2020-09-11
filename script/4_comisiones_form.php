<? require_once("../config/config.php"); 
$headers = (isset($_GET["headers"]))? $_GET["headers"] : "nulo, nulo, cens, sede, domicilio, comision_2020, clasificacion, orientacion, tramo, turno, nulo, id_comision"; 
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

<form action="../script/4_comisiones.php" method="POST">
  <br>id:<br>
  <input type="text" name="id" value="<?=date('YmdHis')?>comision"/>
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
