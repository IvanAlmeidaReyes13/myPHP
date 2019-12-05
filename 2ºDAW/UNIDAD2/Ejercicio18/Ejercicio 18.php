<table border="1">
    <?php
    $filas=$_POST['primero'];
    $columnas=$_POST['segundo'];
    if($filas>$columnas){
        $mayor=$filas;
        $menor=$columnas;
    }else {
        $mayor=$columnas;
        $menor=$filas;
    }

    for($i=0;$i<=$mayor;$i++){
        ?>
        <tr>
            <?php
            for($a=0;$a<=$menor;$a++){
                ?>
                <td> </td>
                <?php
            }
            ?>
        </tr>
        <?php
    }

    ?>
</table>