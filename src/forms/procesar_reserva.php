<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once './settings.php'; // Asegúrate de que el path al archivo settings.php es correcto
require 'vendor/autoload.php'; // Asegúrate de que el path al autoload.php de Composer es correcto

$mail = new PHPMailer(true);

$mail->SMTPDebug = 0;

try {
    // Configuración del servidor SMTP de Gmail
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = emailpass()[0];
    $mail->Password = emailpass()[1];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Remitente y destinatario
    $mail->setFrom('paraisodelpacificosv@gmail.com', 'Paraiso del Pacifico'); // Cambia esto por tu dirección y nombre
    $mail->addAddress($_POST['correo'], ''); // Cambia esto por la dirección y nombre del destinatario

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'Confirmacion de Reserva';
    $mail->Body    = '
        <h1>Reserva Confirmada</h1>
        <p><strong>Nombre:</strong> ' . htmlspecialchars($_POST['nombre']) . '</p>
        <p><strong>Correo:</strong> ' . htmlspecialchars($_POST['correo']) . '</p>
        <p><strong>Teléfono:</strong> ' . htmlspecialchars($_POST['telefono']) . '</p>
        <p><strong>Fecha de Reserva:</strong> ' . htmlspecialchars($_POST['fecha_reserva']) . '</p>
        <p><strong>Suite:</strong> ' . htmlspecialchars($_POST['suite']) . '</p>
        <p><strong>Número de Noches:</strong> ' . htmlspecialchars($_POST['numero_noches']) . '</p>
        <p><strong>Costo Total:</strong> ' . htmlspecialchars($_POST['costo_total']) . '</p>
        <p><strong>Notas:</strong> ' . htmlspecialchars($_POST['notas']) . '</p>
    ';

    $mail->send();
    echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    echo "El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
}
?>