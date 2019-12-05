<?php
include ("bbdd.php");
include ("formulario.php");
include ("persona.php");
$i=new formulario();
$b=new bbdd();
?>
<html>
    <head>
        <style>
            #contenedor{
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <div id="contenedor">
            <form method="post" action="index.php">
                <button type="submit" name="enviar" value="true">Crear nuevo</button>
                <button type="submit" name="recoger" value="true">Mostrar</button>
            </form>
            <?php
            $enviar=$_POST['enviar']??false;
            if($enviar) {
            ?>
        <form>
            <?php



                echo $i->añadirInput("nombre", "primer Apellido", "segundo Apellido", "dni", "direccion") . "<br>";
                echo "Tipo Via" . $i->bbddSelect();
                echo "</br>";
                $b->insertarPersonas($i->generarRequest("nombre", "primerApellido", "segundoApellido", "dni", "direccion", "datosSelect"));
                ?>
                <input type="submit" name="guardar" onchange="submit()">
        </form>
                <?php
                //var_dump($_REQUEST);



            }
            ?>
            <form action="index.php" method="post">
                <select name="seleccion">


            <?php


                $recoger=$_POST['recoger']??false;
                if($recoger) {
            $p = new bbdd();
            $infor = $p->mostrar();
            foreach ($infor as $value) {
                echo "<option value='" . $value['dni'] . "'>" . $value['dni'] . "</option>";
            }

            ?>
                </select>
                <input type="submit" value="true" name="mostrar">
            </form>
        <?php
        }
        $mostrar=$_POST['mostrar']??false;
        if($mostrar) {

            $p =new bbdd();
            $dni = $_POST['seleccion'];
            $resultado = $p->buscar($dni);

            var_dump($resultado);
        }
            ?>

        </div>
    </body>
</html>