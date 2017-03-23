<?php 
/*Variable para el ejercicio 2-2*/
	//Creo una variable para contar las personas que hay, este cambia de valor incrementando en +1 cuando acaba de mostrar todos los datos de la persona
	$contadorPersonas = 1;
	//Este contador lo utilizo para mostrar de alguna manera mas limpia los campos de email y telefono, estos s evan sumando cada vez que muestra un registro de los mencionados y volviendo a su valor inicial cuando sale de ese bucle.
	$contadorCampos = 1;
	$infoPersonas = [ //indicamos que esta variable es de tipo array 
						[//Aqui empieza la primera coleccion de valores
							"name" => "adri",// en este campo al clave es name
							"address" => "C/ La sardina",
							"phone" => [/*Aquí indicamos que esta variable es de tipo array y 					contine mas de un posible valor*/
										"phone1" => 653500125,
										"phone2" => 965339167
										],
							"email" => [
										"email1" => "adrian_sc@lice.com",
										"email2" => "adriansanchezcarchano@gmail.com"],
						],//Aquí fnaliza la primera coleccion da valores
					 [//Aquí empieza la segunda coleccion de valores
							"name" => "pakito",
							"address" => "C/ La caballa",
							"phone"=> [
										"phone1" => 653500125,
										"phone2" => 653500125
										],
							"email" => [
										"email1" => "adrian_sc@live.com",
										"email2" => "adriansanchezcarchano@gmail.com"],
					]
				 ];


/*Variables del ejercicio 3-1*/
	$people = [
		 [ "name" => "Juan", "age" => 15],
		 [ "name" => "Paco", "age" => 16]
	];

/*Variables del ejercicio 4-1*/
$open = ["from" => 10.00, "to" => 20.00];
$t = 10.00;

/*Variables del ejercicio 4-2 y ejercicio 4-3*/
$firstNumber = 1;
$lastnumber = 10;
$number = 7 ;


/*Variables para el ejercicio 4-4*/
$biblioteca = [
		"cine" => [
				 "El guión",
				 "Hitchcock",
				 ],
		"programacion" => [
				 "Patterns",
				 "Clean Code",
				 "Refactoring"
				 ],
];

/*Variables para el ejercicio 4-5*/
$open = [
	'l' => [[10.00, 14.00], [16.00, 20.00]],
	'm' => [[10.00, 14.00], [16.00, 20.00]],
	'x' => [[10.00, 14.00], [16.00, 20.00]],
	'j' => [[10.00, 14.00], [16.00, 20.00]],
	'v' => [[10.00, 14.00], [16.00, 20.00]],
	's' => [[10.00, 20.00]],
	'd' => []
];
$day = "m";
$time = 15.00;

/*Variables para el ejercicio 5-1*/
$names = [
	0 => "JuanCarlos",
	1 => "Paco",
	2 => "Adri",
	3 => "Andrea",
	4 => "Lucia",
	5 => "Ana"	,
	6 => "Perico",
	7 => "Felipe",
	8 => "Pitágoras",
	9 => "Manolo"
];

/*Variables para el ejercicio 5-2*/
$number = 647;

/*Variables para el ejercicio 6-1*/
define("COTIZACIONDOLLAR", 1.06237);
define("COTIZACIONEURO", 0.941350);
$euro = 12.23;
$dollar = 20.15;

/*Variables para el ejercicio 6-2*/
$cadena = "Esto es un palindromo"; 
 ?>