<?php
$precios=[$_POST['precio1'],$_POST['precio2'],$_POST['precio3'],$_POST['precio4']];
$articulos=[$_POST['articulo1'],$_POST['articulo2'],$_POST['articulo3'],$_POST['articulo4']];
$porPrecio=$_POST['precio']??false;
if($porPrecio){
    sort($precios);
}