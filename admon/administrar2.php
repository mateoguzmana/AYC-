<?
include("conexion.php");

$Id= $_POST["Id"];
$usuario= $_POST["usuario"];
$contrasena= $_POST["contrasena"];

$query="UPDATE Admon set Usuario='$usuario', Contrasena='$contrasena' Where Id='$Id'";
$result=mysql_query($query, $id);

header("location: administrar.php");
?>