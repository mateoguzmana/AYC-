<?
include("conexion.php");
include("resize-class.php");

$Id				=		$_REQUEST["Id"];
$Pos			=		$_REQUEST["Pos"];

$query="UPDATE Img_catalogo set Pos='$Pos' Where Id= '$Id' ";
$result=mysql_query($query, $id);


$archivo1 = $_FILES['file1']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "../Catalogo/".$foto1));



$query="UPDATE Img_catalogo set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../Catalogo/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(2000, 1998, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../Catalogo/".$foto1, 100);

}




?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('imgcatalogo.php');

</script>

