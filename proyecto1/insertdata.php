<?php 
     
require_once("conexion.class.php");
$obj1=new conexion();
$var="INSERT INTO tabla1 (idtabla,numero,numero1) VALUES (NULL,'9',10);";

$obj1->ejecutar_sentencia($var);

?>