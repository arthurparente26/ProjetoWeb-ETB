<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: dodgerblue;
        }
    </style>

</head>
<body>
    <h2>Usuario cadastrado com sucesso</h2>
    <div class="box">
        <a href="cadastro.html">Voltar</a>
        
<?php

    include_once "conecta.php";

    if(empty($_POST['nome']) || empty($_POST['senha']) || empty($_POST['email'])|| empty($_POST['cpf'])|| empty($_POST['telefone'])|| empty($_POST['sexo'])|| empty($_POST['data_nasc'])|| empty($_POST['cidade'])|| empty($_POST['estado'])|| empty($_POST['endereco'])) {
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
    $cidade     = $_POST['cidade'];
    $estado     = $_POST['estado'];
    $endereco     = $_POST['endereco'];

$sql = "INSERT INTO usuarios(nome,senha,email,cpf,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES
('$nome','$senha','$email','$cpf','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')";

        $resultado = mysqli_query($conexao,$sql);
        echo "Você foi cadastrado com Sucesso!!";

        mysqli_close($conexao);

        header('Location: login.php');

?>
</body>
</html>