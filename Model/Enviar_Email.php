<?php  

require("class.phpmailer.php");
require("class.smtp.php");
require('../Conexion/conexion.php');  

$correo = $_POST["correo_restablecer"];

sleep(2);

$verificar_correo = $conectar->query("SELECT S.documento,nombre,apellido,S.password FROM persona P ,usuario S 
                                    WHERE S.documento = P.documento AND S.correo = '".$correo."' ");
if ($verificar_correo->num_rows == 1) {
    $row = $verificar_correo->fetch_assoc();

    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $documento = $row['documento'];
    $password = $row['password'];

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    try {
        //Server settings
       // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'softnet.apps@gmail.com';                 // SMTP username
        $mail->Password = 'miguelmaz';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('softnet.apps@gmail.com');    // REMITENTE
        $mail->addAddress($correo);               // DESTINATARIO

        //Contenido
        $mail->isHTML(true);                                                          // ENVIAR EMAIL FORMATO HTML
        $mail->Subject = 'RESTABLECER CONTRASEÑA';                                       // ASUNTO
        $mail->Body    = '<html>
                            <body>
                            <h4>Mensaje de restablecimiento de contraseña</h4>
                            <p>Estimado '.$nombre.'  '.$apellido.'  Identificado  '.$documento.' </p>
                            <p>Su contraseña : '.$password.'</p>
                            </body>
                            </html>';       

        // ENVIAR 
        $estado = $mail->send();
        if($estado){
            echo json_encode(array('error'=>false,'envio'=>true));
        }else{
            echo json_encode(array('error'=>false,'envio'=>false));
        }
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}else{
    echo json_encode(array('error'=>true));
}

$conectar->close();

?>