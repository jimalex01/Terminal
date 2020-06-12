<?php
include("conexion.php");
$id= $_REQUEST['id'];
$placa= $_POST['placa'];
$modelo= $_POST['modelo'];
$marca= $_POST['marca'];
$color= $_POST['color'];

$query= "UPDATE vehiculo set id='$id', placa='$placa', modelo='$modelo', marca='$marca', color='$color'
where id='$id'";

$resultado= $conexion->query($query);

if ($resultado) {
    header("location:vehiculos.php");
}else{
    echo"conexion fallida";
}

?>