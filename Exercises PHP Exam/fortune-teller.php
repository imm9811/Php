


<?php
if(!isset($_GET['n'])){
	$n="";
	$oculto=rand(1,100);

}else{

	$n=$_GET['n'];
	$oculto=$_GET['oculto'];
	
	//para msotrar hacer esto
	//echo $oculto;


	if($oculto<$n){
		echo "el numero es mas pequeño <br>";
	}

	if($oculto>$n){
		echo "el numero es mas grande <br>";
	}

	if($oculto==$n){
		echo "enhorabuena has ganado un pin <br>";
		?>"¿Quieres volver a jugar? <button onclick="location.reload()">Jugar de nuevo</button>";<?php
	}


	}



if(!isset($_GET['n']) || $oculto!=$_GET['n']){
	?>
	<br>
	<form action="adivino.php" method="GET">
		Introduce un numero<input type="number" name="n" autofocus>
		
		<input type="hidden" name="oculto" value="<?= $oculto ?>" />

		<input type="submit" value="Comprobar Numero">
	</form>
	

	<?php
}


?>