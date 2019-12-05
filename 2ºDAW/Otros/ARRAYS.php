<?php

/*$miarray=range('a','z',4);

foreach($miarray as $item=>&$value){
    echo $item,$value. "<br>";

}
*/
//$miarray['España','Francia','Italia']='Madrid','paris','Roma';
/*$miarray['España']='Madrid';
foreach($miarray as $item=>&$value) {
    echo $item. "=>" .$value . "<br>";
}
*/



/*$miArrayDeArrays=array(
    array("Julio","pepe,can"),
    array("Capitan","portero"),
    array("nose","queponer")
);

foreach($miArrayDeArrays as $equipo){
    echo "Dentro del equipo: " ;
        foreach ($equipo as $jugador){
            echo "el jugador ". $jugador." "."<br>";
        }
}*/
$azu = array ( "Azuqueca" => "-", "Jadraque" => "2-0", "Horche" => "2-1");
$jad = array ( "Azuqueca" => "0-3", "Jadraque" => "-", "Horche" => "2-2");
$hor = array ( "Azuqueca" => "0-1", "Jadraque" => "1-0", "Horche" => "-");
$resultados = array (
    "Azuqueca" => $azu,
    "Jadraque" => $jad,
    "Horche" => $hor
);

$res = $resultados['Azuqueca']['Horche'];

echo $res;

?>