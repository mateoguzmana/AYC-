<?
include("conexion.php");


$Id					          =$_REQUEST["Id"];

// Información de catalogo en español

$Titulo	              =$_REQUEST["Titulo"];
$SubTitulo1           =$_REQUEST["SubTitulo1"];
$Item1                =$_REQUEST["Item1"];
$Item2                =$_REQUEST["Item2"];
$Item3                =$_REQUEST["Item3"];
$Item4                =$_REQUEST["Item4"];
$Item5                =$_REQUEST["Item5"];
$Item6                =$_REQUEST["Item6"];
$Item7                =$_REQUEST["Item7"];
$Item8                =$_REQUEST["Item8"];
$SubTitulo2           =$_REQUEST["SubTitulo2"];
$Info1                =$_REQUEST["Info1"];
$Info2                =$_REQUEST["Info2"];
$Info3                =$_REQUEST["Info3"];
$Info4                =$_REQUEST["Info4"];
$Info5                =$_REQUEST["Info5"];
$Info6                =$_REQUEST["Info6"];
$CampoGrande          =$_REQUEST["CampoGrande"];

// Información de catalogo en inglés

$TituloEN               =$_REQUEST["TituloEN"];
$SubTitulo1EN           =$_REQUEST["SubTitulo1EN"];
$Item1EN                =$_REQUEST["Item1EN"];
$Item2EN                =$_REQUEST["Item2EN"];
$Item3EN                =$_REQUEST["Item3EN"];
$Item4EN                =$_REQUEST["Item4EN"];
$Item5EN                =$_REQUEST["Item5EN"];
$Item6EN                =$_REQUEST["Item6EN"];
$Item7EN                =$_REQUEST["Item7EN"];
$Item8EN                =$_REQUEST["Item8EN"];
$SubTitulo2EN           =$_REQUEST["SubTitulo2EN"];
$Info1EN                =$_REQUEST["Info1EN"];
$Info2EN                =$_REQUEST["Info2EN"];
$Info3EN                =$_REQUEST["Info3EN"];
$Info4EN                =$_REQUEST["Info4EN"];
$Info5EN                =$_REQUEST["Info5EN"];
$Info6EN                =$_REQUEST["Info6EN"];
$CampoGrandeEN          =$_REQUEST["CampoGrandeEN"];


$query="UPDATE Catalogo SET 
Titulo				='$Titulo', 
SubTitulo1			='$SubTitulo1', 
Item1				='$Item1',
Item2				='$Item2',
Item3				='$Item3',
Item4				='$Item4',
Item5				='$Item5',
Item6				='$Item6',
Item7				='$Item7',
Item8				='$Item8',
SubTitulo2			='$SubTitulo2', 
Info1 				='$Info1',
Info2 				='$Info2',
Info3 				='$Info3',
Info4 				='$Info4',
Info5 				='$Info5',
Info6 				='$Info6',
CampoGrande 		='$CampoGrande',

TituloEN			='$TituloEN', 
SubTitulo1EN		='$SubTitulo1EN', 
Item1EN				='$Item1EN',
Item2EN				='$Item2EN',
Item3EN				='$Item3EN',
Item4EN				='$Item4EN',
Item5EN				='$Item5EN',
Item6EN				='$Item6EN',
Item7EN				='$Item7EN',
Item8EN				='$Item8EN',
SubTitulo2EN		='$SubTitulo2EN', 
Info1EN 			='$Info1EN',
Info2EN 			='$Info2EN',
Info3EN 			='$Info3EN',
Info4EN 			='$Info4EN',
Info5EN 			='$Info5EN',
Info6EN 			='$Info6EN',
CampoGrandeEN 		='$CampoGrandeEN'
 
 WHERE Id= '$Id' ";
$result=mysql_query($query, $id);

?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	location.href=('actcatalogo.php');

</script>

