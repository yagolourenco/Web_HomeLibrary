<?php
include('../model/conexao.php');


$id = $_GET['id'];
		
$sql_code = "DELETE FROM dblivros WHERE idDBLivros = '$id'";
$sql_code =$conexao->query($sql_code) or die ($conexao->error);


if($sql_code){
echo"
<script>
	alert('Deletado com sucesso.');
	location.href='../view/home_view.php';
</script>";
}else{
echo"
<script>
	alert('Não foi possível deletar usuário.');
	location.href='../view/home_view.php';
</script>";
}
?>

