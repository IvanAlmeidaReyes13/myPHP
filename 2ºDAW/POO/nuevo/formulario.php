<?php


class formulario{

        //AÑADE INPUTS, TANTOS COMO PARÁMETROS INTRODUZCAS, ADEMAS ASIGNA AL NAME LOS PARAMETROS QUE PASES, QUITANDOTE LOS ESPACIOS EN BLANCO
        //EJ-> añadirInput("ejemplo Prueba") --> DEVUELVE UNA CAD= EJEMPLO PRUEBA<input type='text' name='ejemploPrueba'>
        public function añadirInput(...$parametros){
            $max=func_num_args();
            $valores=func_get_args();
            $cad="";
            for($i=0;$i<$max;$i++){
                $cad.=strtoupper($valores[$i])."  <input type='text' name='".trim(str_replace(" ","",$valores[$i]))."'></br>";
            }
            return $cad;
        }


        //GENERA UN SELCT, EL PRIMER PARAMETRO ES EL NOMBRE DEL SELECT Y LOS DEMAS SON VALORES QUE VA A COGER EL OPTION
        public function añadirSelect($nombreSelect,...$parametros){
            $max=func_num_args();
            $valores=func_get_args();
            $cad=$valores[0].": <select  name='".trim($valores[1])."'> ";
                for($i=1;$i<$max;$i++){
                    $cad.="<option name='".$valores[$i]['cod']."'>".$valores[$i]['tipos']."</option>";
                }
                $cad.="</select>";

            return $cad;
        }

      // CREA UN SELECT CON LAS OPTIONS DE LA BASE DE DATOS
        public function bbddSelect(){
            $datos=new bbdd();
            $datos=$datos->datosTipoVias();
            $cad="<select name='datosSelect'>";
            for($i=0;$i<count($datos);$i++){
                $cad.="<option value='".$datos[$i]['cod']."'>".$datos[$i]['tipos']."</option>";
            }
            $cad.="</select>";
            return $cad;
        }
        //$_REQUEST DE TODOS LOS INPUTS QUE HEMOS GENERADO PREVIAMENTE, PASAR LOS MISMOS PARAMETROS, DEVUELVE UN ARRAY CON LOS DATOS QUE EL USUARIO A INTRODUCIDO EN EL FORMULARIO
        public function generarRequest(...$args){
           $nombres = /*trim*/(func_get_args());
            $datos=[];
            if (count($nombres)>0) {
                for ($i = 0; $i < count($nombres); $i++) {
                    $datos[$i]=$_REQUEST[$nombres[$i]];
                }
            }


            return $datos;
        }
}
?>