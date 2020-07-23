<?php
// Incluir o autoload
// Camiho absoltuto "__DIR__"
require __DIR__ . '/../lib_ext/autoload.php';

// Instanciar o "namespace" e classe "Email" em Email.php
use Notification\Email;

// Instanciando a Classe "Email"
$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls / ssl)", "port (587)", "from@email.com", "From Name");
// Chamar o Método
$email-> sendEmail("Subject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");

var_dump($novoEmail);
        
        


