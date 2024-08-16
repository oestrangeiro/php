<?php
	// Estudo sobre o uso de sesoes no php
	// Antes de tudo devemos iniciar a sessão com a função session_start()

	session_start();
	echo "Esse é um estudo sobre sessões e você está na primeira página!<br>";
	$_SESSION['nome'] = "Mateus Almeida";
	$_SESSION['profissao'] = "desenvolvedor";
	$_SESSION['data'] = date('d/m/Y', time());
	$_SESSION['mensagem'] = "Boas vindas!";

	echo '<a href="index2.php"><button>Prosseguir para a pŕoxima página</button></a>';
?>
