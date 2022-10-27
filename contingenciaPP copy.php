<?php

require "function.php";
require "prices.php";
include_once 'connect.php';
require "PHPMailer/PHPMailerAutoload.php";
//Load dependencies from composer
//If this causes an error, run 'composer install'
require "PHPMailer/vendor/autoload.php";
//require "msgcontent.php";
require_once('./postmarkapp/vendor/autoload.php');
use Postmark\PostmarkClient;
use Postmark\Models\PostmarkException;



$client = new PostmarkClient("");

$preciosApiApp = getLastPriceNew();
// Get contents of webhook request
$requestBody = file_get_contents('php://input');
$client_secret = ''; // your client_secret value sent to you after the app registration
// Parse webhook data
$decodedBody = json_decode($requestBody, true);


$cambio2con5= "https://goo.gl/oAPfwx";
$cambio5con60="https://goo.gl/rM4w4j";
$cambio10con89="https://goo.gl/ygGGGx";
$cambio16con17= "https://goo.gl/kDtmpN";
$cambio21con46="https://goo.gl/4ehvWF";
$cambio26con74="https://goo.gl/8oEwdK";
$cambio32con03= "https://goo.gl/BPPqdG";


$cambio37con32= "https://goo.gl/cRGAkC";
$cambio42con60= "https://goo.gl/49xXp2";
$cambio47con89= "https://goo.gl/thq63X";
$cambio63con74= "https://goo.gl/C4968T";
$cambio84con88= "https://goo.gl/EVbYJ4";


$cambio53con17 ="https://goo.gl/9yXcuz";
$cambio79con00="https://goo.gl/hb6Q9i";
$cambio106con03 = "https://goo.gl/jcu6vC";



//COMUNES
$nombre_cliente = "cliente  de appbb";
$email_bsf = $_POST["email_paypal"];
$tasaCompra= $preciosApiApp[2];
$montoCambio= $_POST["montoConComision"];
$entityId= $_POST["numPedido"];
// PRECIOS CON VARIBLES

  $precioCompraPayPal= $preciosApiApp[8];

