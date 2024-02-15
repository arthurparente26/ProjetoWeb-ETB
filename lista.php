<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Consulta de Usuarios</title>
    <link rel="stylesheet" href="/css/home.css">
    </style>
</head>
<body>
<nav id="menu">
        <ul>
            <li><a href="sistema.php">Volta</a></li>
		    </ul>
            </nav> 
            <form>
            <h5>
</body>
<?php
include "conecta.php";
 $resultado = mysqli_query($conexao,"SELECT  nome,email,cpf,telefone,sexo,data_nasc,cidade,estado,endereco
 FROM usuarios;");
 $linhas= mysqli_num_rows($resultado);
 echo "<p><b>Lista de Usuarios Cadastrados </b></p>";
 for ($i=0;$i<$linhas; $i++){
     $reg = mysqli_fetch_row($resultado);
     

$tabela = '<table border="1">';
$tabela.='<table width="900" border="1px">';
$tabela .= '<tr>';
$tabela .= '<td>Nome</td>';
$tabela .= '<td>E-mail</td>';
$tabela .= '<td>CPF</td>';
$tabela .= '<td>Telefone</td>';
$tabela .= '<td>Sexo</td>';
$tabela .= '<td>Data Nascimento</td>';
$tabela .= '<td>Cidade</td>';
$tabela .= '<td>Estado</td>';
$tabela .= '<td>Endereco</td>';
$tabela .= '</tr>';
$tabela .= '<tr>';
$tabela .= '<td width="100">'.$reg[0].'</td>'; 
$tabela .= '<td width="250">'.$reg[1].'</td>'; 
$tabela .= '<td width="250">'.$reg[2].'</td>'; 
$tabela .= '<td width="300">'.$reg[3].'</td>';
$tabela .= '<td width="300">'.$reg[4].'</td>';
$tabela .= '<td width="300">'.$reg[5].'</td>';
$tabela .= '<td width="300">'.$reg[6].'</td>';
$tabela .= '<td width="300">'.$reg[7].'</td>';
$tabela .= '<td width="300">'.$reg[8].'</td>';
$tabela .= '</tr>';
$tabela .='</tbody>';
$tabela .= '</table>';

echo $tabela; 
   
 }

mysqli_close($conexao);

?> 
</h5>
</form>  
</body>
</html>