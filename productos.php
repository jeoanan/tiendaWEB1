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

    <?php 

        include("BaseDatos.php");

        $transaccion= new BaseDatos();

        $consultaSQL="SELECT * FROM productos WHERE 1";

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
            <div class="col-12 mt-3">
                <a href="agregarProductos.php" class="btn btn-warning"><strong>AGREGAR +</strong></a>
            </div>
            <?php foreach($productos as $producto):?>
                <form action="modificadorDatos.php?idProducto=<?php echo($producto["idProducto"])?>" method="POST" class="mt-3 ml-3">
                    <div class="card text-white bg-dark mt-3 mb-3" style="max-width: 25rem;">
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
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?php echo($producto["idProducto"])?>">    
                                <strong>EDITAR</strong>
                            </button>
                            <button class="btn btn-danger" type="submit" name="botonEliminar"><strong>ELIMINAR</strong></button>
                        </div>
                    </div>
                
                    <div class="modal fade" id="editModal<?php echo($producto["idProducto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">AGREGAR PRODUCTO</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
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
                        
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label for="cantidadProducto">Cantidad</label>
                                            <input name="cantidadProducto" id="cantidadProducto" class="form-control" type="number" placeholder="Cantidad">
                                        </div>
                                        <div class="form-group col-8">
                                            <label for="valorProducto">Valor</label>
                                            <input name="valorProducto" id="valorProducto" class="form-control" type="number" placeholder="Valor">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="botonEditar" class="btn btn-danger"><strong>EDITAR PRODUCTO</strong></button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><strong>CANCELAR</strong></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            <?php endforeach ?>
        </div>
    </div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>