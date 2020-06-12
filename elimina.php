<?php
include("conexion.php");
$id=$_REQUEST['id'];

$query= "delete from Rutas where id='$id'";
$resultado= $conexion->query($query);

if($resultado){
    header("location:eliminaruta.php");
}else{
   
echo "conexion caida";

}

?>