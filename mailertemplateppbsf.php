<?php
session_start();
include_once 'connect.php';

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
}

require "function.php";
require_once('./postmarkapp/vendor/autoload.php');
use Postmark\PostmarkClient;
use Postmark\Models\PostmarkException;


$client = new PostmarkClient("");




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
			//print_r($arrayData);		   

	      $dataPayPal = array(
	          'fullName' =>$arrayData['fullName']." orden #".$numeroDeOrder,
	          'emailPayPal' =>$arrayData['emailPayPal'],
	          'amount' => $montoFacturaConPunto,
	          'razonInvoice' => $motivoFactura." orden #".$numeroDeOrder,
	      );
	      //print_r($dataPayPal);
		 
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
$gmusername='vys@appbb.co';
$gmpassword='?';





//Create a new PHPMailer instance
$mail = new PHPMailerOAuth;
$mail2 = new PHPMailerOAuth;


//Tell PHPMailer to use SMTP
//$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
$mail2->SMTPDebug = 0;

//Ask for HTML-friendly debug output
//$mail->Debugoutput = 'html';
//$mail2->Debugoutput = 'html';

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
//old $mail->oauthRefreshToken = "1/3t6pTyZN-o6Wno-ZNbYr0IHVXm-SwuFF2EyhT42GkPQ";
$mail->oauthRefreshToken = "";
$mail->CharSet="utf-8";
$mail->isHTML(true);

$mail2->oauthRefreshToken = "-";
$mail2->CharSet="utf-8";
$mail2->isHTML(true);
//Set who the message is to be sent from
//For gmail, this generally needs to be the same as the user you logged in as
$mail->setFrom('vys@appbb.co', 'Ventas y Soporte - Appbb.co');
$mail2->setFrom('vys@appbb.co', 'Ventas y Soporte - Appbb.co');

//Set who the message is to be sent to
//Aquien voy a enviar..



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
		  'vys@appbb.co'
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
	$sql2 = "INSERT INTO `logs` (usuario,accion,pedido) VALUES ('$username', 'Factura desde template: $emailCustomer', '$numeroDeOrder')";
	$result = mysqli_query($connection, $sql2);


}

//Con esto adjunto imagenes
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$sendResult) {
    echo "Mailer Error";
} else {
  // con esto agrego el correo enviado  a la  carpeta de enviados.
    echo '<script type="text/javascript">
           window.location = "https://www.appbb.co/template-sender2/ppbsfexp.php"
      </script>';
    

}


?>