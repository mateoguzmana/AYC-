<?
include("conexion.php");
include("resize-class.php");

$Texto			=		$_REQUEST["Texto"];
$Id				=		$_REQUEST["Id"];
$Seccion		=		$_REQUEST["Seccione"];


$query="UPDATE Encabezados set Texto='$Texto', Seccion='$Seccion' Where Id= '$Id' ";
$result=mysql_query($query, $id);








$archivo1 = $_FILES['file1']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Seccion.".".$ext;

(copy($archivo1, "../encabezados/".$foto1));



$query="UPDATE Encabezados set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../encabezados/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(320, 300, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../encabezados/".$foto1, 100);

}





?>
<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('encabezados.php');

</script>