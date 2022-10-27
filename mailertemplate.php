<?php
session_start();
include_once 'connect.php';
$username = $_SESSION['username'];
if(!isset($_SESSION['username']))
{
    header("Location: login.php");
}

require "function.php";
require "prices.php";

require_once('./postmarkapp/vendor/autoload.php');
use Postmark\PostmarkClient;
use Postmark\Models\PostmarkException;


$client = new PostmarkClient("");



$preciosApiApp= getLastPriceNew();


  $precioVentaAmazonGC= $preciosApiApp[1];
  $precioVentaOtrasGC= $preciosApiApp[2];
  $precioVentaBTC= $preciosApiApp[3];
  $precioVentaBOFA= $preciosApiApp[4];
  $precioVentaPayoneer= $preciosApiApp[5];
  $precioVentaPayza= $preciosApiApp[6];
  $precioVentaPayPal= $preciosApiApp[7];
  $precioCompraPayPal= $preciosApiApp[8];
  $precioCompraBTC= $preciosApiApp[9];
  $precioCompraPayoneer= $preciosApiApp[10];
  $precioCompraBOFA= $preciosApiApp[11];
  $precioCompraPayza= $preciosApiApp[12];
  $precioCompraAmazonGC= $preciosApiApp[13];
  $precioVerfPayPal= $preciosApiApp[14];

//Variable Dolar Today
//Agarro el string de jSon de dolar today
$str = file_get_contents('https://s3.amazonaws.com/dolartoday/data.json');
//decodifico el string y lo formateo con json 
$json= json_decode($str,true);
//entro y agarro el valor del dolar
$dolartoday = $json['USD']['transferencia'];


//VARIABLES EN COMUN ---
$nombre_cliente=$_POST['Name'];//nombre del cliente
$nombre_entrega=$_POST['NameEnt'];//nombre del cliente
$num_orden=$_POST['NumPedido'];//numero de pedido
$monto_TOTAL=$_POST['Monto'];//precio total del pedido (lo que paga)
$monto_GC=$_POST['MontoGC'];//monto de la GC a entregar (lo que recibe)
$nom_GC=$_POST['NombreGC'];//nombre de la Gift Card (Ej: Amazon.com, eBay, iTunes, etc)


$monto_a_cancelar = $dolartoday*$monto_GC;

//VARIABLES INDIVIDUALES ---
//verificarPedido
$email_veri=$_POST['verificarEmail'];

//ConfirmaEntrega
$email_confirm=$_POST['ConfirmaEmail'];
//infoBTC
$email_btc=$_POST['solicitudEmailBTC'];
//$monto_en_btc=$_POST['solicitudMontoBTC'];//monto btc (Ej: 0.124554 btc)

//infoBOLIVARESAuto
$email_bsf=$_POST['BolivaresEmail'];
$monto_en_bsf=$_POST['MontoBsF'];//monto BsF (Ej: 35.000 Bsf)
$monto_en_bsfVERF=$_POST['MontoBsF'];//monto BsF (Ej: 35.000 Bsf)
$tasaDT=$_POST['DolarToday'];//tasa DolarToday (Ej: 1007 Bs.f)

if("" == trim($_POST['DolarToday'])){
    $tasaDT = $preciosApiApp[1];
}  

if("" == trim($_POST['MontoBsF'])){
	
	$monto_en_bsf=$monto_GC*$tasaDT;//monto BsF (Ej: 35.000 Bsf)

}elseif ($monto_en_bsf<0) {
	# code...
	$monto_en_bsf= $preciosApiApp[4];
}else{
	$monto_en_bsf=$monto_en_bsfVERF;
}

//infoBolivares Manual

$email_bsf_manual=$_POST['BolivaresEmailManual'];


//EntregarGC

