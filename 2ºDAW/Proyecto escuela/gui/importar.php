<?php session_start(); ?>
<?php include ("../lib/funciones.php"); ?>
<?php
if (comprobarEditor()) {
    ?>
    <form method="post"  enctype="multipart/form-data">
        <input type="file" name="ficheroA" />
        <button type="submit" name="importar" value="true">Importar CSV</button>
    </form>
    <?php

    if (isset($_POST["importar"])) {
        @$cnn=mysqli_connect(HOST, US,PW, BBDD);
        $f=fopen($_FILES["ficheroA"]["tmp_name"], "r");
        if ($cnn && $f) {
            fgetcsv($f); //lee primera línea, que no nos interesa
            while ($row=fgetcsv($f)) { //bucle linea 2 hasta el final
                $sql="INSERT INTO alumnos VALUES $row[0], $row[1], $row[2]"; //inserta una fila
                echo ($sql);
                //mysqli_query($cnn, $sql);
            }
        }
        mysqli_close($cnn);
    }
} else {
    echo ("No tienes acceso a importar CSV");
}
?>
