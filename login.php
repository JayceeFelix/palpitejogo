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

$vet=array();
$u=0;

$usuario=$_POST['usuario'];
$senha=$_POST['senha'];


$res = mysqli_query($link, "SELECT usuario, senha FROM usuarios ORDER BY usuario ASC");

while ($row = mysqli_fetch_assoc($res)) {
        $row["usuario"], $row["senha"]);
        $vet[]=6;
}
//header('Location: http://www.example.com/');

mysqli_close($link);
?>

</body>
</html>