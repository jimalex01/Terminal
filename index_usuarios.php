<?php
include('validaradmin.php'); // Includes Login Script
 
if(isset($_SESSION['login_user_sys'])){
header("location: users.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
  <body>
  <section>   
  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse" >
  <img src="images/logo.png" width="70px" height="70px" class="imag" >

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item barra" >
        <a class="nav-link letra" href="index.php">Inicio</a>
      </li>
      <li class="nav-item barra">
        <a class="nav-link letra"  href="quienes.html">Quienes Somos</a>
      </li>
      <li class="nav-item barra">
        <a class="nav-link letra "  href="destino.php">¿A dónde se dirige?</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 barra">
      <input class="form-control mr-sm-2 barra2" type="text" placeholder="Search">
      <button class="btn btn-danger my-2 my-sm-0 " type="submit">Search</button>
    </form>
  </div>
</nav>
</section>
<section>
	<div class=" caja1 col-xs-12 col-sm-12 col-md-12 col-lg-8"> 
				<br>
			<div id="carousel-1" class="carousel slide" data-ride="carousel">
		
		<ol class="carousel-indicators">
			<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-1" data-slide-to="1" class="active" ></li>
			<li data-target="#carousel-1" data-slide-to="2" class="active"></li>

		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/image1.png" class="img-responsive" alt="">
			</div>

			<div class="item">
				<img src="images/image2.jpg" class="img-responsive" alt="">
				
			</div>

			<div class="item">
				<img src="images/image3.jpg" class="img-responsive" alt="">
				
			</div>
		</div><!--cierra el carousel-inner-->
		</div>
		<div class="principal">
			<p><center><h2>Qué Opinan de Nosotros..!</h2></center></p>
			<p>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3"> 
					<p align="center"><b>Marta Ospina</b></p>
					<img src="images/estrellas.png" class="img-responsive" alt="" >
					 <h4 align="center" top="2px"><b>Viajó Manizales-Cali</b>
					<h5 align="center">Siempre que llego al terminal encuentro pasajes muy rapido,
					 ademas tienen una muy buena atencion.</h5>

				</div>
			
			<p>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3"> 
					<p align="center"><b>Carlos Zapata</b></p>
					<img src="images/estrellas.png" class="img-responsive" alt="" >
					 <h4 align="center" top="2px"><b>Viajó Manizales-La Dorada</b>
					<h5 align="center">Los funcionarios siempre manejan muy buena atencion!</h5>

				</div>
			</p>
			<p>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3"> 
					<p align="center"><b>Camilo Cardona</b></p>
					<img src="images/estrellas.png" class="img-responsive" alt="" >
					 <h4 align="center" top="2px"><b>Viajó Manizales-Bogotá</b>
					<h5 align="center">¡Lo Recomiendo! manejan horarios perfectos y el proceso muy ágil.</h5>
				</div>
			</p>
			<p>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3"> 
					<p align="center"><b>Carmela Melo</b></p>
					<img src="images/estrellas.png" class="img-responsive" alt="" >
					 <h4 align="center" top="2px"><b>Viajó Manizales-Neiva</b>
					<h5 align="center">El portal es muy fácil de manejar y ahorra tiempo, ademas tienen muy buena atención!</h5>

				</div>
			</p>
		</div>
		<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 viaje" > 
			 <h2><center>Tenemos diferentes empresas dispuestas a prestar su mejor servicio..!</center></h2>
		 </div>
		 <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-4 viaje"> 
			 <img src="images/arauca.jpg" class="img-responsive" alt="" width="150px" height="150px" >
			 <img src="images/bolivariano.jpg" class="img-responsive viaje" alt="" width="150px" height="150px">
		 </div>
		  <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-4 viaje"> 
			 <img src="images/coopuertos.jpg" class="img-responsive" alt="" width="150px" height="150px">
			 <img src="images/brasilia.jpg" class="img-responsive viaje" alt="" width="150px" height="150px">
		 </div>
		  <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-4 viaje"> 
			 <img src="images/feria.png" class="img-responsive" alt="" width="70px" height="70px">
			 <img src="images/coopetran.png" class="img-responsive viaje" alt="" width="150px" height="150px" >
		 </div>
	</div>	

	<a class="nav-link letra"  href="quienes.html">
    <center><a class="nav-link letra"  href="index.php"><button class="btn btn-danger my-2 my-sm-0 clientes" type="submit" >Clientes</button></center></a>

    <center><a class="nav-link letra"  href="index_usuarios.php"><button class="btn btn-danger my-2 my-sm-0 usuarios" type="submit">Usuarios</button></center></a>

	<div class=" caja2 col-xs-12 col-sm-12 col-md-12 col-lg-4">
		 <h2 align="center"> Aqui Puedes Ingresar..!</h2>
		 <div class="form-group">
                     <form action="#" method="POST">
			 <label for="nombre"><h2>Bienvenido Usuario</h2></label>
			 <input class="form-control" id="username" name="username" type="text" required="" placeholder="Username">
		 </div>
		 <div class="form-group">
			 <label for="nombre"><h2>Contraseña</h2></label>
			 <input class="form-control" id="password" name="password" type="password" required="" placeholder="Password">
		 </div>
                  <span><?php echo $error; ?></span>
		 <div><center><input name="submit" type="submit" value="Ingresar"></div>
                 </form>
                      
		 <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-5 cuadro"> 
		 	 <img src="images/busca.png" class="img-responsive" alt="" >
			 <center><h4><b>Busca y Compra</b></h4></center>
			 <h5>Elige tu destino.!</h5>
	     </div>
	     <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-5 cuadro2"> 
			 <img src="images/silla.jpg" class="img-responsive foto" alt="" width="180px" height="140px">
			 <center><h4><b>Asegura Tu Silla</b></h4></center>
			 <h5>Reserva y selecciona la silla que quieras.!</h5>
		 </div>
		 <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-5 cuadro"> 
			 <img src="images/pago.jpg" class="img-responsive foto2" alt="" width="100px" height="100px">
			 <center><h4><b>Pagos Seguros</b></h4></center>
			 <h5>Con nosotros puedes tener tus datos seguros.</h5>
		</div>
		<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-5 cuadro2"> 
			 <img src="images/atencion.png" class="img-responsive foto2" alt="" width="90px" height="90px">
			  <center><h4><b>Atención</b></h4></center>
			 <h5>Estamos dispuestos a brindarle la mejor atención.</h5>	 	
	     </div>	
	     <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
	      	 <a target="_blank" href="https://www.facebook.com/terminal.manizales.3"><img src="images/facebook.png" class="img-responsive fa" alt=""></a>
  	 	 	 <a target="_blank" href="https://www.instagram.com/terminaldemanizales/"><img src="images/instagram.png"  class="img-responsive ins"  alt=""></a>
  	 	 	 <a target="_blank" href="https://twitter.com/mzlesterminal"><img src="images/twitter.png" class="img-responsive tw" alt=""></a>
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
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
 <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
  </body>
</html>