<?php
$mail = $_POST['mail'];

$header .= 'From: ' . $mail . " \r\n";
$header . = "X-Mailer: PHP/" . phpversion() . "\r\n";
$header. = "Mime-Version: 1.0 \r\n";
$header.= "Content-Tyoe: text/plain";

$message = "Este mensaje fue enviado por: " . $mail . "\r\n";
$message .= "Su e-mail es: "  $mail . "\r\n";
$message .= "Mensaje: " . $_mail['mail'] . "\r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'grupotecnitech@gmail.com';
$asunto = 'Contáctenme';

mail($para, $asunto, utf8_decode($message), $header);

header("Location: index.html");
?>
