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
  </nav>
</section>
<section>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
    <div class="enlace">
    <a href="index.html"><img src="images/cese.png"  width="100px" height="100px" class="img-responsive " alt=""></a>
    </div>
  </div>
</section>
<section>
   
  
<form action="guardavehi.php" method="POST">
<center><table>
    <tr>
      
      <td><strong><label>PLACA</label></strong></td>
      <td><strong><label>MODELO</label></strong></td>
      <td><strong><label>MARCA</label></strong></td>
      <td><strong><label>COLOR</label></strong></td>
    </tr>
    <tr>
        
      
      <td><strong><input type="text" value="" name="PLA" REQUIRED /></strong></td>
      <td><strong><input type="text" value="" name="MODE" REQUIRED/></strong></td>
      <td><strong><input type="text" value="" name="MAR" REQUIRED/></strong></td>
      <td><strong><input type="text" value="" name="COL" REQUIRED /></strong></td>
    </tr>
    </table></center>
    <br>
    <br>
    <div class="button">
        <center><button type="submit">Registrar Vehiculo</button></center>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</form>
</section>
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