if (1==1){

$urlRepo = "https://app.ecwid.com/api/v3/7571385/products/77617495?token=";

 $precioCompraPayPal;

 $linkArticulo ="";
 if ($montoCambio == "2.50" ){

    $linkArticulo = $cambio2con5;
    $montoFacturaCompleto = 2.96;
    $montoFacturaCompletoSinComision = 2.50;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayPal*$montoFacturaCompletoSinComision;

 }
 elseif ($montoCambio == "5") {

    $linkArticulo = $cambio5con60;
    $montoFacturaCompleto = 5.60;
    $montoFacturaCompletoSinComision = 5.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayPal*$montoFacturaCompletoSinComision;
 }
 elseif ($montoCambio == "10") {

    $linkArticulo = $cambio10con89;
    $montoFacturaCompleto = 10.89;
    $montoFacturaCompletoSinComision = 10.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayPal*$montoFacturaCompletoSinComision;

 }
  elseif ($montoCambio == "15") {

    $linkArticulo = $cambio16con17;
    $montoFacturaCompleto = 16.17;
    $montoFacturaCompletoSinComision = 15.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayPal*$montoFacturaCompletoSinComision;

 }
  elseif ($montoCambio == "20") {

    $linkArticulo = $cambio21con46;
    $montoFacturaCompleto = 21.46;
    $montoFacturaCompletoSinComision = 20.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayPal*$montoFacturaCompletoSinComision;

 }
 elseif ($montoCambio == "25") {

   $linkArticulo = $cambio26con74;
   $montoFacturaCompleto = 26.74;
   $montoFacturaCompletoSinComision = 25.00;
   $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayPal*$montoFacturaCompletoSinComision;

}
   elseif ($montoCambio == "30") {

    $linkArticulo = $cambio32con03;
    $montoFacturaCompleto = 32.03;
    $montoFacturaCompletoSinComision = 30.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayPal*$montoFacturaCompletoSinComision;

 }
// NUEVOS

    elseif ($montoCambio == "35") {

    $linkArticulo = $cambio37con32;
    $montoFacturaCompleto = 37.32;
    $montoFacturaCompletoSinComision = 35.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayPal*$montoFacturaCompletoSinComision;

 }
    elseif ($montoCambio == "40") {

    $linkArticulo = $cambio42con60;
    $montoFacturaCompleto = 42.60;
    $montoFacturaCompletoSinComision = 40.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayPal*$montoFacturaCompletoSinComision;

 }

 
    elseif ($montoCambio == "45") {

    $linkArticulo = $cambio47con89;
    $montoFacturaCompleto = 47.89;
    $montoFacturaCompletoSinComision = 45.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayPal*$montoFacturaCompletoSinComision;

 }
    elseif ($montoCambio == "60") {

    $linkArticulo = $cambio63con74;
    $montoFacturaCompleto = 63.74;
    $montoFacturaCompletoSinComision = 60.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayPal*$montoFacturaCompletoSinComision;

 }

 
    elseif ($montoCambio == "80") {

    $linkArticulo = $cambio84con88;
    $montoFacturaCompleto = 84.88;
    $montoFacturaCompletoSinComision = 80.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayPal*$montoFacturaCompletoSinComision;

 }
    elseif ($montoCambio == "50") {

    $linkArticulo = $cambio53con17;
    $montoFacturaCompleto = 53.17;
    $montoFacturaCompletoSinComision = 50.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayPal*$montoFacturaCompletoSinComision;

 }
    elseif ($montoCambio == "75") {

    $linkArticulo = $cambio79con00;
    $montoFacturaCompleto = 79.60;
    $montoFacturaCompletoSinComision = 75.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayPal*$montoFacturaCompletoSinComision;

 }
    elseif ($montoCambio == "100") {

    $linkArticulo = $cambio106con03;
    $montoFacturaCompleto = 106.03;
    $montoFacturaCompletoSinComision = 100.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayPal*$montoFacturaCompletoSinComision;

 }
    elseif ($montoCambio == "100") {
    $linkArticulo = $cambio106con03;
    $montoFacturaCompleto = 106.03;
    $montoFacturaCompletoSinComision = 100.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayPal*$montoFacturaCompletoSinComision;
   # code...
 }

$asuntoPayPalBsf = 'Informacion de su opración de PayPal Order #'.$entityId.' - Tienda de Appbb';

$msgPayPalBSFNoVerificado= "<!DOCTYPE HTML PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><!--[if IE]><html xmlns='http://www.w3.org/1999/xhtml' class='ie-browser' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'><![endif]--><!--[if !IE]><!--><html style='margin: 0;padding: 0;' xmlns='http://www.w3.org/1999/xhtml'><!--<![endif]--><head>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta name='viewport' content='width=device-width'>
    <!--[if !mso]><!--><meta http-equiv='X-UA-Compatible' content='IE=edge'><!--<![endif]-->
    <title>Template Base</title>
    <!--[if !mso]><!-- -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <!--<![endif]-->

    <style type='text/css' id='media-query'>
      body {
  margin: 0;
  padding: 0; }

table, tr, td {
  vertical-align: top;
  border-collapse: collapse; }

.ie-browser table, .mso-container table {
  table-layout: fixed; }

* {
  line-height: inherit; }

a[x-apple-data-detectors=true] {
  color: inherit !important;
  text-decoration: none !important; }

[owa] .img-container div, [owa] .img-container button {
  display: block !important; }

[owa] .fullwidth button {
  width: 100% !important; }

.ie-browser .col, [owa] .block-grid .col {
  display: table-cell;
  float: none !important;
  vertical-align: top; }

.ie-browser .num12, .ie-browser .block-grid, [owa] .num12, [owa] .block-grid {
  width: 500px !important; }

.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
  line-height: 100%; }

.ie-browser .mixed-two-up .num4, [owa] .mixed-two-up .num4 {
  width: 164px !important; }

.ie-browser .mixed-two-up .num8, [owa] .mixed-two-up .num8 {
  width: 328px !important; }

.ie-browser .block-grid.two-up .col, [owa] .block-grid.two-up .col {
  width: 250px !important; }

.ie-browser .block-grid.three-up .col, [owa] .block-grid.three-up .col {
  width: 166px !important; }

.ie-browser .block-grid.four-up .col, [owa] .block-grid.four-up .col {
  width: 125px !important; }

.ie-browser .block-grid.five-up .col, [owa] .block-grid.five-up .col {
  width: 100px !important; }

.ie-browser .block-grid.six-up .col, [owa] .block-grid.six-up .col {
  width: 83px !important; }

.ie-browser .block-grid.seven-up .col, [owa] .block-grid.seven-up .col {
  width: 71px !important; }

