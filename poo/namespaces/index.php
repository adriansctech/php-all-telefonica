<?php 
//incluimos sentencia para que sea estricto e la hora de utilizar las variables
declare(strict_types=1);
//Con require lde indicamos que necesitamos los demás archivos.
require "person.php";
require "user.php";


/*Ahora le indicamos mediante la sentencia "use" que vamos a utilizar el contenido que hay dentro de namespace que le hemos indicado en el archivo y en concreto la clase Person*/
use PersonNameSpace\Person;

	/*Creamos un objeto del a clase Person y le incluimos valores, en principio esta clase se decalara con 4 parámetros que es lo que se espera el constructor, pero como tiene dos que ya tienen un valor por defecto solo le pasamos 2 parámetros*/
	$pepa = new Person ("Pepa", "Flores");
	var_dump($pepa);




 ?>