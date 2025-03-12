<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $telefono = htmlspecialchars($_POST["telefono"]);
    $negocio = htmlspecialchars($_POST["negocio"]);

    $destinatario = "baciliogonzales@gmail.com"; // Cambia esto a tu correo
    $asunto = "Nueva solicitud de demo";
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Email: $email\n";
    $mensaje .= "Teléfono: $telefono\n";
    $mensaje .= "Negocio: $negocio\n";

    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>