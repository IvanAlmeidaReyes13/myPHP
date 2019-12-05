<?php
$salir=false;
if(empty($_POST["valor1"])){
    echo "error la cadena esta vacia";
} else {


    $valor1 = $_POST["valor1"];  //is_numeric(); para validar
    $valor2 = $_POST["valor2"];
    $operador = $_POST["operador"];
    // $salir>=($valor1=['0-9'] && $valor2=['0-9'] && $operador=['+|*|-|/|%']?'false':'true');


    $resultado = 0;

    $resultado = $valor1 + $operador + $valor2;//operar($valor1,$valor2,$operador);

    echo $valor1 . $operador . $valor2 . "=" . $resultado;

    /*function operar($var1,$var2,$opera){
        $total=0;
        switch ($opera){
            case "+":
                $total=$var1+$var2;
                break;
            case "-":
                $total=$var1-$var2;
                break;
            case "*":
                $total=$var1*$var2;
                break;
            case "/":
                $total=$var1/$var2;
                break;
            case "%":
                $total=$var1%$var2;
                break;
        }
        return $total;
    }*/
}
?>