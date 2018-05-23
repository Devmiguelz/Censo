<?php  

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp1.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'softnet.apps@gmail.com';                 // SMTP username
    $mail->Password = 'miguelmaz';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('softnet.apps@gmail.com');    // REMITENTE
    $mail->addAddress('softnet.apps@gmail.com');               // DESTINATARIO

    //Contenido
    $mail->isHTML(true);                                                          // ENVIAR EMAIL FORMATO HTML
    $mail->Subject = 'Here is the subject';                                       // ASUNTO
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';             // CUERPO DE MENSAJE

    // ENVIAR 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>