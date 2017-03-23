<!DOCTYPE html>
<html lang="es">
<head>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./public/css/styles.css">
    <title>Editar: <?=$piso['direccion']?></title>
</head>
<body>
    <div id="wrapper">
        <main>
            <div class="row edition">
                <div class="col-sm-12 col-md-8 col-md-offset-2">
                    <form method="POST" action="edit.php">
                        <input type="hidden" name="id" value="<?=$piso['id'] ?>">

                        <label for="direccion">Direccion: </label>
                        <input type="text" name="direccion" required value="<?=$piso['direccion'] ?>">

                        <label for="precio">Precio: </label>
                        <input type="text" name="precio" value="<?=$piso['precio'] ?>">

                        <label for="descripcion">Descripción: </label>
                        <input type="text" name="descripcion" value="<?= $piso['descripcion'] ?>">
                        <input type="submit" value="Editar piso">
                    </form>
                </div>                
            </div>    
            <div class="row to-index">
                <div class="col-sm-12 col-md-8 col-md-offset-2">
                    <a href="index.php">Listado de pisos</a>
                </div>
            </div>            
        </main>        
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>