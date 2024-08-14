<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $telefono = $_POST["telefono"];
    $prevision = $_POST["prevision"];
    $email = $_POST["email"];
    $tipo_solicitud = $_POST["tipo_solicitud"];
    $mensaje = htmlspecialchars($_POST["mensaje"]);
    $captcha = $_POST['g-recaptcha-response'];

    // Verifica si el captcha está vacío
    if (!$captcha) {
        echo '<h2>Por favor, verifica el captcha.</h2>';
        exit;
    }

    // Verifica la clave secreta de reCAPTCHA
    $secretKey = '6LcKKSEqAAAAAJevVp_mDkVeHEU7At7X6Fq4ruTX'; // Reemplaza con tu clave secreta de reCAPTCHA
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => $secretKey, 'response' => $captcha)));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $responseKeys = json_decode($response, true);

    // Verifica si la validación del captcha es correcta
    if (intval($responseKeys["success"]) !== 1) {
        echo '<h2>Falló la verificación del reCAPTCHA. Por favor, inténtalo nuevamente.</h2>';
        exit;
    }

    $destinatario1 = "info@seguelabogados.cl";
    $destinatario2 = $email;

    $asunto = "Consulta de $nombres $apellidos";
    $contenido = "Nombres: $nombres\n";
    $contenido .= "Apellidos: $apellidos\n";
    $contenido .= "Telefono: $telefono\n";
    $contenido .= "Prevision: $prevision\n";
    $contenido .= "E-mail: $email\n";
    $contenido .= "Tipo_Solicitud: $tipo_solicitud\n";
    $contenido .= "Mensaje:\n$mensaje\n";
    
    // Configurar las cabeceras del correo
    $headers = "From: info@seguelabogados.cl\r\n";
    $headers .= "Reply-To: info@seguelabogados.cl\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    mail($destinatario1, $asunto, $contenido);
    mail($destinatario2, $asunto, $contenido);
    
    // Redireccionar al usuario a una página de confirmación o mostrar un mensaje de éxito
    header('Location: confirmacion.html');
    exit;
}
?>
