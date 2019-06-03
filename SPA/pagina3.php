<?php
SESSION_START();
?>
<html>
<head>
<title>problem</title>
</head>
<body>
<?php
if($_SESSION['numeroaleatorio']==$_REQUEST['numero'])
{
echo "ingresaste el valor correcto";
}
else
{
echo "numero incorrecto";
}
?>
</body>
</html>