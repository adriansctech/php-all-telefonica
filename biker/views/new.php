<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nueva moto</title>
</head>
<body>
	<form action="../new.php" method="POST">
		<label for="modelo">Modelo: </label>
		<input type="text" name="modelo">
		<label for="color">Color: </label>
		<input type="text" name="color">
		<label for="cilindrada">Cilindrada: </label>
		<input type="number" name="cilindrada">
		<input type="submit" value="Agregar nueva moto">
	</form>
</body>
</html>