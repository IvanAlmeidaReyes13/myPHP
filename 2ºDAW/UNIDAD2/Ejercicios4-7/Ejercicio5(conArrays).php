<table border="1">
    <tr>
        <td align='center'>
            <b>Variable</b>
        </td>

        <td align='center'>
            <b>Valor</b>
        </td>

        <td align='center' >
            <b>Tipo</b>
        </td>



    </tr>
<?php
$tipo;
$misDatos=array("Juan", "perro","C.Jardin Botanico," ,28014,"Madrid","Madrid"); //creacion de los datos que contendran las variables
$misVariables=array("nombre", "apellido","direccion", "codPostal", "localidad","provincia"); // estos seran los nombre de las variables que iran relacionados con su valor

for($i=0;$i<count($misVariables);$i++){ // en este for lo que se hace es que se ira repitiendo y aumentando en uno la variable i hasta que i deje de ser menor que el tamaño del array de las variables

    $tipo=gettype($misDatos[$i]); //se le asigna a tipo el tipo de dato que es el dato de la varible que se va a nombrar en esta vuelta del bucle
    echo"<tr>
        <td>
           $misVariables[$i]
        </td>
        <td>
            $misDatos[$i]
        </td>
        <td>
           $tipo
        </td>
    </tr>";
}


?>

</table>
