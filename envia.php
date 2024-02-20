<?php

$nome = addcslashes($_POST['nome']);
$nome = addcslashes($_POST['telefone']);
$nome = addcslashes($_POST['email']);
$nome = addcslashes($_POST['mensagem']);

$para = "marceleeduarda3@gmail.com";
$assunto = "Coleta de dados - Portfólio";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

$cabeca = "From: marcele.rufino@sou.unaerp.edu.br"."\n"."Reply-to": ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para, $assunto, $corpo, $cabeca )){
echo("E-mail enviado com sucesso!");
}else{
echo("Houve um erro ao enviar o e-mail");
}
?>