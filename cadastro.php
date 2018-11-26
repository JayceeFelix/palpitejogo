<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<?php 

$link = mysqli_connect("127.0.0.1", "root", "", "jogobanco");

if (!$link) {
    echo "Erro: Não foi possível conectar-se ao MySQL." . PHP_EOL;
    echo "Debug num erro: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debug msg erro: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Conexão com mySQL estabelecida com sucesso <BR>" . PHP_EOL;
echo "Informação do Host: " . mysqli_get_host_info($link) . PHP_EOL;

 
$nome = $_POST['nomeadd'];
$usuario = $_POST['usuarioadd'];
$email = $_POST['emailadd'];
$senha = $_POST['senhaadd'];

$sql = "INSERT INTO usuarios (nome, usuario, email, senha ) VALUES
    ('$nome', '$usuario', '$email', '$senha')";

$res = mysqli_query($link, $sql);

mysqli_close($link);
?>



</body>
</html>