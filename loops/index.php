<!-- Estudo dos loops for e while -->
<!DOCTYPE html>
<html>
<head>
	<title>loops for e while</title>
</head>
<body>
	<div class="contador">
		<form action="index.php" method="post">
			<h2>Repetidor de mensagens</h2>
			<label>Mensagem: </label><br>
			<input type="text" name="text-field" placeholder="Sua mensagem"><br>
			<label>Quantidade: </label><br>
			<input type="number" name="times-field" placeholder="Número"><br>
			<button type="submmit">Enviar</button>
		</form>
		<form action="index.php" method="post">
			<h2>Decrementador</h2>
			<label>Digite um número: </label><br>
			<input type="number" name="decrementador-field" placeholder="Número"><br>
			<button type="submmit">Contar</button>
		</form>
		<?php
			$i = null;

			$i = $_POST["decrementador-field"];
			while($i > 0){
				echo $i . "<br>";
				$i--;
			}
		?>
	</div>
</body>
</html>

<?php
	// Primeiramente o loop for
	$numLimite = null;
	$mensagem = null;

	$numLimite = $_POST["times-field"];
	$mensagem = $_POST["text-field"];

	for($i = 0; $i < $numLimite; $i++){ 
		echo $i+1 . ": ". "'" . $mensagem . "'" . "<br>";
	}
?>