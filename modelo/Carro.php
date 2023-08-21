<?php

class Carro{

    private $pdo;
    private $car_cedula;
    private $car_nombre;
    private $car_ap1;
    private $car_ap2;
    private $car_fecha;
    private $car_cantidad;

    public function __construct(){
        $this->pdo = conexionBD::Conectar();
    }

  

    public function getcar_cedula() : ?string{
        return $this->car_cedula;
    }

    public function setcar_cedula(string $cedula){
         $this->car_cedula=$cedula;
    }

    public function getcar_nombre() : ?string{
        return $this->car_nombre;
    }

    public function setcar_nombre(string $nombre){
        $this->car_nombre=$nombre;
    }

    public function getcar_ap1() : ?string{
        return $this->car_ap1;
    }

    public function setcar_ap1(string $ap1){
         $this->car_ap1=$ap1;
    }

    public function getcar_ap2() : ?string{
        return $this->car_ap2;
    }

    public function setcar_ap2(string $ap2){
        $this->car_ap2=$ap2;
    }

    public function getcar_fecha() : ?string{
        return $this -> car_fecha;
    }

    public function setcar_fecha(string $fecha){
        $fechaCastigo = new DateTime($fecha);
        $fechaFormateada = $fechaCastigo->format('Y-m-d');
        $this->car_fecha = $fechaFormateada;
    }

    public function getcar_cantidad() : ?string{
        return $this->car_cantidad;
    }

    public function setcar_cantidad(string $cantidad){
        $this->car_cantidad=$cantidad;
    }
    
    


//ACTUALIZAR
    public function Actualizar(Carro $p){
        try{

            $consulta="UPDATE tiquete SET
            nombre=?,
            ap1=?,
            ap2=?,
            fecha=?,
            cantidad=?
            WHERE cedula=?;";
            $this->pdo->prepare($consulta)
            ->execute(array(
                $p->getcar_nombre(), 
                $p->getcar_ap1(), 
                $p->getcar_ap2(),
                $p->getcar_fecha(), 
                $p->getcar_cantidad(), 
                $p->getcar_cedula()
                /*Al agregar los datos al array hay que enviarlos en el mismo orden que se ocupan*/
            ));
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM tiquete;');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Insertar(Carro $p){
        try{
            $consulta="INSERT INTO tiquete(cedula,nombre,ap1,ap2,fecha,cantidad)
        VALUES (?,?,?,?,?,?);";
        $this->pdo->prepare($consulta)
        ->execute(array(
            $p->getcar_cedula(),
            $p->getcar_nombre(),
            $p->getcar_ap1(),
            $p->getcar_ap2(),
            $p->getcar_fecha(),
            $p->getcar_cantidad()
        ));
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function CargarDatosxID($id){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM tiquete WHERE cedula=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            //INSTANCIAMOS UN NUEVO OBJETO DE LA CLASE carro

                $car=new Carro();
                $car->setcar_cedula($r->cedula);
                $car->setcar_nombre($r->nombre);
                $car->setcar_ap1($r->ap1);
                $car->setcar_ap2($r->ap2);
                $car->setcar_fecha($r->fecha);
                $car->setcar_cantidad($r->cantidad);

            return $car;
        }
        catch (Exception $e){
            die($e->getMessage());
        }
    }
//ELIMINAR PERO ME LO BORRA TOTALMENTE DE LA BASE DE DATOS
//TIENE QUE APARECER ACTIVO O INACTIVO
    public function Eliminar($id){
        try{
            $consulta="DELETE FROM tiquete WHERE cedula=?;";
            $this->pdo->prepare($consulta)
            ->execute(array($id));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}