<?php

	require("class.phpmailer.php");
	require("class.smtp.php");






    $name = $_REQUEST['name'];
    $from = $_REQUEST['email'];
    $number = $_REQUEST['number'];
    $subject = $_REQUEST['subject'];
    $cmessage = $_REQUEST['message'];

    $addressee = "info@ecoteltravel.com";


	// Datos de la cuenta de correo utilizada para enviar vía SMTP
	$smtpHost = "mail.ecoteltravel.com";  // Dominio alternativo brindado en el email de alta 
	$smtpUsuario = "info@ecoteltravel.com";  // Mi cuenta de correo
	$smtpClave = "Ecotel2020";  // Mi contraseña

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->Port = 587; 
	$mail->IsHTML(true); 
	$mail->CharSet = "utf-8";

	$mail->Host = $smtpHost; 
	$mail->Username = $smtpUsuario; 
	$mail->Password = $smtpClave;

	$mail->From = $from; // Email desde donde envío el correo.
	$mail->FromName = $name;
	$mail->AddAddress($addressee); // Esta es la dirección a donde enviamos los datos del formulario

	$mail->Subject = "Formulario desde el Sitio Web"; // Este es el titulo del email.

	$mensajeHtml = nl2br($cmessage);


	$body = "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Ecotel Trave (web page)</title></head><body>";
	$body .= "<table style='width: 100%;'><tr><td style='background: #7AB941; color: #ffffff; padding: 2em;'><strong>Nombre:</strong></td>";
	$body .= "<td style='color: #ffffff; background: #2d4d9d; padding: 2em;'>{$name}</td>";
	$body .= "</tr><tr><td style='background: #7AB941; color: #ffffff; padding: 2em;'><strong>Asunto:</strong></td>";
	$body .= "<td style='color: #ffffff; background: #2d4d9d; padding: 2em;'>{$subject}</td>";
	$body .= "</tr><tr><td style='background: #7AB941; color: #ffffff; padding: 2em;'><strong>Correo:</strong></td>";
	$body .= "<td style='color: #ffffff; background: #2d4d9d; padding: 2em;'>{$from}</td>";
	$body .= "</tr><tr><td style='background: #7AB941; color: #ffffff; padding: 2em;'><strong>Mensaje:</strong></td>";
	$body .= "<td style='color: #ffffff; background: #2d4d9d; padding: 2em;'>{$cmessage}</td>";
	$body .= "</tr></table></body></html>";

	$mail->Body = $body;
	$mail->AltBody = "{$cmessage} \n\n "; // Texto sin formato HTML


    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
	);

    $estadoEnvio = $mail->Send(); 
	if($estadoEnvio){
	    header( "refresh:1; url=informacion.html" ); 
	} else {
	    echo "<script>alert('Mensaje no enviado');</script>";
	}

  

?>