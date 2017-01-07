<?
include("conexion.php");
include("resize-class.php");

$Texto			=		$_REQUEST["Texto"];
$Id				=		$_REQUEST["Id"];
$Nombre			=		$_REQUEST["Nombre"];
$Pos			=		$_REQUEST["Pos"];


$query="UPDATE Nuevo set Texto='$Texto', Nombre='$Nombre', Pos='$Pos'  Where Id= '$Id' ";
$result=mysql_query($query, $id);



?>
<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('nuevo.php');

</script>