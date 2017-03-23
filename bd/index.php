<!-- listado o tabla con los libros extraidos de la bbdd con los campos TITULO y AUTOR-->
<!-- + enlaces a INFO, EDIT y NEW -->
<?php 
	include "connectBBDD.php";

	echo "<h1>Listado de libros</h1>";
	echo "<ul>";
	foreach ($books as $books) {
		echo "<li>".$books["titulo"].", ".$books["autor"]."</li> <br>";
	}
	echo "</ul>";
 ?>