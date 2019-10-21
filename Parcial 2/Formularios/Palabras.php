<html>
<head><title>Palabras</title>
</head>
<body>
<h1>Escribe una palabra</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Palabra:	<input type="text" name="nombre">  <br>

<input type="submit" name="enviar">
</form>
<?php
$j=0;
$contador=1;
if(isset($_POST["nombre"]))
{
	$Palabra=$_POST["nombre"];
	$Palabra2="";
for ($i=0; $i < strlen($Palabra) ; $i++) { 
	
if($Palabra[$i]>='A' && $Palabra[$i]<='Z' )
{
	$Palabra2[$j]=$Palabra[$i];
	$j++;
}
else if ($Palabra[$i]>='a' && $Palabra[$i]<='z') {
	$Palabra2[$j]=$Palabra[$i];
	$j++;
}
else if ($Palabra[$i]==' ') {
	$Palabra2[$j]=$Palabra[$i];
	$j++;
	
}


}

for ($i=0; $i < strlen($Palabra2) ; $i++) { 
	if ($Palabra2[$i]==' ') {
	$contador++;
}
}



$Palabra2=strtolower($Palabra2);
$Palabra2=ucwords($Palabra2);
$Palabra2=strrev($Palabra2);
$Palabra2=ucwords($Palabra2);
$Palabra2=strrev($Palabra2);


echo "<b>".$Palabra2."</b>";

echo "<br><b>Palabras:".$contador."</b>";

}
?>
</body>
</html>