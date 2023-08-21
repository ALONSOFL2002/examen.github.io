<?php

class inicioControlador{
    public function __construct(){
        //this->modelo= new Produscto();
    }

    public function Inicio(){
        //echo "Este es el controlador de Inicio";
        $bd=conexionBD::Conectar();

        //Ahora creamos la vista que queremos devolver

        require_once "vista/inicio/principal.php";

        require_once "vista/pie.php";
        
    }
}