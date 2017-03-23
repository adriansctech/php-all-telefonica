<!-- listado o tabla con los libros extraidos de la bbdd con los campos TITULO y AUTOR-->
<!-- + enlaces a INFO, EDIT y NEW -->

<?php 
	include "conectBBDD.php";

	echo "<h1> Catálogo de Libros </h1>";
	echo "<table style='border-collapse: collapse; width: 50%'>";
	echo "<tr>";
	echo "<th> Titulo: </th>";
	echo "<th> Autor: </th>";
	// echo "<th> Descripción: </th>";

	foreach ($books as $book) {

		echo "<tr>";
		echo "<td style='border: 1px solid #dddddd; text-align: left'><a href='show.php?books_id={$book['books_id']}'>".$book['title']."</a></td>";
		echo "<td style='border: 1px solid #dddddd; text-align: left'>".$book['author']."</td>";
		echo "<td style='border: 1px solid #dddddd; text-align: left'><a href='delete.php?books_id={$book['books_id']}'>Eliminar</a></td>";
		// echo "<td style='border: 1px solid #dddddd; text-align: left'>".$book['description']."</td>";
		echo "</tr>";
		// echo "<a href='show.php'> Más info.</a>";
		// echo "<a href='edit.php'> Editar info.</a>";
	}
	echo "</table><br>";
	echo "<a href='new.php'> Nuevo libro.</a><br><br>";
?>