<?php

//RECEBENDO OS DADOS DO FORMULARIO
	$nome = $_POST['name'];
	$email = $_POST['email'];
	$assunto = $_POST['subject'];
	$mensagem = $_POST['message'];

	$headers = "Content-Type: text/plain;charset=utf-8\r\n";
	$headers = "From: $email\r\n";
	$headers = "Reply-To: $email\r\n";

//DADOS QUE SERAO ENVIADOS
	$corpo = "Assunto: " . $assunto . "\r\n";
	$corpo .= "Nome: " . $nome . "\r\n";
	$corpo .= "Email: " . $email . "\r\n";
	$corpo .= "Mensagem: " . $mensagem . "\r\n";

//EMAIL QUE RECEBERA A MENSAGEM
	$email_to = "gscarletlol2@gmail.com";

//ENVIANDO EMAIL
	$status = mail($email_to, "WebFoxe - Mensagem\r\n", $corpo, $headers);


?>