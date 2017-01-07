<?
include("conexion.php");
include("resize-class.php");

$Id				=		$_REQUEST["Id"];
$Titulo  		= 		$_REQUEST["Titulo"];	
$Descripcion    = 		$_REQUEST["Descripcion"];	
$Nombre			=		$_REQUEST["Nombre"];
$Pos			=		$_REQUEST["Pos"];

$query="UPDATE Img_empresa set Titulo='$Titulo',Descripcion='$Descripcion',Pos='$Pos' Where Id= '$Id'";
$result=mysql_query($query, $id);


$archivo1 = $_FILES['file1']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "../preview/Empresa/".$foto1));



$query="UPDATE Img_empresa set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../preview/Empresa/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(470, 200, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../preview/Empresa/".$foto1, 100);

}


?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('bannerempresa.php');

</script>

