<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./public/css/styles.css">
	<title>Detalle del piso </title>
</head>
<body>
	<div id="wrapper">
		<main>
			<div class="row">
				<div class="col-sm-12 col-md-8 col-md-offset-2">
					<table>
						<tr>
							<th></th>
					        <th>Dirección</th>
					        <th>Precio</th>
					        <th>Detalles</th>	        
					    </tr>			    
						<tr>
							<td>
								<img class="logo" src="./public/images/logotipo.jpg" alt="logotipo de el piso">
							</td>
					        <td>	            
					            <?= $piso['direccion'] ?>	            
					        </td>
					        <td>
					            <?= $piso['precio'] ?> €
					        </td>
					        <td>
					        	 <?= $piso['descripcion'] ?> 
					        </td>
					   	</tr>
					</table>
				</div>	
				<div class="row">
					<div class="new col-sm-12 col-md-8 col-md-offset-2">
						<a href="index.php">Listado de pisos</a>
					</div>	
				</div>			
		</main>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>