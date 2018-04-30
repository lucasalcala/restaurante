<?php
//Include the database connection file
include_once("config.php");

//fetch data in descending order

$result = mysqli_query($mysqli, "SELECT * FROM roomservice ORDER BY id DESC"); // using mysqli_query instead
?>

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
        <li><a href="vvimcaybrsfaltantes.php">Faltantes</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Room Service</h3>
  <p>Marriott Santa Cruz de la Sierra</p> 
  <table class="table table-striped">

	<tr>
		<td>Habitacion</td>
		<td>Hora</td>
		<td>Fecha</td>
		<td>Asociado</td>
		<td>Pedido</td>

	</tr>
  <?php 
	//while loop used to retrieve data from the SQL database
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['habitacion']."</td>";
		echo "<td>".$res['hora']."</td>";
		echo "<td>".$res['fecha']."</td>";
		echo "<td>".$res['asociado']."</td>";	
		echo "<td>".$res['pedido']."</td>";											
	}
	?>
	</table>
</div>

</body>
</html>
