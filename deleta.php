<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exclusão</title>

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
if(empty($_POST['senha']) || empty($_POST['email'])) {
	header('Location: excluir.html');
	exit();
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "DELETE FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}'"; 
        $resultado = mysqli_query($conexao,$sql); 
        echo("Usuario excluido com sucesso! ");

?>

<h3><center>Caso queira fazer mais alguma alteração aperte o botão abaixo ! !</center></h3>
<div class="box">
        <a href="sistema.php">Menu</a>
</div>

</body>
</html>