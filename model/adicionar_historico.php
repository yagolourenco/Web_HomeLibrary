<?php
	include('conexao.php');


	$nomelivro = $_POST['nomelivro'];
	$data = $_POST['data'];
	$identificador = $_POST['identificador'];
	$sql_code = "INSERT INTO dbhistorico_compras (idCompras,Nome_Livro,Data,Numero_Identificador) 
				VALUES(null,'$nomelivro','$data','$identificador')";
		
		if(!mysqli_query($conexao,$sql_code)){echo"
	<script>
	alert('Erro ao adicionar.');
	location.href='../view/home_view.php';
	</script>";}else{echo"
	<script>
	alert('Adicionado com sucesso.');
	location.href='../view/home_view.php';
	</script>";}

?>