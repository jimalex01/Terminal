<?php
include("sesion_usuario.php");
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
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">

               <table class="table table-bordered table-hover  table-condensed">
                    <thead>
                    <tr>
                      <th colspan="9" class="active warning">
                        <center>RUTAS</th></center>
                    </tr>
                    </thead>
                    <tbody>
<tr class="active warning">
    <td>ID</td>
    <td>DESTINO</td>
    <td>EMPRESA</td>
    <td>HSALIDA</td>
    <td>PRECIO</td>
    <td></td>
</tr>

<?php
include("conexion.php");
$query="select * from Rutas";
$resultado= $conexion->query($query);
while($row=$resultado->fetch_assoc()){
?>
    <tr>
        <td>
            <?php echo $row['ID'];?>
        </td>
        <td>
            <?php echo $row['DESTINO'];?>
        </td>
        <td>
         	<?php echo $row['EMPRESA'];?>
        </td>
        <td>
            <?php echo $row['HSALIDA'];?>
        </td>
        <td>
            <?php echo $row['PRECIO'];?>
        </td>                  
        <td><a href="elimina.php?id=<?php echo $row['ID'];?>">ELIMINAR</a></td>
    </tr>
<?php
}
 ?>
</tbody>
</table>
</div>
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
