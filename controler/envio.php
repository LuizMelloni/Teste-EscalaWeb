<?php
include_once('model/conexao.php');
 
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$sql = mysqli_query($conexao, "INSERT INTO contatos (nome, email, telefone, mensagem) 
VALUES ('$nome', '$email', '$telefone', '$mensagem' )");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if(isset($_POST['enviar'])) {

$mail = new PHPMailer(true);

try {
    
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'webmail.escalaweb.com.br';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'teste@escalaweb.com.br';                     
    $mail->Password   = '3sd54f';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                   
    
    $mail->setFrom('teste@escalaweb.com.br', 'Mailer');
    $mail->addAddress('ombluizmellon@gmail.com', 'Joe User');     
    $mail->addReplyTo('teste@escalaweb.com.br', 'Information');
    $mail->isHTML(true);                                  
    $mail->Subject = 'Contato';
    $body = "Mensagem enviada atraves do site, segue info abaixo:<br>
    Nome: ". $_POST['nome'] ." <br>
    Email: ". $_POST['email'] ."<br>
    Mensagem: <br>  ". $_POST['mensagem'];

    $mail->Body   = $body;

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}else{
    echo "erro ao enviar email";
}