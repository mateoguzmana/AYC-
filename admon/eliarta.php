<?
include("conexion.php");

$Id				=		$_REQUEST["Id"];

$query008="SELECT* FROM Categorias where Id = '$Id' " ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
		$Foto1		=	$row008["LogoG"];
		
		if (!empty($Foto1))
		{
		unlink('../categorias/G/'.$Foto1);
		}

		$Foto2		=	$row008["LogoP"];
		
		if (!empty($Foto2))
		{
		unlink('../categorias/P/'.$Foto2);
		}

		$Foto3		=	$row008["ImagenPrincipal"];
		
		if (!empty($Foto3))
		{
		unlink('../categorias/Img_Principal/'.$Foto3);
		}

		$Foto4		=	$row008["ProdImagenPrincipal"];
		
		if (!empty($Foto4))
		{
		unlink('../categorias/Img_Principal/Producto/'.$Foto4);
		}

		$Foto5		=	$row008["RayaVertical"];
		
		if (!empty($Foto5))
		{
		unlink('../categorias/Rayas/V/'.$Foto5);
		}

		$Foto6		=	$row008["RayaHorizontal"];
		
		if (!empty($Foto6))
		{
		unlink('../categorias/Rayas/H/'.$Foto6);
		}
}

$SQL2="DELETE FROM Categorias Where Id='$Id'";
mysql_query($SQL2);	

?>

<script type="text/javascript">
	alert('La operacion se realizo con exito.');
	parent.location.href=('articulosa.php');
</script>