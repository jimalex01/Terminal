<?php
include('sesion_usuario.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo4.css">
    <link rel="stylesheet" type="text/css" href="css/style_menu.css">
  </head>
  <body>
  <section>   
  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse" >
  <img src="images/logo.png" width="70px" height="70px" class="imag">
  <div class="letra">
  <div class="letra">
  <p><center><h1>Ventana de Usuario</h1></center></p>
  </div>
      <div class="example">
    <ul class="nav">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Rutas</a>
            <ul class="subs">
                <li><a href="form_registrar_ruta.php">Crear Ruta</a></li>
                <li><a href="actualizaruta.php">Actualizar Ruta</a></li>
                <li><a href="eliminaruta.php">Eliminar Ruta</a></li>
               
            </ul>
        </li>
        <li><a href="#">Ventas</a>
            <ul class="subs">
                <li><a href="compra.php">Generar Venta</a></li>
                <li><a href="listarventas.php">Visualizar Venta</a></li>
               
            </ul>
        </li>
         <li><a href="#">Vehículos</a>
            <ul class="subs">
                <li><a href="regisvehi.php">Registrar </a></li>
                <li><a href="vehiculos.php">Actualizar</a></li>
                <li><a href="">Eliminar</a></li>
               
            </ul>
        </li>
         <li><a href="#">Conductores</a>
            <ul class="subs">
                <li><a href="regiscondu.php">Registrar</a></li>
                <li><a href="conductores.php">Actualizar</a></li>
                <li><a href="">Eliminar</a></li>
               
            </ul>
        </li>
         </ul>
    <div style="clear:both"></div>
</div>
</nav>
      
</section>
<section>
	<div class="enlace">
   	<h3>Bienvenid@ al sistema  <i><?php echo $login_session; ?></i></h3>
	<div class="clear"> </div>
        <h4><a href="cerrar_sesion.php"> Cerrar sesión</a></h4>
      </div>	
    
	<br>
<br>	
				
<section>

<div class=" caja1 col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
				<br>
			<div id="carousel-1" class="carousel slide" data-ride="carousel">
		
		<ol class="carousel-indicators">
			<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-1" data-slide-to="1"></li>
			<li data-target="#carousel-1" data-slide-to="2"></li>
			<li data-target="#carousel-1" data-slide-to="3"></li>
			<li data-target="#carousel-1" data-slide-to="4"></li>
			<li data-target="#carousel-1" data-slide-to="5"></li>
			<li data-target="#carousel-1" data-slide-to="6"></li>
			<li data-target="#carousel-1" data-slide-to="7"></li>

		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/lugares1.jpg" class="img-responsive" alt="">
			</div>

			<div class="item">
				<img src="images/lugares.jpg" class="img-responsive" alt="">
				
			</div>

			<div class="item">
				<img src="images/lugares2.jpg" class="img-responsive" alt="">
				
			</div>
			<div class="item">
				<img src="images/lugares3.jpg" class="img-responsive" alt="">
				
			</div>
			<div class="item">
				<img src="images/lugares4.jpg" class="img-responsive" alt="">
				
			</div>
			<div class="item">
				<img src="images/lugares5.jpg" class="img-responsive" alt="">
				
			</div>
			<div class="item">
				<img src="images/lugares6.jpg" class="img-responsive" alt="">
				
			</div>
			<div class="item">
				<img src="images/lugares7.jpg" class="img-responsive" alt="">
				
			</div>
		</div><!--cierra el carousel-inner-->
		</div>
</section>
			
        
</section>
		
 <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 colorP"> 
	 
	 	 <img src="images/P1.png" class="img-responsive P1 " alt="" width="190px" height="200px">
	 	 <img src="images/P2.png" class="img-responsive P2 " alt="" width="250px" height="200px">
	 	 <img src="images/P3.png" class="img-responsive P3 " alt="" width="250px" height="200px">
	 	 <img src="images/P4.png" class="img-responsive P4 " alt="" width="180px" height="200px">
	 	 <br>
  	 	 <center><h4 style="color:#000">Todos los derechos reservados © 2019 Terminal de Transporte S.A | Diseño y Desarrollo Web.</h4></center>
 </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
 <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
  </body>
</html>
