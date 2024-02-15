<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Perfil</title>
    <link rel="stylesheet" href="/css/altera.css">
</head>
<body>
<?php

include "conecta.php";

$endereco = $_POST['endereco'];
$cpf = $_POST['cpf'];

$query = "UPDATE usuarios SET endereco = '$endereco' WHERE cpf = '$cpf'" ;
$resultado = mysqli_query($conexao,$query);

echo "Endereço Alterado com Sucesso!";

?>
<div class="box">
    <h3><center>Para voltar ao menu aperte o botao abaixo !</center></h3>
        <a href="sistema.php">Menu</a>
</div>
</body>
</html> 