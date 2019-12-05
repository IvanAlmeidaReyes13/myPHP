
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Principal</title>
</head>
<body>
<br />

<table align="center"   >

    <h3 align="center">

        <b>LOGIN DE USUARIOS</b>
    </h3>
    <?php
    $user=$_POST['user']??"";

    $clave=$_POST['clave']??"";

    $cerrarSesion=$_POST['CerrarSesion']??false;

    if($cerrarSesion){

        unset($_SESSION['user']);
        unset($_SESSION['clave']);
        unset($_SESSION['tipo']);
    }
    if(validarUsuario($user,$clave)) {

        ?>
        <form action="index.php" method="post">
            Usuario <b><?php echo $_SESSION['user']; ?> </b>
            <br>
            <button type="submit" value="true" name="CerrarSesion" id="CerrarSesion">
                Cerrar sesion
            </button>
            <br>
            <a href="gui/borrarAlumno.php">Borrar Alumno</a>
        </form>

        <?php
    }

    else{


    ?>
        <form action="index.php" method="post">

            <tr>
                <td>
                    Usuario:
                </td>
                <td>
                    <input type="text" id="user" name="user">
                </td>
            </tr>
            <tr>
                <td>
                    Clave:
                </td>
                <td>
                    <input type="password" id="clave" name="clave">
                </td>
            </tr>

            <tr>

                <td colspan="1"></td> <!-- Esto es unicamnete para situar el boton de enviar en su lugar -->
                <td align="right">
                    <input type="submit" value="Enviar" align="right"/>
                </td>

            </tr>

        </form>

    <?php
    };
    ?>

</table>


</body>
</html>