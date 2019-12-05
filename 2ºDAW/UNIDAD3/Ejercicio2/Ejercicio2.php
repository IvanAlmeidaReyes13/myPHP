<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
Selecciona un equipo:
<form method="post" action="Ejercicio2.php">
<select name="equipo">

    <?php
    const HOST="localhost";
    const US="root";
    const PW="";
    const BBDD="nba";
    @$cnn=mysqli_connect(HOST,US,PW,BBDD);
    if($cnn){
    $sql="SELECT distinct nombre FROM equipos ";
    $rest=mysqli_query($cnn,$sql);

        while($row = mysqli_fetch_assoc($rest)){
            foreach ($row as $value){
                echo "<option value='$value'>". $value."</option>";}
        }


    mysqli_close($cnn);

    }
    ?>
</select>
    <input type="submit" name="enviar" value="true">
</form>
<?php

$enviar = $_POST['enviar'] ?? false;
if ($enviar) {
    $equipo = $_POST['equipo'] ?? "";

    @$cnn = mysqli_connect(HOST, US, PW, BBDD);
    if ($cnn) {
        $sql = "SELECT distinct nombre FROM jugadores where Nombre_equipo like '$equipo'";
        $rest = mysqli_query($cnn, $sql);
        echo '<strong>'.$equipo.'</strong><br>';
        while ($row2 = mysqli_fetch_assoc($rest)) {
            foreach ($row2 as $value) {
                echo $value."<br>";
            }
        }

        mysqli_close($cnn);

    }
}
?>
</body>
</html>