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
        $sql = "SELECT distinct conferencia FROM equipo";
        $rest = mysqli_query($cnn, $sql);

        while ($row2 = mysqli_fetch_assoc($rest)) {
            foreach ($row2 as $value) {
                echo "<option name='$value'>".$value."</option>"."<br>";
            }
        }

        mysqli_close($cnn);

    }
}
?>