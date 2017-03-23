<!-- EDITAR la INFO del libro cuyo ID hemos introducido -->
<!-- + enlace a INDEX -->

<?php 

	include "conectBBDD.php";

	$stmt = $pdo->prepare("
		SELECT * FROM books WHERE books_id=:books_id
		");

		$stmt->execute([':books_id'=>$_GET['books_id']]);
		$book=$stmt->fetch();
		

	echo "<form action='conectBBDD.php' method='GET'>";

	echo "<label> Título: </label>";
	echo "<input type='text' name='title' value='{$book['title']}'><br>";

	echo "<label> Autor: </label>";
	echo "<input type='text' name='author' value='{$book['author']}'><br>";

	echo "<label> Descripción: </label>";
	echo "<input type='text' name='description' value='{$book['description']}'><br>";

	echo "<input type='hidden' name='books_id' value='{$_GET['books_id']}'><br>";
	echo "<input type='submit' name='editar' value='Enviar'><br>";

	echo "</form>";

	echo "<a href='index.php'> Inicio.</a>";
?>