<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Genial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icon.jpg" type="image/png">
</head>
<body>    
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
            <div class="col-12 mt-3">
                <form action="modificadorDatos.php" method="POST" class="d-flex justify-content-center">
                    <div class="card text-white bg-dark m-3" style="max-width: 30em">
                        <div class="card-header">AGREGAR PRODUCTO</div>
                        <div class="card-body">
                        <div class="form-group">
                            <label for="nombreProducto">Nombre del producto</label>
                            <input name="nombreProducto" id="nombreProducto" class="form-control" type="text" placeholder="Nombre del producto">
                        </div>
                        <div class="form-group">
                            <label for="tipoProducto">Tipo de producto</label>
                            <input name="tipoProducto" id="tipoProducto" class="form-control" type="text" placeholder="Tipo del producto">
                        </div>
                        <div class="form-group">
                            <label for="serieProducto">Serie</label>
                            <input name="serieProducto" id="serieProducto" class="form-control" type="text" placeholder="Serie">
                        </div>
                        <div class="form-group">
                            <label for="descripcionProducto">Descripción</label>
                            <textarea  name="descripcionProducto" id="descripcionProducto" class="form-control" type="text" placeholder="Serie">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="rutaImagen">Imagen</label>
                            <input type="file" class="form-control-file btn-file mt-2" id="chargeImage">
                        </div>
                        <div class="row">
                            <div class="form-group col-4">
                                <label for="cantidadProducto">Cantidad</label>
                                <input name="cantidadProducto" id="cantidadProducto" class="form-control" type="number" placeholder="Cantidad">
                            </div>
                            <div class="form-group col-8">
                                <label for="valorProducto">Valor</label>
                                <input name="valorProducto" id="valorProducto" class="form-control" type="number" placeholder="Valor">
                            </div>
                            <div class="form-group col-8">
                                <button type="submit" name="botonRegistrar" class="btn btn-danger">Agregar Producto</button>
                                <a href="productos.php" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>