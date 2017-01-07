<?
include("conexion.php");
include("resize-class.php");

$Id				=		$_REQUEST["Id"];
$Nombre		=		$_REQUEST["Nombre"];
$Pos		=		$_REQUEST["Pos"];
$Texto		=		$_REQUEST["Texto"];
$Subtitulo	=		$_REQUEST["Subtitulo"];
$Intro		=		$_REQUEST["Intro"];


$query="UPDATE Terapias set Texto='$Texto', Nombre='$Nombre', Pos='$Pos', Subtitulo='$Subtitulo', Intro='$Intro'  Where Id= '$Id' ";
$result=mysql_query($query, $id);


$archivo1 = $_FILES['file1']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "../terapias/".$foto1));



$query="UPDATE Terapias set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../terapias/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(320, 300, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../terapias/g/".$foto1, 100);
	
	
	
	
	
	// *** 1) Initialise / load image
	$resizeObj = new resize("../terapias/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(215, 190, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../terapias/p/".$foto1, 100);
	

	

}

?>
<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('terapias.php');

</script>