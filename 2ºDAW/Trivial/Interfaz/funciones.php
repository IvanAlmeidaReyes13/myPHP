<?php

function almacenarPregunta(){

$pregunta=$_POST['pregunta']??"";
$correcta=$_POST['correcta']??"";
$incorrecta1=$_POST['incorrecta1']??"";
$incorrecta2=$_POST['incorrecta2']??"";
$incorrecta3=$_POST['incorrecta3']??"";

if((!$pregunta=="")|| (!$correcta=="")){
$preguntas=[$pregunta,$correcta,$incorrecta1,$incorrecta2,$incorrecta3];
$almacenPreguntas=[$preguntas[0]=>$preguntas];
}
else{
    echo("Pregunta o respuesta correcta vacias, intente de nuevo");
}
return $almacenPreguntas;
}


function guardarCSV($data, $delimita = ',', $encierra = '"', $escape = "\\")
{
    $f = fopen('preguntas.csv', 'a+');
    foreach ($data as $item) {
        fputcsv($f, $item, $delimita, $encierra, $escape);
    }
    fclose($f);
}


function leerCSV( $delimiter = ',', $enclosure = '"', $escape_char = "\\"){
    if (($gestor = fopen("preguntas.csv", "r")) !== FALSE) {
        $lectura = array();
        while (($data = fgetcsv($gestor, 1000, ",")) !== FALSE) {
            array_push($lectura, $data);
        }
        fclose($gestor);
        return $lectura;
    }
}
function almacenarNombres(){

        $puntuacionFinal = $_SESSION['puntuacionFinal']??0;
        $nombre = $_SESSION['nombre'] ?? "Anonimo";
        $nombre = [$nombre, $puntuacionFinal+1000];
        $record = [$nombre[0] => $nombre];
        guardarNombre($record);
        $otros = leerNombre();
        /*foreach ($otros as $item) {
            foreach ($item as $datos) {
                echo $datos;
            }
        }*/

}
function guardarNombre($data, $delimita = ',', $encierra = '"', $escape = "\\")
{
    $f = fopen('record.csv', 'a+');
    foreach ($data as $item) {
        fputcsv($f, $item, $delimita, $encierra, $escape);
    }
    fclose($f);
}


function leerNombre( $delimiter = ',', $enclosure = '"', $escape_char = "\\"){
    if (($gestor = fopen("record.csv", "r")) !== FALSE) {
        $lectura = array();
        while (($data = fgetcsv($gestor, 1000, ",")) !== FALSE) {
            array_push($lectura, $data);
        }
        fclose($gestor);
        return $lectura;
    }
}
function comprobarRespuesta($lectura,$ronda,$puntuacion){
    $respuesta = $_POST['respuesta'] ?? "";
    $fin=false;
    if ($respuesta != "") {


        if ($lectura[$ronda][$respuesta] == $lectura[$ronda][1]) {
            $puntuacion++;

            $fin=false;
            $respuesta = "";
            $_SESSION['puntuacion'] = $puntuacion;

        } else {

            $fin=true;
            $puntuacionFinal=((pow(2, $_SESSION["puntuacion"])-1)*10); //calculamos los puntos obenidos
            $_SESSION["puntuacionFinal"]=$puntuacionFinal;
            almacenarNombres();
        }
//sacar la comprobacion de la respuesta en una funcion en la de funciones para poder comprobarlo
    }
    return $fin;
}
?>