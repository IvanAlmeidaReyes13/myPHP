<?php
$nombre=$_POST['nombre']??"";
$_SESSION['nombre']==$nombre;
if($nombre==""){

?>
<html>
<body>
<form action="index.php" method="post">
    Introduce tu nombre para la partida: <input type="text" name="nombre">
    <input type="submit" name="enviar" value="true">
    <input type="hidden" name="pagina" value="4">
    <input type="hidden" name="puntuacion">
</form>


<?php
}


?>