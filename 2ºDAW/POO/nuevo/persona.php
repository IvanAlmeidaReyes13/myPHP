<?php

class persona{
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $dni;
    private $tipoVia;
    private $direccion;


    function __construct($nombre,$apellido1,$apellido2,$direccion,$dni,$tipoVia){
        $this->nombre=$nombre;
        $this->apellido1=$apellido1;
        $this->apellido2=$apellido2;
        $this->direccion=$direccion;
        $this->dni=$dni;
        $this->tipoVia=$tipoVia;
    }
    function __get($name){
        return $this->values[$name];
    }

    function __set($name, $value){
        $this->values[$name]=$value;
    }
    //INTRODUCIMOS UN ARRAY POR PARÁMETRO, VALIDAMOS QUE CUMPLA LOS CAMPOS, SI VALIDA DEVUELVE EL ARRAY
    function setDatos($datos){
        $datos=func_get_args();
        include "Validaciones/validaciones.php";
        if(validarNombre_Apeliidos($datos[])){$this->nombre=$datos[0];}
        if(validarNombre_Apeliidos(){$this->apellido1=$datos[1]});
        if(validarNombre_Apeliidos()){$this->apellido2=$datos[2];}
        if(validarDNIyNIE()){$this->dni=$datos[3];}
        $this->direccion=$datos[4];
        $this->tipoVia=$datos[5];
        $datosValidados=[$this->__get("nombre"),$this->__get("apellido1"),$this->__get("apellido2"),$this->__get("dni"),$this->__get("tipoVia"),$this->__get("direccion")];
        return $datosValidados;
    }
    //DEVUELVE LOS DATOS EN FORMA DE ARRAY PARA LUEGO SER RECOGIDOS POR LA FUNCION insertarPersonas()
    function getDatos(){
        $datos=[$this->dni,$this->nombre,$this->apellido1,$this->apellido2,$this->tipoVia,$this->direccion];
        return $datos;
    }
}