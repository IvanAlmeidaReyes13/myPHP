<?php
$miArray=array ("1" => $_POST['primero'],"2" => $_POST['segundo'],"3" => $_POST['tercero'],"4" => $_POST['cuarto'],"5" => $_POST['quinto']);
foreach ($miArray as $value){
    echo $value;
}
for ($i=1;$i<5;$i++){
    array_walk($miArray, 'dividir');
}
foreach ($miArray as $clave=>$value) {
    echo $value."<br>";
}
function dividir($var){
    $var=$var/2;

}
?>