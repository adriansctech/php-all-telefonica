<?php
/*incluimos el fichero con la info de el acceso a la base de datos dentro de una variable para tener mas accesibilidad*/
$config = require_once 'config.php';
/*creamos una variable intermedia donde incluimos el array con la info de la conexion a la bd*/
$db     = $config['db'];

/*Creamos la conexion a la base de datos*/
try {
    $pdo = new PDO(
        "mysql:host={$db['host']};
        dbname={$db['dbname']};
        charset={$db['charset']}",
        $db['user'],
        $db['password']
    );

    /*Le indicamos a el objeto pdo que tenga el atributo de modo error para que lance una excepción cuando algo sale mal*/
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    /*Si ocurre algún error durante la ejecución se muestra un mensaje*/
    /*print funciona igual que el echo*/
    print "¡Error!: " . $e->getMessage() ."<br/>";
    /*Si nos da un error en la conexión deja de ejecutar el código php*/
    die();
}
