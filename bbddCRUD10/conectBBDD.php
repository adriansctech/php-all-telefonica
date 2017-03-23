<!-- los datos de conexion de la bbdd deben ir en un archivo a parte -->

<?php 
		try {
			$pdo = new PDO('mysql:host=localhost;dbname=books;charset=UTF8','librero', '1234');
		} catch (Exception $e) {
			die("No se pudo conectar: " . $e->getMessage());
		}

		$books = $pdo->query("SELECT * FROM books");

		if(isset($_GET['crear'])){
			$title = $_GET['title'];
			$author = $_GET['author'];
			$description = $_GET['description'];

			$stmt = $pdo->prepare("
				INSERT INTO books (title, author, description)
				VALUES (:title, :author, :description)");

				$stmt->execute([':title'=>$title, ':author'=>$author, 'description'=>$description]);
				header("Location: index.php");
		}

		if(isset($_GET['books_id'])){
			$stmt = $pdo->prepare("
				SELECT description FROM books WHERE books_id=:books_id
				");

				$stmt->execute([':books_id'=>$_GET['books_id']]);
		}

		if(isset($_GET['editar'])){
			 $stmt = $pdo->prepare("
		 	 	UPDATE books
		 	 	SET
		 	 	title = :title,
		 	 	author = :author,
		 	 	description =:description
		 	 	WHERE books_id = :id
			");
		 	
		 	 $stmt->execute([':title'=>$_GET['title'], ':author'=>$_GET['author'], ':description'=>$_GET['description'], ':id'=>$_GET['books_id']]);
		 	header("Location: index.php");
		};


?>