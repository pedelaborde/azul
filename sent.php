<?php

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
}
if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];
}
if (isset($_POST['fecha'])) {
    $fecha = $_POST['fecha'];
}
if (isset($_POST['horario'])) {
    $horario = $_POST['horario'];
}
if (isset($_POST['pax'])) {
    $pax = $_POST['pax'];
}
if (isset($_POST['idioma'])) {
    $idioma = $_POST['idioma'];
}


$para = "nadine.pedelaborde@davinci.edu.ar";
$mensaje = "";

$mensaje .= "De: " .$nombre. "\r\n";
$mensaje .= "Mail: " .$mail. "\r\n";
$mensaje .= "Fecha: " .$fecha. "\r\n";
$mensaje .= "Horario: " .$horario. "\r\n";
$mensaje .= "Cantidad de pasajeros: " .$pax. "\r\n";
$mensaje .= "Idioma: " .$idioma. "\r\n";

mail($para, $mensaje);

header ( 'location: gracias.html' );

 ?>
