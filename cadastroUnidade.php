<?php 
	include 'conexao.php';

	$idMatriz = $_POST['idMatriz'];
	$nome = $_POST['nome'];
	$cnpj = $_POST['cnpj'];
	$insc = $_POST['insc'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$sql = "INSERT INTO `unidades`(`ID_MATRIZ`, `nome`, `CNPJ`, `INSCR_EST`, `login`, `senha`) VALUES ('$idMatriz','$nome','$cnpj','$insc','$login','$senha')";

	$query = $mysqli->query($sql);

	if ($query) {
		echo "Cadastro com sucesso!";
	}
	else{
		echo "falhou";
	}

?>