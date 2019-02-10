<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DisFruta con PHP</title>
	<style>
		
	#mostrar{
		 font-size: 30px;
	}
	
	</style>
</head>
<body>


	<h1 align="center">Disfruta con PHP</h1>

	<?php

	$randomCantidad=rand(7,20);
	$frutas= array();
	echo "Cantidad de frutas $randomCantidad <br>";
//bucle para generar las frutas
	for ($i=0; $i <$randomCantidad; $i++) {
		$randomFrutas=rand(127815,127827);
		echo "&#$randomFrutas";
		$arrayFrutas[]=$randomFrutas;
		if (!in_array($randomFrutas, $frutas)) {
			array_push($frutas, $randomFrutas);
		}
	}
	echo "<br>";


$longArray=count($arrayFrutas);	
$longFrutas=count($frutas);


foreach ($frutas as $valueFrutas) {
	$contador=0;
	foreach ($arrayFrutas as $valueArray) {
		if($valueFrutas==$valueArray){
			$contador++;
		}
	}
	if($contador <= 1){
        echo "<p>La fruta &#$valueFrutas; está <strong>$contador</strong> vez en la lista.</p>";
            }
    else{
            echo "<p>La fruta &#$valueFrutas; está <strong>$contador</strong> veces en la lista.</p>";
            }
}


?>

 <button onclick="location.reload()">¡¡¡ DisFruta otra vez !!!</button>
	
</body>
</html>