$min=1;
$max=17;
$id_imagen=rand($min,$max);
$email_entregaGC=$_POST['entregaEmail'];
$codigoGC_1=$_POST['codigoGC1'];
$codigoGC_2=$_POST['codigoGC2'];
$codigoGC_3=$_POST['codigoGC3'];
$codigoGC_4=$_POST['codigoGC4'];
$codigoGC_5=$_POST['codigoGC5'];
$montoGC_1=$_POST['montoGC1'];
$montoGC_2=$_POST['montoGC2'];
$montoGC_3=$_POST['montoGC3'];
$montoGC_4=$_POST['montoGC4'];
$montoGC_5=$_POST['montoGC5'];
$nombre_destinatario=$_POST['NameDest'];//nombre del destinatario
if ($nombre_destinatario=="") {
 $nombre_destinatario=$nombre_cliente;
}
if ($nombre_entrega==""){
	$nombre_entrega=$nombre_destinatario;
}
if ($email_confirm==""){
	$email_confirm= $email_entregaGC;

}


//POS BTC

/// ********************************************
//
//	Aqui Hago lo del Beta
//
//  ********************************************
$numOrdenBeta = $_POST['betaPedido'];

if (isset($numOrdenBeta)){
			
			// Agarro la orden del formulario
			$numOrdenBeta = $_POST['betaPedido'];

			//correo PayPal si es distinto al de costumer
			$emailPaypal= $_POST['emailPaypal'];

			//nombre persona Paypal
			$nombrePaypal = $_POST['namePaypal'];

			// // Este es la direccion del Api
			 $apiURL= "https://app.ecwid.com/api/v3/7571385/orders";
			// // El secret para procesar
			 $secret_token= "token=";

			// //creo la variable que me devuele todo
		   $arrayData = getDataToSendGCAmazon($apiURL,$numOrdenBeta,$secret_token);

			$num_orden = $arrayData['order'];
			$nombre_cliente=$arrayData['customer'];//nombre del cliente
			$nombre_entrega=$arrayData['nombreEntrega'];//nombre del cliente
			$skuToSearch = $arrayData['sku'];
			$find = "AMZN";
			$pos = strpos($skuToSearch, $find);

			// if ($arrayData['sku']!='GCAMAZON_con_BSF' ||  ){

			// 	printf("ESTE NO ES UN PEDIDO DE GC de Amazon.com");
			// 	exit;


			// }
			// if ($pos === false){

			// 	printf("ESTE NO ES UN PEDIDO DE GC Amazon.com");
			// 	exit;


			// }
			

			if ($arrayData['sku']=='GCAMAZON_con_BSF'){

				$monto_TOTAL=$arrayData['totalGCBSF'];//precio total del pedido (lo que paga)
				$monto_GC=$arrayData['totalGCBSF'];//monto de la GC a entregar (lo que recibe)

			}
			else {

				$monto_GC=$arrayData['totalGC'];//monto de la GC a entregar (lo que recibe)
				$monto_TOTAL=$arrayData['orderTotal'];//precio total del pedido (lo que paga)

			}		
			$monto_GC=$arrayData['totalGC'];//monto de la GC a entregar (lo que recibe)
			$nom_GC=$arrayData['tienda'];//nombre de la Gift Card (Ej: Amazon.com, eBay, iTunes, etc)
			$email_entregaGC = $arrayData['emailEntrega'];
			$email_confirm = $arrayData['emailCustomer'];

			if (!empty($emailPaypal)){

				$email_confirm=$emailPaypal;
			}
			 
			 print_r($arrayData);
}


/// ********************************************
//
//	Aqui Hago lo del PAYPAL -> BSF
//
//  ********************************************

$tasaDeCambio = $_POST['tasaCambio'];
$numeroDeOrder = $_POST['numOrder'];
$montoFactura = $_POST['amountSent'];
$montoAPagarEnBsf= $_POST['amountBSF'];
$motivoFactura = $_POST['motivoFactura'];
$bancoPago = $_POST['bancoPago'];
$totalEnBSF = $_POST['totalEnBSF'];
$montoFacturaConPunto=str_replace ( ',' ,'.',$montoFactura);
$motonDespuesDeComision = $_POST['amountAfterFees'];

