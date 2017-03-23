<?php 
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

require_once ("config/conexion.php");

try {
	/*Preparamos una sentencia*/
    $stmt = $pdo->prepare("SELECT * from motos");
    /*La ejecutamos*/
    $stmt->execute();
    /*Inlcuimos todo el resultado de la sentencia en la variable $books*/
    $bikes = $stmt->fetchAll();

    /*Las variables que hemos utilizado las ponemos a NULL para liberar memoria y también se cerraria el acceso a la base de datos al poner con este valor la variable pdo*/
    /*$pdo = null;
    $stmt = null;*/
    include "views/index.php";
} catch (PDOException $e) {
	/*Si ocurre algún error mostramos mensaje y cerramos todo con die()*/
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}




 ?>