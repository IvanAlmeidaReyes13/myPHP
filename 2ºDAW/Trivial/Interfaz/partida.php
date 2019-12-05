<?php
$pagina=$_POST['pagina']??4;
$_SESSION['pagina']=$pagina;

$nombre=$_POST['nombre']??"";
$_SESSION['nombre']=$nombre;

$puntuacion=$_POST['puntuacion']??0;
$_SESSION['puntuacion']=$puntuacion;

$fin=$_POST['fin']??false;
$_SESSION['fin']=$fin;

include('Interfaz/funciones.php');

if($_SESSION['nombre']!=""){

    $lectura = leerCSV();

        $ronda = rand(0, 5);

    $fin=comprobarRespuesta($lectura,$ronda,$_SESSION['puntuacion']);

    $_SESSION['fin']=$fin;

    if($_SESSION['fin']==false) {

        echo $lectura[$ronda][0] . "<br>";
        ?>
        <form method="post" action="Index.php">
            <button type="submit" name="respuesta" value="4"><?php echo $lectura[$ronda][4] . "<br>"; ?></button>

            <button type="submit" name="respuesta" value="2"><?php echo $lectura[$ronda][2] . "<br>"; ?></button>

            <button type="submit" name="respuesta" value="3"><?php echo $lectura[$ronda][3] . "<br>"; ?></button>

            <button type="submit" name="respuesta" value="1"><?php echo $lectura[$ronda][1] . "<br>"; ?></button>

            <input type="hidden" name="pagina" value="4">

            <input type="hidden" name="nombre" value="<?php echo $_SESSION['nombre']; ?>">

            <input type="hidden" name="puntuacion" value="<?php echo $_SESSION['puntuacion']; ?>">
        </form>
        <?php
    }
    ?>
    <form action="Index.php" method="post">
        <button type="submit" name="pagina" value="1">Volver al menu de Inicio</button>

    </form>
    </body>
    </html>
<?php

}
?>