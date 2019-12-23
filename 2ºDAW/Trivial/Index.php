<?php
session_start();
$pagina = $_POST['pagina']??1;
$nombre=$_POST['nombre']??"";
$_SESSION['nombre']=$nombre;
$_SESSION['pagina'] = $pagina;
?>
<link rel="stylesheet" href="Interfaz/hojaEstilos.css">
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
<form action="Index.php" method="post">

    <span>
    TRIVIAL
  </span> <br>
    <?php

    switch ($_SESSION['pagina']){
        case 1:
            include ('Interfaz/Bienvenida.php');
            break;
        case 2:
                include('Interfaz/Editor.php');

            break;
        case 3:
            include ("Interfaz/registro.php");
            break;
        case 4:
            include ('Interfaz/partida.php');
            break;
        default:
            include ('Interfaz/Bienvenida.php');
            break;
    }
    ?>

</form>


