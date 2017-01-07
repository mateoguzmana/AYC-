<?
include("conexion.php");
include("resize-class.php");

$Id				=		$_REQUEST["Id"];
$Nombre1		=		$_REQUEST["Nombre1"];
$Nombre2		=		$_REQUEST["Nombre2"];

$query="UPDATE Frases set Nombre1='$Nombre1', Nombre2='$Nombre2' Where Id= '1' ";
$result=mysql_query($query, $id);


?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('frases.php');

</script>

