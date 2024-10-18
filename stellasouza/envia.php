<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $para = "souzavieirastella@gmail.com";
    $assunto = "Contato do portfólio";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: stella.souzavieira20@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)) {
        echo ("Email enviado com sucesso!");
    } else {
        echo ("Houve um erro ao enviar o email.");
    }

?>