<?php
$name = $_POST['Nombre'];
$empresa = $_POST['empresa'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = 'De: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por  " . "$name" . ",\r\n";
$message = "Perteneciente a la empresa  " . "$empresa" . ",\r\n";
$message .= "Su e-mail es: " . "$mail" . " \r\n";
$message .= "Su telefono es: " . "$telefono" . " \r\n";
$message .= "Mensaje: " . "$_POST['mensaje']" . " \r\n";
$message .= "Enviado el " . date('d/m/Y', time());

$for = 'sicsa.hse@gmail.com';
$subjet = 'Mail de SICSA WEB';

mail($for, $subjet, utf8_decode($message), $header);

header("Location:ty.html");
?>