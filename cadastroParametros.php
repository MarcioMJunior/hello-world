<?php 
	include 'conexao.php';

	$idUnidade = $_POST['idUnidade'];
	$inicioSemana = $_POST['inicioSemana'];
	$fimSemana = $_POST['fimSemana'];
	$inicioSabado = $_POST['inicioSabado'];
	$fimSabado = $_POST['fimSabado'];
	$hora = $_POST['hora'];
	$minuto = $_POST['minuto'];
	$precoMinuto = $_POST['precoMinuto'];
	$tempoMinimo = $_POST['tempoMinimo'];
	$repasse = $_POST['repasse'];

	$sql = "INSERT INTO `parametros_funcionamento`(`ID_UNIDADE`, `horario_inicio_semana`, `horario_fim_semana`, `horario_inicio_sabado`, `horario_fim_sabado`, `cobranca_minuto`, `cobranca_hora`, `preco_minuto`, `tempo_toque_minimo`, `percentual_repasse`) VALUES ('$idUnidade','$inicioSemana','$fimSemana','$inicioSabado','$fimSabado','$minuto','$hora','$precoMinuto','$tempoMinimo','$repasse')";

	$query = $mysqli->query($sql);

	echo "Cadastro com sucesso";

?>