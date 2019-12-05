<?php
$nombre=$_POST['nombre']??'';
$apellidos=$_POST['apellidos']??'';
$cerrarSesion=$_POST['cerrarSesion']??false;
$_SESSION['nombre']=$nombre;
$_SESSION['apellidos']=$apellidos;
if($cerrarSesion) {
unset($_SESSION['nombre']);
unset($_SESSION['apellidos']);
}
if($nombre=="" || $apellidos==""){
    ?>

    <html>
    <head>

    </head>
    <body>
    <form method="post" action="Ejercicio24.php">
        Nombre: <input type="text" name="nombre">
        Apellidos: <input type="text" name="apellidos">
        <input type="submit" name="enviar">
    </form>

    </body>
    </html>
    <?php
}else if(!($nombre=="" || $apellidos=="")) {
    echo "Ya has iniciado sesion" . $_SESSION['nombre']. $_SESSION['apellidos'];
?>

    <form method="post" action="Ejercicio24.php">
    <button type="submit" value="true" name="cerrarSesion" id="cerrarSesion">
        Cerrar sesion
    </button>
    </form>
    <?php
}
?>