if($totalEnBSF==""){

	$totalEnBSF=$montoAPagarEnBsf;
}

if("" == trim($_POST['bancoPago'])){
    $bancoPago = 'Banesco';
}  

if("" == trim($_POST['motivoFactura'])){
    $motivoFactura = 'Transaccion Amparada de PayPal : PP to BSF ';
}  


if(isset($numeroDeOrder) && isset($montoFactura)){

			// // Este es la direccion del Api
			 $apiURL= "https://app.ecwid.com/api/v3/7571385/orders";
			// // El secret para procesar
			 $secret_token= "token=";

			// //creo la variable que me devuele todo				   
		   
		   $arrayData = getBSFtoPaypal($apiURL,$numeroDeOrder,$secret_token,$motivoFactura,$montoFactura);
		  
		   $emailCustomer = $arrayData['emailCustomer'];
		   $nombreCostumer = $arrayData['customer'];
		print_r($arrayData);		   

	      $dataPayPal = array(
	          'fullName' =>$arrayData['fullName']." orden #".$numeroDeOrder,
	          'emailPayPal' =>$arrayData['emailPayPal'],
	          'amount' => $montoFacturaConPunto,
	          'razonInvoice' => $motivoFactura." orden #".$numeroDeOrder,
	      );
	      print_r($dataPayPal);
		 
}



/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require "PHPMailer/PHPMailerAutoload.php";
//Load dependencies from composer
//If this causes an error, run 'composer install'
require "PHPMailer/vendor/autoload.php";
require "msgcontent.php";


//Authentication ---
$gmusername='';
$gmpassword='';





//Create a new PHPMailer instance
$mail = new PHPMailerOAuth;
$mail2 = new PHPMailerOAuth;


//Tell PHPMailer to use SMTP
//$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
$mail2->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
$mail2->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = gethostbyname('smtp.gmail.com');
$mail2->Host = gethostbyname('smtp.gmail.com');

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
$mail2->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
$mail2->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;
$mail2->SMTPAuth = true;

//Set AuthType
$mail->AuthType = 'XOAUTH2';
$mail2->AuthType = 'XOAUTH2';

//User Email to use for SMTP authentication - Use the same Email used in Google Developer Console
$mail->oauthUserEmail = "vys@appbb.co";
$mail2->oauthUserEmail = "vys@appbb.co";
//Obtained From Google Developer Console
$mail->oauthClientId = "";
$mail2->oauthClientId = "";

//Obtained From Google Developer Console
$mail->oauthClientSecret = "";
$mail2->oauthClientSecret = "";

//Obtained By running get_oauth_token.php after setting up APP in Google Developer Console.
//Set Redirect URI in Developer Console as [https/http]://<yourdomain>/<folder>/get_oauth_token.php
// eg: http://localhost/phpmail/get_oauth_token.php
//old $mail->oauthRefreshToken = ";
$mail->oauthRefreshToken = "";
$mail->CharSet="utf-8";
$mail->isHTML(true);

$mail2->oauthRefreshToken = "";
$mail2->CharSet="utf-8";
$mail2->isHTML(true);
//Set who the message is to be sent from
//For gmail, this generally needs to be the same as the user you logged in as
$mail->setFrom('vys@appbb.co', 'Ventas y Soporte - Appbb.co');
$mail2->setFrom('vys@appbb.co', 'Ventas y Soporte - Appbb.co');

//Set who the message is to be sent to
//Aquien voy a enviar..


