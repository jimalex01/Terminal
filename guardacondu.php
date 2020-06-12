<?php
include("conexion.php");
$documento= $_POST['documento'];
$nombre= $_POST['nombre'];
$direccion= $_POST['direccion'];
$telefono= $_POST['telefono'];

$query= "INSERT INTO conductores(documento,nombre,direccion,telefono)
VALUES ('$documento','$nombre','$direccion','$telefono')";

$resultado= $conexion->query($query);

if($resultado ) {
    header("location:conductores.php");
}else{
    echo"conexion fallida";
}

?>
