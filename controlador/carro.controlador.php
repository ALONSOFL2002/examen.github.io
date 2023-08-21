<?php
require_once "modelo/Carro.php";

class CarroControlador {
    private $modelo;

    public function __construct(){
        $this->modelo = new Carro;
    }

    public function Inicio(){
        require_once "vista/encabezado.php";
        require_once "vista/CrudCarros/listar.php";
        //require_once "vista/inicio/bmw.php";
    }

    public function formCarroCrear(){
        $accionCrud = "Insertar";
        require_once "vista/encabezado.php";
        require_once "vista/CrudCarros/formCarroCrear.php";
    }

    // ACTUALIZAR
    public function formCarroActualizar(){
        $accionCrud = "Actualizar";
        $Carro = new Carro();
        if(isset($_GET['id'])){
            $Carro = $this->modelo->CargarDatosxID($_GET['id']); 
        }

        require_once "vista/encabezado.php";
        require_once "vista/CrudCarros/formCarroActualizar.php";
    }

    public function Guardar(){
        $Carro = new Carro();
        $Carro->setcar_cedula($_POST['cedula']);
        $Carro->setcar_nombre($_POST['nombre']);
        $Carro->setcar_ap1($_POST['ap1']);
        $Carro->setcar_ap2($_POST['ap2']);
        $Carro->setcar_fecha($_POST['fecha']);
        $Carro->setcar_cantidad($_POST['cantidad']);

        $this->modelo->Insertar($Carro);

        header("location: ?c=Carro");
    }

    public function Actualizar(){
        $Carro = new Carro(); 
        $Carro->setcar_cedula($_POST['cedula']);
        $Carro->setcar_nombre($_POST['nombre']);
        $Carro->setcar_ap1($_POST['ap1']);
        $Carro->setcar_ap2($_POST['ap2']);
        $Carro->setcar_fecha($_POST['fecha']);
        $Carro->setcar_cantidad($_POST['cantidad']);

        $this->modelo->Actualizar($Carro);

        header("location: ?c=Carro");
    }

    public function Borrar(){
        $this->modelo->Eliminar($_GET["id"]);
        header("location:?c=Carro");
    }
}
