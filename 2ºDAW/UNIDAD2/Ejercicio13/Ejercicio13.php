<table border="1">
<?php
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];

?>
    <tr>
        <td>
            <b>Nombre</b>
        </td>
        <td>
           <?php echo $nombre; ?>
        </td>
    </tr>
    <tr>
        <td>
            <b>Apellidos</b>
        </td>
        <td>
           <?php echo $apellidos; ?>
        </td>
    </tr>
    <tr>
        <td>
            <b>Direccion</b>
        </td>
        <td>
            <?php echo $direccion; ?>
        </td>
    </tr>
    <tr>
        <td>
            <b>Telefono</b>
        </td>
        <td>
            <?php echo $telefono; ?>
        </td>
    </tr>
</table>
