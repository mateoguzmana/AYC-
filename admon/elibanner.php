<?
include("conexion.php");


$Id				=		$_REQUEST["Id"];

$query008="SELECT * FROM Img_inicio WHERE Id = '$Id' " ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
		$Foto1		=	$row008["Foto"];
		
		if (!empty($Foto1))
		{
		unlink('../preview/'.$Foto1);
		}
}

$SQL2="DELETE FROM  Img_inicio WHERE Id='$Id'";
mysql_query($SQL2);	




?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('banner.php');

</script>

