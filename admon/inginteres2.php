<?
include("conexion.php");
include("resize-class.php");

$Titulo			=		$_REQUEST["Titulo"];
$Intro 			= 		$_REQUEST["Intro"];
$Descripcion 	= 		$_REQUEST["Descripcion"];
$Pos			=		$_REQUEST["Pos"];
$Fecha 			= 		$_REQUEST["Fecha"];

$sql="INSERT INTO Publicaciones (Titulo,Intro,Descripcion,Fecha,Pos)";
$sql.= "VALUES ('$Titulo','$Intro','$Descripcion','$Fecha','$Pos')";
mysql_query($sql);

$query="SELECT* FROM Publicaciones Order By Id Asc";
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

(copy($archivo1, "../publicaciones/".$foto1));



$query="UPDATE Publicaciones set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../publicaciones/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(850, 320, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../publicaciones/".$foto1, 100);

}

?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('interes.php');

</script>

