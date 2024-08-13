<?php

	/*
		Estudo sobre as conversões de variaveis
		em php:

			CONVERSOR:				->		DESCRIÇÃO:
			(int), (interger)				Converte para inteiro.
			(real), (float), (double)		Converte para ponto flutuante.
			(string)						Converte para string.
			(array)							Converte para inteiro.
			(object)						Converte para objeto.
	*/

	$num = 1;
	$num2 = "10";

	$result = (float)($num + ((int) $num2));

	echo $result;