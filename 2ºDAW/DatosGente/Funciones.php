<?php

function crearArray(){
    $expresionTlfn="/^[9|6|7][0-9]{8}$/";
   $expresionNom="/a-zA-Z áéíóúÁÉÍÓÚñÑ$/";
    $enviar=$_POST['enviar']??false;
    $datos=[];
    if($enviar){
    $nombre= $_POST['nombre'];
    if(preg_match($expresionNom, $nombre)){
    $apellidos=$_POST['apellidos'];
    if(preg_match($expresionNom, $apellidos)){
    $telefono=$_POST['telefono'];
        if(preg_match($expresionTlfn, $telefono)){

    $correo=$_POST['correo'];
    $curso=$_POST['curso'];
        $registro = [$nombre,$apellidos,$telefono,$correo,$curso];//hacer fuera para comprobar que no vienen vacios
        $datos = [$registro[0] => $registro];

    }else{ echo 'El telefono es incorrecto'; }
        }else{ echo 'El apellido es incorrecto'; }
        }else{ echo 'El nombre es incorrecto'; }
    }
        escribirCSV($datos);

    return $datos;
}

function escribirCSV($data, $delimita = ',', $encierra = '"', $escape = "\\")
{
    $f = fopen('datos.csv', 'a+');
    foreach ($data as $item) {
        fputcsv($f, $item, $delimita, $encierra, $escape);
    }
    fclose($f);
}

function leerCSV( $delimiter = ',', $enclosure = '"', $escape_char = "\\"){
    if (($gestor = fopen("datos.csv", "r")) !== FALSE) {
        $lectura = array();
        while (($data = fgetcsv($gestor, 1000, ",")) !== FALSE) {
            array_push($lectura, $data);
        }
        fclose($gestor);
        return $lectura;
    }
}

function mostrarTabla(){
    for($i=0;$i<3;$i++){
        echo "<button onchange='this.form.submit()'><tr><td>";
        $lectura =  leerCSV();
        foreach ($lectura as $valor){
            echo $valor[0];
        }
        echo "</td></tr></button>";

    }
}
?>