<?php 
	//Indicamos que no queremos que nos convierta php el solo la variables
	declare(strict_types=1);
	//Incluimos el fichero donde están las variables
	include "vars.php";

	/*. Crea una función isPrime() que reciba un número entero y
	devuelva true si el número es primo o false si no lo es.
	Para poder comprobar facilmente el resultado por pantalla crea
	una segunda función llamada tellIfPrime que ejecute la función
	anterior e imprima una cadena diciendo si esl número es primo
	o no.
	Al final de tu código prueba con algunos número primos y no
	primos.*/

	/*Cuando lo tengas, comprueba si tu función sirve para número
	primos altos como 983, 104729, 2147483647. Si la longitud del
	número es un problema piensa qué puede estar ocurriendo y
	cómo solucionarlo.*/
	/*Se puede agilizar el tiempo de ejecucion dividiendo entre dos el numero o haciendo su raiz cuadrada
	$numberPrime/2
	sqrt($numberPrime)*/

	function tellIfPrime (int $numberPrime){
		if(isPrime($numberPrime)){
			echo "El número $numberPrime , es primo.";
		}else{
			echo "El número $numberPrime , no es primo.";
		}
	}

	function isPrime (int $numberPrime) : bool{				
		for($i = 2; $i < $numberPrime/2; $i++){
			if($numberPrime %$i == 0){
				return false;
			}
		}
		return true;
	}

	tellIfPrime($number);

 ?>