

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

	$arquivo = "<html>

					<a href=http://localhost/game/novasenha.html><img src=http://localhost/game/galeria/recuperar.jpg></a>

				</html>";

		$email = $_POST['emaill'];


		$from = "oi@gmail.com";
		$destino = '$email';
  		$assunto = "Jogo - Recuperar senha";
  		

  		$header = "From: $from\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
  		$enviaremail = mail($destino, $assunto, $arquivo, $header);

  		if($enviaremail){
		  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
		  echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
		  } else {
		  $mgm = "ERRO AO ENVIAR E-MAIL!";
		  echo "";
		 }

	?>

</body>
</html>