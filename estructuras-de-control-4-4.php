<?php 
include 'vars.php';
/*Muestra en una página web todos los libros de la biblioteca,
mostrando cada categoría (como en el ejemplo). Hazlo de forma que
diga funcionando si añadimos libros y categorías,*/

foreach ($biblioteca as $tipos => $libros) {	
	echo "<ul>";
		echo "<li> {$tipos} <ul>";
				foreach ($libros as $names) {
					echo "<li> {$names} </li>";		
				}
			echo "</ul>";
		echo "</li>";
	echo "</ul>";
}	
	
 ?>