
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="assets/css/style_login.css">
	<meta name="viewport" content="width=devide-width, initianl-scale=1">
</head>
<body>
	<div class="box_login">
	<div class="capa"></div>
	<h1>Login</h1>

		<form method="POST" action="model/login_model.php">
			<input type="text" name="usuario" placeholder="usuario">
			<input type="password" name="senha" placeholder="Senha">
			<button type="submit" class="btn-login">Entrar</button>
			<p class="cadastro"><a href="./view/cadastrar_view.php">Cadastrar</a></p>
		</form>
</div>
</body>
</html>
