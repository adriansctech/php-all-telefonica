<?php 
include 'vars.php';/*inlcuimos el fichero donde se almacenan las variables y es como si 					las tubieramos en este mismo fichero*/
/*
Almacena en una única variable la información de varios contactos
teniendo en cuenta que todos tienen que tener un nombre y
pueden tener varios números de teléfono y/o emails.
Añade a varias personas a tu ejemplo
*/
	
	//Ahora recorremos todos los datos para mostrarlos
	echo "--- Datos almacenados  ---";	
	echo "<br><br>"	;
	/*Por cada elemento del array, lo introduces en una variable que se llama $persona*/
	foreach ($infoPersonas as $persona) {
		echo "Persona " .$contadorPersonas;		
		echo "<br>";
		/*De la persona que estas recorriendo, muestras el campo "name"*/
		echo "Nombre; " .$persona["name"]; 
		echo "<br>";
		echo "Direccion; " .$persona["address"];//Lo mismo con el campo address
		echo "<br>";
		echo "Teléfono; ";
		echo "<br>";
		/*Como en el campo "phone" tenemos mas de un resultado hacemos lo mismo, de esta persona y su campo phone me creas una variable y  muestras los valores que se obtiene de los campos*/
		foreach($persona["phone"] as $phoneonly){
			echo "	telf-".$contadorCampos."; ".$phoneonly;
			$contadorCampos++;
			echo "<br>";			
		}
		$contadorCampos = 1;//inicializamos variable a 1	
		echo "Email; ";
		echo "<br>";		
		foreach ($persona["email"] as $correo) {//Aquí lo mismo
			echo "	meil-".$contadorCampos."; ".$correo;
			$contadorCampos++;
			echo "<br>";			
		}
		$contadorCampos = 1;	
		$contador++;
		echo "<br>";
		$contadorPersonas++;//Sumamos +1 a variable 
	};
	echo "<br>";
	/*mostramos numero de registros contando los que hay dentro del array*/
	echo "--- Total de registros; " .count($infoPersonas);
 ?>