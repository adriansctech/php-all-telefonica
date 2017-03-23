<?php 
include 'vars.php';
/*Usa un condicional de tipo if/else para mostrar un mensaje
indicando si un local está abierto o cerrado según su hora de
apertura. Trata las horas como datos de tipo float.
El horario de apertura de (10.00 a 20.00) se expresará como:
$open = ['from' => 10.00, 'to' => 20.00];
La hora a probar debe guardarse en una variable.
$t = 10.00
Por supuesto, el condicional debe funcionar sea cual sea la hora que
almacene nuestra variable $t.*/


if ($t <= ($open["from"]) && ($t < $open["to"]) ) {
	echo "Está abierto.";
} else {
	echo "Está cerrado.";
}
 ?>