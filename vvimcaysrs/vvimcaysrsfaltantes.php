<!DOCTYPE html>
<html lang="en">
<head>
  <title>Faltantes</title>
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
        <li><a href="vvimcaysrsnuevoroomservice.php">Nuevo Room Service</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
	<h1> Alimentos y Bebidas </h1>


<p> Utilice este formulario para ingresar alimentos y bebidas faltantes en restaurante. <br>
	El uso debe ser diario para informar a los agentes de AYS </p>



<!--Form-->
<form method="post" name="myemailform" action="form-to-email.php">
	<p>
		<label for='name'>Nombre asociado: </label><br>
		<input type="text" name="name">
	</p>
	
	<p>
		<label for='alimentos'>Alimentos:</label> <br>
		<textarea name="alimentos" rows="7" cols="30"></textarea>
	</p>
	<p>
		<label for='bebidas'>Bebidas:</label> <br>
		<textarea name="bebidas" rows="7" cols="30"></textarea>
	</p>
	
	<input type="submit" name='submit' value="Enviar">
</form>
</div>

<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("myemailform");
frmvalidator.addValidation("name","req","Proporcione un nombre porfavor"); 
</script>
 
</div>


</body>
</html>
