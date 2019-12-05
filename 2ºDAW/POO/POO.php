<?php
class nombreclase{
    var $atributo;
    var $atributo2;

    function imprimir(){
        echo "hola";
    }
    function metodo2($param1,$param2){
        echo $param1,$param2;
    }
    public function oper($param){
        $this->atributo=$param;
    }

}


$prueba=new nombreclase();

$prueba->imprimir();

$prueba->metodo2(5,8);

$prueba->oper("chacho");

//$prueba->atributo="a";

echo $prueba->atributo;

?>