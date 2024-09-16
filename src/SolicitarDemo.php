<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $email = htmlspecialchars(trim($_POST['email']));
    $empresa = htmlspecialchars(trim($_POST['empresa']));
    $producto = htmlspecialchars(trim($_POST['producto']));

    // Validación básica
    if (!empty($email) && !empty($empresa) && !empty($producto)) {
        // Email de destino
        $destino = "agustina@e-reparo.com.ar"; // Cambia esto por el correo electrónico al que deseas enviar los datos

        // Asunto del correo
        $asunto = "Solicitud de Demo";

        // Mensaje del correo
        $mensaje = "Email: " . $email . "\n";
        $mensaje .= "Empresa: " . $empresa . "\n";
        $mensaje .= "Producto solicitado: " . $producto . "\n";

        // Cabeceras del correo
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        // Enviar el correo
        if (mail($destino, $asunto, $mensaje, $headers)) {
            // Redirigir al sitio
            header("Location: https://pilait.com.ar");
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
