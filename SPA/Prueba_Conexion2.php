<?php
$x=1;
$user="root";
$pass="";
$server="localhost:3306";
$db="Spa_Database";
$con=mysql_pconnect ($server,$user,$pass) or die ("error al conectar");
$res=mysql_query("select * from cliente", $con);
while ($e_mails=mysql_fetch_array($res)) 
{
if($_REQUEST['e_mail']==$e_mails[3])
	{
	$x=0;
	echo "hola";
	}
}
$filas=mysql_num_rows($res);
if($x==1)
{
	$consulta="insert into cliente values('$filas','$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[e_mail]','$_REQUEST[telefono]')";
	mysql_db_query($db,$consulta);
	echo "Los datos se cargan con exito";
}
else
{
echo "Ya estas registrado";
}
?>