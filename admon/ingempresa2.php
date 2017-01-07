<?
include("conexion.php");
include("resize-class.php");

$Nombre				=		$_REQUEST["Nombre"];
$Texto				=		$_REQUEST["Texto"];
$NombreEN			=		$_REQUEST["NombreEN"];
$TextoEN			=		$_REQUEST["TextoEN"];
$Pos				=		$_REQUEST["Pos"];


$sql="INSERT INTO  Empresa (Nombre, Texto, NombreEN, TextoEN, Pos) VALUES ('$Nombre', '$Texto', '$NombreEN', '$TextoEN', '$Pos')";
mysql_query($sql);

$query="SELECT * FROM Empresa Order By Id Asc";
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id=$row["Id"];
}



?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('empresa.php');

</script>

