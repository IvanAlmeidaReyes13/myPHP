<?php
$txt=$_POST['txt']??"";
$buscar=$_POST['buscar']??"";
$remplazar=$_POST['remplazar']??"";
$palabras = explode(" ", $txt);
$enviar=$_POST['enviar']??false;
if($enviar) {

    foreach ($palabras as $valor) {
        switch ($valor) {
            case $buscar:
                $valor = " " . $remplazar . " ";
                break;
            default:
                $valor = " " . $valor . " ";
        }
        echo $valor;
    }
}
else{
    foreach ($palabras as $valor){
        echo " ". $valor. " ";
    }
}
?>