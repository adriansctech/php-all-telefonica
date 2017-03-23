<?php
/*Aqui solo realizaremos la inserccion en la base de datos de un nuevo piso que recibiremos sus datos por $_POST*/
require_once "config/conexion.php";
/*var_dump($_POST);*/
if($_POST){	
    try {
        $stmt = $pdo->prepare('
			INSERT INTO pisos
			(direccion, precio, descripcion)
			VALUES
			(:direction, :price, :description)            
        ');

        /*var_dump($stmt);*/
        $stmt->execute([            
            ':direction' => $_POST['direction'],
            ':price' => (int)$_POST['price'],
            ':description' => $_POST['description']
        ]);        
        include "index.php"; 
    	die();
        $pdo = null;
        $stmt = null;
        

    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() ."<br/>";
        die();
    }
}