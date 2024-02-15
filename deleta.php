<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exclusão</title>
    <link rel="stylesheet" href="/css/deleta.css">
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