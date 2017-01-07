<?
include("conexion.php");
include("resize-class.php");

$Nombre1			=		$_REQUEST["Nombre1"];
$Nombre2			=		$_REQUEST["Nombre2"];


$sql="INSERT INTO  Frases (Nombre1, Nombre2)";
$sql.= "VALUES ('$Nombre1', '$Nombre2')";
mysql_query($sql);



?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('frases.php');

</script>

