<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Perfil</title>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>


<?php
include "conecta.php";

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: login.html');
	exit();
}

$email = $_POST['email'];
$senha = $_POST['senha'];
$query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);



if ($row <= 0){
	echo"<center>E-mail ou senha incorretos !</center>";
	exit;
}
else {
echo "<center>Login efetuado com sucesso!</center>";
}
?>

<h3><center>Para prosseguir acesse o botao menu !</center></h3>
<div class="box">
        <a href="sistema.php">Menu</a>
</div>

</body>
</html> 




