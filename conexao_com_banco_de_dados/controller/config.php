<?php
	// Arquivo de configuração do banco de dados
	$hostname = 'localhost';
	$username_db = 'root';
	$password_db = '';
	$database_name = 'contatos_db';

	$conn = mysqli_connect($hostname, $username_db, $password_db, $database_name);

	if(!$conn){
		die("ERRO AO CONECTAR AO BANCO!");
		exit;
	}
