<?php
include("conexion.php");

include('sesion_cliente.php');

?>

<!DOCTYPE html>
 <html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="css/estilo8.css">
 </head>
 <body>
  <section>   
  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse" >
  <img src="images/logo.png" width="70px" height="70px" class="imag" >
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  	<div class="enlace">
   
			<h3>Bienvenid@ al sistema  <i><?php echo $login_session; ?></i></h3>
			
			<div class="clear"> </div>
                        <h4><a href="cerrar_sesion.php"> Cerrar sesión</a></h4>
			</div>
 </div>
</nav>
</section>
     <form action="comprar.php" method="POST">
<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
   <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-8 cuadro"> 
            <p><h3>Ingresa la información completa para completar la compra</p></h3>
      <div class="col-md-4">
        
        <div class="form-group">
          <label>Nombre</label>
          <input class="form-control" id="nombre" type="text" placeholder="Ingrese su nombre">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Telefono</label>
          <input class="form-control" id="nombre" type="number" name="tel" placeholder="Telefono">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Correo</label>
          <input class="form-control" id="nombre" type="text" placeholder="Correo">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Nro. Documento</label>
          <input class="form-control" id="nombre" name="doc" type="number" placeholder="Documento">
        </div>
        </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Cantidad de Pasajes</label>
          <input class="form-control" id="nombre" type="number" name="cantipasajes" placeholder="# de pasajes">
        </div>
      </div>
      <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 cuadro3"> 
        <p><h3><center>Elige la forma de pago..!</center></h3></p>
          <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-2"> 
            <img src="images/Mastercard.png" class="img-responsive" alt="" width="150px" height="150px" >
          </div>
          <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-2"> 
            <img src="images/visa.png" class="img-responsive" alt="" width="150px" height="150px" >
          </div>
          <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-2"> 
            <img src="images/VisaElectron.png" class="img-responsive" alt="" width="150px" height="150px" >
          </div>
          <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-2"> 
            <img src="images/maestro.png" class="img-responsive" alt="" width="150px" height="150px" >
          </div>
          <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-2"> 
            <img src="images/American.png" class="img-responsive" alt="" width="150px" height="150px" >
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label>Seleciona la Tarjeta</label>
              <select name="passengers[0][document_type_id]" class="form-control" data-msg-required="Selecciona Tipo de Doc." tabindex="3" required>
              <option value="">Seleccionar..</option>
              <option value="">MasterCard</option>
              <option value="1">Visa</option>
              <option value="2">Visa Electro</option>
              <option value="3">Maestro</option>
              <option value="">American Express</option>
              </select>
            </div>
          </div>
          <p>
          <div class="col-md-6">
            <div class="form-group">
              <label>Nro. Tarjeta</label>
              <input class="form-control" id="nombre" type="number" name="tar" placeholder="Número de la tarjeta">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Nombre y Apellido</label>
              <input class="form-control" id="nombre" type="text" placeholder="Nombre y apellido">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Fecha de  Vencimiento</label>
              <input class="form-control" id="nombre" type="text" name="venci" placeholder="mm/aa">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Código de Seguridad</label>
              <input class="form-control" id="nombre" type="number" name="cvv" placeholder="CVV" maxlength="3">
            </div>
          </div>
          <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
            <center> <button class="btn btn-danger my-2 my-sm-0 boton" type="submit" name="enviando" >Comprar</button>
            </form>
            <p><h4><center>Tus compras son seguras con nosotros...</center></h4></p>
          </div>
    </div>
   </div>
      <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-4"> 
      <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-5 cuadro4"> 
       <img src="images/busca.png" class="img-responsive" alt="" >
       <center><h4><b>Busca y Compra</b></h4></center>
       <h5>Elige tu destino.!</h5>
       </div>
       <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-5 cuadro2"> 
       <img src="images/silla.jpg" class="img-responsive foto" alt="" width="180px" height="140px">
       <center><h4><b>Asegura Tu Silla</b></h4></center>
       <h5>Reserva y selecciona la silla que quieras.!</h5>
     </div>
     <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-5 cuadro4"> 
       <img src="images/pago.jpg" class="img-responsive foto2" alt="" width="100px" height="100px">
       <center><h4><b>Pagos Seguros</b></h4></center>
       <h5>Con nosotros puedes tener tus datos seguros.</h5>
    </div>
    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-5 cuadro2"> 
       <img src="images/atencion.png" class="img-responsive foto2" alt="" width="90px" height="90px">
        <center><h4><b>Atención</b></h4></center>
       <h5>Estamos dispuestos a brindarle la mejor atención.</h5>   
       </div>
   </div>
</div>
<?php
if (isset($_POST['enviando'])) {
 $documento= $_POST['doc'];
$npasajes= $_POST['cantipasajes'];
$ntarjeta= $_POST['tar'];
$fvencimiento= $_POST['venci'];
$cvv= $_POST['cvv'];
	mysqli_query($conexion,"INSERT INTO ventas(DOCUMENTO,NPASAJE,NTARJETA,FVENCIMIENTO,CVV,FVENTA) 
		VALUES('$documento','$npasajes','$ntarjeta','$fvencimiento','$cvv',SYSDATE())");
 
       echo'<script type="text/javascript">
    alert("Compra Realizada con exito");
    </script>';
      echo "<div class='container' style='margin-top: 10px'>";
		echo "<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' id='example'>";
		echo "<thead>";
                echo "<tr>";
		echo "	<th>DOCUMENTO</th>";
		echo "	<th>CANTIDAD PASAJES</th>";
                echo "	<th>NUMERO TARJETA</th>";
                echo "	<th>FECHA VENCIMIENTO</th>";
                echo "	<th>CVV</th>";
		echo "</tr>";
		echo "<tr>";
		echo "	<th>$documento</th>";
		echo "	<th>$npasajes</th>";
                echo "	<th>$ntarjeta</th>";
                echo "	<th>$fvencimiento</th>";
                echo "	<th>$cvv</th>";
		echo "</tr>";
		echo "</thead>";
    echo "</table>";
}

?>
 <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 letra2"> 
   <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse" >
       <center><h4 style="color:#4b4b4b">Todos los derechos reservados © 2020 Terminal de Trasnporte S.A | Diseño y Desarrollo Web.</h4></center>

       <a target="_blank" href="https://www.facebook.com/terminal.manizales.3"><img src="images/facebook.png" class="img-responsive facebook" alt=""></a>
        <a target="_blank" href="https://www.instagram.com/terminaldemanizales/"><img src="images/instagram.png" class="img-responsive instagram"  alt=""></a>
         <a target="_blank" href="https://twitter.com/mzlesterminal"><img src="images/twitter.png" class="img-responsive twitter" alt=""></a>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
         <br/>
       </ul>
       </div>
    </nav>
 </div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>