<?php
include_once ("Personas.php");

class bbdd{

    private const HOST="localhost";
    private const US="root";
    private const PW="";
    private const BBDD="poo";
    var $conexion;


function __construct(){
    $this->conexion=new mysqli();
    $this->conexion->connect(self::HOST,self::US,self::PW,self::BBDD);
}

/*getTiposdeVias seria igual para
 todo lo demas solo que cambiando la consulta*/
public function getTiposVias(){
    $ret=null;
    $sql="select *from tipovia";
    $result=$this->bbdd->query($sql);
    while($row =$result->fetch_assoc())
        $ret[]=$row;
    return $ret;

}
    public function rellenarDatosBBDD($arrayDatos){

        $ret=null;
        $sql="INSERT INTO datos(DNI, nombre, apellido1, apellido2, direccion, tipoVia) VALUES ($arrayDatos[0],'$arrayDatos[1]','$arrayDatos[2]','$arrayDatos[3]','$arrayDatos[4]',$arrayDatos[5])";
        $result=$this->conexion->query($sql);



    }
function __destruct()
{
   $this->conexion->close();
}
}
