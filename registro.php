<?php
include('conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo6.css">
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
			<li data-target="#carousel-1" data-slide-to="1"></li>
			<li data-target="#carousel-1" data-slide-to="2"></li>
			<li data-target="#carousel-1" data-slide-to="3"></li>


		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/image1.png" class="img-responsive" alt="">
			</div>

			<div class="item">
				<img src="images/image2.png" class="img-responsive" alt="">
				
			</div>

			<div class="item">
				<img src="images/image3.png" class="img-responsive" alt="">
				
			</div>
			<div class="item">
				<img src="images/image4.png" class="img-responsive" alt="">
				
			</div>
		</div><!--cierra el carousel-inner-->
    </div>
  </div>
  <div class="caja2 col-xs-12 col-sm-12 col-md-12 col-lg-4">
    <div class="caja3">
        <p></p>
        <form action="registro.php" method="POST">
        <div class="form-group">
            <input class="form-control" id="nombre" type="text" placeholder="Nombre" name="nom" ><p></p>
            <input class="form-control" id="nombre" type="text" placeholder="Documento" name="doc" ><p></p>
            <input class="form-control" id="nombre" type="text" placeholder="Telefono" name="tel"  ><p></p>
            <input class="form-control" id="nombre" type="text" placeholder="E-mail" name="correo" ><p></p>
            <input class="form-control" id="nombre" type="text" placeholder="Username" name="username" ><p></p>
            <input class="form-control" id="nombre" type="password" placeholder="Contraseña" name="pass">
          </div>

          <button class="btn btn-danger my-2 my-sm-0 boton" type="submit" name="enviando">Envia</button>
          </form>
          </div>
  </div>

    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 colorP">
      <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-3 ">
        <img src="images/P1.png" class="img-responsive P1" alt="" width="190px" height="200px" margin-righ="20px">
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

    <?php 
      
    if (isset($_POST['enviando'])) {
      $varnombre = $_POST['nom'];
      $vardocumento = $_POST['doc'];
      $vartelefono = $_POST['tel'];
      $varcorreo = $_POST['correo'];
      $username=$_POST['username'];
      $varpass = $_POST['pass'];
     
    mysqli_query($conexion,"INSERT INTO clientes(documento,nombre,correo,telefono, username,password) VALUES('$vardocumento','$varnombre','$varcorreo','$vartelefono','$username','$varpass')"); 
      echo "<div class='container' style='margin-top: 10px'>";
		echo "<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' id='example'>";
		echo "<thead>";
                echo "<tr>";
		echo "	<th>DOCUMENTO</th>";
		echo "	<th>NOMBRE</th>";
                echo "	<th>CORREO</th>";
                echo "	<th>TELEFONO</th>";
                echo "	<th>USERNAME</th>";
                echo "	<th>PASSWORD</th>";
		echo "</tr>";
		echo "<tr>";
		echo "	<th>$vardocumento</th>";
		echo "	<th>$varnombre</th>";
                echo "	<th>$varcorreo</th>";
                echo "	<th>$vartelefono</th>";
                echo "	<th>$username</th>";
                echo "	<th>$varpass</th>";
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
    }
    ?>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
