
<?php

//pagina principal (de bienvenida)

unset($_SESSION['nombre']); //Si volvemos a esta pantalla se considera una partida nueva por lo que el nombre sera borrado
include ("funciones.php");
$records=leerNombre(); // leemos el fichero de records(que son las puntuaciones) para sacar la tabla
?>
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
<body>
WELCOME
<table align="center">

    <tr>
        <td>Jugador</td>
        <td>Puntuacion</td>
    </tr>

    <?php
    if(count($records)>0) { //aqui comenzamos a sacar los valores de record solo si es mayor que 0, es decir, no esta vacio
        foreach ($records as $value => $fila) {
            $nombres[$value] = $fila[0]; // columna de nombres
            $puntuacion[$value] = intval($fila[1]); //columna de puntos
        }
        array_multisort($puntuacion, SORT_DESC, $records); //ordenando el fichero segun la puntuacion con arra_multisort(descendente)
        for ($i=0;$i<5;$i++){
            if (isset($records[$i][0]))
                echo "<tr><td>".$records[$i][0]."</td><td>".$records[$i][1]." </td></tr>"; //imprimiendo los records
        }
    }
    ?>
</table>
<form action="../Index.php" method="post">
    <button type="submit" name="pagina" value="2">Editar</button>
    <button type="submit" name="pagina" value="3">Jugar</button>
</form>
</body>