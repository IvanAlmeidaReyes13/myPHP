<?php include ("Funciones.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario registro</title>
    <link rel="stylesheet" href="hojaEstilos.css">
</head>
<body>
<table >
    <tr>
        <td valign="top">
            <table >
            <form action="DatosGente.php" method="post">
                <tr><td>Nombre     </td><td> <input type="text" name="nombre" required="required"></td></tr>
                <tr><td>Apellidos  </td><td> <input type="text" name="apellidos" required="required"></td></tr>
                <tr><td>Telefono   </td><td> <input type="number" name="telefono" required="required"></td></tr>
                <tr><td>Correo     </td><td> <input type="email" name="correo" required="required"></td></tr>
                <tr><td>
                Curso <select name="curso">

                    <option value="1">1º</option>
                    <option value="2">2º</option>

                </select>
                </td></tr>

                <tr><td><input type="submit" name="enviar" value="true"></tr></td>
            </form>
            </table>
            <?php
            $enviar=$_POST['enviar']??false;
            if($enviar) {
                $datos = crearArray();
            }
            ?>
        </td>
        <td>
            <div>
           <table border="1" width="250px">
               <tr>
                   <td>
                       <form action="DatosGente.php" method="post">


                               <?/*php
                               $lectura =  leerCSV();
                               foreach ($lectura as $valor){
                                   echo $valor[0];
                               }*/
                               ?>


                           <select name="selector" onchange="this.form.submit()">
                               <option value="" disabled selected>selecciona</option>
                               <?php
                               $ret =  leerCSV();
                               foreach ($ret as $valor){
                                   echo "<option value='$valor[3]'>$valor[0]</option>";
                               }
                               ?>

                           </select>
                       </form>

                   </td>
               </tr>


               </table>
            </div>
               <textarea cols="30" rows="5" style="display: block" disabled="disabled">
                   <?php

                   $lectura=leerCSV();
                    if (isset($_POST['selector']) && !empty($_POST['selector'])){
                       $correo = $_POST['selector'];
                       foreach ($lectura as $campos){
                           if ($campos[3]==$correo){
                               foreach ($campos as $campo){
                                   echo ($campo."\n");
                               }
                           }
                       }
                   }
                   ?></textarea>

           </table>
        </td>
    </tr>
</table>
</body>
</html>
