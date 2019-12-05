<table border="1">
    <?php

    $nombre="Juan";
    $apellidos="Perro";
    $direccion="c.Jardin Botanico";
    $codigoPostal=28014;
    $localidad="Madrid";
    $provincia="Madrid";


echo"<tr>
    <td align='center'>
            <b>Variable</b> 
    </td>
    
    <td align='center'>
             <b>Valor</b> 
    </td>
    
    <td align='center' >
             <b>Tipo</b> 
    </td>
    
    
    
     </tr>
";
    $tipo=gettype($nombre);
echo"<tr>
        <td>
            Nombre
        </td>
        <td>
            $nombre
        </td>
        <td>
           $tipo
        </td>
    </tr>
    
    ";
    $tipo=gettype($apellidos);
echo"<tr>
        <td>
            Apellidos
        </td>
        <td>
            $apellidos
        </td>
        <td>
           $tipo
        </td>
    </tr>
    
    ";
    $tipo=gettype($direccion);
    echo"<tr>
        <td>
            Direccion
        </td>
        <td>
            $direccion
        </td>
        <td>
           $tipo
        </td>
    </tr>
    
    ";

    $tipo=gettype($codigoPostal);
    echo"<tr>
        <td>
            CodigoPostal
        </td>
        <td>
            $codigoPostal
        </td>
        <td>
           $tipo
        </td>
    </tr>
    
    ";

    $tipo=gettype($localidad);
    echo"<tr>
        <td>
            Localidad
        </td>
        <td>
            $localidad
        </td>
        <td>
           $tipo
        </td>
    </tr>
    
    ";

    $tipo=gettype($provincia);
    echo"<tr>
        <td>
            Provincia
        </td>
        <td>
            $provincia
        </td>
        <td>
           $tipo
        </td>
    </tr>
    
    ";

    ?>


</table>
