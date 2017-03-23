<?php 
//incluimos sentencia para que sea estricto e la hora de utilizar las variables
declare(strict_types=1);
/*Inlcuimos un namespace para de alguna manera encapsular el contenido de este archivo en el nombre que le hemos indicado, en este caso "PersonNameSpace"*/
namespace PersonNameSpace;

//Creamos la clase persona
class Person
{
	/*Creamos variables con visivilidad public para poder acceder a ellas de manera facil*/
	public $name;
	public $surname;
	public $age;
	public $gender;

	/*Creamos contructor y le asignamos valores por defecto en las vbariables $age y $gender, si utilizamos este contructor deberemos de pasarle los parametros requeridos, como ya tienen dos variables valores por defecto, estas podemos omitirlas*/
	public function __construct(
		string $name, 
		string $surname,
		int $age = 18,
		string $gender = "v"
	){
		$this->name = $name;
		$this->surname = $surname; 
		$this->age = $age;
		$this->gender = $gender;
	}
}



 ?>