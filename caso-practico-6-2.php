<?php 
	//Indicamos que no queremos que nos convierta php el solo la variables
	declare(strict_types=1);
	//Incluimos el fichero donde están las variables
	include "vars.php";

	/*Crea una función que permita determinar si una cadena de texto
	(palabra o frase) es un palíndromo
	1.No se deben tener en cuenta los espacios, las mayúsculas, ni las
	tildes.*/

	function palindromo(string $cadena) : bool{
		$separar = explode(" ", strtolower($cadena));    
	    foreach($separar as $palabra){
	        trim($palabra);
	        $nuevo .= $palabra; 
	    }
	    
	    if($nuevo == strrev($nuevo)){
	        return true;
	    }else {
	        return false;
	    }
	}

	echo "La cadena de texto ".$phrase.plindromo($phrase)." es palindromo";



 ?>