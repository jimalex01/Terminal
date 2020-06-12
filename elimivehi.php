<?php
include("conexion.php");
$id=$_REQUEST['id'];

$query= "delete from vehiculo where id='$id'";
$resultado= $conexion->query($query);

if($resultado){
    header("location:vehiculos.php");
}else{
   
echo "conexion caida";

}

?>