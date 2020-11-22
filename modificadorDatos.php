<?php

    include("BaseDatos.php");

    if(isset($_POST["botonRegistrar"])){
        $nombreProducto = $_POST["nombreProducto"];
        $tipoProducto=$_POST["tipoProducto"];
        $serieProducto=$_POST["serieProducto"];
        $descripcionProducto=$_POST["descripcionProducto"];
        $rutaImagen="";
        $cantidadProducto=$_POST["cantidadProducto"];
        $valorProducto =$_POST["valorProducto"];

        $transaccion=new BaseDatos();

        $consultaSQL="INSERT INTO productos(nombreProducto,tipoProducto,serieProducto,descripcionProducto,rutaImagen,cantidadProducto,valorProducto) VALUES ('$nombreProducto','$tipoProducto','$serieProducto','$descripcionProducto', '$rutaImagen','$cantidadProducto','$valorProducto')";
        
        $transaccion->agregarDatos($consultaSQL);

        header("location:index.php");
    }


