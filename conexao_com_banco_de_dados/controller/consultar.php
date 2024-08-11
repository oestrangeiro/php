<!DOCTYPE html>
<html>
<head>
	<title>Visualização dos contatos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="p-3 container-fluid text-white text-center bg-primary">
		<h1>Consulta de dados</h1>
	</div>

	<div class="form">

		<?php

			include_once 'config.php';

			// Criando a tabela
			echo '<table class="table text-center table-bordered table-hover">';
			echo "<tr>";
			echo "<th>ID</th>";
			echo "<th>NOME</th>";
			echo "<th>ENDEREÇO</th>";
			echo "<th>TELEFONE</th>";

			$sql = "SELECT * FROM contatos";
			$resultado = mysqli_query($conn, $sql) or die("erro ao fazer a query");

			while($registro = mysqli_fetch_array($resultado)){
				$id = $registro['id'];
				$nome = $registro['nome'];
				$endereco = $registro['endereco'];
				$telefone = $registro['telefone'];

				echo "<tr>";
				echo "<td>" . $id . "</td>";
				echo "<td>" . $nome . "</td>";
				echo "<td>" . $endereco . "</td>";
				echo "<td>" . $telefone . "</td>";
				echo "</tr>";
			}
			mysqli_close($conn);
			echo "</table>";

		?>
	</div>
	<div class="container ">
		<form class="form-control" action="excluirRegistro.php" method="post">
			<p>Deseja Excluir um contato? Infome o id abaixo</p>
			<label>Id: </label>
			<input type="number" name="deletar-contato-id">
			<button class="btn btn-danger">Excluir Registro!</button><br>
			<a href="../view/index.html">Voltar para página inicial</a>
		</form>
	</div>
</body>
</html>

