<?php
	include_once 'config.php';
	// Script básico de exclusão de registro com base no id
	$idASerDeletado = $_POST['deletar-contato-id'];

	$sql = "DELETE FROM contatos WHERE id = $idASerDeletado";
	
	mysqli_query($conn,$sql) or die("erro ao tentar cadastrar registro no banco!");
	mysqli_close($conn);

	header('Location: consultar.php');
