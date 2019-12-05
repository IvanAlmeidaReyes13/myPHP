<?php
$txt=$_POST['txt']??"";
$palabras=explode(" ",$txt);
foreach ($palabras as $valor){
    switch ($valor){
        case "adios":
            $valor=" a2 ";
            break;
        case "adios":
            $valor=" a2 ";
            break;
        case "besos":
            $valor=" bs ";
            break;
        case "donde":
            $valor=" dnd ";
            break;
        case "fin de semana":
            $valor=" finde ";
            break;
        case "instituto":
            $valor=" insti ";
            break;
        case "mensaje":
            $valor=" msj ";
            break;
        case "por favor":
            $valor=" pls ";
            break;
        case "porque":
            $valor=" pq ";
            break;
        case "que":
            $valor=" q ";
            break;
        case "tambien":
            $valor=" tb ";
            break;
        case "por":
            $valor=" x ";
            break;
        case "para":
            $valor=" xa ";
            break;
        default:
            $valor=" ". $valor." ";
    }
    echo $valor;
}
?>