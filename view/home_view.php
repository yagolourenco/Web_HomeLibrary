
<?php
include('../controller/verifica_login.php');
include('../model/mostra_livros_home_model.php');
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../assets/css/home_view.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<nav>
		<ul id="ul-principal">
			<li class="li-p"><a class="letra_nav" href="">Olá, <?php echo $_SESSION['usuario'];?></a></li>
			<li class="li-p"><a class="letra_nav" href="home_view.php">MEUS LIVROS</a></li>
			<li class="li-p"><a class="letra_nav" href="adicionar_view.php">ADICIONAR</a></li>
			<li class="li-p"><a class="letra_nav" href="favoritos_view.php">FAVORITOS</a></li>
			<li class="li-p"><a class="letra_nav" href="historico_view.php">HISTÓRICO DE COMPRA</a></li>
			<li class="li-p"><a class="letra_nav" href="../controller/logout_login.php">SAIR</a></li>
		</ul>
	</nav>

	<h1 class="primeiro_h1">Meus livros</h1>

	<?php
	
	while ($registro = mysqli_fetch_array($resultado))
 {
    $nome = $registro['NomeLivro'];
    $autor = $registro['Autor'];
    $numeroid = $registro['Num_Identificador'];
    $fotolivro = $registro['FotoLivro']; 
    $id = $registro['idDBLivros'];
    ?>

	<table class="table table-bordered table-dark" >
	<th scope="col">Nome do Livro</th>
	<th scope="col">Autor</th>
	<th scope="col">Numero Identificador</th>
	<th scope="col">Foto do Livro</th>
	<tr>
	<td><?php echo "$nome"; ?></td>
	<td><?php echo "$autor"; ?></td>
	<td><?php echo "$numeroid"; ?></td>
	<td>
	<?php echo "<img src=../assets/upload/".$fotolivro." height=300 width=200>"; ?>
	<td>
		<button class="excluir_btn"><a class="ref" href="../model/excluir_model.php?id= <?php echo $id ?>">Excluir</a></button> 
		<button class="favoritar_btn"><a class="ref" href="../model/favoritar_model.php?id= <?php echo $id ?>">Favoritar</a></button> 
	</td>
	</td>
	</tr>

</table>
 <?php } ?>


	


</body>
</html>