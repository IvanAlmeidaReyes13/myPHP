
<?php

$jugada=$_POST['jugada']??"";
$baraja=['as','dos','tres'];
$jugar=$_POST['enviar']??false;

if($jugar==true){

    shuffle($baraja);

    if($baraja[$jugada]=="as") {

        echo "Has ganado";

    }else {

        echo "Has perdido";
    }

 }else{

    ?>
    ¿En que posicion esta el as?
<form method="post" action="Ejercicio31.php">
<input type="number" name="jugada" max="2" min="0">
    <input type="submit" name="enviar" value="true">
</form>
<?php
}

?>