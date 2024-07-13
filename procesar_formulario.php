<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $institucion = htmlspecialchars($_POST['institucion']);
    $nit = htmlspecialchars($_POST['nit']);
    $ciudad = htmlspecialchars($_POST['ciudad']);
    $email = htmlspecialchars($_POST['email']);
    $celular = htmlspecialchars($_POST['celular']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $to = "bhmconsultorias@gmail.com"; // Reemplaza esto con tu dirección de correo electrónico
    $subject = "Nuevo mensaje del formulario de contacto";
    $body = "Nombre: $nombre\nInstitución: $institucion\nNIT: $nit\nCiudad: $ciudad\nEmail: $email\nCelular: $celular\nMensaje: $mensaje";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
