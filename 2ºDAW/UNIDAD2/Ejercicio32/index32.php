<?php
$a=0; // contador del array de el nombre
$e=0; // contador del array de apellidos
for($i=0;$i<10;$i++){
    if($i%2==0){
        $auxiliarNom=$_POST['nombre'.$a];
        $nombres=[$a=>$auxiliarNom];

        sort($nombres);

        $a++;
    } else{
        $auxiliarApe=$_POST['apellido'.$e];
        $apellidos=[$e=>$auxiliarApe];
        sort($apellidos);
        $e++;

    }


}



?>
