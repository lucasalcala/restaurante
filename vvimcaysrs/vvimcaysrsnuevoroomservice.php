<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alimentos y Bebidas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="vvimcaysrsmainpage.php">Inicio</a></li>
        <li><a href="vvimcaysrsfaltantes.php">Faltantes</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Nuevo Room Service</h3>
  <p>Utilice este formulario para ingresar un room service.</p> 
  
  
  	<form method="post" name="form1">
	<p>
		<label for='habitacion'>Habitacion:</label><br>
		<input type="text" name="habitacion">
	</p>
	
	<p>
		<label for='hora'>Hora:</label> <br>
		<input type="text" name="hora">
	</p>
	
	<p>
		<label for='fecha'>Fecha:</label> <br>
		<input type="text" name="fecha">
	</p>
	
	<p>
		<label for='asociado'>Asociado:</label> <br>
		<input type="text" name="asociado">
	</p>
	
	<p>
		<label for='pedido'>Pedido:</label> <br>
		<textarea name="pedido" rows="7" cols="30"></textarea>
	</p>
		<input type="submit" name="Submit" value="Add">

	</form>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$habitacion = mysqli_real_escape_string($mysqli, $_POST['habitacion']);
	$hora = mysqli_real_escape_string($mysqli, $_POST['hora']);
	$fecha = mysqli_real_escape_string($mysqli, $_POST['fecha']);
	$asociado = mysqli_real_escape_string($mysqli, $_POST['asociado']);
	$pedido = mysqli_real_escape_string($mysqli, $_POST['pedido']);	
	
	// checking empty fields
	if(empty($habitacion) || empty($hora) || empty($fecha) || empty($asociado) || empty($pedido) ) {
				
		if(empty($habitacion)) {
			echo "<font color='red'>Insertar numero habitacion.</font><br/>";
		}
		
		if(empty($hora)) {
			echo "<font color='red'>Insertar hora.</font><br/>";
		}
		
		if(empty($fecha)) {
			echo "<font color='red'>Insertar fecha.</font><br/>";
		}
		if(empty($asociado)) {
			echo "<font color='red'>Insertar nombre de asociado.</font><br/>";
		}
		if(empty($pedido)) {
			echo "<font color='red'>Insertar pedido de huesped.</font><br/>";
		}
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO roomservice (habitacion, hora, fecha, asociado, pedido) VALUES('$habitacion','$hora','$fecha','$asociado', '$pedido')");
		
		//display success message
		echo "<font color='green'>Room Service ingresado correctamente!";

	}
}
?>  
  
</div>

</body>
</html>
