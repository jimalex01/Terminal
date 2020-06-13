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
<br>
  <?php
  $id=$_REQUEST['id'];
  include("conexion.php");

  $query="select * from rutas where id='$id'";
  $resultado= $conexion->query($query);
  $row=$resultado->fetch_assoc();
  ?>
  <form action="actualizaaa.php?id=<?php echo $row['ID'];?>" method="post">
<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <legend class="text-center header">MODIFICAR RUTAS</legend>
  <center><table>
    <tr>
    <td><strong><label>ID</label></strong></td>
    <td><strong><label>DESTINO</label></strong></td>
    <td><strong><label>EMPRESA</label></strong></td>
    <td><strong> <label>HSALIDA</label></strong></td>
    <td><strong> <label>PRECIO</label></strong></td>
    </tr>
    <tr>
    <td><strong><input type="text" value="<?php echo $row['ID'];?>" name="id" REQUIRED/></strong></td>
    <td><strong><input type="text" value="<?php echo $row['DESTINO'];?>" name="destino" REQUIRED/></strong></td>
    <td><strong><input type="text" value="<?php echo $row['EMPRESA'];?>" name="empresa" REQUIRED/></strong></td>
    <td><strong><input type="text" value="<?php echo $row['HSALIDA'];?>" name="hsalida" REQUIRED/></strong></td>
    <td><strong><input type="text" value="<?php echo $row['PRECIO'];?>" name="precio" REQUIRED/></strong></td>
    </tr>
    </table></center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="button">
        <center><button type="submit">MODIFICAR RUTA</button></center>
    </div>
    <br>
    <br>
    <br>

</section>
    </form>
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
         <center><h4 style="color:#4b4b4b">Todos los derechos reservados © 2020 Terminal de Trasnporte S.A | Diseño y Desarrollo Web.</h4></center>
     </div>
</div>
    <script src="js/jquery.js "></script>
    <script src="js/bootstrap.min.js "></script>
</body>
</html>