.ie-browser .block-grid.eight-up .col, [owa] .block-grid.eight-up .col {
  width: 62px !important; }

.ie-browser .block-grid.nine-up .col, [owa] .block-grid.nine-up .col {
  width: 55px !important; }

.ie-browser .block-grid.ten-up .col, [owa] .block-grid.ten-up .col {
  width: 50px !important; }

.ie-browser .block-grid.eleven-up .col, [owa] .block-grid.eleven-up .col {
  width: 45px !important; }

.ie-browser .block-grid.twelve-up .col, [owa] .block-grid.twelve-up .col {
  width: 41px !important; }

@media only screen and (min-width: 520px) {
  .block-grid {
    width: 500px !important; }
  .block-grid .col {
    display: table-cell;
    Float: none !important;
    vertical-align: top; }
    .block-grid .col.num12 {
      width: 500px !important; }
  .block-grid.mixed-two-up .col.num4 {
    width: 164px !important; }
  .block-grid.mixed-two-up .col.num8 {
    width: 328px !important; }
  .block-grid.two-up .col {
    width: 250px !important; }
  .block-grid.three-up .col {
    width: 166px !important; }
  .block-grid.four-up .col {
    width: 125px !important; }
  .block-grid.five-up .col {
    width: 100px !important; }
  .block-grid.six-up .col {
    width: 83px !important; }
  .block-grid.seven-up .col {
    width: 71px !important; }
  .block-grid.eight-up .col {
    width: 62px !important; }
  .block-grid.nine-up .col {
    width: 55px !important; }
  .block-grid.ten-up .col {
    width: 50px !important; }
  .block-grid.eleven-up .col {
    width: 45px !important; }
  .block-grid.twelve-up .col {
    width: 41px !important; } }

@media (max-width: 520px) {
  .block-grid, .col {
    min-width: 320px !important;
    max-width: 100% !important; }
  .block-grid {
    width: calc(100% - 40px) !important; }
  .col {
    width: 100% !important; }
    .col > div {
      margin: 0 auto; }
  img.fullwidth {
    max-width: 100% !important; } }

    </style>
