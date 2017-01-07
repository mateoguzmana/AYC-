<?
include("conexion.php");
include("resize-class.php");

$Titulo			= 		$_REQUEST["Titulo"];
$Texto			= 		$_REQUEST["Texto"];
$Pos			= 		$_REQUEST["Pos"];


$sql="INSERT INTO Img_inicio (Titulo,Frase,Pos)";
$sql.= "VALUES ('$Titulo','$Texto','$Pos')";
mysql_query($sql);


$query="SELECT * FROM Img_inicio Order By Id Asc";
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

(copy($archivo1, "../preview/".$foto1));



$query="UPDATE Img_inicio set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../preview/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(1600, 600, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../preview/".$foto1, 100);

}





?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('banner.php');

</script>

