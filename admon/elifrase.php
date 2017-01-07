<?
include("conexion.php");


$Id				=		$_REQUEST["Id"];


$SQL2="Delete From Frases Where Id='$Id'";
mysql_query($SQL2);	




?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('frases.php');

</script>

