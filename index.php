<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Genial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icon.jpg" type="image/png">
</head>
<body>

    <?php 

        include("BaseDatos.php");

        //1. Crear un objeto de la clase BaseDatos
        $transaccion= new BaseDatos();

        //2. Crear la consulta SQL para buscar datos
        $consultaSQL="SELECT * FROM productos WHERE 1";

        //3. Utilizar el metodo para consultarDatos()
        $productos=$transaccion->consultarDatos($consultaSQL);

    ?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <img src="img/logo.jpg" alt="Logo Anime Genial" class="img-fluid">
            </div>
            <div class="col-10" style="height: auto">
            <img src="img/bannerMain.jpg" alt="banner Anime" class="img-fluid">
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Tienda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorías
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Productos nacionales</a>
                        <a class="dropdown-item" href="#">Productos importados</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Mangas</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Series Recomendadas</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Próximos eventos</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">Editor de productos</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="Buscar" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    <div class= "container-fluid">
        <div class="row">
            <?php foreach($productos as $producto):?>
                <div class="card text-white bg-dark m-3" style="max-width: 22rem;">
                    <div class="card-header"><strong>SERIE: </strong><?php echo($producto["serieProducto"])?></div>
                    <img src="img/productos/img_<?php echo($producto["idProducto"])?>.jpg" class="card-img-top" alt="imagen<?php echo($producto["idProducto"])?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo($producto["nombreProducto"])?></h5>
                        <p class="card-text"><strong>DESCRIPCIÓN: </strong><?php echo($producto["descripcionProducto"])?></p>
                        <p class="card-text"><strong>TIPO DE PRODUCTO: </strong><?php echo($producto["tipoProducto"])?></p>
                        <div class="row">
                            <p class="card-text col-6"><strong>DISPONIBLES: </strong><?php echo($producto["cantidadProducto"])?></p>
                            <p class="card-text col-6 "><strong>PRECIO: </strong><?php echo($producto["valorProducto"])?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>