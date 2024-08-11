<?php
	// Estudo de funções em php
	
	define('PI', 3.14159);

	// Declaração das funções
	function calc_volume_esf($raio){
		// V = 4/3 * (PI * r³)
		$volumeEsfera = null;
		$raioPow3 = pow($raio, 3);
		$volumeEsfera = 4/3 * (PI * $raioPow3);
		return $volumeEsfera;
	}

	$V = calc_volume_esf(10);
	$V = number_format($V, 2);
	echo "Volume: " . $V . " unidades cúbicas";