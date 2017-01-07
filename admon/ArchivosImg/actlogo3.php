<?
include("conexion.php");
include("resize-class.php");

$Id				=		$_REQUEST["Id"];
$Pos			=		$_REQUEST["Pos"];

$query="UPDATE Img_logos set Pos='$Pos' Where Id= '$Id' ";
$result=mysql_query($query, $id);


//Imagen español

$archivo1 = $_FILES['file1']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "../logos/ES/".$foto1));



$query="UPDATE Img_logos set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../logos/ES/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(400, 114, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../logos/ES/".$foto1, 100);

	// Logo español pequeño

	// *** 1) Initialise / load image
	$resizeObj = new resize("../logos/ES/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(215, 60, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../logos/ES/p/".$foto1, 100);

}
 
//Imagen ingles

$archivo2 = $_FILES['file2']['tmp_name'];

$archiv			=			$_FILES['file2']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo2))
{
$foto2= $Id.".".$ext;

(copy($archivo2, "../logos/EN/".$foto2));



$query="UPDATE Img_logos set FotoEN='$foto2' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../logos/EN/".$foto2);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(400, 114, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../logos/EN/".$foto2, 100);

	// Logo ingles pequeño

		// *** 1) Initialise / load image
	$resizeObj = new resize("../logos/EN/".$foto2);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(215, 60, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../logos/EN/p/".$foto2, 100);

}






?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('logo.php');

</script>

