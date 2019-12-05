<?php

$cadena=$_POST['cadena']??'';


for($cont=0;$cont<count($cadena);$cont++){
    switch(substr($cadena,$cont)){
        case 'A':
            echo "A ->U";
            break;
        case 'G':
            echo"G ->C";
            break;
        case 'C':
            echo"C ->G";
            break;
        case 'T':
            echo"T ->A";
            break;
    }
}





?>