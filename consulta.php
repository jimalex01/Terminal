<?
/////// CONEXIÓN A LA BASE DE DATOS /////////
$host = 'localhost';
$basededatos = 'id11677543_ttmanizales';
$usuario = 'id11677543_root';
$contraseña = '123456789';

$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM Rutas ORDER BY id";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['Rutas']))
{
	$q=$conexion->real_escape_string($_POST['Rutas']);
	$query="SELECT * FROM Rutas WHERE 
		id LIKE '%".$q."%' OR
		Destino LIKE '%".$q."%' OR
		Empresa LIKE '%".$q."%' OR
		Hsalida LIKE '%".$q."%' OR
		Precio LIKE '%".$q."%'";
}

$buscarRutas=$conexion->query($query);
if ($buscarRutas->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>ID RUTA</td>
			<td>DESTINO</td>
			<td>EMPRESA</td>
			<td>HORA DE SALIDA</td>
			<td>PRECIO</td>
		</tr>';

	while($filaRutas= $buscarRutas->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaRutas['id'].'</td>
			<td>'.$filaRutas['Destino'].'</td>
			<td>'.$filaRutas['Empresa'].'</td>
			<td>'.$filaRutas['Hsalida'].'</td>
			<td>'.$filaRutas['Precio'].'</td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
