<?php

    include("BaseDatos.php");
    
    $transaccion=new BaseDatos();

    $idProducto=$_GET["idProducto"];
    
    if(isset($_POST["botonRegistrar"])){
        $nombreProducto = $_POST["nombreProducto"];
        $tipoProducto=$_POST["tipoProducto"];
        $serieProducto=$_POST["serieProducto"];
        $descripcionProducto=$_POST["descripcionProducto"];
        $rutaImagen="";
        $cantidadProducto=$_POST["cantidadProducto"];
        $valorProducto =$_POST["valorProducto"];


        $consultaSQL="INSERT INTO productos(nombreProducto,tipoProducto,serieProducto,descripcionProducto,rutaImagen,cantidadProducto,valorProducto) VALUES ('$nombreProducto','$tipoProducto','$serieProducto','$descripcionProducto', '$rutaImagen','$cantidadProducto','$valorProducto')";
        
        $transaccion->agregarDatos($consultaSQL);

        header("location:productos.php");
    }

    else if(isset($_POST["botonEliminar"])){
        
        $consultaSQL="DELETE FROM productos WHERE idProducto='$idProducto'";

        $transaccion->eliminarDatos($consultaSQL);       
    }

    else if(isset($_POST["botonEditar"])){
        $nombreProducto = $_POST["nombreProducto"];
        $tipoProducto=$_POST["tipoProducto"];
        $serieProducto=$_POST["serieProducto"];
        $descripcionProducto=$_POST["descripcionProducto"];
        $cantidadProducto=$_POST["cantidadProducto"];
        $valorProducto =$_POST["valorProducto"];

        $consultaSQL="UPDATE productos SET nombreProducto='$nombreProducto',tipoProducto='$tipoProducto',serieProducto='$serieProducto',descripcionProducto='$descripcionProducto',cantidadProducto='$cantidadProducto',valorProducto='$valorProducto' WHERE idProducto='$idProducto'";

        $transaccion->editarDatos($consultaSQL);

        header("location:productos.php");
    }
