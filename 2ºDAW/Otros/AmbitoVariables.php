<?php

$a=1; // ambito global

function test(){

    //echo $a; //esto es un erro, no puedes llamar una variable de fuera de la funcion dentro, hay que hacerlo con un global

    global $a; // da acceso a la variable dentro de la funcion.

    echo $a; // acceso a la global
}

test();

?>

/*

OPERADORES:

$a+=5  ------> $a=$a+5

"0"==0-----> TRUE
"0"===0---->FALSE

=== comprueba ademas del valor los tipos.
!=== igual que el distinto pero su negacion.

TERNARIO
$a=$nota>=5?'Aprobado';'Suspenso'----> en primer lugar se ve la condicion, despues lo que se le da a la variable $a si es verdadero y en segundo si es falso.

FUSION DE NULL(??)
Devuelve de iq a derecha el primer operador que existe.




*/
