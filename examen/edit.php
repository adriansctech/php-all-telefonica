<?php
/*En este archivo le indicamos que si viene un paeticion por por post que ejecute la primera parte que es la que modifica la informacion de un piso en concreto, sino recibe nada por post que muestre solo la información de un piso en concreto que hemos seleccionado en la página del index*/
require_once "config/conexion.php";

if($_POST){
//var_dump($_POST);
    try {
        $stmt = $pdo->prepare('
            UPDATE pisos SET
            direccion=:direction,
            precio=:price,
            descripcion=:description
            WHERE id=:id
        ');

        //var_dump($stmt);
        /*Aquí he tenido un poco de problemas  al a hora de sustituir los valores que recibia del $_POST para incluirlos en el prepare, por eso he dejado los var_dump()....*/
        $stmt->execute([
            ':id' => (int)$_POST['id'],
            ':direction' => $_POST['direccion'],
            ':price' => (int)$_POST['precio'],
            ':description' => $_POST['descripcion']
        ]);  
        /*Una vez que ejecutamos la modificación llevamos al usuario a la página de index y vaciamos pdo y stmt*/      
        include "index.php"; 
    	die();
        $pdo = null;
        $stmt = null;
        

    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() ."<br/>";
        die();
    }
       
}else{
    try {
        $stmt = $pdo->prepare('
            SELECT * from pisos
            WHERE id=:id
        ');

        $stmt->execute([
            ':id' => $_GET['id']
        ]);

        $piso = $stmt->fetch();
		include "views/edit.php";
		die();
        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() ."<br/>";
        die();
    }
    
}


   