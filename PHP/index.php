<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: POST");
header("Allow: POST");
$method = $_SERVER['REQUEST_METHOD'];
if ($method == "OPTIONS") {
    die();
}

$mail = new PHPMailer(true);

try {
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'POST':
            //Lee los datos que se envian por POST
            $datos = json_decode(file_get_contents('php://input'));
            if ($datos != null) {
                //Server settings
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = 'smtpout.secureserver.net';
                $mail->SMTPAuth = true;
                $mail->Username = 'sendlead@saki.group';
                $mail->Password = '123_C0RR30';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->setFrom('sendlead@saki.group', 'Manuel González 165 ');

                $mail->isHTML(true);
                $mail->CharSet = 'UTF-8';
                $mail->Subject = 'Contacto - Manuel González 165';
                $mail->Body = '<strong>Nombre: </strong> '.$datos->nombre . ' <br> <strong>Teléfono: </strong> ' . $datos->telefono . ' <br><strong>Correo: </strong> ' . $datos->email . ' <br><strong>Mensaje: </strong> ' . $datos->mensaje;

                $mail->AddAddress('contacto@cpruvitlatelolco.com','Contacto Manuel González');
                $mail->addCC('ldealva@citytowers.mx','Idealva Citytowers');
                $mail->addBCC('luisvardez@gmail.com', 'Luis Vargas');
                $mail->addBCC('marcozepedamolina@gmail.com');
                $mail->Send();
                $mail->SmtpClose();
                http_response_code(200);
            }
            break;
    }
} catch (Exception $e) {
    echo $mail->ErrorInfo;
    http_response_code(400);
}
