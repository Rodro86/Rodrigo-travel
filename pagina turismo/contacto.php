

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Rodrigo@travel</title>
</head>
<body>

	<div class="Button">
		<a href="index.php" target="">
			<div class="front">Volver</div>
			<div class="back">click</div>
	  </a>
	</div>
<div class="container">
	<div class="row">
			<h1>Contactanos</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">Estaremos encantados en escucharte!</h4>
	</div>
	<form method="POST" action="registrar.php" class="clainput-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" name="name" required />
					<label>Nombre</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="email"  name="email" required />
					<label>Email</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input"  style="float:right;">
					<input type="tel" name="phone" required />
					<label>Teléfono</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea name="text" required></textarea>
					<label>Mensaje</label>
				</div>
			</div>
			<div class="col-xs-12">
				 <input class="btn-lrg submit-btn" action=""  type="submit" name="register" value="Enviar Mensaje">
				 
			</div>
			
	</form>



</div>



<?php 
include("registrar.php")
?>
    
</body>
</html>


