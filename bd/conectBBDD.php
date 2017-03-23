<!-- los datos de conexion de la bbdd deben ir en un archivo a parte -->

<?php 
	try {
		$pdo = new PDO('mysql:host=localhost;dbname=mydb;charset=UTF8','root', 'industrial-');
	} catch (Exception $e) {
		echo die("No se pudo conectar: " . $e->getMessage());
	}


	$books = $pdo->query("SELECT * from libros");
?>