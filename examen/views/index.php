<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./public/css/styles.css">
	<title>Inmobiliaria adriSC</title>
</head>
<body>
	<div id="wrapper">
		<main>
			<div class="row">
				<div class="col-sm-12 col-md-8 col-md-offset-2">
					<table>
						<tr>
					        <th>Dirección</th>
					        <th>Precio</th>
					        <th>Detalles</th>
					        <th>Borrar</th>
					        <th>Modificar</th>
					    </tr>
					    <?php foreach ($pisos as $piso): ?>
						    <tr>
						        <td>	            
					                <?= $piso['direccion'] ?>	            
						        </td>
						        <td>
						            <?= $piso['precio'] ?> €
						        </td>
						        <td>
						            <a href="detail.php?id=<?=$piso['id']?>">
								        Detalles
								    </a>
						        </td>
						        <td>		        	
					        		<a href="delete.php?id=<?=$piso['id']?>">
					        			<i class="icon-remove-sign delete"></i>			       
							    	</a>		        	
						        </td>
						        <td>		        	
					        		<a href="edit.php?id=<?=$piso['id']?>">
					        			<i class="icon-edit"></i>      
							    	</a>
						        </td>
						    </tr>
						<?php endforeach ?>
					</table>
					<div class="row">
						<div class="new col-sm-12 col-md-8 col-md-offset-2">
							<a href="views/new.php">
								Insertar nuevo piso
							</a>
						</div>
					</div>						
				</div>				
			</div>					
		</main>			
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>