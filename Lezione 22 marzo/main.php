<?php 

include 'oggetti2.php';

$marche = ["Fiat", "BMW", "Audi"];
$modelli = [ ["500", "Punto", "Panda"] , ["X1", "M3", "i8"] , ["R8", "A8", "TT"]];
$colori = ["Rosso", "Verde", "Blu", "Nero"];

$concessionario = array();

$suaAuto->stampaOggetto();

for ($i=0; $i < 100 ; $i++) { 

	$marca = $marche[array_rand($marche)];
	$num = array_search($marca, $marche);
<<<<<<< HEAD
	$modello = $modelli[$num][array_rand($modelli[$num])];
=======
	$modello = $modelli[$array_rand($modelli[$marca])];
>>>>>>> 86d2e6073d0f1ed4a578446cb462af1eeb9ff1cb
	$colore = $colori[array_rand($colori)];

	$concessionario[] = new Automobile($marca, $modello, rand(1000, 3000), $colore);


}
	echo "<pre>";
	print_r($concessionario);
	echo "</pre>";

 ?>