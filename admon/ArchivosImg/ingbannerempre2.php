<?
include("conexion.php");
include("resize-class.php");

$Nombre			=		$_REQUEST["Nombre"];
$Pos			=		$_REQUEST["Pos"];


$sql="INSERT INTO  Banneremp (Nombre, Pos)";
$sql.= "VALUES ('$Nombre', '$Pos')";
mysql_query($sql);


$query="SELECT* FROM Banneremp Order By Id Asc";
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

(copy($archivo1, "../empresa/".$foto1));



$query="UPDATE Banneremp set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../empresa/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(940, 300, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../empresa/".$foto1, 100);

}





?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('bannerempresa.php');

</script>

