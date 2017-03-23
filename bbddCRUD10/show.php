<!-- recibirá por GET un entero asociado al ID del libro y mostrará toda la INFO -->
<!-- + enlace a INDEX -->
<?php 

	include "conectBBDD.php";

	$pdo->prepare("
		SELECT * FROM books WHERE books_id=:books_id
		");

		$stmt->execute([':books_id'=>$_GET['books_id']]);
		$book=$stmt->fetch();

	echo "<h1> Descripción </h1>";
	echo "<table style='border-collapse: collapse; width: 50%'>";
	echo "<tr>";

	echo "<td style='border: 1px solid #dddddd; text-align: left'>".$book['description']."</td>";
	echo "</tr>";
	

	echo "<a href='edit.php?books_id={$_GET['books_id']}'> Editar info.</a>";
	//echo "<a href='edit.php'> Editar info.</a>";
?>