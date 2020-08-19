<?php
include('../model/conexao.php');


$id = $_GET['id'];
		
$sql_code = "UPDATE dblivros SET Favoritos='1' WHERE idDBLivros = '$id'";
$sql_code =$conexao->query($sql_code) or die ($conexao->error);


if($sql_code){
echo"
<script>
	alert('Favoritado com sucesso.');
	location.href='../view/home_view.php';
</script>";
}else{
echo"
<script>
	alert('Não foi possível favoritar.');
	location.href='../view/home_view.php';
</script>";
}
?>