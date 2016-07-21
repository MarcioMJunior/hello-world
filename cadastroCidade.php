<?php 
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];

	include 'conexao.php';

	$sql = "INSERT INTO `cidades`(`nome_cidade`,`UF`) VALUES ('$cidade','$uf')";

	$query = $mysqli->query($sql);

	if ($query) {
		echo "cadastro de cidade concluido";
	}
	else{
		echo "falha no cadastro";
	}
?>