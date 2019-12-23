
<form method='post' action='index.php'>
    Rellena los campos <br>
    <table>
        <tr>
            <td> Titulo: </td>
            <td> <input type='text' name='nombre' required="required"></td>
        </tr>
        <tr>
            <td> Autor: </td>
            <td> <input type='text' name='autor' required="required"></td>
        </tr>
        <tr>
            <td> Genero:</td>
            <td><input type='text' name='genero' required="required"> </td>
        </tr>
        <tr>
            <td> Paginas:</td>
            <td><input type='number' name='paginas' required="required"> </td>
        </tr>
        <tr>
            <td> Precio:</td>
            <td><input type='number' name='precio' required="required"> </td>
        </tr>
    </table>
    <input type='submit' name='formularioAnadir' value='true'>
<input type="hidden" value="3" name="pagina">
</form>
<?php
if($_SESSION['rellenar']!=null)
annadirLibro($_SESSION["rellenar"]);
?>