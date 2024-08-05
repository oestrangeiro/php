<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de ganhos por semana</title>
</head>
<body>
	<form action="index.php" method="post">
		<label>Insira o número de horas trabalhadas:</label><br>
		<input type="number" name="horasTrabalhadas"><br>
		<label>Insira o preço por hora trabalhada:</label><br>
		<input type="number" name="precoHora"><br>
		<button type="submmit">Calcular</button>
	</form>
</body>
</html>

<?php
	/*
		Estudos sobre os usos dos condicionais em php
	*/
	/*
		O programa a seguir calcula o montante de dinheiro
		que um usuário faz em uma semana com base na seguinte fórmula:
		ganhoNaSemana = horasTrabalhadas * precoHora;
	*/
	$horasTrabalhadas = $_POST["horasTrabalhadas"];
	$precoHora = $_POST["precoHora"];;
	$ganhoNaSemana = null;

	if(($precoHora <= 0) || ($horasTrabalhadas <= 0)){
		echo "Informe um valor válido!";
	}else{
		$ganhoNaSemana = $horasTrabalhadas * $precoHora;
		echo "Seus ganhos por semana foram: R$: " . $ganhoNaSemana . "<br>";
	}

?>