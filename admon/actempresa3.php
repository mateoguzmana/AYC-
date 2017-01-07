<?
include("conexion.php");
include("resize-class.php");


$Id				=		$_REQUEST["Id"];
$Nombre			=		$_REQUEST["Nombre"];
$Texto			=		$_REQUEST["Texto"];
$NombreEN		=		$_REQUEST["NombreEN"];
$TextoEN		=		$_REQUEST["TextoEN"];
$Pos			=		$_REQUEST["Pos"];


$query="UPDATE Empresa set Texto='$Texto', Nombre='$Nombre', TextoEN='$TextoEN', NombreEN='$NombreEN', Pos='$Pos'  Where Id= '$Id' ";
$result=mysql_query($query, $id);



?>
<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('empresa.php');

</script>