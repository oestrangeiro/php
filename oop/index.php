<?php

	// Estudo sobre a orientação a objetos em php

	class Pessoa{
		public $nome, $idade, $altura;

		// Criação dos métodos
		public function Falar(){
			echo $this->nome . " está falando<br>";
		}
		public function Comer(){
			echo $this->nome . " está comendo<br>";
		}

		public function mostrarAltura(){
			echo "A altura de " . $this->nome . " é de " . $this->altura . "cm<br>";
		}
	}

	// Instanciando a classe
	$dev = new Pessoa();

	// Acessando os atributos
	$dev->nome = "Mateus";
	$dev->idade = 19;
	$dev->altura = 175;

	// Usando os métodos
	$dev->Falar();
	$dev->Comer();
	$dev->mostrarAltura();