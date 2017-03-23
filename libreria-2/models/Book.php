<?php 
$config = require_once 'config.php';
$db     = $config['db'];

/*Ahora creamos la clase book*/
class Book
{
	/*Sus atributos son de tipo public, son los que se utilizan por defecto, pero de esta manera podemos acceder a las variables dese cualquier sitio*/		
	public $title;
	public $author;
	public $description;
	/*Creamos una variable de tipo privada para que no se puede acceder desde otro sitio, de esta fomra se respeta el id del libro que nos devuelve la consulta de la base de datos*/
	private $id;

	/* Ahora creamos los getters para obtener los valores de las variables que vayamos a crear*/
	function getId(){
		return $this->id;
	}
	function getTitle(){
		return $this->title;
	}
	/*Ahora crearemos los setters para poder modificar los valores de las variables de tipo privado, estas funciones reciben un parámetro, con el cambiarán el valor de la variable del objeto*/
	function setTitle($title){
		$this->title = $this;
	}

	function __construct($title, $author = "", $description = ""){
		/*En el constructor le indicamos que la variables que hemos creado se cargarán con los datos que le pasamos en el constructor*/
		$this->title = $title;
		/*Este título es el que vas a recibir*/
		$this->author = $author;
		$this->description = $description;
		/*Al poner dos variables con valores por defecto le indicamos a la clase que podemos crear un nuevo ojeto de esta clase y śolo estaríamos obligados a enviarle al constructor un parámetro, en este caso el titulo*/
	}

	/*Creamos funcion connection para acceder a la base de datos*/
	static function connection(){
		global $db;
		return new PDO(
	        "mysql:host={$db['host']};
	        dbname={$db['dbname']};
	        charset={$db['charset']}",
	        $db['user'],
	        $db['password']
	    );
	}

	/*Creamos una funcion statica, de esta manera podemos llamarla sin tener que crear un objeto derivado de la clase*/
	static function getAll(){
		/*Esta funcion ejecuta una consulta en la base de datos y retorna todos los resultados*/
		/*Al poner self:: le indicamos que ejecute la funcion connection de la misma clase*/
		return self::connection()->query("SELECT * FROM books")->fetchAll();
		/*Le indicamos fetchAll para que nos devuelva un array con todos los elementos de la consulta*/
	}
	/*Creamos una funcion a la que le pasamos un id y nos devolvera la informacion que corresponde al libro con ese id*/
	static function find($id){
		$res = self::connection()->query("SELECT * FROM books WHERE id ='{$id}'")->fetch;
		$book = new Book($res['title'],$res['author'],$res['description']);
		/*Asignamos el id del libro que nos devuelve la consulta a el libro que hemos creado,de esta manera no cambiamos nada del constructor*/
		$book->id = $res['id'];
		return $book;
	}
}

$books = Book::getAll();
$book = Book::find(1);

var_dump($book);

 ?>