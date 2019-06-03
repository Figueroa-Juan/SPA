<?php
$x=0;
$user="root";
$pass="";
$server="localhost:3306";
$db="Spa_Database";
$con=mysql_pconnect ($server,$user,$pass) or die ("error al conectar");
$res=mysql_query("select * from cliente", $con);
//$e_mail=mysql_query("select e_mail from cliente", $con);
$filas=mysql_num_rows($res);
while ($lala=mysql_fetch_array($res)) 
{
if ($lala[3]==$_REQUEST[e_mail]) 
	{
	$x=1;
	}
}
if ($x==0) 
	{
	$consulta="insert into cliente values('$filas','$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[e_mail]','$_REQUEST[telefono]')";
	mysql_db_query($db,$consulta);
	echo "Los datos se cargan con exito";?>
	<html>
	<head>
	</head>
	<body>
	<a href="Prueba2.html">Realizar reservacion<br>
	<a href="Prueba1.html">Volver
	</body>
	</html>
	<?php
	}
else
	{
	echo "Ya estas registrado";
	}
?>