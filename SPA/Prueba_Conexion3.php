<?php
$user="root";
$pass="";
$server="localhost:3306";
$db="Spa_Database";
$con=mysql_pconnect ($server,$user,$pass) or die ("error al conectar");
$res=mysql_query("select * from cliente", $con);
while ($e_mails2=mysql_fetch_array($res)) 
{
if($_REQUEST['e_mail']==$e_mails2[3])
	{
	$num_cli=$e_mails2[0];
	$nombre=$e_mails2[1];
	$apellido=$e_mails2[2];
	$telefono=$e_mails2[4];
	}
}

$res2=mysql_query("select * from servicio", $con);
while ($cod_serv=mysql_fetch_array($res2)) 
{
if($_REQUEST[caja]==$cod_serv[0])
	{
	$ser=$cod_serv[3];
	}
}
$consulta="insert into Res_Tur values('$_REQUEST[fecha]','$_REQUEST[hora]','$ser','$num_cli')";
	mysql_db_query($db,$consulta);
	echo "Los datos se cargan con exito";
?>