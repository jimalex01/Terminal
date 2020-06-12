<?php
include("sesion_usuario.php");
include('conexion.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/inicio.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
<section>   
  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse" >
  <img src="images/logo.png" width="70px" height="70px" class="imag" >
</section>
<section>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
		  <div class="enlace">
   
			<h3>Bienvenid@ al sistema  <i><?php echo $login_session; ?></i></h3>
			
			<div class="clear"> </div>
                        <h4><a href="cerrar_sesion.php"> Cerrar sesión</a></h4>
			</div>
	</div>
</section>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="table-responsive">
       <table class="table table-bordered table-hover  table-condensed">
            <tbody>
       <form action="reporte.php" method="POST">
        
       <div class="form-group" class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
            <label for="destino"><h2>Escribe El Mes</h2></label>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-1">
                <input class="form-control" id="nombre" type="text" name="fventa" placeholder="Mes">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <button class="btn btn-danger my-2 my-sm-0 boton" type="submit" name="btnconsulta">Buscar</button>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
        </div>
  </div>
</form>
<br>
<br>
<br>
<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
  <tr class="active warning">
    <td>Fecha venta</td>
    <td>Numero de Pasajes</td>
    <td>Documento del Cliente</td>
    </tr>

<?php

if (isset($_POST['btnconsulta'])) {
  
  $variable=$_POST['fventa'];
  
  if($variable==""){
    echo "El campo esta vacio";
  }

  else {
    $resultado=mysqli_query($conexion,"SELECT * FROM ventas WHERE fventa LIKE '%$variable%'");
    while ($consulta = mysqli_fetch_array($resultado)) {
     echo '<tr>';
     echo '<td>'.$consulta['FVENTA'].'</td>';
     echo '<td>'.$consulta['NPASAJE'].'</td>';
     echo '<td>'.$consulta['DOCUMENTO'].'</td>';
     echo'</tr>';
    }
  }
}
?>
</table></center>
</div>
</div>
 <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 colorP">   
     <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-3 "> 
         <img src="images/P1.png" class="img-responsive P1" alt="" width="190px" height="200px">
     </div>
      <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-3 ">
         <img src="images/P2.png" class="img-responsive P2" alt="" width="250px" height="200px">
     </div>
      <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-3 ">
         <img src="images/P3.png" class="img-responsive P3" alt="" width="250px" height="200px">
     </div>
      <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-3 ">
         <img src="images/P4.png" class="img-responsive P4" alt="" width="180px" height="200px">
     </div>
         <br>
      <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
         <center><h4 style="color:#000">Todos los derechos reservados © 2019 Terminal de Trasnporte S.A | Diseño y Desarrollo Web.</h4></center>
     </div>
</div>
    <script src="js/jquery.js "></script>
    <script src="js/bootstrap.min.js "></script>
</body>
</html>