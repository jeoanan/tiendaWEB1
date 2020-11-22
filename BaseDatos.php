<?php

class BaseDatos {
    public $usuarioBD="root";
    public $password="";

    public function __construct(){

    }

    public function conectarBD(){
        try{
            $infoDB="mysql:host=localhost;dbname=tiendaweb";
            $conexionBD=new PDO($infoDB,$this->usuarioBD,$this->password);
            return($conexionBD);
        }
        catch(PDOException $error){
            echo($error->getMessage());
        }
    }

    public function agregarDatos($consultaSQL){
        $conexionBD=$this->conectarBD();
        
        $insertarDatos=$conexionBD->prepare($consultaSQL);
        
        $resultado=$insertarDatos->execute();

        if($resultado){
            echo("Registro agregado con exito");
        }
        else{
            echo("Error agregando el registro");
        }
    }

    public function consultarDatos($consultaSQL){
        $conexionBD=$this->conectarBD();

        $buscarDatos=$conexionBD->prepare($consultaSQL);

        $buscarDatos->setFetchMode(PDO::FETCH_ASSOC);

        $buscarDatos->execute();

        return($buscarDatos->fetchAll());

    }
}