<?
include("conexion.php");
include("resize-class.php");

$Grupo			=		$_REQUEST["Grupo"];
$Intro 			=		$_REQUEST["Intro"];
$Descripcion 	= 		$_REQUEST["Descripcion"];
$Pos			=		$_REQUEST["Pos"];



$sql="INSERT INTO Img_productos (Nombre,Intro,Descripcion,Pos)";
$sql.= "VALUES ('$Grupo','$Intro','$Descripcion','$Pos')";
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

(copy($archivo1, "../productos/".$foto1));



$query="UPDATE Img_productos set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../productos/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(277, 143, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../productos/".$foto1, 100);

}

?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('productos.php');

</script>
