<?php 
	//Indicamos que no queremos que nos convierta php el solo la variables
	declare(strict_types=1);
	//Incluimos el fichero donde están las variables
	include "vars.php";
	
	/*Crea una función para sorteos que admita un número
	indeterminado de nombres como parámetro. Debe mostrar los
	nombres y elegir uno de ellos como ganador.
	Puedes usar la función rand($min_value, $max_value) que
	devuelve un valor aleatorio entre el rango dado.*/

	//Creamos una funcion que recibira un array con nombres, esta funcion deberá de devolver un string
	function selectName(array $names): string{
		echo "Los nombre son : ";
		echo "<ul>";
		//Por cada elemento del array mostramos su nombre en una lista
		foreach ($names as $key => $value) {
			echo "<li> $value </li>";
		}
		echo "</ul>"; //Cerramos la lista
		return $names[rand(0, count($names))];//Ahora devolvemos el string que sera un nombre al azar
	}	
	//Ahora llamamos a la funcion y le pasamos el array con los nombre y el minimo y el maximo.
	echo "El ganador es; <h2>".selectName($names)."</h2>";
	
 ?>