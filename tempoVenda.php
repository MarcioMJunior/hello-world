<?php 
	$minutos = $_POST['minutos'];
	$preco = $_POST['preco'];
	$id_unidade = $_POST['id'];

	include 'conexao.php';

	$sql = "INSERT INTO `tempo_venda`(`minutos`,`preco`,`ID_UNIDADE`) VALUES ('$minutos','$preco','$id_unidade')";

	$query = $mysqli->query($sql);

	if ($query) {
		echo "Cadastro com sucesso";
	}
	else{
		echo "falha";
	}
?>