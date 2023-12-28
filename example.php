//right Spanish left English
<?php
//importar librerias - import libraries
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-6.1.7/src/PHPMailer.php';
require './PHPMailer-6.1.7/src/Exception.php';
require './PHPMailer-6.1.7/src/SMTP.php';

$mail = new PHPMailer(true);

$mail->isSMTP(); // Establece el uso de SMTP - Set the use of SMTP
$mail->Host = 'mail.gmail.com.pe'; // Configura el servidor SMTP - Configure the SMTP server
$mail->SMTPAuth = true; // Habilita la autenticación SMTP - Enable SMTP authentication
$mail->Username = '-----@email.com'; // Tu dirección de correo electrónico SMTP - Your SMTP email address
$mail->Password = 'u password'; // Tu contraseña SMTP - Your SMTP password
$mail->Port = 587; // Puerto SMTP (generalmente 587 para TLS o 465 para SSL) - SMTP port (usually 587 for TLS or 465 for SSL)

$mail->setFrom('-----@email.com', 'Tittle'); // Remitente - Sender
$mail->addAddress('email@gmail.com', 'Name of individual'); // Destinatario - Addressee
$mail->Subject = '---'; // Asunto - Affair
$mail->Body = 'body'; // Contenido del mensaje (puede ser HTML) - Message content (can be HTML)

try {
    $mail->send(); // Envía el correo electrónico - Send the email
    echo 'The email has been sent successfully'; 
} catch (Exception $e) {
    echo 'The email could not be sent. Error: ', $mail->ErrorInfo;
}
?>
