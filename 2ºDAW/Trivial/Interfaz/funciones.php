<?php

function almacenarPregunta(){ //reocgemos los valores de las preguntas y las respuestas enviadas y lo guardamos en un array
    //es posible que una pregunta se

$pregunta=$_POST['pregunta']??"";
$correcta=$_POST['correcta']??"";
$incorrecta1=$_POST['incorrecta1']??"";
$incorrecta2=$_POST['incorrecta2']??"";
$incorrecta3=$_POST['incorrecta3']??"";

if((!$pregunta=="")|| (!$correcta=="")){// asegurandonos de que lo minimo (pregunta y respuesta correcta) ha sido añadido
$preguntas=[$pregunta,$correcta,$incorrecta1,$incorrecta2,$incorrecta3];
$almacenPreguntas=[$preguntas[0]=>$preguntas];
}
else{
    echo("Pregunta o respuesta correcta vacias, intente de nuevo");
}
return $almacenPreguntas;
}


function guardarCSV($data, $delimita = ',', $encierra = '"', $escape = "\\") //guardando los datos en un archivo csv
{
    $f = fopen('preguntas.csv', 'a+');
    foreach ($data as $item) {
        fputcsv($f, $item, $delimita, $encierra, $escape);
    }
    fclose($f);
}


function leerCSV( $delimiter = ',', $enclosure = '"', $escape_char = "\\"){ //leyendo los datos de un archivo csv
    if(file_exists("preguntas.csv")) {
        if (($gestor = fopen("preguntas.csv", "r")) !== FALSE) {
            $lectura = array();
            while (($data = fgetcsv($gestor, 1000, ",")) !== FALSE) {
                array_push($lectura, $data);
            }
            fclose($gestor);
            return $lectura;
        }
    }else {
        echo "Archivo inexistente";
    }
}
function almacenarNombres(){ //almacenando los nombres(igual que las preguntas pero con los nombres)

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
function guardarNombre($data, $delimita = ',', $encierra = '"', $escape = "\\") //guardando los nombres en un csv
{
    $f = fopen('record.csv', 'a+');
    foreach ($data as $item) {
        fputcsv($f, $item, $delimita, $encierra, $escape);
    }
    fclose($f);
}


function leerNombre( $delimiter = ',', $enclosure = '"', $escape_char = "\\"){ //leyendo los nombres de un csv
    if(file_exists("record.csv")) {
        if (($gestor = fopen("record.csv", "r")) !== FALSE) {
            $lectura = array();
            while (($data = fgetcsv($gestor, 1000, ",")) !== FALSE) {
                array_push($lectura, $data);
            }
            fclose($gestor);
            return $lectura;
        }
    }else {
        echo "Archivo inexistente";
    }
}
function comprobarRespuesta($lectura,$ronda,$puntuacion){ //comprobacion de la respuesta si es la correcta para copntinuar o no con el juego
    //en caso de ser una respuesta fallida el juego acaba y se almacena la puntuacion y el nombre en el archivo csv correspondiente
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


