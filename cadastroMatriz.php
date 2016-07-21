<?php 
	include 'conexao.php';

	$nome = $_POST['nome'];
	$cnpj = $_POST['cnpj'];
	$insc = $_POST['insc'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$sql = "INSERT INTO `matriz`(`nome`, `CNPJ`, `INSCR_EST`, `login`, `senha`) VALUES ('$nome','$cnpj','$insc','$login','$senha')";

	$query = $mysqli->query($sql);

	if ($query) {
		echo "Cadastro com sucesso!";
	}
	else{
		echo "falhou";
	}

?>