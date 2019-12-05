<?php
include_once ("clases/Personas.php");
include_once ("clases/bbdd.php");
?>
    <form method='post' action='index.php'>
        Rellena los campos <br>
        <table>
            <tr>
                <td> DNI: </td>
                <td> <input type='number' name='DNI' required="required"></td>
            </tr>
            <tr>
                <td> Nombre: </td>
                <td> <input type='text' name='nombre' required="required"></td>
            </tr>
            <tr>
                <td> Primer apellido:</td>
                <td><input type='text' name='apellido1' required="required"> </td>
            </tr>
            <tr>
                <td> Segundo apellido:</td>
                <td><input type='text' name='apellido2' required="required"> </td>
            </tr>
            <tr>
                <td> Direccion:</td>
                <td><input type='text' name='direccion' required="required"> </td>
            </tr>
            <tr>
                <td>Tipo de via:</td>
                <td><select name='tipoVia' required="required">
                        <br> <option value='1'>Calle</option>
                        <option value='2'>Avenida</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type='submit' name='enviar' value='true'>  </form>
<?php
$a = new Personas();

$a->crearDatos();

$enviar=$_POST['enviar']??false;
if($enviar) {
    $b = new bbdd();
    $b->rellenarDatosBBDD($a->devolverDatos());
}
?>