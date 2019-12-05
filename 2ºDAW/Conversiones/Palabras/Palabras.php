<?php
$texto=$_POST['texto']??'';


$palabra=explode(' ',$texto);
$palabraAux=$palabra;
for($cont=0;$cont<count($palabra);$cont++){
    $contadorPalabras=0;
    $auxiliares=0;
    for($auxiliares=0;$auxiliares<count($palabra);$auxiliares++){
     if($palabra[$cont]===$palabraAux[$auxiliares]){
        $contadorPalabras++;
    }
    }
    echo $palabra[$cont]."=>".$contadorPalabras."veces"."<br>";
}

//print_r(array_count_values($palabra));
/*EJERCICIO CESAR
 *
 * $patron ='/[a-zñ0-9]+/';
 *
 * preg_match_all($patron,strlower($sentence),$listaPalabras);
 * $cntListaPalabras = arra_count_values($listaPalabras[0]);
 * ksort($cntListaPalabras);
 * return cntListaPalabras;
 *
 * falta el foreach del array para mostrarlo.
 */
?>