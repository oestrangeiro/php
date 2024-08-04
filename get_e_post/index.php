<?php
	/*
		Estudos dos métodos GET e POST:

		$_GET e $_POST são variaveis especiais usadas
		para coletar dados de um formulario Html.
		Usamos algo assim:
		<form action="nome_do_arquivo.php" method="get">

		$_GET = 	os dados são visiveis na url.
					Nada seguro.
					requisições GET pode ser capturadas
					Possui limite de dados.
					ideal para uma search page

		$_POST =	Dados são empacotados dentro do body
					da requisição http.
					MAIS SEGURO.
					Sem limite de dados.
					Requisições POST não podem ser capturadas.
					Ideal para envio de credenciais.
	*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>GET e POST</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="pedido-pizzaria">
		<form action="index.php" method="post">
			<label>Nome do cliente: </label><br>
			<input type="text" name="userNome" placeholder="Nome"><br>
			<label>Endereço: </label><br>
			<input type="text" name="userEndereco" placeholder="Rua Tal"><br>
			<label>Tipo de pedido: </label><br>
			<input type="text" name="userPedido" placeholder="Informe o seu pedido."><br>
			<label>Quantidade: </label><br>
			<input type="number" name="pedidoQuantidade" placeholder="Quantidade."><br>
			<button type="submmit">Ordernar Pedido!</button>
		</form>
	</div>
</body>
</html>

<?php
	$totalPedido = 0;
	$taxaPedido = 1.35;
	$precoPizza = 25;

	echo "DESCRIÇÃO: <br>";
	echo "TIPO DE PEDIDO: " . $_POST["userPedido"] . "<br>";
	echo "QUANTIDADE: " . $_POST["pedidoQuantidade"] . "<br>";
	echo "NOME: " . $_POST["userNome"] . "<br>";
	echo "ENDEREÇO: " . $_POST["userEndereco"] . "<br>";
	$totalPedido = ($precoPizza * $_POST["pedidoQuantidade"]) + $taxaPedido;

	echo "TAXA DE ENTREGA: R$: " . $taxaPedido . "<br>";
	echo "TOTAL A PAGAR: R$: " . $totalPedido . "<br>";
?>