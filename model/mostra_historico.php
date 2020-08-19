<?php
// Conectando ao banco de dados: 
include_once("conexao.php");
// Criando tabela e cabeçalho de dados:
  
 $sql = "SELECT * FROM dbhistorico_compras";
 $resultado = mysqli_query($conexao,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 
 mysqli_close($conexao);
 echo "</table>";
 ?>

