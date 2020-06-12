<?php
include("conexion.php");
$documento= $_REQUEST['documento'];
$nombre= $_POST['nombre'];
$direccion= $_POST['direccion'];
$telefono= $_POST['telefono'];

$query= "UPDATE Conductores set documento='$documento', nombre='$nombre', direccion='$direccion', telefono='$telefono' where documento='$documento'";

$resultado= $conexion->query($query);

if ($resultado) {
    header("location:conductores.php");
}else{
    echo"conexion fallida";
}

?>