<?php

	session_start();
	// Oberserve que vou pegar as informações da página anterior nesta
	$nome = $_SESSION['nome'];
	$profissao = $_SESSION['profissao'];
	$data_atual = $_SESSION['data'];

	echo "Nome do utilizador: " . $nome . "<br>";
	echo "Profissão: " . $profissao . "<br>";
	echo "Data atual: " . $data_atual . "<br>";
	// Também podemos pegar um elemento diretamente do array $_SESSION
	// sem termos que atribuí-lo diretamente à uma variavel. Veja:
	echo "Mensagem: " . $_SESSION['mensagem'] . "<br>";

	// Para eliminar uma variavel, fazemos:
	unset($_SESSION['mensagem']);
	// Tentando exibir agora a mensagem novamente:
	echo "Mensagem: " . $_SESSION['mensagem'] . "<br>";	

	// Para encerrarmos uma sessao, fazemos:
	session_destroy();
	// Vale lembrar que a função acima encerra a sessão,
	// mas não desaloca as variaveis registradas
	// Para limparmos o array global $_SESSION,
	// atribuimos-lhe um array vazio. Assim:
	$_SESSION = array();