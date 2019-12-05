<table border="1">
<?php
$articuloA=$_POST ['articuloA'];
$articuloB=$_POST ['articuloB'];
$articuloC=$_POST ['articuloC'];
?>
    <tr>
        <td>
            <b>Artículo</b>
        </td>
        <td>
            <b>Precio</b>
        </td>
        <td>
            <b>Unidades</b>
        </td>
        <td>
            <b>Subtotal</b>
        </td>
    </tr>
    <tr>
        <td>
            Articulo A
        </td>
        <td>
            5.99€
        </td>
        <td align="center">
            <?php echo $articuloA?>
        </td>
        <td>
            <?php  $cantidadA=$articuloA*5.99;
            echo $cantidadA ?>
        </td>
    </tr>
    <tr>
        <td>
            Articulo B
        </td>
        <td>
            12.49€
        </td>
        <td align="center">
            <?php echo $articuloB?>
        </td>
        <td>
            <?php $cantidadB=$articuloB*12.49;
            echo $cantidadB ?>
        </td>
    </tr>
    <tr>
        <td>
            Articulo C
        </td>
        <td>
            19.99€
        </td>
        <td align="center">
            <?php echo $articuloC?>
        </td>
        <td>
            <?php $cantidadC=$articuloC*19.99;
            echo $cantidadC  ?>
        </td>
    </tr>
    <tr></tr>
    <tr>
        <td></td>
        <td></td>
        <td >
            Dto.(xx%)
        </td>
        <td >
            <?php $descuento=0;
            $iva=($cantidadA+$cantidadB+$cantidadC)*0.20;
            $total = ($cantidadA + $cantidadB + $cantidadC + $iva);

                $cantidadTotal=$cantidadC+$cantidadB+$cantidadA;
                switch ($cantidadTotal){
                    case ($cantidadTotal<5):

                            break;
                    case($cantidadTotal>=5 && $cantidadTotal<=10):
                        $descuento=$total*0.05;
                        break;
                    case($cantidadTotal>=11 && $cantidadTotal<=20):
                        $descuento=$total*0.10;
                        break;
                    case ($cantidadTotal>20):
                            $descuento=$total*0.25;
                        break;
                    }

            echo $descuento ?>
        </td>
    </tr>
<tr>
    <td></td>
    <td></td>
    <td>
        IVA (20%)
    </td>
    <td >
        <?php
        echo $iva ?>
    </td>
</tr>

<tr>
    <td></td>
    <td></td>
    <td >
        TOTAL
    </td>
    <td >
        <?php
        echo $total-$descuento ?>
    </td>
 </tr>



</table>
