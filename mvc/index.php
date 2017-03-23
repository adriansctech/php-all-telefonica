<?php 
/*Para mostrar los errores*/
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

require "config/autoload.php";
use Talentum\Bootstrap\Request;

$request = new Request();
// obtenemos el parámetro o asignamos un valor por defecto
$controller = $request->getParam('controller') ?? 'page';
// construimos el nombre completo del controlador
$controller = ucfirst($controller) . 'Controller';
$controller = 'Talentum\\Bookstore\Controller\\'. $controller;
// obtenemos el parámetro o asignamos un valor por defecto
$action = $request->getParam('action') ?? 'index';
// intanciamos el controlador
$controller = new $controller;
// y llamamos a la "acción"/método pasando el id si lo hay
$controller->$action($request->getParam('id'));

 ?>