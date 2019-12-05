<?php


var_dump($_POST['nombre']); //accedo a los datos del id nombre del html
var_dump($_GET);
var_dump($_REQUEST);


?>

/*

Para cliente post, el get da la informacion del envio en la url lo que supone un fallo de seguridad.

Con el request accedemos a los datos mandados desde los formularios mediante cualquiera de los metodos GET/POST despues del submit

$check=($_REQUEST['nm'])??"No pulsado"; // comrpobar los request

$GLOBALS todas las variables globales
$_SERVER accceso a datos del servidor
$_FILES acceso a los ficheros enviados desde los clientes en los formularios
$_COOKIE cookies enviadas por el cliente
$_SESSION datos de sesion

*/
