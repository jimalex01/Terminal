<?php
include("sesion_cliente.php");
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
<?php
$username=$_REQUEST['username'];
include("conexion.php");

$query="select * from clientes where username='$username'";
$resultado= $conexion->query($query);
$row=$resultado->fetch_assoc();
?>

<br>
<form action="actualizar_cliente.php?username=<?php echo $row['USERNAME'];?>" method="post">
<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
<legend class="text-center header">Actualizar Datos Personales</legend>

<center><table>
    <tr>
      <td><strong><label>Documento</label></strong></td>
      <td><strong><label>Nombre</label></strong></td>
      <td><strong><label>Correo Electronico</label></strong></td>
      <td><strong> <label>Telefono</label></strong></td>      
    </tr>
    <tr>
      <td><strong><input type="text" value="<?php echo $row['DOCUMENTO'];?>" name="documento" REQUIRED/></strong></td>
      <td><strong><input type="text" value="<?php echo $row['NOMBRE'];?>" name="nombre" REQUIRED /></strong></td>
      <td><strong><input type="text" value="<?php echo $row['CORREO'];?>" name="correo" REQUIRED/></strong></td>
      <td><strong><input type="text" value="<?php echo $row['TELEFONO'];?>" name="telefono" REQUIRED/></strong></td>      
    </tr>
    </table></center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="button">
        <center><button type="submit">Actualizar Datos</button></center>
    </div>
    <br>
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