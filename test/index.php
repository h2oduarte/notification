<?php
// Incluir o autoload
// Camiho absoltuto "__DIR__"
require __DIR__ . '/../lib_ext/autoload.php';

// Instanciar o "namespace" e classe "Email" em Email.php
use Notification\Email;

// Instanciando a Classe "Email"
$novoEmail = new Email(2, 'smtp.live.com', 'aguaduarte@hotmail.com', 'numsey99', 'tls', '587', 'aguaduarte@hotmail.com', 'MD_fc');
// Chamar o Método
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um E-mail de <b>TESTE</b>!!!</p", "aguaduarte@hotmail.com", "Marco Antonio", "maadgarca@gmail.com", "Marco");

var_dump($novoEmail);
        
        
        