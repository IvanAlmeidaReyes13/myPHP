<?php

$dado1=rand(1,6);
$dado2=rand(1,6);
$jugada=$_POST['jugada'];
$nombre=$_POST['jugador'];
$jugada=intval($jugada);
//parsear a int
echo $dado1+$dado2;
if($dado1+$dado2==$jugada){
    echo '. ENHORABUENA, '.$nombre. ' HAS GANADO';
}
else{
    echo'. Lo siento '.$nombre.', prueba de nuevo';
}
switch($dado1){
    case 1:
       ?>
        <img src="Dados/1.jpg">
        <?php
        break;
    case 2:
        ?>
        <img src="Dados/2.jpg">
        <?php
        break;
    case 3:
        ?>
        <img src="Dados/3.jpg">
        <?php
        break;
    case 4:
        ?>
        <img src="Dados/4.jpg">
        <?php
        break;
    case 5:
        ?>
        <img src="Dados/5.jpg">
        <?php
        break;
    case 6:
        ?>
        <img src="Dados/6.jpg">
        <?php


}
switch($dado2){
    case 1:
        ?>
        <img src="Dados/1.jpg">
        <?php
        break;
    case 2:
        ?>
        <img src="Dados/2.jpg">
        <?php
        break;
    case 3:
        ?>
        <img src="Dados/3.jpg">
        <?php
        break;
    case 4:
        ?>
        <img src="Dados/4.jpg">
        <?php
        break;
    case 5:
        ?>
        <img src="Dados/5.jpg">
        <?php
        break;
    case 6:
        ?>
        <img src="Dados/6.jpg">
    <?php


}


?>