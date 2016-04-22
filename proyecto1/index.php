<?php 
require_once("conexion.class.php");
$obj1=new conexion();
for($a=1;$a<5;$a++){
$sql="SELECT *FROM tabla1 WHERE idtabla=".$a;
$obj1->ejecutar_sentencia($sql);
$respuesta=$obj1->retornar_array();
echo "respuesta= ".$respuesta["numero1"];}
?>