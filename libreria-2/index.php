<?php
/*Requerimos la conexion a la base de datos*/
require_once 'conexion.php';
/*Creamos un try/catch por si ocurre algún error*/
try {
	/*Preparamos una sentencia*/
    $stmt = $pdo->prepare('SELECT * from books');
    /*La ejecutamos*/
    $stmt->execute();
    /*Inlcuimos todo el resultado de la sentencia en la variable $books*/
    $books = $stmt->fetchAll();

    /*Las variables que hemos utilizado las ponemos a NULL para liberar memoria y también se cerraria el acceso a la base de datos al poner con este valor la variable pdo*/
    $pdo = null;
    $stmt = null;
} catch (PDOException $e) {
	/*Si ocurre algún error mostramos mensaje y cerramos todo con die()*/
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
/*Ahora mostramos la vista mediante el include, de esta manera si que tenemos la variable books que creamos aquí*/
include 'views/index.php';

/*Se utiliza include a diferencia de header ('Location ...'), debido a que si utilizamos header es como si el ususario pidiera otra página y este fichero no se hubiera ejecutado*/