<?php 
/*Cuando estaba desarrollando este controlador me has servido como patito de goma ..., muchas gracias*/
    require_once "config/conexion.php";
    //var_dump($_GET);
    try {
        $stmt = $pdo->prepare('
            SELECT * from pisos
            WHERE id=:id
        ');
        //var_dump($stmt);
        $stmt->execute([
            ':id' => (int)$_GET['id']
        ]);

        $piso = $stmt->fetch();
        include "views/detail.php";
        die();
        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() ."<br/>";
        die();
    }
 ?>