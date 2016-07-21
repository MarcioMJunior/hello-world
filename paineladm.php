<?php 
	session_start();
	$email = $_SESSION['login'];
	
	echo $email;

	echo "Direcionamento com sucesso";
?>