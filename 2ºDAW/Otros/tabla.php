<table border="1">
<?php
$variable1=1;
$variable2=1;
$contador=0;
for( $contador=0; $variable1<11; $variable1++){
    for($contador=0;$variable1<11 && $variable2<11;$variable2++){

        echo "<tr><td>".$variable1."*" . $variable2."=" .$variable1*$variable2 ."</td></tr>\n";
    }
    echo"<br>\n";
    $variable2=1;
}
 ?>
</table>
// en php no habra html, simplemente imprimira (echo) elementos de un html.

/*
DATOS: (no se definen los tipos en las variables)

boolean, integer, floar, string, unset(forzado a null, no existe)

array, object, callable

settype y gettype(dar y recibir el tipo de dato a una variable)
is_array(), is_float(), is_int()... te devuelve un boolean sobre si es de eese tipo la variable o no


ESTADOS DE UNA VARIABLE:
    -existe

    -existe pero sin valor

    -no existe

comprobar si existe: bool isset(mixed var)

suprimir una variable: void unset (mixed var)

comprobar si existe y esta vacia: bool empty (mixed var)


CONSTANTES:
no utiliza el simbolo dolar, se utiliza la palabra clave const + mayusculas (const PI=3.14) o la palabra define( para incluir una funcion en ella, operacion)



*/