<?php
include("conexion.php");

$placa= $_POST['PLA'];
$modelo= $_POST['MODE'];
$marca= $_POST['MAR'];
$color= $_POST['COL'];

$query= "INSERT INTO vehiculo(PLACA,MODELO,MARCA,COLOR)
VALUES ('$placa','$modelo','$marca','$color')";

$resultado= $conexion->query($query);

if($resultado ) {
    header("location:vehiculos.php");
}else{
    echo"conexion fallida";
}

?>
