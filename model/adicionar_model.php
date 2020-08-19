<?php
	include('conexao.php');


	$nomelivro = $_POST['nomelivro'];
	$autor = $_POST['autor'];
	$identificador = $_POST['identificador'];

	if(isset($_FILES['foto'])){
		$extensao = strtolower(substr($_FILES['foto']['name'], -4)); //pega a extensao do arquivo
		$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
		$diretorio = "../assets/upload/";	//define o diretorio pra onde enviaremos o arquivo
		move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
		$sql_code = "INSERT INTO dblivros (idDBLivros,NomeLivro,Autor,Num_Identificador,FotoLivro,data) VALUES(null,'$nomelivro','$autor','$identificador','$novo_nome',NOW())";
		if(!mysqli_query($conexao,$sql_code)){echo"
	<script>
	alert('Erro ao adicionar.');
	location.href='../view/home_view.php';
	</script>";}else{echo"
	<script>
	alert('Adicionado com sucesso.');
	location.href='../view/home_view.php';
	</script>";}
	
}

?>