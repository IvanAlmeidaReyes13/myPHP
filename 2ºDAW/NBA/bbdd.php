<?php

class bbdd{

    private const HOST="localhost";
    private const US="root";
    private const PW="";
    private const BBDD="nba";
    var $conexion;


    function __construct(){
        $this->conexion=new mysqli();
        $this->conexion->connect(self::HOST,self::US,self::PW,self::BBDD);
    }


    public function getConferencias()
    {
        if (mysqli_connect_errno()) {
            echo "no contectado";
        }

        $consulta="SELECT distinct Conferencia FROM equipos" ;
        $resultado=$this->conexion->query($consulta);
        while ($row= $resultado->fetch_row()){
            $datos[]=$row;
        }
        foreach($datos as $value){
            foreach ($value as $item){
                echo "<option value='$item'>".$item."</option>";
            };
        };


    }

    function __destruct()
    {
        $this->conexion->close();
    }
}