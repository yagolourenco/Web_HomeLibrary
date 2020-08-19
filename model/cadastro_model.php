<?php
include('../model/conexao.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha = md5($senha);
 
$sql_code = "INSERT INTO dbusuario (usuario_id, usuario, senha) VALUES (null,'$usuario', '$senha');";  

$resultado = mysqli_query($conexao,$sql_code) or die("Erro ao retornar dados");

if($resultado){
	echo"
<script>
	alert('Cadastrado com sucesso.');
	location.href='../view/home_view.php';
</script>";
}else{
echo"
<script>
	alert('Não foi possível Cadastrar.');
	location.href='../view/home_view.php';
</script>";
}

 


?>