<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $email = htmlspecialchars(trim($_POST['email']));
    $consulta = htmlspecialchars(trim($_POST['consulta']));

    // Validación básica
    if (!empty($nombre) && !empty($email) && !empty($consulta)) {
        // Email de destino
        $destino = "agustina@e-reparo.com.ar";

        // Asunto del correo
        $asunto = "Consulta desde el formulario de contacto";

        // Mensaje del correo
        $mensaje = "Nombre: " . $nombre . "\n";
        $mensaje .= "Email: " . $email . "\n";
        $mensaje .= "Consulta: " . $consulta . "\n";

        // Cabeceras del correo
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        // Enviar el correo
        if (mail($destino, $asunto, $mensaje, $headers)) {
            echo "Mensaje enviado correctamente.";
        } else {
            echo "Error al enviar el mensaje. Intenta nuevamente.";
        }
    } else {
        echo "Por favor, completa todos los campos del formulario.";
    }
} else {
    echo "Método de envío no válido.";
}
?>
