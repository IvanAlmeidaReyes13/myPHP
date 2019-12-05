<?php if(comprobarEditor()){

?>
<html>
    <head>

    </head>
    <body>
    <div align="center">
<table width="70%">
    <tr align="center">
        <td  >
            <input type="button" name="Exportar/Inportar" id="exportar/inportar"/>
            <!--¿Que es lo que se va a impotar y exportar?¿una ficha sobre el alumno? -->
        </td>
    </tr>
    <tr align="center">
        <td >
            <b>GESTION</b>
        </td>
    </tr>
    <tr  >
        <td>
            <input type="button" name="Crear" id="Crear" />
        </td>
        <td>
            <input type="button" name="Borrar" id="Borrar"/>
        </td>
    </tr>
    <tr >
        <td>
            <input type="button" name="Modificar" id="Modificar"/>
        </td>
        <td>
            <input type="button" name="Consultar" id="Consultar"/>
        </td>
    </tr>

</table>
    </div>
<?php include ("footer.php");?>
    </body>
</html>
<?php } else
{
    echo "error";
}
?>