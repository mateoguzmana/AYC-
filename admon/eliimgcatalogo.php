<?
include("conexion.php");


$Id				=		$_REQUEST["Id"];

$query008="SELECT* FROM Img_catalogo where Id = '$Id' " ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
		$Foto1		=	$row008["Foto"];
		
		if (!empty($Foto1))
		{
		unlink('../Catalogo/'.$Foto1);
		}
}

$SQL2="Delete From Img_catalogo Where Id='$Id'";
mysql_query($SQL2);	




?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('imgcatalogo.php');

</script>

