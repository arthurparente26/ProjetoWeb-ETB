<?php
include "conecta.php";
 $resultado = mysqli_query($conexao,"SELECT  nome,cpf,email,telefone;
 FROM usuarios;");
 $linhas= mysqli_num_rows('$resultado');
 echo "<p><b>Lista de Clientes </b></p>";
 for ($i=0;$i<$linhas; $i++){
     $reg = mysqli_fetch_row($resultado);
     
     echo "Nome: $reg[0] <br>";
     echo "Cpf: $reg[1] <br>";
     echo "E-mail: $reg[2] <br>";
     echo "Telefone: $reg[3] <br>"; 
   
 }

mysqli_close($conexao);

?> 