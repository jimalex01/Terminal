<?php
include("conexion.php");
$id= $_REQUEST['id'];
$destino= $_POST['destino'];
$empresa= $_POST['empresa'];
$hsalida= $_POST['hsalida'];
$precio= $_POST['precio'];

$query= "UPDATE rutas set id='$id', destino='$destino', empresa='$empresa', hsalida='$hsalida', precio='$precio'
where id='$id'";

$resultado= $conexion->query($query);

if ($resultado) {
    header("location:actualizaruta.php");
}else{
    echo"conexion fallida ";
}

?>