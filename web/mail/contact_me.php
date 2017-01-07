<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
	echo json_encode(array('error'=>'true'));
	return false;
}

$Asunto = $_POST["Asunto"];

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$subject = ($_POST['subject'] ? $_POST['subject'] : "Website Contact Form:  $name");



// Create the email and send the message
$to = 'info@asesoriayconsultorias.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = $subject;
$email_body = " $Asunto\n\n"."Aquí están los detalles:\n\nNombre: $name\n\nApellidos: $lastname\n\nEmail: $email_address\n\nTelefono: $phone\n\nMensaje:\n$message";
$headers .= "From: AYC <info@asesoriayconsultorias.com>\r\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Responder a: $email_address";	
mail($to,$email_subject,$email_body,$headers);
echo json_encode(array('success'=>'true'));
return true;			
?>