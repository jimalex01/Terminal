<?php
include('conexion.php');

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
 <link rel="stylesheet" type="text/css" href="css/estilo9.css">
 </head>
 <body>
 <body>
  <section>   
  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse" >
  <img src="images/logo.png" width="70px" height="70px" class="imag" >
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  	<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-3"> 
    
  </div>
    
 </div>
</nav>
</section>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
			<div class="enlace">
		<a href="index.html"><img src="images/cese.png"  width="100px" height="100px" class="img-responsive " alt=""></a>
			</div>
		</div>
<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
   <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-8 cuadro3"> 
            <p><h3>Señor Usuario Ingresa La Información Completa Para Completar La Compra</p></h3>

      <div class="col-md-4">
        <div class="form-group">
          <label>Nombre</label>
          <input class="form-control" id="nombre" type="text" placeholder="Ingrese su nombre">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Telefono</label>
          <input class="form-control" id="nombre" type="number" placeholder="Telefono">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Correo</label>
          <input class="form-control" id="nombre" type="text" placeholder="Ingrese su correo electronico">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Destino</label>
         <input class="form-control" id="nombre" type="text" placeholder="A Donde Se Dirige?">
        </div>
      </div>
      <form action="compra.php" method="POST">
      <div class="col-md-4">
        <div class="form-group">
          <label>Nro. Documento</label>
          <input class="form-control" id="nombre" type="number" name="doc" placeholder="Documento">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Cantidad de Pasajes</label>
          <input class="form-control" id="nombre" type="number" name="pasajes" placeholder="Cantidad de Pasajes">
        </div>
      </div>
      <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 cuadro3"> 
        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
            <center><button class="btn btn-danger my-2 my-sm-0 boton" type="submit" name="enviando">Comprar</button></center>
            
            <p><h4><center>Tus compras son seguras con nosotros...</center></h4></p>
          </div>
    </div>
          </form>
   </div>
   <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-4"> 
      <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-5 cuadro4"> 
       <img src="images/viaje.jpg" class="img-responsive" alt="" >
       <center><h4><b>A Donde Viaja?</b></h4></center>
       </div>
       <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-5 cuadro2"> 
     <center><img src="images/buzon.png" class="img-responsive foto" alt="" width="100px" height="100px"></center>
      <center><h4><b>Regalanos Tu Sugerencia</b></h4></center>
       
     </div>
     <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-5 cuadro4"> 
       <center><img src="images/valoranos.jpg" class="img-responsive foto2" alt="" width="100px" height="100px"></center>
       <center><h4><b>Valora Nuestros Servicios!</b></h4></center>
       
    </div>
    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-5 cuadro2"> 
       <center><img src="images/web.png" class="img-responsive foto2" alt="" width="100px" height="100px"></center>
        <p><center><h4><b>Visita Nuestro Sitio Web</b></h4></center></p>
   
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
<?php
$documento= $_POST['doc'];
$npasajes= $_POST['pasajes'];

if(isset($_POST['enviando'])) {
	mysqli_query($conexion,"INSERT INTO ventas(documento,npasaje,fventa) 
		VALUES('$documento','$npasajes',SYSDATE())");
}
?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
  </body>
</html>