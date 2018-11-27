<?php 
	require('../vendor/autoload.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="question.css">
	<meta http-equiv="Content-type" Content="text/html; charset=utf-8">
	<title>Futebol</title>
</head>
<body>
<form method="POST" action="login.php">
<h3>Entre na sua conta: </h3></div><br>
<label>Usuario:</label><input type="text" name="usuario" ><br>
<br>
<label>Senha:</label><input type="password" name="senha" ><br>
<br>
<input type="submit" value="Entrar" id="entrar" name="entrar">
<br>
<h7><a href="cadastrar.html">Fazer cadastro</a></h7>

</form>
</body>
</html>
