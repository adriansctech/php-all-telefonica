<?php
/*Crea un archivo html con PHP embebido. Con PHP crea una variable
llamada ‘var’ que sea de tipo array y contenga varios elementos,
que serán; un integer, un float, un string, un boolean y una variable
null.
Haz que se muestre en pantalla el tipo y contenido de la variable,
de forma que se muestre también el tipo de cada uno de sus
elementos.*/
//Tenemos dos posibles maneras de crear un array
//Estilo variable
	/*$var = array (125,
				  12.35,
				 "hola",
				  true,
				  null
	);
	var_dump($var) ;*/
	/*$numero = 125;
	$decimal = 12.35;
	$cadena= "hola";
	$sino = true;
	$vacio = null;
	$var = array ($numero, $decimal, $cadena, $sino, $vacio);
	var_dump($var);*/

//Estilo array clasico
	/*Primero introduciendo los valores a mano
	$var = [
			125,
			12.35,
			"hola",
			true,
			null];
	var_dump($var);*/
	//Luego creando variables con los valores y 
	//luego creando el array con esas variables
	$numero = 125;
	$decimal = 12.35;
	$cadena= "hola";
	$sino = true;
	$vacio = null;
	$var =[
	//Ahora le indicaremos el nombre de la clave dentro del array
			"tipoNumerico" => $numero,
			"tipoDecimal" => $decimal,
			"tipoCadena" => $cadena,
			"tipoBolean" => $sino,
			"tipoNul" => $vacio
			];
	var_dump($var);
?>