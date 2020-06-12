<?php
include("conexion.php");

$destino= $_POST['DES'];
$empresa= $_POST['EMP'];
$hsalida= $_POST['HSA'];
$precio= $_POST['PRE'];

$query= "INSERT INTO rutas(destino,empresa,hsalida,precio)
VALUES ('$destino','$empresa','$hsalida','$precio')";

$resultado= $conexion->query($query);

if($resultado ) {
    header("location:rutas.php");
}else{
    echo"conexion fallida";
}

?>