if ($email_btc!="") {

		$mail->addAddress($email_btc,$nombre_cliente);
		$mail->addBCC('vys@appbb.co');
		//Set the subject line

		$mail->Subject = $asunto_notificar_btc;

		$mail->Body= $notificar_btc;
		$mail->AltBody    = $notificar_btc;

}
if ($email_veri!="") {

		// Send an email:

		if( isset($_POST['chckExtranjero'])){
			$msgVerifcacion= $msgVerifcacion_Extrajero;
		}
		else{
			$msgVerifcacion = $msgVerifcacion;
		}

		$sendResult = $client->sendEmail(
		  "vys@appbb.co",
		  $email_veri,
		  $asuntoVerificacion,		  
		  $msgVerifcacion,
		  '',
		  '',
		  '',
		  '',
		  'vys@appbb.co'
		);

		// $mail->addAddress($email_veri,$nombre_cliente);
		// $mail->addBCC('vys@appbb.co');
		// //Set the subject line
		// $mail->Subject = $asuntoVerificacion;
		// if( isset($_POST['chckExtranjero'])){
		// 	$mail->Body= $msgVerifcacion_Extrajero;
		// 	$mail->AltBody    = $msgVerifcacion_Extrajero;
		// }
		// else{
		// 	$mail->Body= $msgVerifcacion;
		// 	$mail->AltBody    = $msgVerifcacion;			
		// }

		$data =array("fulfillmentStatus"=> "PROCESSING"); 
		CallAPIPUT($service_url,$data);
	$sql2 = "INSERT INTO `logs` (usuario,accion,pedido) VALUES ('$username', 'Verificacion de Pedido:$email_veri ', '$num_orden')";
	$result = mysqli_query($connection, $sql2);


}
// if ($email_confirm!="") {

// 		$mail->addAddress($email_confirm,$nombre_cliente);
// 		$mail->addBCC('vys@appbb.co');
// 		//Set the subject line

// 		$mail->Subject = $asuntoCompEntrega;

// 		$mail->Body= $msgCompEntrega;
// 		$mail->AltBody    = $msgCompEntrega;
// }
if ($email_bsf!="") {

		  $sendResult = $client->sendEmail(
		  "vys@appbb.co",
		  $email_bsf,
		  $asuntoBolivares,		  
		  $msgBolivares,
		  '',
		  '',
		  '',
		  '',
		  'vys@appbb.co'
		);
		// $mail->addAddress($email_bsf,$nombre_cliente);
		// $mail->addBCC('vys@appbb.co');
		// //Set the subject line

		// $mail->Subject = $asuntoBolivares;

		// $mail->Body= $msgBolivares;
		// $mail->AltBody    = $msgBolivares;
				$data =array("fulfillmentStatus"=> "PROCESSING"); 
		CallAPIPUT($service_url,$data);
	$sql2 = "INSERT INTO `logs` (usuario,accion,pedido) VALUES ('$username', 'Envio de Factura PayPal a BSF: $email_bsf', '$num_orden')";
	$result = mysqli_query($connection, $sql2);
}

if(isset($numeroDeOrder) && isset($montoFactura) && isset($motivoFactura) ){

		if($_POST['verificado'] == 'Yes') 
		{
		    $msgBolivares= $msgPayPalBSFVerificado;
		}
		else
		{
			$msgBolivares= $msgPayPalBSFNoVerificado;
		} 
		  $sendResult = $client->sendEmail(
		  "vys@appbb.co",
		  $emailCustomer,
		  $asuntoPayPalBsf,		  
		  $msgBolivares,
		  '',
		  '',
		  '',
		  '',
		  ''
		);
		// $mail->addAddress($emailCustomer,$nombreCostumer);
		// $mail->addBCC('vys@appbb.co');
		// //Set the subject line

		// $mail->Subject = $asuntoPayPalBsf;

		// if($_POST['verificado'] == 'Yes') 
		// {
		//     $mail->Body= $msgPayPalBSFVerificado;
		// 	$mail->AltBody= $msgPayPalBSFVerificado;
		// }
		// else
		// {
		// 	$mail->Body= $msgPayPalBSFNoVerificado;
		// 	$mail->AltBody= $msgPayPalBSFNoVerificado;
		// } 


				$data =array("fulfillmentStatus"=> "PROCESSING"); 
		CallAPIPUT($service_url2,$data);
	    CallApiPayPal($dataPayPal);
	$sql2 = "INSERT INTO `logs` (usuario,accion,pedido) VALUES ('$username', 'Envio de Factura PayPal a BSF: $emailCustomer', '$numeroDeOrder')";
	$result = mysqli_query($connection, $sql2);
}


