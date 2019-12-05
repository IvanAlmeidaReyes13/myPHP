<html>
<style>
    html{
        background-color: #666699;
        color: #1a1a1a;
        font-size:20px ;

    }
</style>
<?php
const HOST="localhost";
const US="root";
const PW="";
const BBDD="nba";

$temporada=$_POST['temporada']??"";
$estadisticas=$_POST['estadisticas']??"";
$jugadores=$_POST['jugadores']??"";

@$cnn=mysqli_connect(HOST,US,PW,BBDD);
    $sql = "SELECT jugadores.Nombre,jugadores.Nombre_equipo,estadisticas.$estadisticas
              from jugadores JOIN estadisticas ON jugadores.codigo=estadisticas.jugador
            WHERE temporada='$temporada' order by $estadisticas desc limit $jugadores" ;
    $rest = mysqli_query($cnn, $sql);

    while ($row = mysqli_fetch_assoc($rest)) {
        foreach ($row as $value) {
            echo $value."<br>";
    }
}
mysqli_close($cnn);
 ?>
</html>