<?php
class Empleado
{


    var $nombre;
    var $sueldo;
    protected static $i=0;

public function __construct($p1=null,$p2=null)
{


    switch (func_num_args()) {
        case 1:
            if (is_numeric($p1)) {


                $this->nombre = "Empleado_" . self::$i++;
                $this->sueldo = $p1;
            } else if (is_numeric($p1)) {
                $this->nombre = $p1 . "_" . self::$i;
            }
            break;
        case 2:
            if(is_numeric($p1) && is_numeric($p2)){
                $this->nombre=$p1."_".self::$i;
                $this->sueldo=$p2;
            }
            else{
                throw new Exception("error");
                break;
            }

    }
}
public function __toString()
{
   return"(nombre:{$this->nombre}-sueldo:{$this->sueldo})\n<br>";
}

}
$a=new Empleado(0);
var_dump($a);
?>