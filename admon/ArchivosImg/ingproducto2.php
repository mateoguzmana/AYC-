<?
include("conexion.php");
include("resize-class.php");

$Grupo			=		$_REQUEST["Grupo"];
$Pos			=		$_REQUEST["Pos"];



$sql="INSERT INTO Img_productos (IdLinea, Pos)";
$sql.= "VALUES ('$Grupo','$Pos')";
mysql_query($sql);

$query="SELECT* FROM Img_productos Order By Id Asc";
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id=$row["Id"];
}

// Vista previa

$archivo1 = $_FILES['file1']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "../productos/p/".$foto1));



$query="UPDATE Img_productos set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../productos/p/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(450, 425, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../productos/p/".$foto1, 100);

}

// Producto

$archivo2 = $_FILES['file2']['tmp_name'];

$archiv			=			$_FILES['file2']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo2))
{
$foto2= $Id.".".$ext;

(copy($archivo2, "../productos/g/".$foto2));



$query="UPDATE Img_productos set Foto2='$foto2' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../productos/g/".$foto2);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(1800, 900, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../productos/g/".$foto2, 100);

}
?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('productos.php');

</script>

