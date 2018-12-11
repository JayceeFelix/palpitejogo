<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
		<?php
			$Email = $_POST["emaill"];	// Pega o valor do campo Email

			// Variável que junta os valores acima e monta o corpo do email

			$Vai = "DEU CERT00000000000";

			require_once("phpmailer/class.phpmailer.php");

			define('GUSER', 'testeimplementa@gmail.com');	// <-- Insira aqui o seu GMail
			define('GPWD', '123teste');		// <-- Insira aqui a senha do seu GMail

			function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
				global $error;
				$mail = new PHPMailer();
				$mail->IsSMTP();		// Ativar SMTP
				$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
				$mail->SMTPAuth = true;		// Autenticação ativada
				$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
				$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
				$mail->Port = 465;  		// A porta 587 deverá estar aberta em seu servidor
				$mail->Username = GUSER;
				$mail->Password = GPWD;
				$mail->SetFrom($de, $de_nome);
				$mail->Subject = $assunto;
				$mail->IsHTML(true);
				$mail->Body = "<html>

					<a href=http://localhost/game/novasenha.html><img src= http://www.latinpopbrasil.com.br/wp-content/uploads/2018/01/camila_brasil.jpg></a>

				</html>";
				$mail->AddAddress($para);
				$mail->Send();

				if(!$mail->Send()) {
					$error = 'Mail error: '.$mail->ErrorInfo; 
					return false;
				} else {
					$error = 'Mensagem enviada!';
					return true;
				}
			}

			// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
			//o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

			 if (smtpmailer($Email, 'testeimplementa@gmail.com', 'Nome do Enviador', 'Assunto do Email', $Vai)) {

			 	echo "deu certo";
				//Header("location:http://www.dominio.com.br/obrigado.html"); // Redireciona para uma página de obrigado.

			}
			if (!empty($error)) echo $error;
			?>
</body>
</html>