<?
include("conexion.php");
include("resize-class.php");

$Id				=		$_REQUEST["Id"];
$Pregunta		=		$_REQUEST["Nombre"];
$Cod			=		$_REQUEST["Pos"];
$Respuesta		=		$_REQUEST["Texto"];


$query="UPDATE Grupos set Nombre='$Pregunta', Cod='$Cod'  Where Id= '$Id' ";
$result=mysql_query($query, $id);



?>
<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('grupos.php');

</script>