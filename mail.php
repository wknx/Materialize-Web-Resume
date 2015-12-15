<?php 

	/* 
	ESTE FORMULÁRIO FOI FEITO PARA FUNCIONAR NOS SERVIDORES DA 'LOCAWEB', PODENDO NÃO SER EFETIVO EM OUTRAS HOSPEDAGENS.

	THIS FORM WAS BUILT TO WORK ON 'LOCAWEB' SERVERS, IT MAY NOT BE EFFECTIVE IN OTHER HOST SERVICE.
	*/

 $para = "w.carlosjf@gmail.com"; //endereço de e-mail que vai RECEBER a mensagem (e-mail adress that will RECEIVE the message)
 $assunto = "Contato pelo site"; 
 $emailsender = "walison@claudiakitfestas.com.br"; //serviço de e-mail que vai ENVIAR a mensagem (e-mail service that will SEND the message)
	$nome = $_REQUEST['nome'];
	$email = $_REQUEST['email'];
	$numero = $_REQUEST['numero'];
	$mensagem = $_REQUEST['mensagem'];

	$corpo = "<strong>Mensagem de Contato</strong><br><br>";
	$corpo .= "<strong>Nome: </strong> $nome <br><br>";
	$corpo .= "<strong>Email: </strong> $email <br><br>";
	$corpo .= "<strong>Telefone: </strong> $numero <br><br>";
	$corpo .= "<strong>Mensagem: </strong> $mensagem <br><br>";

	$header = "Content-type: text/html; charset=UTF-8\n";
	$header .= "From: $email Reply-to: $email\n";
	

	mail($para, $assunto, $corpo, $header, "-r". $emailsender);
?>
Mensagem Enviada com Sucesso!