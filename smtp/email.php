<?php 

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try { 
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'curttorock@gmail.com';
$mail->Password = 'gugalxp500';
$mail->Port = 587;

$mail->setFrom('curttorock@gmail.com');
$mail->addAddress('inayavitoria10@gmail.com');

$mail->isHTML(true);
$mail->Subject = 'Tire um print e me envie se recebeu essa mensagem! Muito Obrigado :D';
$mail->Body = '"O indicador universal de que você está indo para frente são os seus resultados" <strong>Autor - Caio Carneiro</strong>' ;

if($mail->send()) {
    echo "Email enviado comm sucesso";
} else{

    echo "Email não enviado";
}

} catch(Exception $e) {
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}




?>