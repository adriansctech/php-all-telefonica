<?php 

	include "conectBBDD.php";

	$stmt = $pdo->prepare("
	DELETE FROM books
	WHERE books_id=:books_id
	");

	$stmt->execute([':books_id'=>$_GET['books_id']]);
	header("Location: index.php");
?>