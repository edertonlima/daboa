<?php

	$nome = $_GET['nome'];
	$email = $_GET['email'];
	$telefone = $_GET['telefone'];
	$assunto = $_GET['assunto'];
	$mensagem = $_GET['mensagem'];

	$nome_site = $_GET['nome_site'];
	$para = $_GET['para'];

	$email_remetente = $para;

	if(($nome != '') && ($email != '') && ($telefone != '') && ($assunto != '') && ($mensagem != '')){

		/*$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
		$headers .= "From: $nome_site <$email_remetente>\n";
		$headers .= "Return-Path: $nome_site <$email_remetente>\n";
		$headers .= "Reply-To: $nome <$email>\n";*/

		$conteudo = '
		<h2>Olá, uma nova mensagem foi enviada através do site.</h2>
		<p>Confira logo abaixo, todos os dados preenchidos no formulário da área "Contato":</p>';

		$conteudo .= '<p>';
		$conteudo .= '<strong>Nome:</strong> '.$nome;
		$conteudo .= '<br><strong>E-mail:</strong> '.$email;
		$conteudo .= '<br><strong>Telefone:</strong> '.$telefone;
		$conteudo .= '<br><strong>Assunto:</strong> '.$assunto;
		$conteudo .= '<br><strong>Mensagem:</strong> '.$mensagem;
		$conteudo .= '</p>';


		// Chame o arquivo com as Classes do PHPMailer
		require_once('phpmailer/class.phpmailer.php');
		//require_once('phpmailer/class.pop3.php');

		// Instância a classe PHPMailer
		$mail = new PHPMailer();

		// Configuração dos dados do servidor e tipo de conexão (Estes dados você obtem com seu host)
		$mail->IsSMTP(); // Define que a mensagem será SMTP
		$mail->Host = "smtp.massasdaboa.com.br"; // Endereço do servidor SMTP
		$mail->SMTPAuth = true; // Autenticação (True: Se o email será autenticado ou False: se o Email não será autenticado)
		$mail->Port = 587;
		$mail->Username = 'site@massasdaboa.com.br'; // Usuário do servidor SMTP
		$mail->Password = '4z1ymjyw'; // A Senha do email indicado acima

		// Remetente (Identificação que será mostrada para quem receber o email)
		$mail->From = $para;
		$mail->FromName = $nome_site;

		// Destinatário
		$mail->AddAddress($para, $nome_site);
		//$mail->AddBCC('edertton@gmail.com', $nome_site);

		// Opcional (Se quiser enviar cópia do email)
		//$mail->AddCC('copia@dominio.com.br', 'Copia');
		//$mail->AddBCC('CopiaOculta@dominio.com.br', 'Copia Oculta');

		// Define tipo de Mensagem que vai ser enviado
		$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

		// Assunto e Mensagem do email
		$mail->Subject = 'Contato, Fale Conosco'; // Assunto da mensagem
		$mail->Body = $conteudo;

		// Envia a Mensagem
		$enviado = $mail->Send();

		// Verifica se o email foi enviado
		if($enviado){
			echo(json_encode('ok'));
		}else{
			echo(json_encode("Desculpe, não foi possível enviar seu formulário. <br>Por favor, tente novamente mais tarde.<br><br>" . $mail->ErrorInfo));
		}



		/*if(mail($para, "Contato, Fale Conosco", $conteudo, $headers, "-f$email_remetente")){
			mail('edertton@gmail.com', "Contato, Fale Conosco", $conteudo, $headers, "-f$email_remetente");
			echo(json_encode('ok'));
		}else{
			echo(json_encode("Desculpe, não foi possível enviar seu formulário. <br>Por favor, tente novamente mais tarde."));
		}*/

	}else{
		echo(json_encode("Desculpe, não foi possível enviar seu formulário. <br>Por favor, tente novamente mais tarde.<br><br>--"));
	}

?>