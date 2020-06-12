<?php
$host ="localhost";
$basededatos ="GPS";
$usuariodb ="root";
$clavedb="";

$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

if($conexion-> connect_errno){
    echo " Error de conexion";
    exit();
}



?>