<?php

namespace Notification;


//Instânciar o PHPMailer "PHPMailer\PHPMailer\PHPMailer
// o 1o. PHPMailer é o "vendor", o 2o. é "nome dabiblioteca"e o 3o. "método chamado"
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email
{
    private $mail = \stdClass::class;
    
    public function __construct($smtpDebug, $host, $user, $pass, $smtpSecure, $port, $setFromEmail, $setFromName)
    {
    $this->mail = new PHPMailer(true);
    $this->mail-> SMTPDebug = $smtpDebug;                      // Enable verbose debug output
    $this->mail->isSMTP();                                            // Send using SMTP
    $this->mail->Host       = $host;                    // Set the SMTP server to send through
    $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $this->mail->Username   = $user;                     // SMTP username
    $this->mail->Password   = $pass;                               // SMTP password
    $this->mail->SMTPSecure = $smtpSecure;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $this->mail->Port       = $port;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $this->mail->Charset = 'utf-8';
    $this->mail->setLanguage('br');
    $this->mail->isHTML(true);
    $this->mail->setFrom($setFromEmail, $setFromName);
    
    }
    
    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName)
    {
     $this->mail->Subject = (string)$subject;
     $this->mail->Body = $body;
             
     $this->mail->addReplyTo($replyEmail, $replyName);        
     $this->mail->addAddress($addressEmail, $addressName);
     
     try {
         $this->mail->send();
     } catch (Exception $e) {
         echo "Erro ao enviar o E-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";
     }
    } 
}


