<?php
$factura=[$tamanio=$_POST['tamanio']??"",
$base=$_POST['base']??"",
$salsa=$_POST['salsa']??"",
$pollo=$_POST['pollo']??"0",
$bacon=$_POST['bacon']??"0",
$jamon=$_POST['jamon']??"0",
$cebolla=$_POST['cebolla']??"0",
$aceitunas=$_POST['aceitunas']??"0",
$pimiento=$_POST['pimiento']??"0"];

$total=$tamanio+$base+$salsa+$pollo+$bacon+$jamon+$cebolla+$aceitunas+$pimiento;

for($cont=0;$cont<count($factura);$cont++){
    if(!($factura[$cont])==0){
        echo $factura[$cont]."<br>";
    }
}
echo "El total de su factura es: ".$total;
?>