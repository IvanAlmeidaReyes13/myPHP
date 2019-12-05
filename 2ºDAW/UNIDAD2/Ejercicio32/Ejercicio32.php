<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="index32.php">
    <?php
    for($i=0;$i<10;$i++){
        ?>
    Nombre: <input type="text" name="nombre<?php echo $i?>">
    Apellido: <input type="text" name="apellido<?php echo $i?>">
    <?php }?>
<input type="submit" name="ordenar">
</form>
</body>
</html>