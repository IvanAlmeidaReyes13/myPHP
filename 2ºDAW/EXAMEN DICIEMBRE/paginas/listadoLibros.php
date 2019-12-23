<?php

if(comprobarSeguridad()) {

    if ($_SESSION['titulo'] == null) {


        ?>
        <form method="post" action="index.php">
            <input type="text" name="titulo" placeholder="Introduce tu libro...">
            <input type="submit" name="enviar" value="true">
            <input type="hidden" name="pagina" value="4">
        </form>


        <?php
    }else{
   ?>
        <form method="post" action="index.php">
<select name="libros">
    <?php
       $libros= buscador($_SESSION['titulo']);
?>
</select>
            <input type="submit" name="enviar" value="true">
            <input type="hidden" name="pagina" value="4">
        </form>
<?php
    }
    if($_POST['libros']!=""){
        mostrarLibros($_POST['libros']);
    }
}
    ?>