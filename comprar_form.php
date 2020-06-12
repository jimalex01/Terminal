<?php
include("conexion.php");


$documento= $_POST['doc'];
$npasajes= $_POST['cantipasajes'];
$ntarjeta= $_POST['tar'];
$fvencimiento= $_POST['venci'];
$cvv= $_POST['cvv'];

if (isset($_POST['enviando'])) {
	mysqli_query($conexion,"INSERT INTO ventas(DOCUMENTO,NPASAJE,NTARJETA,FVENCIMIENTO,CVV,FVENTA) 
		VALUES('$documento','$npasajes','$ntarjeta','$fvencimiento','$cvv',SYSDATE())");
 
        echo "registros guardados correctamente";
}

?>
