<?php session_start(); ?>
<?php
include ("bdconfig.php");

function validarUsuario( $us, $pw){

    $validado=false;
    @$cnn=mysqli_connect(HOST,US,PW,BBDD);
    if($cnn){
        $sql="SELECT tipo FROM usuarios where usuario='$us' AND clave='$pw'";
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
?>


