<?php 
include 'vars.php';
/*El comercio que indicaba en su web si estaba abierto o cerrado en
cada momento, a cambiado su horario de apertura. Ahora es más
completo (y ya no usa las claves “from” y “to”)
El día y la hora se almacenan en variables:*/
$mensaje=" cerrado, a tu casa";
//$open[$day] = [[10.00, 14.00],[16.00, 20.00]]
foreach ($open[$day] as $openRange) {
//$openRange = [10.00, 14.00] en la primera iteración
//$openRange = [16.00, 20.00] en la segunda iteración
	if (($time >= $openRange[0]) && ($time <= $openRange[1]))
		{
			$mensaje="abierto, pasa y paga";
		}
}
echo $mensaje;
 ?>