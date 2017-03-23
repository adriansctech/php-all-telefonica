<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Bikes</title>
</head>
<body>	
	<table>
    <tr>
        <th>Modelo</th>
        <th>Color</th>
        <th>Cilindrada</th>
    </tr>
    <!-- Utilizamos los dos puntos para que quede más claro, debido a que si utilizamos las dos llaves de toda la vida se quedarían llaves por ahi y no sabriamos de donde proceden a lo mejor, si utilizamos los dos puntos debemos utilizar la sentencia endforeach y así es más fácil de reconocer de donde empieza a donde acaba el bucle a la hora de leer el código--> 
	<?php foreach ($bikes as $bike): ?>
	    <tr>
	        <td>	            
                <?= $bike['modelo'] ?>	            
	        </td>
	        <td>
	            <?= $bike['color'] ?>
	        </td>
	        <td>
	            <?= $bike['cilindrada'] ?>
	        </td>
	        <td>		        
	        	<a href="edit.php?id=<?=$bike['id']?>">
			        Editar
			    </a>
	        </td>
	        <td>		        
	        	<a href="delete.php?id=<?=$bike['id']?>">
			        Eliminar
			    </a>
	        </td>
	    </tr>
	<?php endforeach ?>
	</table>

	<a href="views/new.php">
		Insertar nueva moto
	</a>	


</body>
</html>