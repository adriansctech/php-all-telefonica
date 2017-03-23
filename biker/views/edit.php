<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar: <?=$bike['modelo']?></title>
</head>
<body>

<p>
    <a href="index.php">Mis motos</a>
</p>

<form method="POST" action="edit.php">
    <input type="hidden" name="id" value="<?=$bike['id'] ?>">

    <label for="modelo">Modelo</label>
    <input type="text" name="modelo" required value="<?=$bike['modelo'] ?>">

    <label for="color">Color</label>
    <input type="text" name="color" value="<?=$bike['color'] ?>">

    <label for="cilindrada">Cilindrada</label>
    <input type="text" name="cilindrada" value="<?= $bike['cilindrada'] ?>">

    <input type="submit" value="Editar moto">
</form>

</body>
</html>