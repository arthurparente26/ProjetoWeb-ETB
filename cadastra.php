<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="/css/cadastro.css">

</head>
<body>
    <h2>Usuario cadastrado com sucesso</h2>
    <div class="box">
        <a href="cadastro.html">Voltar</a>
        
<?php

    include_once "conecta.php";

    if(empty($_POST['nome']) || empty($_POST['senha']) || empty($_POST['email'])|| empty($_POST['cpf'])|| empty($_POST['telefone'])|| empty($_POST['sexo'])|| empty($_POST['data_nasc'])|| empty($_POST['endereco'])) {
	header('Location: cadastro.html');
	exit();
}

    $nome    = $_POST['nome'];
    $senha    = $_POST['senha'];
    $email = $_POST['email'];
    $cpf     = $_POST['cpf'];
    $telefone     = $_POST['telefone'];
    $sexo     = $_POST['sexo'];
    $data_nasc     = $_POST['data_nasc'];
    $endereco     = $_POST['endereco'];

$sql = "INSERT INTO usuarios(nome,senha,email,cpf,telefone,sexo,data_nasc,endereco) VALUES
('$nome','$senha','$email','$cpf','$telefone','$sexo','$data_nasc','$endereco')";

        $resultado = mysqli_query($conexao,$sql);
        echo "Você foi cadastrado com Sucesso!!";

        mysqli_close($conexao);

        header('Location: login.php');

?>
</body>
</html>