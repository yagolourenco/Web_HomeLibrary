<?php
include('../controller/verifica_login.php');
include('../model/mostra_historico.php');
?> 


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../assets/css/historico_view.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<nav>
		<ul id="ul-principal">
			<li class="li-p"><a class="letra_nav" href="">Olá, <?php echo $_SESSION['usuario'];?></a></li>
			<li class="li-p"><a class="letra_nav" href="home_view.php">MEUS LIVROS</a></li>
			<li class="li-p"><a class="letra_nav" href="adicionar_view.php">ADICIONAR</a></li>
			<li class="li-p"><a class="letra_nav" href="favoritos_view.php">FAVORITOS</a></li>
			<li class="li-p"><a class="letra_nav" href="adicionar_historico.php">ADICIONAR AO HISTÓRICO</a></li>
			<li class="li-p"><a class="letra_nav" href="../controller/logout_login.php">SAIR</a></li>
		</ul>
	</nav>

	<h1 class="primeiro_h1">Histórico de Compras</h1>

	<?php
	
	while ($registro = mysqli_fetch_array($resultado))
 {
    $nome = $registro['Nome_Livro'];
    $data = $registro['Data'];
    $numeroid = $registro['Numero_Identificador'];
    $id = $registro['idCompras'];
    ?>

	<table class="table table-bordered table-dark" >
	<th scope="col">Nome do Livro</th>
	<th scope="col">Data</th>
	<th scope="col">Numero Identificador</th>
	<tr>
	<td><?php echo "$nome"; ?></td>
	<td><?php echo "$data"; ?></td>
	<td><?php echo "$numeroid"; ?></td>
	<td>
		<button class="excluir_btn"><a class="ref" href="../model/excluir_historico.php?id= <?php echo $id ?>">Excluir</a></button> 
		<button class="favoritar_btn"><a class="">Editar</a></button> 
	</td>
	</tr>

</table>
 <?php } ?>

</body>
</html>