<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
	$apellido = mysqli_real_escape_string($mysqli, $_POST['apellido']);
	$vuelo = mysqli_real_escape_string($mysqli, $_POST['vuelo']);	
	$hora = mysqli_real_escape_string($mysqli, $_POST['hora']);	
	$fecha = mysqli_real_escape_string($mysqli, $_POST['fecha']);	
	$confirmacion = mysqli_real_escape_string($mysqli, $_POST['confirmacion']);	
	$comentario = mysqli_real_escape_string($mysqli, $_POST['comentario']);	
					
	// checking empty fields
	if(empty($nombre) || empty($apellido) || empty($vuelo) || empty($hora) || empty($fecha) || empty($confirmacion) || empty($comentario)) {	
			
		if(empty($nombre)) {
			echo "<font color='red'>Nombre field is empty.</font><br/>";
		}
		
		if(empty($apellido)) {
			echo "<font color='red'>Apellido field is empty.</font><br/>";
		}
		
		if(empty($vuelo)) {
			echo "<font color='red'>Vuelo field is empty.</font><br/>";
		}
		if(empty($hora)) {
			echo "<font color='red'>Hora field is empty.</font><br/>";
		}
		if(empty($fecha)) {
			echo "<font color='red'>Fecha field is empty.</font><br/>";
		}
		if(empty($confirmacion)) {
			echo "<font color='red'>Confirmacion field is empty.</font><br/>";
		}
		if(empty($comentario)) {
			echo "<font color='red'>Comentario field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE transfers SET nombre='$nombre', apellido='$apellido', vuelo='$vuelo', hora='$hora', fecha='$fecha', confirmacion='$confirmacion', comentario='$comentario' WHERE id=$id");
		
		//redirecting to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM transfers WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$nombre = $res['Nombre'];
	$apellido = $res['Apellido'];
	$vuelo = $res['Vuelo'];
	$hora = $res['Hora'];
	$fecha = $res['Fecha'];
	$confirmacion = $res['Confirmacion'];
	$comentario = $res['Comentario'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
			</tr>
			<tr> 
				<td>Apellido</td>
				<td><input type="text" name="apellido" value="<?php echo $apellido;?>"></td>
			</tr>
			<tr> 
				<td>Vuelo</td>
				<td><input type="text" name="vuelo" value="<?php echo $vuelo;?>"></td>
			</tr>
			<tr> 
				<td>Hora</td>
				<td><input type="text" name="hora" value="<?php echo $hora;?>"></td>
			</tr>
			<tr> 
				<td>Fecha</td>
				<td><input type="text" name="fecha" value="<?php echo $fecha;?>"></td>
			</tr>
			<tr> 
				<td>Confirmacion</td>
				<td><input type="text" name="confirmacion" value="<?php echo $confirmacion;?>"></td>
			</tr>
			<tr> 
				<td>Comentario</td>
				<td><input type="text" name="comentario" value="<?php echo $comentario;?>"></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
			
		</table>
	</form>
</body>
</html>
