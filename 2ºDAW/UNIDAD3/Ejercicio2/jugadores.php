<?php
const HOST="localhost";
const US="root";
const PW="";
const BBDD="nba";
$enviar = $_POST['enviar'] ?? false;
if ($enviar) {
    $equipo = $_POST['equipo'] ?? "";

    @$cnn = mysqli_connect(HOST, US, PW, BBDD);
    if ($cnn) {
        $sql = "SELECT distinct nombre FROM jugadores where Nombre_equipo like '$equipo'";
        $rest = mysqli_query($cnn, $sql);

        while ($row2 = mysqli_fetch_assoc($rest)) {
            foreach ($row2 as $value) {
                echo $value."<br>";
            }
        }

        mysqli_close($cnn);

    }
}
?>