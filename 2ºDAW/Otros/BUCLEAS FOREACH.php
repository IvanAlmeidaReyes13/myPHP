<?php

$miarray['España']="Madrid";
$miarray['Francia']="Paris";
$miarray['Alemania']="Berlin";
foreach ($miarray as $item=>$value){
    echo"{$item}=>{$value}";
    echo "<br>";
}
foreach($miarray as &$value){
    echo $value/*. "<br>"*/;   //CON ESTE BR AHI NO ME SIGUE LA SENTENCIA.
    echo"<br>";
}
?>