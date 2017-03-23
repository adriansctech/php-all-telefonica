<?php 
include 'vars.php';
/*Teniendo en cuenta que los nombres y edades pueden cambiar, haz
una web que imprima la diferencia de edad y una frase que indique
la relación de edad de la primera persona con la segunda.*/
/*echo "-------------------------------";
echo "<br>";
echo "Tenemos la siguiente variable ";
echo "<br>";
var_dump($people);
echo "<br>";
echo "Dentro de esta variable tenemos los siguientes valores ;";
echo "<br>";

foreach($people as $person){
	echo "Persona-name; ".$person["name"]. " Persona-edad; " .$person["age"];
	echo "<br>";
};*/

echo "------------------------------------------------------";
echo "<br>";
echo "Ahora comprobaremos la diferencia de edad entre ellos";
echo "<br>";
if ($people[0]["age"] < $people[1]["age"]){
	echo "La persona con nombre " .$people[1]["name"]. ", es mayor que " .$people[0]["name"]. " con una diferencia de edad de: ".($people[1]["age"]-$people[0]["age"])." años.";
}elseif ($people[0]["age"] > $people[1]["age"]) {
	echo "La persona con nombre " .$people[0]["name"]. ", es menor que " .$people[1]["name"]. " con una diferencia de edad de: ".($people[0]["age"]-$people[1]["age"])." años.";
}else{
	echo "Las dos personas tiene la misma edad";
}










 ?>