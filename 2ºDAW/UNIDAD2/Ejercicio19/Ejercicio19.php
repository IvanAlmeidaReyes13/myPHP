
    <?php
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $poblacion=$_POST['poblacion'];
    $provincia=$_POST['provincia'];
    $fechanac=$_POST['fechaNac'];
    $estudios=$_POST['estudios'];

    $datos=[$nombre,$apellido,$telefono,$direccion,$poblacion,$provincia,$fechanac,$estudios];
    //for($i=0;i<=count($datos);$i++){
        ?>
    <table border="1">
        <tr>
            <?php
            for($a=0;$a<count($datos);$a++){
                ?>
                <td><?php echo $datos[$a] ?> </td>
                <?php
            }
            ?>
        </tr>

</table>