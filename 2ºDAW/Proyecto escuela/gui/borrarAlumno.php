<?php include ("../lib/funciones.php"); ?>

<?php
comprobarSeguridad($_SESSION['tipo']);
comprobarEditor($_SESSION['tipo']);
if(!isset($_SESSION['user'])){
    echo "<br> sesion vacia";
}  else {
    echo "Sesion de:  ". $_SESSION['user'];
}

?>
