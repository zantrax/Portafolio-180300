<html>
<head> 
<title>Lectura de un archivo</title> 
</head> 
<body> 
<?php 
	$ar=fopen("cancion.txt","r") or die("No se pudo abrir el archivo");  //forma de apertura
	while (!feof($ar)) //función feof retorna true si se ha llegado al final del archivo 
	{ $linea=fgets($ar); 
	$lineasalto=nl2br($linea); //convierte el salto de línea a la marca <br> 
	echo $lineasalto; 
	} fclose($ar); 
?> 
</body> 
</html> 