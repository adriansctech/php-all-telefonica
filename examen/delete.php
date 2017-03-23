<?php 
/*Este fichero lo unico que hace es recibir un id y lo borrará de la base de datos, se trata del piso que deseamos eliminar */
require_once "config/conexion.php";

$stmt = $pdo->prepare("
	DELETE FROM pisos 
	WHERE id = :id
	");
$stmt->execute([':id'=>$_GET['id']]);
include "index.php"; 
die();
$pdo = null;
$stmt = null;
?>