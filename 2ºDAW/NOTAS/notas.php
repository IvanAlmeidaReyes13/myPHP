<?php
/*ABRIR Y CERRAR BBDD*/


const HOST="localhost";
const US="root";
const PW="";
const BBDD="nba";//EL NOMBRE DE LA BBDD A CONECTAR


@$cnn = mysqli_connect(HOST, US, PW, BBDD); //CON ESTO NOS CONECTAMOS A LA BBDD
if ($cnn) {
    $sql = "";
//AQUI HACEMOS LA CONSULTA
    $rest = mysqli_query($cnn, $sql); //SI LA CONSULTA Y EL CNN SON CORRECTOS SE ALMACENA EL RESULTADO DE LA CONSULTA EN REST

    while ($row = mysqli_fetch_assoc($rest)) {//fetch assoc retorna un array asociativo(columna resultado)
        foreach ($row as $value) {
            echo $value . "<br>"; //se imprime el array
        }
    }

    mysqli_close($cnn);

}

//guardar en un csv y almacena lo que pases como data(en este modo escribe al final
function guardarCSV($data, $delimita = ',', $encierra = '"', $escape = "\\")
{
    $f = fopen('preguntas.csv', 'a+');
    foreach ($data as $item) {
        fputcsv($f, $item, $delimita, $encierra, $escape);
    }
    fclose($f);
//leer el csv
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





    //modos del fopen:
    /*'r' 	Apertura para sólo lectura; coloca el puntero al fichero al principio del fichero.
'r+' 	Apertura para lectura y escritura; coloca el puntero al fichero al principio del fichero.
'w' 	Apertura para sólo escritura; coloca el puntero al fichero al principio del fichero y trunca el fichero a longitud cero. Si el fichero no existe se intenta crear.
'w+' 	Apertura para lectura y escritura; coloca el puntero al fichero al principio del fichero y trunca el fichero a longitud cero. Si el fichero no existe se intenta crear.
'a' 	Apertura para sólo escritura; coloca el puntero del fichero al final del mismo. Si el fichero no existe, se intenta crear. En este modo, fseek() solamente afecta a la posición de lectura; las lecturas siempre son pospuestas.
'a+' 	Apertura para lectura y escritura; coloca el puntero del fichero al final del mismo. Si el fichero no existe, se intenta crear. En este modo, fseek() no tiene efecto, las escrituras siempre son pospuestas.
'x' 	Creación y apertura para sólo escritura; coloca el puntero del fichero al principio del mismo. Si el fichero ya existe, la llamada a fopen() fallará devolviendo FALSE y generando un error de nivel E_WARNING. Si el fichero no existe se intenta crear. Esto es equivalente a especificar las banderas O_EXCL|O_CREAT para la llamada al sistema de open(2) subyacente.
'x+' 	Creación y apertura para lectura y escritura; de otro modo tiene el mismo comportamiento que 'x'.
'c' 	Abrir el fichero para sólo escritura. Si el fichero no existe, se crea. Si existe no es truncado (a diferencia de 'w'), ni la llamada a esta función falla (como en el caso con 'x'). El puntero al fichero se posiciona en el principio del fichero. Esto puede ser útil si se desea obtener un bloqueo asistido (véase flock()) antes de intentar modificar el fichero, ya que al usar 'w' se podría truncar el fichero antes de haber obtenido el bloqueo (si se desea truncar el fichero, se puede usar ftruncate() después de solicitar el bloqueo).
'c+' 	Abrir el fichero para lectura y escritura; de otro modo tiene el mismo comportamiento que 'c'.
'e' 	Establecer la bandera 'close-on-exec' en el descriptor de fichero abierto. Disponible solamente en PHP compilado en sistemas que se ajustan a POSIX.1-2008. */
}




//ORDENAR ARRAY MULTIDIMENSIONAL

$ar = array(
    array("10", 11, 100, 100, "a"),
    array(   1,  2, "2",   3,   1)
);
array_multisort($ar[0], SORT_NUMERIC, SORT_DESC,
    $ar[1], SORT_NUMERIC, SORT_DESC);
var_dump($ar);

/*
    SORT_REGULAR - compara los elementos normalmente (no cambia los tipos)
    SORT_NUMERIC - compara los elementos numéricamente
    SORT_STRING - compara los elementos como strings
    SORT_LOCALE_STRING - compara los elementos como strings, basándose en la configuración regional en uso. Utiliza la configuración regional, la cual se puede cambiar usando setlocale()
    SORT_NATURAL - compara los elementos como strings usando un "orden natural" como natsort()
    SORT_FLAG_CASE - puede ser combinado (OR a nivel de bits) con SORT_STRING o SORT_NATURAL para ordenar strings sin considerar mayúsculas/minúsculas
*/

?>