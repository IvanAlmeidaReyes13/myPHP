<?php
$pagina=$_POST['pagina']??2; //si la pagina esta vacio la mandamos que sea 2 para permanecer en esta pagina
$_SESSION['pagina']=$pagina;
include('Interfaz/funciones.php');
//a continuacion se implmenta el formulario para crear preguntas, la imagen
// esta comentada ya que no sabia bien la manera en que proteger los ficheros que introducimos y por seguridad prefiero no incluirlo
?>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
</head>
EDITOR <br>
<form action="Editor.php" method="post">


    <!--Introduce una imagen:
    <input type="file" name="imagen">-->

    Introduce una pregunta:
    <input type="text" name="pregunta">
    <br>
    Introduce la respuesta correcta:
    <input type="text" name="correcta">
    <br>
    Introduce el resto de respuestas incorrectas:
    <br>
    <input type="text" name="incorrecta1"> <br>
    <input type="text" name="incorrecta2"> <br>
    <input type="text" name="incorrecta3">
    <br>
    <input type="hidden" name="pagina" value="2">
    <button type="submit" name="enviar" value="true">Guardar</button>
    </form>

<?php

$enviar=$_POST['enviar']??false;
if($enviar) {//almacenamos las preguntas y las guardamos

    $almacenPreguntas=almacenarPregunta();
    guardarCSV($almacenPreguntas);



}


?>

<form action="Index.php" method="post">
    <button type="submit" name="pagina" value="1">Volver al menu de Inicio</button>

</form>

</html>