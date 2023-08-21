<?php
require_once "modelo/login.php";
class LoginControlador {
    private $modelo;

    public function __construct(){
        $this->modelo = new Login;
    }

    public function Inicio(){
        require_once "vista/encabezado.php";
        require_once "vista/crudLogin/login.php";
    }

    public function formlogin(){
        $accionCrud = "Insertar";
        require_once "vista/encabezado.php";
        require_once "vista/crudLogin/login.php";
    }

    public function login(){
        session_start();

        $username = $_POST['username'];
        $contra = $_POST['contra'];

        // Realizar la validación del usuario y contraseña en tu base de datos
        // Implementa tu propia lógica de verificación aquí
        if ($username === "username" && $contra === "contra") {
            $_SESSION['loggedin'] = true;
            header("location: ?c=Login&a=Inicio"); // Redirigir a la página principal
        } else {
            echo "Inicio de sesión fallido. <a href='index.php'>Volver</a>";
        }
    }

    public function Guardar(){
        $Login = new Login();
        $Login->setcar_username($_POST['username']);
        $Login->setcar_contra($_POST['contra']);

        $this->modelo->Insertar($Login);

        header("location: ?c=Login");
    }

    public function logout() {
        session_start();
        session_destroy();
        header("location: ?c=Login&a=login");
    }
}
?>
