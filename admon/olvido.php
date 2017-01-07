<?
include("conexion.php");

$header = "MIME-Version: 1.0\n";
$header.= "Content-Type: text/html; charset=iso-8859-1\n";
$header.= "From: VERTICE INGENIERIA <info@verticeing.com> \n"; 
$header.= "Reply-To:info@verticeing.com\n\n";


$query="SELECT* FROM admon" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$usuario =$row["usuario"];
$contrasena =$row["contrasena"];
}

$msg = "<strong>Por su propia solicitud recordamos los datos de registro:</strong> <br><br>"; 
$msg.="<strong> Login: </strong> ".$usuario." <br>";
$msg.="<strong> Password: </strong>".$contrasena." <br><br> <br>";

$recipient = "info@verticeing.com"; 
$subject = "Recuperación de Password"; 


mail($recipient, $subject, $msg, $header);
header("Location: index2.php");
?>