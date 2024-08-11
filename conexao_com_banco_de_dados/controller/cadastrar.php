<?php

	include_once 'config.php';

	$nomeUsuario = null;
	$enderecoUsuario = null;
	$telefoneUsuario = null;

	$nomeUsuario = $_POST['nome-form'];
	$enderecoUsuario = $_POST['endereco-form'];
	$telefoneUsuario = $_POST['telefone-form'];

	if(empty($nomeUsuario) && empty($enderecoUsuario) && empty($telefoneUsuario)){
		header('Location: ../view/index.html');
	}

	// exibindo as informações na página
	echo $nomeUsuario . ", " . $enderecoUsuario . ", " . $telefoneUsuario;

	// Inserindo no banco
	$sql = "
		INSERT INTO contatos (nome, endereco, telefone) VALUES ('$nomeUsuario', '$enderecoUsuario', '$telefoneUsuario')
		";

	mysqli_query($conn,$sql) or die("erro ao tentar cadastrar registro no banco!");
	mysqli_close($conn);

	echo "<br>Dados enviados com sucesso!";
	
	// cadastra e já apomta para a página
	// de visualização dos contatos

	header('Location: ../view/index.html');