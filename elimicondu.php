<?php
include("conexion.php");
$documento=$_REQUEST['documento'];

$query= "delete from Conductores where documento='$documento'";
$resultado= $conexion->query($query);

if($resultado){
    header("location:conductores.php");
}else{
   
echo "conexion caida";

}

?>