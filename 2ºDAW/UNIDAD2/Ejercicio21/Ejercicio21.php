<form action="Ejercicio21.php" method="post">


<?php
$muestras=$_POST['muestras'];
$funcion=$_POST['funcion'];

for($i=0;$i<$muestras;$i++){
?>
<input type="text" name="<?php echo $i ?>">
    <input type="hidden" name="funcion" value="<?php echo $funcion ?>">
    <?php
}
?>
<input type="submit" name="enviar" >
</form>
<?php
for($cont=0;$cont<5;$cont++){
    //Switch para cada opcion

    echo $_POST[$cont];

}
echo $_POST['funcion'];

?>