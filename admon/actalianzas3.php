<?
include("conexion.php");
include("resize-class.php");

$Id				=		$_REQUEST["Id"];
$Nombre			=		$_REQUEST["Nombre"];
$Pos			=		$_REQUEST["Pos"];



$query="UPDATE Alianzas set Nombre='$Nombre',Pos='$Pos' Where Id= '$Id' ";
$result=mysql_query($query, $id);


// Vista previa

$archivo1 = $_FILES['file1']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "../Alianzas/".$foto1));



$query="UPDATE Alianzas set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../Alianzas/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(176, 76, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../Alianzas/".$foto1, 100);

}

?>
<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('alianzas.php');

</script>