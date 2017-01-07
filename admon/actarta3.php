<?
include("conexion.php");
include("resize-class.php");

$Nombre	= 	$_REQUEST["Nombre"];
$Id 	=	$_REQUEST["Id"];

$sql="UPDATE Categorias SET Nombre='$Nombre' Where Id='$Id' ";

mysql_query($sql,$id);


// 1 

$archivo1 = $_FILES['Logo']['tmp_name'];

$archiv			=			$_FILES['Logo']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "../categorias/G/".$foto1));


$query="UPDATE Categorias set LogoG='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../categorias/G/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(640, 270, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../categorias/G/".$foto1, 100);

}

//2 

$archivo2 = $_FILES['LogoP']['tmp_name'];

$archiv			=			$_FILES['LogoP']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo2))
{
$foto2= $Id.".".$ext;

(copy($archivo2, "../categorias/P/".$foto2));

$query="UPDATE Categorias set  LogoP='$foto2' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../categorias/P/".$foto2);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(300, 150, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../categorias/P/".$foto2, 100);

}
// 3

$archivo3 = $_FILES['ImagenPrincipal']['tmp_name'];

$archiv			=			$_FILES['ImagenPrincipal']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo3))
{
$foto3= $Id.".".$ext;

(copy($archivo3, "../categorias/Img_Principal/".$foto3));


$query="UPDATE Categorias set ImagenPrincipal='$foto3' Where Id='$Id'";
$result=mysql_query($query, $id);

	// *** 1) Initialise / load image
	$resizeObj = new resize("../categorias/Img_Principal/".$foto3);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(2000, 2000, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../categorias/Img_Principal/".$foto3, 100);

}

// 4

$archivo4 = $_FILES['ProductoImagenPrincipal']['tmp_name'];

$archiv			=			$_FILES['ProductoImagenPrincipal']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo4))
{
$foto4= $Id.".".$ext;

(copy($archivo4, "../categorias/Img_Principal/Producto/".$foto4));


$query="UPDATE Categorias set  ProdImagenPrincipal='$foto4' Where Id='$Id'";
$result=mysql_query($query, $id);

	// *** 1) Initialise / load image
	$resizeObj = new resize("../categorias/Img_Principal/Producto/".$foto4);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(1800, 900, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../categorias/Img_Principal/Producto/".$foto4, 100);

}

// 5

$archivo5 = $_FILES['RayaV']['tmp_name'];

$archiv			=			$_FILES['RayaV']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo5))
{
$foto5= $Id.".".$ext;

(copy($archivo5, "../categorias/Rayas/V/".$foto5));


$query="UPDATE Categorias set  RayaVertical='$foto5' Where Id='$Id'";
$result=mysql_query($query, $id);

	// *** 1) Initialise / load image
	$resizeObj = new resize("../categorias/Rayas/V/".$foto5);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(48, 810, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../categorias/Rayas/V/".$foto5, 100);

}

// 6

$archivo6 = $_FILES['RayaH']['tmp_name'];

$archiv			=			$_FILES['RayaH']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo6))
{
$foto6= $Id.".".$ext;

(copy($archivo6, "../categorias/Rayas/H/".$foto6));


$query="UPDATE Categorias set  RayaHorizontal='$foto6' Where Id='$Id'";
$result=mysql_query($query, $id);

	// *** 1) Initialise / load image
	$resizeObj = new resize("../categorias/Rayas/H/".$foto6);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(1273, 73, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../categorias/Rayas/H/".$foto6, 100);

}


?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('articulosa.php');

</script>
