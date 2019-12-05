<?php session_start();?>
<?php

const USER_EDITOR="e";
const USER_CONSULTOR="c";

function comprobarEditor(){
    $seguridad=false;
    if($_SESSION['tipo']===USER_EDITOR){

        $seguridad=true;
        echo "Eres editor" ."<br> ";
    }
    else {
        echo"No eres editor". "<br>";
    }
    return $seguridad;
}

function comprobarSeguridad(){
    $seguridad=false;
    if(($_SESSION['tipo']===USER_EDITOR)|| ($_SESSION['tipo']===USER_CONSULTOR)){
        $seguridad=true;
        echo "Bienvenido"."<br> ";
    }else{
        echo "No tienes permiso para estar aqui." ."<br>";
    }
    return $seguridad;
}

?>