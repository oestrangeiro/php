<?php

	// Esse é um tipo de comentário
	/*
		E esse é um outro tipo de comentário
	*/

	// Declaração de variaveis
	$nomePizaria = "Mateus Pizzas";
	$vendasPorMes = 3340;
	$qntdFuncionarios = 10;
	$boolAberta = true;

	$tipoPedido = "Pizza";
	$quantidadePedido = 2;
	$totalAPagar = null;
	$precoPizza = 27.80;
	$taxaEntrega = 5.69;

	// Declaração de constantes
	//define('PI_VALUE', '3.14159');
	
	// Exibindo os dados na tela
	echo "Bem-vindo à {$nomePizaria}<br>";
	echo "Pizzaria aberta!<br>";
	echo "Você pediu {$quantidadePedido} {$tipoPedido}s<br>";
	$totalAPagar = ($quantidadePedido * $precoPizza) + $taxaEntrega;
	echo "Total a pagar: R$:{$totalAPagar}<br>";
	

	// Uma coisa legal no php, 
	// é que dá pra gerar código html
	// Por exemplo:
?>
	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<title>Registro</title>
	</head>
	<body>
		<button>Enviar</button>
	</body>
	</html>