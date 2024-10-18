<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "souzavieirastella@gmail.com";
$assunto = "Contato - Portfólio";

$corpo = "Nome: ". $nome. "\n". "E-mail: ". $email. "\n". "Telefone: ". $telefone;

$cabeca = "From: stella.souzavieira20@gmail.com". "\n". "Reply-to: ". $email. "\n". "X=Mailer:PHP/". phpversion();

if (mail($para, $assunto, $corpo, $cabeca)) {
    echo ("E-mail enviado com sucesso!");
} else {
    echo ("Falha ao enviar o e-mail.");
}

?>