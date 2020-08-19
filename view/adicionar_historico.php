
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/adc_historico.css">
</head>

<body>
	<h1 class="primeiro_h1">Adicione ao Histórico</h1>
	<form class="box_adicionar" action="../model/adicionar_historico.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="nomelivro" placeholder="Nome do livro" class="input_um"><br>
		<input type="text" name="data" placeholder="Data"><br>
		<input type="text" name="identificador" placeholder="Numero de identificação"><br>
		<input type="submit" value="Salvar" class="btn">
	</form>

</body>
</html>