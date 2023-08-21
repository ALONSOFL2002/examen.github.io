<?php

class Login{

    private $pdo;
    private $username;
    private $contra;

    public function __construct(){
        $this->pdo = conexionBD::Conectar();
    }

    public function getcar_username() : ?string{
        return $this->username;
    }

    public function setcar_username(string $username){
        $this->username = $username;
    }

    public function getcar_contra() : ?string{
        return $this->contra;
    }

    public function setcar_contra(string $contra){
        $this->contra = $contra;
    }

    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM inicio;');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Insertar(Login $p){
        try{
            $consulta="INSERT INTO inicio(contra,username)
        VALUES (?,?);";
        $this->pdo->prepare($consulta)
        ->execute(array(
            $p->getcar_username(),
            $p->getcar_contra(),
        ));
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function login($username, $contra) {

        return $this->username === $username && $this->contra === $contra;
    }

}
