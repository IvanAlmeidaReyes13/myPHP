<?php

include ("bdconfig.php");
function validarUsuario( $us, $pw){

        $validado=false;
            @$cnn=mysqli_connect(HOST,US,PW,BBDD);
        if($cnn){
            $sql="SELECT tipo FROM gestionusuarios where usuario='$us' AND clave='$pw'";
            $rest=mysqli_query($cnn,$sql);
            if(mysqli_num_rows($rest)==1){
                $validado=true;
                $_SESSION['user']=$us;
                $_SESSION['clave']=$pw;
                $row=mysqli_fetch_assoc($rest);
                $tipo=$row['tipo'];
         }
        }
        mysqli_close($cnn);

        if($validado){
            $validado=true;
            $_SESSION['user']=$us;
            $_SESSION['tipo']=$tipo;
        }
        else {
            unset($_SESSION['user']);
            unset($_SESSION['clave']);
            unset($_SESSION['tipo']);
        }


return $validado;
}

function buscador($busqueda){

    @$cnn = mysqli_connect(HOST, US, PW, BBDD); //CON ESTO NOS CONECTAMOS A LA BBDD
    if ($cnn) {
        $sql = "SELECT nombre FROM `gestionlibros` WHERE nombre like '%$busqueda%'";

        $rest = mysqli_query($cnn, $sql); //SI LA CONSULTA Y EL CNN SON CORRECTOS SE ALMACENA EL RESULTADO DE LA CONSULTA EN REST

        while($row = mysqli_fetch_assoc($rest)){
            foreach ($row as $value){
                echo "<option value='$value'>". $value."</option>";}
        }
        }//fetch assoc retorna un array asociativo(columna resultado)



        mysqli_close($cnn);


    }


function mostrarLibros($solicitud){

    @$cnn = mysqli_connect(HOST, US, PW, BBDD); //CON ESTO NOS CONECTAMOS A LA BBDD
    if ($cnn) {
        $sql = "SELECT * FROM `gestionlibros` WHERE nombre like '%$solicitud%'";

        $rest = mysqli_query($cnn, $sql); //SI LA CONSULTA Y EL CNN SON CORRECTOS SE ALMACENA EL RESULTADO DE LA CONSULTA EN REST

        while($row1 = mysqli_fetch_assoc($rest)){
            foreach ($row1 as $value1){
                echo $value1."<br>";}
        }
    }



    mysqli_close($cnn);


}
function annadirLibro($rellenar){
/*
    @$cnn = mysqli_connect(HOST, US, PW, BBDD); //CON ESTO NOS CONECTAMOS A LA BBDD
    if ($cnn) {
        $sql = "INSERT INTO `gestionlibros`(`nombre`, `autor`, `genero`, `paginas`, `precio`) VALUES ([$rellenar[0]],[$rellenar[1]],[$rellenar[2]],[$rellenar[3]],[$rellenar[4]])";

        $rest = mysqli_query($cnn, $sql); //SI LA CONSULTA Y EL CNN SON CORRECTOS SE ALMACENA EL RESULTADO DE LA CONSULTA EN REST


        if ($rest)
            echo $sql->affected_rows . " teams added";
*/
    @$cnn = mysqli_connect(HOST, US, PW, BBDD); //CON ESTO NOS CONECTAMOS A LA BBDD
        if (!mysqli_connect_errno()){
            $consulta="INSERT INTO `gestionlibros`(`nombre`, `autor`, `genero`, `paginas`, `precio`) VALUES ('$rellenar[0]','$rellenar[1]','$rellenar[2]',$rellenar[3],$rellenar[4])";

            if (mysqli_query($cnn, $consulta)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $consulta . "<br>" . mysqli_error($cnn);
            }

}




    mysqli_close($cnn);


}



?>