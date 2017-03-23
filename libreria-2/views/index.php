<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis libros</title>
</head>
<body>
<h1>Mis libros</h1>

<table>
    <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Acciones</th>
    </tr>
    <!-- Utilizamos los dos puntos para que quede más claro, debido a que si utilizamos las dos llaves de toda la vida se quedarían llaves por ahi y no sabriamos de donde proceden a lo mejor, si utilizamos los dos puntos debemos utilizar la sentencia endforeach y así es más fácil de reconocer de donde empieza a donde acaba el bucle a la hora de leer el código--> 
<?php foreach ($books as $book): ?>
    <tr>
        <td>
            <a href='show.php?id=<?= $book['id']; ?>'>
                <?= $book['title'] ?>
            </a>
        </td>
        <td>
            <?= $book['author'] ?>
        </td>
        <td>
            <a href='edit.php?id=<?= $book['id']; ?>'>
                Editar
            </a>
        </td>
    </tr>
<?php endforeach ?>
</table>

<p>
    <a href='new.php'>
        Añadir nuevo libro
    </a>
</p>

</body>
</html>