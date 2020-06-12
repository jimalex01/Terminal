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
 <link rel="stylesheet" type="text/css" href="css/estilo7.css">
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
      <input class="form-control mr-sm-2 barra2 " type="text" placeholder="Search">
      <button class="btn btn-danger my-2 my-sm-0 " type="submit " >Search</button>
    </form>
  </div>
</nav>
</section>

<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 encabezado"> 
      <h1>Manizales-Caldas</h1>
 </div>
<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 "> 
  <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-5 formulario "> 
    <form action="destino.php" method="POST">
     <div class="form-group">
       <label for="destino"><h2>Escribe Tu Destino..!</h2></label>
       <input class="form-control" id="nombre" type="text" name="des" placeholder="Destino">
     </div>
  </div>
  <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-3"> 
    <button class="btn btn-danger my-2 my-sm-0 boton" type="submit" name="btnconsulta">Buscar</button>

  </div>
</div>
</form>
<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 botones"> 
   <table class="cuadro" border="3px solid">
  <tr>
     <td class="color" ><center><b>Destino</b></center></td>
     <td class="color"><center><b>Empresa</b></center></td>
     <td class="color"><center><b>Hora de Salida</b></center></td>
     <td class="color"><center><b>Precio</b></center></td>
  </tr>
<?php

if (isset($_POST['btnconsulta'])) {
  
  $variable=$_POST['des'];
  
  if($variable==""){
    echo "El campo esta vacio";
  }else{
    $resultado=mysqli_query($conexion,"SELECT * FROM Rutas WHERE destino LIKE '%$variable%'");
    while ($consulta = mysqli_fetch_array($resultado)) {
     echo '<tr>';
     echo '<td>'.$consulta['DESTINO'].'</td>';
     echo '<td>'.$consulta['EMPRESA'].'</td>';
     echo '<td>'.$consulta['HSALIDA'].'</td>';
     echo '<td>'.$consulta['PRECIO'].'</td>';
     echo'</tr>';
    }
  }
}
?>
</table>
</div>

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