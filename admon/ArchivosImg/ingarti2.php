<?
include("conexion.php");
include("resize-class.php");

$Cod	=	$_REQUEST["Grupo"];
$Pos	= 	$_REQUEST["Pos"];

$sql="INSERT INTO Img_carrusel (IdLinea,Pos)";
$sql.= "VALUES ('$Cod','$Pos')";
mysql_query($sql);


$query="SELECT * FROM Img_carrusel Order By Id Asc";
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id=$row["Id"];
}

$archivo1 = $_FILES['file1']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "../carrusel/".$foto1));



$query="UPDATE Img_carrusel set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../carrusel/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(210, 290, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../carrusel/".$foto1, 100);

}



?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('articulos.php');

</script>

