<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Documento sin título</title>
</head>

<body>
<h1>Consultas</h1>
<?php
$conexion = mysqli_connect("localhost","root","") or  die("Problemas en la conexion");
if($conexion)
{	mysqli_select_db($conexion,"e_facturas") or  die("Problemas en base de datos");
	$query= "SELECT nombre, mail, RFC FROM clientes;";
	$registros=mysqli_query($conexion,$query) or die("ERROR  Query ".mysqli_error());
	echo "<table><tr><th>RFC</th><th>NOMBRE</th><th>EMAIL</th></tr>";
	while($tupla=mysqli_fetch_array($registros))
	{
		echo "<tr><td>".$tupla['RFC']."</td>";
		echo "<td>".$tupla['nombre']."</td>";
		echo "<td>".$tupla['mail']."</td></tr>";
	}
	echo "</table>";
	mysqli_close($conexion);
}
?>
</body>
</html>