if ($email_bsf_manual!="") {


		  $sendResult = $client->sendEmail(
		  "vys@appbb.co",
		  $email_bsf_manual,
		  $asuntoBolivaresManual,		  
		  $msgBolivaresManual,
		  '',
		  '',
		  '',
		  '',
		  ''
		);
		// $mail->addAddress($email_bsf_manual,$nombre_cliente);
		// $mail->addBCC('vys@appbb.co');
		// //Set the subject line

		// $mail->Subject = $asuntoBolivaresManual;

		// $mail->Body= $msgBolivaresManual;
		// $mail->AltBody    = $msgBolivaresManual;

				$data =array("fulfillmentStatus"=> "PROCESSING"); 
		CallAPIPUT($service_url,$data);
		$sql2 = "INSERT INTO `logs` (usuario,accion,pedido) VALUES ('$username', 'Envio orden en BSF', '$num_orden')";
	$result = mysqli_query($connection, $sql2);
}


if ($email_entregaGC!="") {


		  $sendResult = $client->sendEmail(
		  "vys@appbb.co",
		  $email_entregaGC,
		  $asuntoEntregaGC,		  
		  $msgEntregaGC,
		  '',
		  '',
		  '',
		  '',
		  'vys@appbb.co'
		);
		// $mail->addAddress($email_entregaGC,$nombre_cliente);
		// $mail->addBCC('vys@appbb.co');
		// //Set the subject line

		// $mail->Subject = $asuntoEntregaGC;

		// $mail->Body= $msgEntregaGC;
		// $mail->AltBody    = $msgEntregaGC;

		//aqui mando la confirmacion
		  $sendResult = $client->sendEmail(
		  "vys@appbb.co",
		  $email_confirm,
		  $asuntoCompEntrega,		  
		  $msgCompEntrega,
		  '',
		  '',
		  '',
		  '',
		  ''
		);
		// $mail2->addAddress($email_confirm,$nombre_entrega);
		// $mail2->addBCC('vys@appbb.co');
		// //Set the subject line

		// $mail2->Subject = $asuntoCompEntrega;

		// $mail2->Body= $msgCompEntrega;
		// $mail2->AltBody    = $msgCompEntrega;

		// 	if (!$mail2->send()) {
		// 	    echo "Mailer Error: " . $mail2->ErrorInfo;
		// 	} else {
		// 	    $imapStream = imap_open("{imap.gmail.com:993/}INBOX", $gmusername, $gmpassword);
		// 	    imap_append($imapStream, "{imap.gmail.com:993}INBOX", $mail2->getSentMIMEMessage(), "\\Seen");
		// 	    imap_close($imapStream);
		// }
		//$data =array("paymentStatus"=> "PAID","fulfillmentStatus"=> "DELIVERED"); 
		//CallAPIPUT($service_url,$data);
		$sql2 = "INSERT INTO `logs` (usuario,accion,pedido) VALUES ('$username', 'Ennvio de GC $email_entregaGC', '$num_orden')";
		$result = mysqli_query($connection, $sql2);		
}

//Con esto adjunto imagenes
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$sendResult) {
    print "error";
} else {
  // con esto agrego el correo enviado  a la  carpeta de enviados.
    // $imapStream = imap_open("{imap.gmail.com:993/}INBOX", $gmusername, $gmpassword);
    // imap_append($imapStream, "{imap.gmail.com:993}INBOX", $mail->getSentMIMEMessage(), "\\Seen");
    // imap_close($imapStream);
     print $response;

}


?>