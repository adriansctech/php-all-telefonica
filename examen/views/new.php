<!DOCTYPE html>
<html lang="en">
<head>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../public/css/styles.css">
	<title>Nuevo piso</title>
</head>
<body>
	<div id="wrapper">
		<main>
			<div class="row">
				<div class="col-sm-12 col-md-8 col-md-offset-2">
					<form action="../new.php" method="POST">
						<table>
							<tr>
								<th colspan="3">Agregar nuevo piso </th> 	
							</tr>
							<tr>
								<td>
									<label for="direccion">Dirección: </label>
									<input type="text" name="direction" placeholder="Insertar direccinón del inmueble">
								</td>
								<td>
									<label for="price">Precio: </label>
									<input type="text" name="price" placeholder="Insertar precio de alquiler">
								</td>
								<td>
									<label for="description">Descripción: </label>
									<input type="text" name="description" placeholder="Insertar descripción del piso">
								</td>								
							</tr>
						</table>
						<div class="row">
							<div class="new new-2 col-sm-12 col-md-8 col-md-offset-2">
								<input type="submit" value="Agregar nuevo piso">
								<br/>
								<a href="../index.php">
									Ir a listado
								</a>
							</div>
						</div>						
					</form>
				</div>
			</div>	
		</main>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>