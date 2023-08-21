<?php
class conexionBD{
    const server="localhost";
    const userdb="root";
    const passdb="";
    const namebd="examenfinal";
    //mvccotidiano
        //Creamos la función conectar de manera estática para no necesitar instanciar.
        //Recordamos que al hacerlo de esta manera se utiliza la palabra reservada self.
        //En vez de this para llamar un atributo de la misma clase
    public static function Conectar(){
        //Debemos cambiar conexionBD por PDO es la palabra reservada que significa
        //PHP Data Objects, objetos de Datos PHP,
        //una extension para acceder a la base de datos
        try{
            $conexion = new PDO("mysql:host=".self::server.";dbname=".self::namebd.
            ";charset=utf8",self::userdb,self::passdb);

            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conexion;
        }
        catch(PDOException $e){
            return "Falló la conexión".$e->getMessage();
        }
    }
}
?>