<?php 
include 'vars.php';
/*Usa un bucle for para imprimir la tabla de multiplicar del número
7 de la siguiente forma:*/
for($i = 1; $i <= 10; $i = $i +1){
	echo $number ." * ".$firstNumber." = " .$number*$firstNumber;
	echo "<br>";
	$firstNumber++;	
}
?>