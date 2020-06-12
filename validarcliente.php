<?php
session_start(); // Iniciando sesion
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "usuario o password invalidos";
}
else
{
// Define $username y $password
$username=$_POST['username'];
$password=$_POST['password'];
// Estableciendo la conexion a la base de datos
//include("db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("conexion.php");//Contiene de conexion a la base de datos
 
// Para proteger de Inyecciones SQL 

 $sql = "SELECT username, password  FROM clientes WHERE username = '" . $username . "' and password='".$password."';";
$query=mysqli_query($conexion,$sql);
$counter=mysqli_num_rows($query);
if ($counter==1){
		$_SESSION['login_user_sys']=$username; // Iniciando la sesion
		header("location: clients.php"); // Redireccionando a la pagina profile.php
	
	
} else {
$error = "El usuario o la contraseña es inválida.";	
}
}
}
?>