<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
	function leerDatos()
	{
		$conexion = mysqli_connect("localhost","root","") or  die("Error en conexion");//conexion a la base de datos
		$arch=fopen("clientes.txt","r")or die("Error en el archivo");
		if($conexion && $arch)
		{	
		mysqli_select_db($conexion,"e_facturas") or  die("error en bd");	
			while(!feof($arch) && fscanf($arch,"%s\t%s\t%s\n",$nombres,$rfc,$correo)==3)
			{
				echo"<p> ".$nombres." ".$rfc." ".$correo."</p>";
				$query="INSERT INTO clientes (RFC,nombre,mail) VALUES('".$rfc."','".$correo."','".$nombres."')"; 
				if(mysqli_query($conexion,$query))
					echo"<br> Datos guardados <br>";
				else
					echo"Datos no guardados<br>";
				
			}
		fclose($arch);	
		mysqli_close($conexion);
		}
	}
leerDatos();
?>

</body>
</html>