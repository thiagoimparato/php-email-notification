<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;



$novoEmail = new Email(
    "smtpSecure",
    "host",
    "remetente@email.com",
    "senhaDoEmail",
    'tipo',
    'port',
    "fromEmail@email.com",
    "Seu Nome"
);
$novoEmail->sendEmail(
    "Assunto de Notificação",
    "<p>Este é um email enviado via componente de <b>notificação!</b></p>",
    "email@dominio.com.br",
    "Notificação - Via Email",
    "destinatario@email.com",
    "Nome do Destinatário"
);

var_dump($novoEmail);

