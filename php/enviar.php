<?php
//definir variables
$mail = $_POST['mail'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Su e-mail es: " . $mail . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time()) . " \r\n";
$message .= "https://docs.google.com/forms/d/1A8DlSj3EB5q2L_ZjNKz-UuA7aJYc3yMkO-9EvgFKZwQ/prefill";

$para = $mail;
$asunto = 'Mensaje de PRECOMPC';

mail($para, $asunto, utf8_decode($message), $header);
echo "<script> alert('Por favor revisar su email')</script>";
echo "<script> setTimeout(\"location.href='../index.html#contact'\", 1000)</script>";
/*header("Location:../index.html#contact", 1000);*/
?>