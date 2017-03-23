<?php 
	require_once "config/conexion.php";

	$stmt = $pdo->prepare("
		DELETE FROM motos 
		WHERE id = :id
		");
	$stmt->execute([':id'=>$_GET['id']]);
	include "index.php"; 
	die();
    $pdo = null;
    $stmt = null;
?>