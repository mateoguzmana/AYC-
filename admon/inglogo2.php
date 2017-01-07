<?
include("conexion.php");
include("resize-class.php");

$Pos	= 	$_REQUEST["Pos"];


$sql="INSERT INTO Img_logos (Pos)";
$sql.= "VALUES ('$Pos')";
mysql_query($sql);


$query="SELECT * FROM Img_logos Order By Id Asc";
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id=$row["Id"];
}

//Imagen español

$archivo1 = $_FILES['file1']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "../logos/".$foto1));



$query="UPDATE Img_logos set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../logos/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(400, 114, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../logos/".$foto1, 100);

}
 









?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('logo.php');

</script>

