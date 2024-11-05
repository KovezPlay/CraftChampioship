<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $para = "kovez.contato@gmail.com";
    $assunto = "Contato Championship";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: kovez.contato@gmail.com"."\n"."Reply-To: ".$email."\n"."X=Mailer:PHP/".phpversion();

  if(mail($para, $assunto, $corpo, $cabeca)){
    echo("E-mail enviado com sucesso!");
  }else{
    echo("Houve um erro ao enviar o e-mail!");
  }

?>
