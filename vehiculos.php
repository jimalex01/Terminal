<?php
include('sesion_usuario.php');
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
                      <th colspan="9" class="active warning"><center>VEHICULOS</th></center>
                    </tr>
                    </thead>
                    <tbody>
<tr class="active warning">
    <td>ID</td>
    <td>PLACA</td>
    <td>MODELO</td>
    <td>MARCA</td>
    <td>COLOR</td>
    <td></td>
    <td><a href="regisvehi.php">REGISTRAR</a></td>
</tr>
<?php
include("conexion.php");
$query="select * from vehiculo";
$resultado= $conexion->query($query);
//var_dump($resultado->fetch_assoc());
//$arr = $resultado->fetch_all();
//print_r($arr); // Guardo todo el reusltado en el arreglo

while($row=$resultado->fetch_assoc()){
  
?>
    <tr>
        <td>
            <?=$row['ID'];?>
        </td>
        <td>
            <?=$row['PLACA'];?>
        </td>
        <td>
         	<?=$row['MODELO'];?>
        </td>
        <td>
            <?=$row['MARCA']?>
        </td>
        <td>
            <?=$row['COLOR']?>
        </td> 
         <td><a href="actualizavehiculo.php?id=<?php echo $row['ID'];?>">MODIFICAR</a></td>                 
        <td><a href="elimivehi.php?id=<?php echo $row['ID'];?>">ELIMINAR</a></td>
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
         <center><h4 style="color:#4b4b4b">Todos los derechos reservados © 2020 Terminal de Trasnporte S.A | Diseño y Desarrollo Web.</h4></center>
     </div>
</div>
    <script src="js/jquery.js "></script>
    <script src="js/bootstrap.min.js "></script>
</body>
</html>
