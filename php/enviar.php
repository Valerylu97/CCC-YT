<?php
//definir variables
$mail = $_POST['mail'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Hola bienvenida/o a nuestro club. Para registrarte por favor llena el formulario adjunto acontinuación \r\n";
$message .= "https://docs.google.com/forms/d/1A8DlSj3EB5q2L_ZjNKz-UuA7aJYc3yMkO-9EvgFKZwQ/prefill"."\r\n";
$message .= "De antemano muchas gracias por mostrar interés en nosotros y querer formar parte del mismo. ". " \r\n";
$message .= "CCC-YT ". " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time()) . " \r\n";

$para = $mail;
$asunto = 'Inscripción CCC-YT';

mail($para, $asunto, utf8_decode($message), $header);
echo "<script> alert('Por favor revisar su email')</script>";
echo "<script> setTimeout(\"location.href='../index.html'\", 1000)</script>";
?>