</head>
<!--[if mso]>
<body class='mso-container' style='background-color:#FFFFFF;'>
<![endif]-->
<!--[if !mso]><!-->
<body class='clean-body' style='margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #FFFFFF'>
<!--<![endif]-->
  <div class='nl-container' style='min-width: 320px;Margin: 0 auto;background-color: #FFFFFF'>
    <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td align='center' style='background-color: #FFFFFF;'><![endif]-->

    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><strong><span style='font-size: 20px; line-height: 24px;'>TIENDA DE APPBB</span></strong></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <!--[if (mso)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'><tr><td><![endif]-->
  <div align='center'><div style='border-top: 1px solid #BBBBBB; width:100%; line-height:0px;'>&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>



                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
    <div style='font-size:12px;line-height:14px;font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;color:#555555;text-align:left;'>
      <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 21px;'><strong><span style='line-height: 21px; font-size: 16px;'>Información para su operación con PayPal  Orden #$entityId.</span></strong></span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <!--[if (mso)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'><tr><td><![endif]-->
  <div align='center'><div style='border-top: 1px solid #BBBBBB; width:100%; line-height:0px;'>&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'
    <div style='font-size:12px;line-height:14px;font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;color:#555555;text-align:left;'>
  <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><span style='font-size: 12px; line-height: 14px;'>Hola, hemos recibido su solicitud de PayPal. Recibirá el monto que se indica a continuación, los productos ya incluyen el costo de las comisiones. Realizaremos el pago desde el banco donde exista disponibilidad, note que este pago puede ser enviado de un banco distinto al suyo<strong>. No garantizamos pagos desde el mismo banco. </strong><br>
    <br>A continuación la información de su pedido:</span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid four-up'>
        <div style='border-collapse: collapse;display: table;width: 100%;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='125' style=' width:125px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num3' style='Float: left;max-width: 320px;min-width: 125px;width: 125px;width: calc(97625px - 19500%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>La tasa para el dia de hoy es de:</p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 19px;'><strong>$precioCompraPayPal </strong></span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align='center' width='125' style=' width:125px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num3' style='Float: left;max-width: 320px;min-width: 125px;width: 125px;width: calc(97625px - 19500%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>Su solicitud de cambio fue de:</p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 19px;'><strong>$ $montoFacturaCompleto</strong></span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align='center' width='125' style=' width:125px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num3' style='Float: left;max-width: 320px;min-width: 125px;width: 125px;width: calc(97625px - 19500%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>El monto después de comisiones de PayPal:</p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 19px;'><strong>$ $montoFacturaCompletoSinComision</strong></span><br></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align='center' width='125' style=' width:125px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num3' style='Float: left;max-width: 320px;min-width: 125px;width: 125px;width: calc(97625px - 19500%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'>
      <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>Recibirá:</p><p style='margin: 0;font-size: 12px;line-height: 14px'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 19px;'><strong>$montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla </strong></span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid two-up'>
        <div style='border-collapse: collapse;display: table;width: 100%;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='250' style=' width:250px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num6' style='Float: left;max-width: 320px;min-width: 250px;width: 250px;width: calc(35250px - 7000%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'>
      <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><span style='font-size: 14px; line-height: 16px;'>Si es la <strong><span style='color: rgb(128, 0, 0); font-size: 14px; line-height: 16px;'>primera vez</span></strong> que trabaja con nosotros, verifique que puede enviarnos los siguientes recaudos <span style='color: rgb(128, 0, 0); font-size: 14px; line-height: 16px;'><strong>obligatorios</strong></span> :</span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 0px;'>
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'>
      <ul><li style='font-size: 12px; line-height: 14px; text-align: justify;'><strong>Documento</strong> llenado a mano con los datos de la persona titular de la cuenta PayPal (haga <a style='color:#0068A5;text-decoration: underline;' href='https://drive.google.com/file/d/0BwbXQN6ZFgYSaWU1emNOaGhTSms/view?usp=sharing' target='_blank' rel='noopener noreferrer'>click aquí</a> para descargar).</li><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'></p>
        <p style='font-size: 12px; line-height: 14px; text-align: justify;'><strong>Nota:</strong> Solo debe imprimir la página 5 (última página) del documento (<a style='color:#0068A5;text-decoration: underline;' href='https://drive.google.com/file/d/0BwbXQN6ZFgYSSUNpSnJBVWRVVE0/view?usp=sharing' target='_blank' rel='noopener noreferrer'>click aquí</a> para ver ejemplo).</p></ul>
      <ul style='text-align: justify;'><li style='font-size: 12px; line-height: 14px;'><strong>Foto de documento de identidad</strong> (Puede ser foto de la cédula, pasaporte o licencia de conducir)<br>Foto de buena calidad. No se aceptan copias.</li></ul>
      <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'></p><ul>
        <li style='font-size: 12px; line-height: 14px; text-align: justify;'><strong>Cuenta Bancaria</strong> a donde desea recibir los fondos. <span style='text-decoration: underline; font-size: 12px; line-height: 14px;'><em>Puede ser una cuenta de un familiar o amigo</em></span>. En el siguiente formato de <strong>forma escrita</strong>: Titular, cédula de identidad, banco, tipo de cuenta, número de cuenta.</li></ul>
      <ul style='text-align: justify;'><li style='font-size: 12px; line-height: 14px;'><strong>Comprobante de pago</strong> (número de pedido de la tienda de nuestro proveedor o comprobante de pago en PayPal).</li></ul>
      <ul style='text-align: justify;'><li style='font-size: 12px; line-height: 14px;'><strong>Número de teléfono</strong> (los utilizaremos para notificar que ya hemos procesado su pedido).</li></ul>
      <ul style='text-align: justify;'><li style='font-size: 12px; line-height: 14px;'><strong style='color: rgb(255, 0, 0);'>NUEVO IMPORTANTE</strong></ul><ul> Indiquenos por acá el número de factura de CONPACA.</li></ul>

    </div>
</div>

<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align='center' width='250' style=' width:250px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num6' style='Float: left;max-width: 320px;min-width: 250px;width: 250px;width: calc(35250px - 7000%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><span style='font-size: 14px; line-height: 16px;'>Si es cliente frecuente <span style='color: rgb(0, 128, 0); font-size: 14px; line-height: 16px;'><strong>y ya nos ha enviado los recaudos</strong></span> por favor envíe únicamente lo siguiente:</span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                    <div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
                        <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'>
                          <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'></p><ul>
                            <li style='font-size: 12px; line-height: 14px; text-align: justify;'><strong>Cuenta Bancaria</strong> a donde desea recibir los fondos. <span style='text-decoration: underline; font-size: 12px; line-height: 14px;'><em>Puede ser una cuenta de un familiar o amigo</em></span>. En el siguiente formato de <strong>forma escrita</strong>: Titular, cédula de identidad, banco, tipo de cuenta, número de cuenta.</li></ul>
                          <ul style='text-align: justify;'><li style='font-size: 12px; line-height: 14px;'><strong>Comprobante de pago</strong> (número de pedido de la tienda de nuestro proveedor o comprobante de pago en PayPal).</li></ul>
                          <ul style='text-align: justify;'>
                            <li style='font-size: 12px; line-height: 14px;'><strong>Cuenta Corriente.</strong> Si es de ahorro, su pedido puede retrasarse debido a las limitaciones de las cuentas de ahorro.</li></ul>
                          <ul style='text-align: justify;'><li style='font-size: 12px; line-height: 14px;'><strong>Número de teléfono</strong> (los utilizaremos para notificar que ya hemos procesado su pedido).</li></ul>
                          <ul style='text-align: justify;'><li style='font-size: 12px; line-height: 14px;'><strong style='color: rgb(255, 0, 0);'>NUEVO IMPORTANTE</strong></ul><ul> Indiquenos por acá el número de factura de CONPACA.</li></ul>
                        </div>
                    </div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'>
    <p style='margin: 0;font-size: 20px;line-height: 14px;text-align: justify'><strong>REALICE SU PAGO:</strong></p>
    <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'>
    <br>- <strong>INGRESE EN EL SIGUIENTE ENLACE:</strong> <a style='color:#0068A5;text-decoration: underline;' href='$linkArticulo' target='_blank' rel='noopener noreferrer'>click aquí</a> para pagar.
    <br>&nbsp;Una vez dentro del producto coloque su número de pedido <strong>(#$entityId)</strong> y realice el pago con PayPal.
    <br>- Haga <a style='color:#0068A5;text-decoration: underline;' href='https://drive.google.com/file/d/0BwbXQN6ZFgYSbW1yazh1VjV6Qjg/view?usp=sharing' target='_blank' rel='noopener noreferrer'>click aquí</a> para ver instrucciones de cómo realizar el pago.
    <br>- Si realizo su pago con éxito, se le generará un número de pedido en la tienda de nuestro proveedor. <strong>Ese es su número de factura para concretar el canje en nuestra tienda.</strong></p></div>
</div>

<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'>
    <p style='margin: 0;font-size: 20px;line-height: 14px;text-align: justify'><strong>ENVÍENOS SUS RECAUDOS:</strong></p>
    <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'>
    <br>
    <br>- <span style='color: rgb(128, 0, 0); font-size: 14px; line-height: 16px;'><strong>Cliente Nuevo: envíe todos los recaudos a VYS@APPBB.CO (Solo la primera vez)</strong></span> Foto del documento llenado a mano con su cédula (recuerde que debe coincidir con el titular de la cuenta que envía el pago), foto de la cédula, cuenta bancaria y número de pedido de CONPACA.
    <br>- <span style='color: rgb(0, 128, 0); font-size: 14px; line-height: 16px;'><strong>Cliente Frecuente: envíe los recaudos a PAYPAL@APPBB.CO</strong></span> Número de pedido de Appbb, cuenta bancaria y número de pedido de CONPACA.</strong></p></div>
</div>

<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><strong>Información importante:</strong> Los pagos realizados a través de PayPal son gestionados por una tercera empresa que nos presta servicio, este acuerdo le permite al cliente validar el origen de sus fondos. Al utilizar este servicio está aceptando las condiciones de uso de nuestra tienda y las de nuestro proveedor. Lea detenidamente los detalles del acuerdo descritos en el documento que le hemos solicitado llenar.</p></div>
</div>
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><strong>Nota:</strong> Si realiza el pago con una nueva cuenta PayPal desde la cual no haya enviado los recaudos, deberá enviar nuevamente todos los recaudos solicitados, incluido el documento privado.</p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><strong> APPBB SERVICES, LLC. Delaware, Estados Unidos</strong></p>
      <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><strong>Appbb.co © 2010 - 2017</strong></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>   <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
  </div>


</body></html>
";

     $sendResult = $client->sendEmail(
      "vys@appbb.co",
      $email_bsf,
      $asuntoPayPalBsf,
      $msgPayPalBSFNoVerificado,
      '',
      '',
      '',
      'paypal@appbb.co',
      ''
    );



}






?>
<meta http-equiv="refresh" content="0; url=https://www.appbb.co/template-sender2/contingenciaPayPal.php" />

