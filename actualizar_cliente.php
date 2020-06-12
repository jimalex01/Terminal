<?php
include("conexion.php");
$username= $_REQUEST['username'];
$nombre= $_POST['nombre'];
$correo= $_POST['correo'];
$telefono= $_POST['telefono'];
$documento= $_POST['documento'];
$password= $_POST['password'];

$query= "UPDATE clientes set username='$username', nombre='$nombre', correo='$correo', telefono='$telefono', documento='$documento', password= '$password'
where username='$username'";

$resultado= $conexion->query($query);

if ($resultado) {
    header("location:datos_cliente.php");
}else{
    echo"conexion fallida";
}

?>