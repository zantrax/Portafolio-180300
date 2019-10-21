<html>
<head><title>ALTA CLIENTES</title>
</head>
<body>
<h1>Favor de llenar datos</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Nombre:	<input type="text" name="nombre">  <br>
RFC:		<input type="text" name="rfc">  <br>
Mail	:	<input type="text" name="correo">  <br>
<input type="submit" name="enviar">
</form>

<?php
//include("config.php");
if(isset($_POST['nombre']) && isset($_POST['rfc']) && isset($_POST['correo'])) 
{		
	echo "{$_POST['nombre']}<br>";
	echo "{$_POST['rfc']}<br>";
	echo "{$_POST['correo']}<br>";
	
	$conexion = mysqli_connect("localhost","root","") or  die("error en conexion");
	if($conexion){
		echo "se conecto exitosamente <br>";
		mysqli_select_db($conexion,"e_facturas") or  
		die("Problemas en la selecciÃ³n de la base de datos");
		
		echo "se conecto exitosamente a bd<br>";
		$query= "INSERT INTO clientes (RFC,nombre,mail) VALUES ('$_POST[rfc]', '$_POST[nombre]', '$_POST[correo]');" ;
		
		echo "La consulta generada es:<br>" .$query;
		if(mysqli_query($conexion,$query)) echo "<br> datos guardados<br>";
		mysqli_close($conexion);
	}
 }
else{
      if(isset($_POST['enviar'])){	 
      	if(isset($_POST['nombre'])==false || $_POST['nombre']=="")	
		echo "Falta definir Nombre<br>";
       	if(isset($_POST['rfc'])==false || $_POST['rfc']=="")		
		echo "Falta definir RFC<br>";
       	if(isset($_POST['correo'])==false || $_POST['correo']=="")	
		echo "Falta definir Correo<br>";
       }
}
?>

</body>
</html>


