<?php 
/*Con las siguientes tres lineas e indicamos que nos muestre los posibles errores para poder guiarnos y corregirlos*/ 
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
/*Indicamos que necesitamos el fichero config/conexion y si ya se ha cargado no lo vuelva a cargar*/
require_once ("config/conexion.php");

try {
	/*Preparamos una sentencia que nos devolvera toda la lista de pisos*/
    $stmt = $pdo->prepare("SELECT * from pisos");
    /*La ejecutamos*/
    $stmt->execute();
    /*Incluimos todo el resultado de la sentencia en la variable $pisos*/
    $pisos = $stmt->fetchAll();    
    include "views/index.php";
    $pdo = null;
    $stmt = null;    
} catch (PDOException $e) {
	/*Si ocurre algún error mostramos mensaje y cerramos todo con die()*/
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
 ?>