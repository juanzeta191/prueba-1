<!DOCTYPE html>
<html>
<head>
	<title>DirectvGo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos/estilo.css">
	<meta name="viewport" content="width=500, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet">
</head>
<body style="background:linear-gradient(to bottom , #010C1C , #000C0C);">
	<div class="fixed"> <p>Ventas 0810-222-3366 | Soy cliente</p> </div>
	<nav class="nav-flex">
		<div class="contenedor-img">
			<img src="img/dtv.svg">
		</div>
	</nav>
	<div class="content-flex">
		<section>
			<?php 
			$numero= $_POST['numerotarjeta'];
			echo "<h3>Tarjeta a cargar $numero </h3>";
			 ?>
		</section>
		
		<form method="POST" action="step3.php" class="form-flex">
			<p>Ingresa el monto deseado</p>
			<div class="contenedor-inputs">
				<div class="input-box">
					<input type="number" name="monto" required="" placeholder="$000">
					
				</div>
				<div class="contenedor-submit">
					<input type="submit" name="" value="Continuar">
				</div>
			</div>
			
		</form>

	</div>
	
</body>
<footer><div class="img"><img src="img/directvgo-logo.png"></div></footer>
</html>
