
<html>
<body>
<form method="post" action="Ejercicio26.php">
    <input type="text" name="1">
    <input type="date" name="2">
    Pulsa pecir adios<input type="checkbox" name="3" value="adios">
    Pulsa para decir hola<input type="radio" name="4" value="Hola">
    <input type="submit" name="enviar">
</form>
<table border="1">
    <tr>


        <?php
        $enviar=$_POST['enviar']??false;
        if($enviar)
            for($i=1;$i<5;$i++){
                ?>
                <td><?php echo $variables=$_POST[$i]; ?></td>
                <?php
            }

        ?>
    </tr>
</table>
</body>
</html>
