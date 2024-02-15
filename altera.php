<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Perfil</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }

        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            text-align=center;
            padding: 10px;
        }
    </style>
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