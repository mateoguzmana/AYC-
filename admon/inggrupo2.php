<?
include("conexion.php");
include("resize-class.php");

$Pregunta		=		$_REQUEST["Nombre"];
$Pos			=		$_REQUEST["Pos"];
$Respuesta		=		$_REQUEST["Texto"];


$sql="INSERT INTO  Grupos (Nombre, Cod)";
$sql.= "VALUES ('$Pregunta', '$Pos')";
mysql_query($sql);


?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('grupos.php');

</script>

