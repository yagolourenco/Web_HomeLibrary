
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/adicionar_view.css">
</head>

<body>
	<h1 class="primeiro_h1">Adicione seus livros</h1>
	<form class="box_adicionar" action="../model/adicionar_model.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="nomelivro" placeholder="Nome do livro" class="input_um"><br>
		<input type="text" name="autor" placeholder="Autor"><br>
		<input type="text" name="identificador" placeholder="Numero de identificação"><br>
		<input type="file" name="foto" placeholder="Foto do Livro"><br>
		<input type="submit" value="Salvar" class="btn">
	</form>

</body>
</html>