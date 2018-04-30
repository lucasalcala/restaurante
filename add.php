<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
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
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($apellido)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
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
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO transfers (nombre, apellido, vuelo, hora, fecha, confirmacion, comentario) VALUES('$nombre','$apellido','$vuelo', '$hora', '$fecha', '$confirmacion', '$comentario')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
