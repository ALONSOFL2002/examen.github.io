<?php
//Creamos la base de datos, se va a llamar desde todos los controladores.
//Lo que hacemos es que lo vinculamos desde el FrontControler
require_once "modelo/conexionBD.php";
//Colocando acá, podrá ser utilizado por cualquier controlador que se
//llame posteriormente.

//echo "<h1> Index MVC como FrontController</h1>";

//Explicar
//Debemos crear la lógica que llamará a los controladores
//Esto lo hacemos usando el ISSET cuya función es ver si una variable a
//sido declarada y su función no es NULL.

// Realizamos el siguiente condicional como por ejemplo básico de como funcional
/*
if(!isset($_GET['c'])){
    echo "Inicia";
}
else{
    echo $_GET['c'];
}
*/
//Lo que necesitamos es Instanciar un controlador y llamar a
//un método de ese controlador para que nos pase la vista.

if(!isset($_GET['c'])){
    require_once "controlador/inicio.controlador.php";
    $controlador= new inicioControlador();
    call_user_func(array($controlador,"inicio"));
}
else{
    $controlador = $_GET['c'];
    require_once "controlador/$controlador.controlador.php";
    $controlador = ucwords($controlador)."controlador";
    $controlador = new $controlador;
    $accion = isset($_GET['a']) ?$_GET['a']:"inicio";
    call_user_func(array($controlador,$accion));
}
//Por supuesto si no tenemos las clases de los controladores no va a funcionar.
?>