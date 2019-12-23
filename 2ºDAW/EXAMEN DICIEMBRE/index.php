<?php
session_start();
include ("funciones/funciones.php");
include ("BBDD/BBDD.php");


    $rellenar[0]=$_POST['nombre']??"";
    $rellenar[1]=$_POST['autor']??"";
    $rellenar[2]=$_POST['genero']??"";
    $rellenar[3]=$_POST['paginas']??"";
    $rellenar[4]=$_POST['precio']??"";
$_SESSION["rellenar"]=$rellenar;


$_SESSION['tipo']=$_SESSION['clave'];
if($_SESSION['tipo']!="uu" && $_SESSION['tipo']!="aa") {


    if (!validarUsuario($_POST['user'] ?? "invitado", $_POST['clave'] ?? "0")) {

        $user = "Invitado";
        $_SESSION['user'] = $user;

        $pw = "";
        $_SESSION['clave'] = $pw;

        $tipo = "ii";
        $_SESSION['tipo'] = $tipo;


    }
}
$pagina=$_POST['pagina']??0;
$_SESSION['pagina']=$pagina;

$titulo=$_POST['titulo']??null;
$_SESSION['titulo']=$titulo;



?>
<h1 align="center">IVAN ALMEIDA REYES</h1><br>
<h3 align="center">Bienvenido <?php echo $_SESSION['user']?> </h3>
<?php

switch ($pagina){
    case 1:
        include ("paginas/inicioSesion.php");
        break;
    case 2:
        include ("paginas/cerrarSesion.php");
        break;
    case 3:
        include ("paginas/annadirLibros.php");
        break;
    case 4:
        include("paginas/listadoLibros.php");
        break;
    default:

}

?>
<footer>
<form method="post" action="index.php">
    <button type="submit" name="pagina" value="1">Inicio Sesion</button>
    <button type="submit" name="pagina" value="2">Cerrar Sesion</button>
    <button type="submit" name="pagina" value="3">Añadir Libro</button>
    <?php
    if($_SESSION['tipo']=="uu" || $_SESSION['tipo']=="aa"){
        ?>
        <button type="submit" name="pagina" value="4">Listado Libros</button>
    <?php
    }else {
        ?>
        <button type="submit" name="pagina" disabled="disabled" value="4">Listado Libros</button>
    <?php
    }
    ?>
</form>
</footer>
