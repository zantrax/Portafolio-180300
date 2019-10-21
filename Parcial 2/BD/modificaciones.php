<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Documento sin título</title>
</head>

<body>
<h1>MODIFICACIONES</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
RFC:		
<?php
	
$conexion = mysqli_connect("localhost","root","") or  die("error en la conexion");
if($conexion)
{	
	mysqli_select_db($conexion,"e_facturas") or  die("ERROR bd");
	$query= "SELECT nombre, mail, RFC FROM clientes;";
	$registros=mysqli_query($conexion,$query) or die("error query ".mysqli_error());
	echo "<select name='rfc'>";
	while($tupla=mysqli_fetch_array($registros))
	{
		echo "<option value=".$tupla['RFC'].">".$tupla['RFC']."</option>";
	}	
	mysqli_close($conexion);
}
echo "</select>";
if(isset($_POST['enviar'])){	 
	$query="UPDATE clientes SET";
     	if(isset($_POST['nombre']) && $_POST['nombre']!="") $query=$query." nombre ='".$_POST['nombre']."' ";
	if(isset($_POST['correo']) && $_POST['correo']!="") $query=$query." ,mail='".$_POST['correo']."' ";
       	if(isset($_POST['rfc']))$query=$query." WHERE RFC= '".$_POST['rfc']."' ;";
	echo $query;
	$conexion = mysqli_connect("localhost","root","") or  die("Problemas en la conexion");
	if($conexion){
		mysqli_select_db($conexion,"e_facturas") or  die("Error en base de datos");
		if(mysqli_query($conexion,$query)) echo "<br> dato modificado<br>";
		mysqli_close($conexion);
	}
}
?>
<br>
Nombre:<input type="text" name="nombre">  <br>
Mail	:<input type="text" name="correo">  <br>
<input type="submit" name="enviar">
</form>

</body>
</html>