<?
include("conexion.php");
include("resize-class.php");

$Nombre		=		$_REQUEST["Nombre"];
$Pos		=		$_REQUEST["Pos"];
$Texto		=		$_REQUEST["Texto"];


$sql="INSERT INTO  Nuevo (Nombre, Texto, Pos)";
$sql.= "VALUES ('$Nombre', '$Texto', '$Pos')";
mysql_query($sql);

$query="SELECT* FROM Nuevo Order By Id Asc";
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id=$row["Id"];
}



?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('nuevo.php');

</script>

