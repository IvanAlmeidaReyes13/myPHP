<?php
$numero=$_POST['numero'];
$operacion=$_POST['operacion'];

switch($operacion){
    case "opuesto":
        echo $numero-=($numero*2);
        break;
    case "inverso":
        echo 1/$numero;
        break;
    case "cuadrado":
       echo $numero**2;
        break;
    case "sqrt":
        echo sqrt($numero);
        break;
    case "sum":
        echo $numero*($numero+1)/2;
        break;
    case "factorial":
        echo $numero*($numero-1);
        break;
}

?>