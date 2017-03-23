<?php

require_once "config/conexion.php";
/*var_dump($_POST);*/
if($_POST){	
    try {
        $stmt = $pdo->prepare('
			INSERT INTO motos
			(modelo, color, cilindrada)
			VALUES
			(:modelo, :color, :cilindrada)            
        ');

        /*var_dump($stmt);*/
        $stmt->execute([            
            ':modelo' => $_POST['modelo'],
            ':color' => $_POST['color'],
            ':cilindrada' => (int)$_POST['cilindrada']
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