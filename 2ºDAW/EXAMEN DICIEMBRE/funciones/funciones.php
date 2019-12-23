
<?php

const USER_USER="uu";
const USER_ADMIN="aa";

function comprobarEditor(){
    $seguridad=false;
    if($_SESSION['tipo']===USER_USER){

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
    if(($_SESSION['tipo']===USER_USER)|| ($_SESSION['tipo']===USER_ADMIN)){
        $seguridad=true;
        echo "Bienvenido"."<br> ";
    }else{
        echo "No tienes permiso para estar aqui." ."<br>";
    }
    return $seguridad;
}

?>