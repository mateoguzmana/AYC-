<?
include("conexion.php");


$Id				=		$_REQUEST["Id"];
$Fb				=		$_REQUEST["Fb"];
$It				=		$_REQUEST["It"];
$Go 			=		$_REQUEST["Go"];
$Tw 			=		$_REQUEST["Tw"];
$You 			=		$_REQUEST["You"];

$query="UPDATE Redes set Fb='$Fb', It='$It',Go='$Go',Tw='$Tw',You='$You' Where Id= '1' ";
$result=mysql_query($query, $id);


?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	location.href=('actredes.php');

</script>

