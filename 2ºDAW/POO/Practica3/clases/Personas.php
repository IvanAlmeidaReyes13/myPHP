<?php


class Personas{

    var $DNI;

    var $nombre;

    var $apellido1;

    var $apellido2;

    var $direccion;

    var $tipoVia;

public function __construct(/*$nombre,$apellido1,$apellido2,$direccion*/)
{

}

function crearDatos(){

        //Formulario para pedir los campos


$enviar=$_POST['enviar']??false;
    if($enviar){
        $this->DNI=$_POST['DNI']??"";

        $this->nombre=$_POST['nombre']??"";

        $this->apellido1=$_POST['apellido1']??"";

        $this->apellido2=$_POST['apellido2']??"";

        $this->direccion=$_POST['direccion']??"";

        $this->tipoVia=$_POST['tipoVia']??"";


             }
    }

    function devolverDatos(){
    $datos=[$this->DNI,$this->nombre,$this->apellido1,$this->apellido2,$this->direccion,$this->tipoVia];
    return $datos;
    }
}
?>