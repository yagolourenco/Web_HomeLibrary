<?php
include('../model/conexao.php');


$id = $_GET['id'];
		
$sql_code = "UPDATE dblivros SET Favoritos='0' WHERE idDBLivros = '$id'";
$sql_code =$conexao->query($sql_code) or die ($conexao->error);


if($sql_code){
echo"
<script>
	alert('Removido com sucesso.');
	location.href='../view/home_view.php';
</script>";
}else{
echo"
<script>
	alert('Não foi possível remover.');
	location.href='../view/home_view.php';
</script>";
}
?>