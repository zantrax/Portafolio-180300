<!DOCTYPE html>
<html>
<head>
	<title>Calificaciones</title>
</head>
<body>
	<?php
	$nombres= array("Daniel","Luis","Pamela", "Juan","Vanessa");
	$p1=array(0,0,0,0,0);
	$p2=array(0,0,0,0,0);
	$p3=array(0,0,0,0,0);
	$prom=array(0,0,0,0,0);
	
	echo "<table border=1><tr bgcolor='yellow'><th>NOMBRE</th><th>PARCIAL1</th><th>PARCIAL2</th><th>PARCIAL3</th></tr>";
	srand();
	for($i=0;$i<5;$i++)
	{
		$p1[$i]=rand(0,1000);
		$p2[$i]=rand(0,1000);
		$p3[$i]=rand(0,1000);
	}
	//presenta tabla
	for($i=0;$i<5;$i++)
	{
		
		if($i%2==0)echo "<tr bgcolor=#ccc>";
		else echo "<tr bgcolor=blue>";
		echo "<td>".$nombres[$i]."</td>".
		"<td>".$p1[$i]."</td>".
		"<td>".$p2[$i]."</td>".
		"<td>".$p3[$i]."</td>";
		echo "</tr>";
	}
	echo "</table>";

	echo "<table border=1><tr bgcolor='yellow'><th>NOMBRE</th><th>PARCIAL1</th><th>PARCIAL2</th><th>PARCIAL3</th><th>promedio</th></tr>";
	for($i=0;$i<5;$i++)
	{	
		$decimal=$p1[$i]%100;
		if($p1[$i]>=700)
		{			
			if($decimal>75)$decimal=100;
			else if($decimal>25 && $decimal<=75)
				$decimal=50;
				else $decimal=0;
		}
		else
		{
			if($decimal<49)$decimal=0;
			else $decimal=50;
		}
		$p1[$i]=($p1[$i]-($p1[$i]%100)+$decimal)/100;

	}
	for($i=0;$i<5;$i++)
	{	
		$decimal=$p2[$i]%100;
		if($p1[$i]>=700)
		{			
			if($decimal>75)$decimal=100;
			else if($decimal>25 && $decimal<=75)
				$decimal=50;
				else $decimal=0;
		}
		else
		{
			if($decimal<49)$decimal=0;
			else $decimal=50;
		}
		$p2[$i]=($p2[$i]-($p2[$i]%100)+$decimal)/100;

	}
	for($i=0;$i<5;$i++)
	{	
		$decimal=$p3[$i]%100;
		if($p1[$i]>=700)
		{			
			if($decimal>75)$decimal=100;
			else if($decimal>25 && $decimal<=75)
				$decimal=50;
				else $decimal=0;
		}
		else
		{
			if($decimal<49)$decimal=0;
			else $decimal=50;
		}
		$p3[$i]=($p3[$i]-($p3[$i]%100)+$decimal)/100;

	}

	$prom[0]=($p1[0]+$p2[0]+$p3[0])/3;
	if($prom[0]>=7) {
	echo "<tr bgcolor=green>aprobado";
    }
	else echo "<tr bgcolor=red>reprobado";
    echo "</tr>";

    $prom[1]=($p1[1]+$p2[1]+$p3[1])/3;
    $prom[2]=($p1[2]+$p2[2]+$p3[2])/3;
    $prom[3]=($p1[3]+$p2[3]+$p3[3])/3;
    $prom[4]=($p1[4]+$p3[4]+$p3[4])/3;

	//presenta tabla
	for($i=0;$i<5;$i++)
	{
		
		if($i%2==0)echo "<tr bgocolor=green>";
		else echo "<tr bgcolor=blue>";
		echo "<td>".$nombres[$i]."</td>".
		"<td>".$p1[$i]."</td>".
		"<td>".$p2[$i]."</td>".
		"<td>".$p3[$i]."</td>".
		"<td>".$prom[$i]."</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<table border=1><th>promedio</th></tr>";
	echo "<p>EL COLOR ROJO ES PARA LOS ALUMNOS REPROBADOS</p></br>
	<p>EL COLOR VERDE ES PARA LOS ALUMOS QUE ESTAN PASANDO LAS MATERIAS</p>";
	for($i=0;$i<5;$i++)
	{
		
		if ($prom[$i]>=7) {
			echo "<td bgcolor=green>".$nombres[$i]."</td>".
			"<td bgcolor=green>".$prom[$i]."</td>";
			echo "</tr>";
		}else if ($prom[$i]<7) {
			echo "<td bgcolor=red>".$nombres[$i]."</td>".
			"<td bgcolor=red>".$prom[$i]."</td>";
			echo "</tr>";
		}
		
	}
	echo "</table>";


?>

</body>
</html>

<?php
$datosTabla = array(
	    array( "Daniel", $prom[0], "#BDDA4C"),
        array( "Pamela", $prom[1], "#FF9A68"),
        array( "juan", $prom[2], "#69ABBF"),
        array( "Rodrigo", $prom[3], "#FFDE68"),
        array( "Vanessa", $prom[4], "#AB6487")
);
$maximo = 1;
foreach ( $datosTabla as  $ElemArray ) { $maximo +=  $ElemArray[1]; }
?>
<body>
<table width="400" cellspacing="0" cellpadding="2">
<?php foreach( $datosTabla as  $ElemArray) {
$porcentaje = round(((  $ElemArray[1] / $maximo ) * 100),2);
?>
<tr>
    <td width="20%"><strong><?php echo(  $ElemArray[0] ) ?></strong></td>
    <td width="10%"><?php echo( $porcentaje ) ?>%</td>
    <td>
        <table width="<?php echo($porcentaje) ?>%" bgcolor="<?php echo($ElemArray[2]) ?>">
        <tr><td></td></tr>
    </table>
    </td>
    </tr>
    <?php } ?>
</body>
</html>