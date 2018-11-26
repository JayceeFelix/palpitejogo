<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

	$destino = $_POST['emaill'];

	//require_once "C:/xampp/htdocs/game/PHPMailer-master/src/PHPMailer.php" ;
  	//require_once "C:/xampp/htdocs/game/PHPMailer-master/src/SMTP.php" ;

	require_once("phpmailer/PHPMailer.php");
	require_once("phpmailer/SMTP.php");
	require_once("phpmailer/Exception.php");
	require_once("phpmailer/PHPMailerAutoload.php");

	$mail = new PHPMailer();//new PHPMailer();

	$mail->IsSMTP(); // Define que a mensagem será SMTP
	$mail->SMTPDebug = 1;
	$mail->Host = 'ssl://smtp.gmail.com';//"smtp.gmail.com";#"mail.nomedoseudominio.com"; # Endereço do servidor SMTP
	$mail->Port = 465; // Porta TCP para a conexão
	$mail->SMTPAutoTLS = false; // Utiliza TLS Automaticamente se disponível
	$mail->SMTPAuth = true; # Usar autenticação SMTP - Sim
	$mail->SMTPSecure = 'ssl';
	$mail->Username = 'testeimplementa@gmail.com'; # Usuário de e-mail
	$mail->Password = "123teste"; // # Senha do usuário de e-mail


	$mail->From = "testeimplementa@gmail.com"; # Seu e-mail
	$mail->FromName = "Jogos";

	# Define os destinatário(s)
	$mail->AddAddress("$destino", 'Usuario');

	# Define os dados técnicos da Mensagem
	$mail->IsHTML(true);

	# Define a mensagem (Texto e Assunto)
	$mail->Subject = "Mensagem Teste"; # Assunto da mensagem
	$mail->Body = "<html>

					<a href=http://localhost/game/novasenha.html><img src=http://localhost/game/galeria/recuperar.jpg></a>

				</html>";

	#envia o email
	$enviado = $mail->Send();

	# Limpa os destinatários e os anexos
	$mail->ClearAllRecipients();
	$mail->ClearAttachments();

	# Exibe uma mensagem de resultado (opcional)
	if ($enviado) {
	 echo "E-mail enviado com sucesso!";
	} else {
	 echo "Não foi possível enviar o e-mail.";
	 echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
	}	

	?>

</body>
</html>