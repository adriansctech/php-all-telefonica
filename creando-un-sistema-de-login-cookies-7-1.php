<?php 
	//Indicamos que no queremos que nos convierta php el solo la variables
	declare(strict_types=1);
		
	/*Crea un sistema que lleve la cuenta del número de visitas que hace
	un usuario a la página y se lo muestre. Usa una cookie para llevar la
	cuenta de las visitas. 
	Investiga y comprueba como puedes ver desde tu navegador web la
	información sobre las cookies.
	*/

	/*Creamos una variable con valores de tipo fecha para que caduque la cookie dentro de una semana*/
	$caducidad = time() + 60*60*24*7;
	if(isset($_COOKIE["visitas"])){
		setcookie("visitas", (string)++$_COOKIE["visitas"]);
		echo "Has visitado esta página un total de: ".$_COOKIE["visitas"];	
	}else{
		$count = 1;	
		setcookie("visitas", (string)$count, $caducidad);

	}
	






 ?>