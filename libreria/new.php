<!-- formulario para dar de alta un nuevo libro -->
<!-- + enlace a INDEX -->
<?php 
	echo "<form action='conectBBDD.php' method='GET'>";

	echo "<label> Título: </label>";
	echo "<input type='text' name='title'><br>";

	echo "<label> Autor: </label>";
	echo "<input type='text' name='author'><br>";

	echo "<label> Descripción: </label>";
	echo "<input type='text' name='description'><br>";

	echo "<input type='submit' name='crear' value='Enviar'><br>";

	echo "</form>";

	echo "<a href='index.php'> Inicio.</a>";
?>