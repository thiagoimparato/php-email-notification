<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;



$novoEmail = new Email;
$novoEmail->sendEmail(
    "Assunto de Notificação",
    "<p>Este é um email enviado via componente de <b>notificação!</b></p>",
    "email@dominio.com.br",
    "Notificação - Via Email",
    "destinatario@dominio.com.br",
    "Nome de Destino"
);

var_dump($novoEmail);

