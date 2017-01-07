<?
include("conexion.php");

$login 	  =$_POST['login'];
$password =$_POST['password'];

$query="SELECT COUNT(*) as Total FROM Admon where Usuario = '$login' and Contrasena = '$password'" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Total=$row["Total"];
}


if (!empty($Total))
{
session_start(); 

$_SESSION['sesion']='si';

header("location: zona.php");  
}
else
{
header("location: index.php?error=a");  
}
?>