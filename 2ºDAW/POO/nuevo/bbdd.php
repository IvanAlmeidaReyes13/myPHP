<?php


class bbdd{
    private const BBDD="poo";
    private const HOST="localhost";
    private const US="root";
    private const PW="";
    private const TABLA="tipovias";

    private $conexion;

    public function __construct(){
        $this->conexion= new mysqli();
        try{
            $this->conexion->connect(self::HOST,self::US,self::PW,self::BBDD);
            if($this->conexion->connect_errno){
                echo "Error".$this->conexion->connect_errno;
            }
            $this->conexion->query("SET NAMES utf8" );
        }
        catch (mysqli_sql_exception $exception){
            throw $exception;
        }
    }
    //FUNCION QUE NOS DEVUELVE UN SELECT CON LOS DATOS QUE CONTIENES LA TABLA TIPOSVIAS DE LA BBDD
    public function datosTipoVias(){
        $consulta="SELECT * FROM ".self::TABLA;
        $resultado=$this->conexion->query($consulta);
        while ($row= $resultado->fetch_assoc()){
            $datos[]=$row;
        }
        return $datos;
    }
    public function mostrar(){
        $consulta="SELECT dni FROM  personas";
        $resultado=$this->conexion->query($consulta);

        return $resultado;
    }
    public function buscar($dni){
        $consulta="SELECT Dni, Nombre, ap1, ap2, tipovia, direccion FROM personas WHERE dni= $dni";
        echo $consulta;
        $resultado=$this->conexion->query($consulta);
return $resultado;
    }


    //RECOGE UN ARRAY,
    public function insertarPersonas($datos){
        $consulta="INSERT INTO personas(Dni, Nombre, ap1, ap2, tipovia, direccion) VALUES ($datos[3],'$datos[0]', '$datos[1]', '$datos[2]', $datos[5], '$datos[4]')";

        $this->conexion->query($consulta);
    }

    public function __destruct(){
        $this->conexion->close();
    }
}
?>
