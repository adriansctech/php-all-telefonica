<?php 
	//Indicamos que no queremos que nos convierta php el solo la variables
	declare(strict_types=1);
	//Incluimos el fichero donde están las variables
	include "vars.php";

	/*Crea una función capaz de convertir un valor de euros a dólares y
	otra que haga la conversión en sentido contrario.
	1.-	El resultado debe mostrarse con dos decimales y el signo de la
	moneda (en su posición correspondiente).
	*/

	//Creamos funciones que devuelvan un valor decimal
	function dollarToEuro(float $money) : string{
		/*Le indicamos que devuelva un valor de coma 
		flotante redondeado a dos cifras*/		
		return "El total de ".sprintf("$%.2f",$money)." en euros es : ".sprintf("%.2f €",($money*COTIZACIONEURO));
	};
	function euroToDollar(float $money) : string{
		return "El total de ".sprintf("%.2f €", $money)." en dolares es : ".sprintf("$%.2f", ($money*COTIZACIONDOLLAR));		
	};
	
	//Mostramos mensaje
	echo dollarToEuro($euro)."<br>";
	echo euroToDollar($dollar)."<br>";

 ?>