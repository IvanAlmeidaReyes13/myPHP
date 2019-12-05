<?php
$barcelona = array ( "Barcelona" => "-", "Coruña" => "1188", "Madrid" => "621" , "Sevilla" => "1046");
$coruña = array ( "Barcelona" => "1188", "Coruña" => "-", "Madrid" => "609" , "Sevilla" => "947");
$madrid = array ( "Barcelona" => "621", "Coruña" => "609", "Madrid" => "-" , "Sevilla" => "538");
$sevilla = array ( "Barcelona" => "1046", "Coruña" => "947", "Madrid" => "538" , "Sevilla" => "-");
$resultados = array (
    "Barcelona" => $barcelona,
    "Coruña" => $coruña,
    "Madrid" => $madrid,
    "Sevilla" => $sevilla
);

$destino=$_POST['destino']??"";
$salida=$_POST['salida']??"";
$res = $resultados[$salida][$destino];

echo "La distancia es de: ".$res."km";
?>