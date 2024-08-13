<?php
	// Estudo sobre o funcionamento de variaveis globais

	/*
		Para criarmos (e usarmos) variaveis globais, fazemos de duas
		formas:
			1. defini-la como global no inicio da funçao.
			2. utilizar um array predefinido ($GLOBALS) que utiliza so nomes
			das variáveis como chave associativa.
	*/

	$quantia = 50;

	// Definição das funções
	function teste_de_escopo1(){
		$quantia += 10;
		echo "<hr>";
		echo "Quantia dentro da função teste_de_escopo1: " . $quantia . "<br>";
	}

	function teste_de_escopo2(){
		global $quantia;
		$quantia += 10;
		echo "<hr>";
		echo "Quantia dentro da função teste_de_escopo2: " . $quantia . "<br>";
	}

	function teste_de_escopo3(){
		echo "<hr>";
		echo "Valor de quantia fora da função: " . $GLOBALS['quantia'] . "<br>";
		$GLOBALS['quantia'] += 10;
	}

	echo "Valor de quantia fora da função: " . $quantia . "<br>";
	teste_de_escopo1();
	echo "Valor depois da chamada da função: " . $quantia  . "<br>";

	echo "Valor de quantia fora da função: " . $quantia . "<br>";
	teste_de_escopo2();
	echo "Valor depois da chamada da função: " . $quantia  . "<br>";

	teste_de_escopo3();
	echo "Valor depois da chamada da função: " . $quantia  . "<br>";	