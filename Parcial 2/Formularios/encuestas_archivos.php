<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	
	
	function leerDatos(&$totales)
	{
		$arch=fopen("encuesta.txt","r");
		$i=0;
		while(!feof($arch) && fscanf($arch,"%d\n",$totales[$i])==1)
			$i++;
		//return $totales
		fclose($arch);
	}
	function guardarDatos($totales)
	{
		$arch=fopen("encuesta.txt","w");
		$i=0;
		while($i<6)
		{
			fprintf($arch,"%d\n",$totales[$i]);
			$i++;
		}
		fclose($arch);
	}
	
	leerDatos($totales);
	if(isset($_POST["encuesta"]));
	{
		$votos = $_POST["encuesta"];
		for($i=1;$i<count($votos);$i++)
		{
		switch($votos)
			{
			case 1;
				$totales[1]++;
				break;
			case 2;
				$totales[2]++;
				break;
			case 3;
				$totales[3]++;
				break;
			case 4;
				$totales[4]++;
				break;
			case 5;
				$totales[5]++;
				break;
			case 6;
				$totales[6]++;
				break;
			}
		}
	}
	guardarDatos($totales);
	
	$tabla="<table>";
	$tabla=$tabla."<tr>";
		for($j=0;$j<6;$j++)
		{
			$tabla=$tabla."<td><img src='grafica.png' height='.$totales[$j]*20px' width='100px'></td>";
		}
	$tabla=$tabla."</tr>";
	$tabla=$tabla."</table>";
?>
</body>
</html>