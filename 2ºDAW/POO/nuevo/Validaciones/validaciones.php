<?php

function validarNombre_Apeliidos($valor){
    $patron = '/[a-zA-ZñÑáíúéóÁÍÚÉÓ]+\s?[a-zA-ZñÑáíúéóÁÍÚÉÓ]+$/';

    if (preg_match($patron, $valor) === 1) {
        $valido = true;
    } else {
        $valido = false;
    }
    return $valido;
}

function validarDNIyNIE($valor){
    $patron = '/^[XYZ]?([0-9]{7,8})([A-Za-z])';
    if (preg_match($patron, $valor) === 1) {
        $valido = true;
    } else {
        $valido = false;
    }
    return $valido;
}


?>

