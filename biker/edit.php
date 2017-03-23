<?php

require_once "config/conexion.php";

if($_POST){	
    try {
        $stmt = $pdo->prepare('
            UPDATE motos SET
            modelo=:modelo,
            color=:color,
            cilindrada=:cilindrada
            WHERE id=:id
        ');


        $stmt->execute([
            ':id' => (int) $_POST['id'],
            ':modelo' => $_POST['modelo'],
            ':color' => $_POST['color'],
            ':cilindrada' => (int) $_POST['cilindrada']
        ]);        
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
            SELECT * from motos
            WHERE id=:id
        ');

        $stmt->execute([
            ':id' => $_GET['id']
        ]);

        $bike = $stmt->fetch();
		include "views/edit.php";
		die();
        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() ."<br/>";
        die();
    }
    
}


   