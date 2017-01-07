<?
include("conexion.php");


$Id				  =$_REQUEST["Id"];
$Nombre           =$_REQUEST["Nombre"];
$Direccion        =$_REQUEST["Direccion"];
$Telefono         =$_REQUEST["Telefono"];
$Celular          =$_REQUEST["Celular"];
$Email            =$_REQUEST["Email"];
$Horario          =$_REQUEST["Horario"];
$Titulo           =$_REQUEST["Titulo"];
$Subtitulo        =$_REQUEST["Subtitulo"];
$Mapa             =$_REQUEST["Mapa"];


$query="UPDATE Contacto set Nombre='$Nombre',Direccion='$Direccion',
Telefono='$Telefono',Celular='$Celular',Email='$Email',Horario='$Horario',
Titulo='$Titulo',Subtitulo='$Subtitulo',Mapa='$Mapa' Where Id= '$Id' ";
$result=mysql_query($query, $id);

?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	location.href=('actcontacto.php');

</script>

