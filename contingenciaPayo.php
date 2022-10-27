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



//COMUNES
$nombre_cliente = "cliente  de appbb";
$email_bsf = $_POST["email"];
$tasaCompra= $preciosApiApp[2];
$montoCambio= $_POST["montoConComision"];
$entityId= $_POST["numPedido"];
// PRECIOS CON VARIBLES

  $precioCompraPayoneer= $preciosApiApp[10];

// Payoneer 

if (1==1 ){
$urlRepo = "https://app.ecwid.com/api/v3/7571385/products/77617495?token=";



  $linkArticulo ="";
 if ($montoCambio == "Cambiar $5.00" ){

    $montoFacturaCompleto = 5.52;
    $montoFacturaCompletoSinComision = 5.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayoneer*$montoFacturaCompletoSinComision;

 }
 //INICIO NUEVOS STRIPE-PAYONEER
 elseif ($montoCambio == "5") {
    $nombreBoton="Memoria SD KingSton 16GB. Precio: $5.52";
    $linkArticulo = "https://mobileservicestore.ecwid.com/Memoria-SD-KingSton-16GB-Memoria-Externa-p90647719";
    $montoFacturaCompleto = 5.52;
    $montoFacturaCompletoSinComision = 5.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayoneer*$montoFacturaCompletoSinComision;
 }
  elseif ($montoCambio == "10") {
    $nombreBoton="Memoria SD KingSton 32GB. Precio: $10.72";
    $linkArticulo = "https://mobileservicestore.ecwid.com/Memoria-SD-KingSton-32GB-Memoria-Externa-p123276883";
    $montoFacturaCompleto = 10.72;
    $montoFacturaCompletoSinComision = 10.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayoneer*$montoFacturaCompletoSinComision;
 }
 elseif ($montoCambio == "15") {
    $nombreBoton="Power Bank 10.000 mAh. Precio: $15.92";
    $linkArticulo = "https://mobileservicestore.ecwid.com/Power-Bank-10-000-mAh-Cargador-portatil-p123276890";
    $montoFacturaCompleto = 15.92;
    $montoFacturaCompletoSinComision = 15.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayoneer*$montoFacturaCompletoSinComision;
 }
 elseif ($montoCambio == "20") {
    $nombreBoton="Battery Case para iPhone X. Precio $21.12";
    $linkArticulo = "https://mobileservicestore.ecwid.com/Battery-Case-para-iPhone-X-Forro-Case-p123276895";
    $montoFacturaCompleto = 21.12;
    $montoFacturaCompletoSinComision = 20.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayoneer*$montoFacturaCompletoSinComision;
 }
 elseif ($montoCambio == "30") {
    $nombreBoton="Amazon Fire 7. Precio $31.53";
    $linkArticulo = "https://mobileservicestore.ecwid.com/Amazon-Fire-7-Tablet-p123276903";
    $montoFacturaCompleto = 31.53;
    $montoFacturaCompletoSinComision = 30.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayoneer*$montoFacturaCompletoSinComision;
 }
 elseif ($montoCambio == "40") {
    $nombreBoton="Bam Digitel 4G. Precio: $41.94";
    $linkArticulo = "https://mobileservicestore.ecwid.com/Bam-Digitel-4G-Wifi-Portatil-p123276916";
    $montoFacturaCompleto = 41.94;
    $montoFacturaCompletoSinComision = 40.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayoneer*$montoFacturaCompletoSinComision;
 }
  elseif ($montoCambio == "50") {
    $nombreBoton="ZTE Maven 3. Precio: $52.34";
    $linkArticulo = "https://mobileservicestore.ecwid.com/ZTE-Maven-3-Smartphone-p123276919";
    $montoFacturaCompleto = 52.34;
    $montoFacturaCompletoSinComision = 50.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayoneer*$montoFacturaCompletoSinComision;
 }
  elseif ($montoCambio == "75") {
    $nombreBoton="ZTE Z851. Precio: $78.36";
    $linkArticulo = "https://mobileservicestore.ecwid.com/ZTE-Z851-Smartphone-p154850141";
    $montoFacturaCompleto = 78.36;
    $montoFacturaCompletoSinComision = 75.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayoneer*$montoFacturaCompletoSinComision;
 }
  elseif ($montoCambio == "100") {
    $nombreBoton="Alcatel CameoX. Precio: $104.37";
    $linkArticulo = "https://mobileservicestore.ecwid.com/Alcatel-CameoX-Smartphone-p123276929";
    $montoFacturaCompleto = 104.37;
    $montoFacturaCompletoSinComision = 100.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayoneer*$montoFacturaCompletoSinComision;
 }
   elseif ($montoCambio == "150") {
    $nombreBoton="Huawei Y9. Precio: $156.40";
    $linkArticulo = "https://mobileservicestore.ecwid.com/Huawei-Y9-Smartphone-p155593518";
    $montoFacturaCompleto = 156.40;
    $montoFacturaCompletoSinComision = 150.00;
    $montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla=$precioCompraPayoneer*$montoFacturaCompletoSinComision;
 }

$asuntoPayoneerBsf = 'Informacion de su operación con Payoneer Order #'.$entityId.' - Tienda de Appbb';

$msgPayoneer= "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<!--[if IE]><html xmlns='http://www.w3.org/1999/xhtml' class='ie-browser' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'><![endif]-->
<!--[if !IE]><!-->
<html style='margin: 0;padding: 0;' xmlns='http://www.w3.org/1999/xhtml'>
  <!--<![endif]--><head>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <meta name='viewport' content='width=device-width'>
    <!--[if !mso]><!-->
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <!--<![endif]-->
    <title>Template Base</title>
    <!--[if !mso]><!-- -->
    <link href='https://fonts.googleapis.com/css?family=Roboto'
      rel='stylesheet' type='text/css'>
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
  <body class='clean-body' style='margin: 0;padding:
    0;-webkit-text-size-adjust: 100%;background-color: #FFFFFF'>
    <!--<![endif]-->
    <div class='nl-container' style='min-width: 320px;Margin: 0
      auto;background-color: #FFFFFF'>
      <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td align='center' style='background-color: #FFFFFF;'><![endif]-->
      <div style='background-color:transparent;'>
        <div style='Margin: 0 auto;min-width: 320px;max-width:
          500px;width: 500px;width: calc(19000% -
          98300px);overflow-wrap: break-word;word-wrap:
          break-word;word-break: break-word;background-color:
          transparent;' class='block-grid '>
          <div style='border-collapse: collapse;display: table;width:
            100%;'>
            <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->
            <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width:
              500px;width: 500px;width: calc(18000% -
              89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100%
                !important;'>
                <!--[if (!mso)&(!IE)]><!-->
                <div style='border-top: 0px solid transparent;
                  border-left: 0px solid transparent; border-bottom: 0px
                  solid transparent; border-right: 0px solid
                  transparent; padding-top:5px; padding-bottom:5px;
                  padding-right: 0px; padding-left: 0px;'><!--<![endif]-->
                  <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                  <div style='padding-right: 10px; padding-left: 10px;
                    padding-top: 10px; padding-bottom: 10px;'>
                    <div
                      style='font-size:12px;line-height:14px;color:#555555;font-family:Arial,
                      ' helvetica='' neue',='' helvetica,=''
                      sans-serif;text-align:left;'=''>
                      <p style='margin: 0;font-size: 12px;line-height:
                        14px;text-align: center'><strong><span
                            style='font-size: 20px; line-height: 24px;'>TIENDA
                            DE APPBB</span></strong></p>
                    </div>
                  </div>
                  <!--[if mso]></td></tr></table><![endif]-->
                  <!--[if (!mso)&(!IE)]><!--></div>
                <!--<![endif]--> </div>
            </div>
            <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
          </div>
        </div>
      </div>
      <div style='background-color:transparent;'>
        <div style='Margin: 0 auto;min-width: 320px;max-width:
          500px;width: 500px;width: calc(19000% -
          98300px);overflow-wrap: break-word;word-wrap:
          break-word;word-break: break-word;background-color:
          transparent;' class='block-grid '>
          <div style='border-collapse: collapse;display: table;width:
            100%;'>
            <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->
            <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width:
              500px;width: 500px;width: calc(18000% -
              89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100%
                !important;'>
                <!--[if (!mso)&(!IE)]><!-->
                <div style='border-top: 0px solid transparent;
                  border-left: 0px solid transparent; border-bottom: 0px
                  solid transparent; border-right: 0px solid
                  transparent; padding-top:5px; padding-bottom:5px;
                  padding-right: 0px; padding-left: 0px;'><!--<![endif]-->
                  <div style='padding-right: 10px; padding-left: 10px;
                    padding-top: 10px; padding-bottom: 10px;'>
                    <!--[if (mso)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'><tr><td><![endif]-->
                    <div align='center'>
                      <div style='border-top: 1px solid #BBBBBB;
                        width:100%; line-height:0px;'>&nbsp;</div>
                    </div>
                    <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
                  </div>
                  <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                  <div style='padding-right: 10px; padding-left: 10px;
                    padding-top: 10px; padding-bottom: 10px;'>
                    <div
                      style='font-size:12px;line-height:14px;font-family:Roboto,
                      Tahoma, Verdana, Segoe,
                      sans-serif;color:#555555;text-align:left;'>
                      <p style='margin: 0;font-size: 12px;line-height:
                        14px;text-align: center'><span style='font-size:
                          16px; line-height: 21px;'><strong><span
                              style='line-height: 21px; font-size:
                              16px;'>Información para su operación con Payoneer  Orden #$entityId.</span></strong></span></p>
                    </div>
                  </div>
                  <!--[if mso]></td></tr></table><![endif]-->
                  <div style='padding-right: 10px; padding-left: 10px;
                    padding-top: 10px; padding-bottom: 10px;'>
                    <!--[if (mso)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'><tr><td><![endif]-->
                    <div align='center'>
                      <div style='border-top: 1px solid #BBBBBB;
                        width:100%; line-height:0px;'>&nbsp;</div>
                    </div>
                    <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
                  </div>
                  <!--[if (!mso)&(!IE)]><!--></div>
                <!--<![endif]--> </div>
            </div>
            <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
          </div>
        </div>
      </div>
      <div style='background-color:transparent;'>
        <div style='Margin: 0 auto;min-width: 320px;max-width:
          500px;width: 500px;width: calc(19000% -
          98300px);overflow-wrap: break-word;word-wrap:
          break-word;word-break: break-word;background-color:
          transparent;' class='block-grid '>
          <div style='border-collapse: collapse;display: table;width:
            100%;'>
            <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->
            <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width:
              500px;width: 500px;width: calc(18000% -
              89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100%
                !important;'>
                <!--[if (!mso)&(!IE)]><!-->
                <div style='border-top: 0px solid transparent;
                  border-left: 0px solid transparent; border-bottom: 0px
                  solid transparent; border-right: 0px solid
                  transparent; padding-top:5px; padding-bottom:5px;
                  padding-right: 0px; padding-left: 0px;'><!--<![endif]-->
                  <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                  <div style='padding-right: 10px; padding-left: 10px;
                    padding-top: 10px; padding-bottom: 10px;' <div=''>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: justify'><span style='font-size:
                        12px; line-height: 14px;'>Hola,hemos recibido su solicitud de
                        Payoneer. Recibirá el monto que se indica a continuación, los productos ya incluyen el costo de las comisiones. Realizaremos el pago desde el banco donde exista disponibilidad, note que este pago puede ser enviado de un banco distinto al suyo<strong>. No garantizamos pagos desde el mismo banco. </strong><br />
                        <br>
                        <br>
                  A continuación la información de su pedido:</span></p>
                </div>
              </div>
                <!--[if mso]></td></tr></table><![endif]-->
                <!--[if (!mso)&(!IE)]><!--></div>
              <!--<![endif]--> </div>
          </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width:
        500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap:
        break-word;word-wrap: break-word;word-break:
        break-word;background-color: transparent;' class='block-grid
        four-up'>
        <div style='border-collapse: collapse;display: table;width:
          100%;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->
          <!--[if (mso)|(IE)]><td align='center' width='125' style=' width:125px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
          <div class='col num3' style='Float: left;max-width:
            320px;min-width: 125px;width: 125px;width: calc(97625px -
            19500%);background-color: transparent;'>
            <div style='background-color: transparent; width: 100%
              !important;'>
              <!--[if (!mso)&(!IE)]><!-->
              <div style='border-top: 0px solid transparent;
                border-left: 0px solid transparent; border-bottom: 0px
                solid transparent; border-right: 0px solid transparent;
                padding-top:5px; padding-bottom:5px; padding-right: 0px;
                padding-left: 0px;'><!--<![endif]-->
                <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                <div style='padding-right: 10px; padding-left: 10px;
                  padding-top: 10px; padding-bottom: 10px;'>
                  <div
                    style='font-size:12px;line-height:14px;color:#555555;font-family:Arial,
                    ' helvetica='' neue',='' helvetica,=''
                    sans-serif;text-align:left;'=''>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: center'>La tasa para el dia de
                      hoy es de:</p>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: center'>&nbsp;<br>
                    </p>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: center'>&nbsp;<br>
                    </p>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: center'><span style='font-size:
                        16px; line-height: 19px;'><strong>$precioCompraPayoneer
                          </strong></span></p>
                  </div>
                </div>
                <!--[if mso]></td></tr></table><![endif]-->
                <!--[if (!mso)&(!IE)]><!--></div>
              <!--<![endif]--> </div>
          </div>
          <!--[if (mso)|(IE)]></td><td align='center' width='125' style=' width:125px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
          <div class='col num3' style='Float: left;max-width:
            320px;min-width: 125px;width: 125px;width: calc(97625px -
            19500%);background-color: transparent;'>
            <div style='background-color: transparent; width: 100%
              !important;'>
              <!--[if (!mso)&(!IE)]><!-->
              <div style='border-top: 0px solid transparent;
                border-left: 0px solid transparent; border-bottom: 0px
                solid transparent; border-right: 0px solid transparent;
                padding-top:5px; padding-bottom:5px; padding-right: 0px;
                padding-left: 0px;'><!--<![endif]-->
                <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                <div style='padding-right: 10px; padding-left: 10px;
                  padding-top: 10px; padding-bottom: 10px;'>
                  <div
                    style='font-size:12px;line-height:14px;color:#555555;font-family:Arial,
                    ' helvetica='' neue',='' helvetica,=''
                    sans-serif;text-align:left;'=''>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: center'>Su solicitud  
                      fue de:</p>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: center'>&nbsp;<br>
                    </p>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: center'>&nbsp;<br>
                    </p>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: center'><span style='font-size:
                        16px; line-height: 19px;'><strong>$
                          $montoFacturaCompleto</strong></span></p>
                  </div>
                </div>
                <!--[if mso]></td></tr></table><![endif]-->
                <!--[if (!mso)&(!IE)]><!--></div>
              <!--<![endif]--> </div>
          </div>
          <!--[if (mso)|(IE)]></td><td align='center' width='125' style=' width:125px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
          <div class='col num3' style='Float: left;max-width:
            320px;min-width: 125px;width: 125px;width: calc(97625px -
            19500%);background-color: transparent;'>
            <div style='background-color: transparent; width: 100%
              !important;'>
              <!--[if (!mso)&(!IE)]><!-->
              <div style='border-top: 0px solid transparent;
                border-left: 0px solid transparent; border-bottom: 0px
                solid transparent; border-right: 0px solid transparent;
                padding-top:5px; padding-bottom:5px; padding-right: 0px;
                padding-left: 0px;'><!--<![endif]-->
                <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                <div style='padding-right: 10px; padding-left: 10px;
                  padding-top: 10px; padding-bottom: 10px;'>
                  <div
                    style='font-size:12px;line-height:14px;color:#555555;font-family:Arial,
                    ' helvetica='' neue',='' helvetica,=''
                    sans-serif;text-align:left;'=''>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: center'>El monto después de
                      comisiones de Payoneer:</p>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: center'>&nbsp;<br>
                    </p>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: center'><span style='font-size:
                        16px; line-height: 19px;'><strong>$
                          $montoFacturaCompletoSinComision</strong></span><br>
                    </p>
                  </div>
                </div>
                <!--[if mso]></td></tr></table><![endif]-->
                <!--[if (!mso)&(!IE)]><!--></div>
              <!--<![endif]--> </div>
          </div>
          <!--[if (mso)|(IE)]></td><td align='center' width='125' style=' width:125px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
          <div class='col num3' style='Float: left;max-width:
            320px;min-width: 125px;width: 125px;width: calc(97625px -
            19500%);background-color: transparent;'>
            <div style='background-color: transparent; width: 100%
              !important;'>
              <!--[if (!mso)&(!IE)]><!-->
              <div style='border-top: 0px solid transparent;
                border-left: 0px solid transparent; border-bottom: 0px
                solid transparent; border-right: 0px solid transparent;
                padding-top:5px; padding-bottom:5px; padding-right: 0px;
                padding-left: 0px;'><!--<![endif]-->
                <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                <div style='padding-right: 10px; padding-left: 10px;
                  padding-top: 10px; padding-bottom: 10px;'>
                  <div
                    style='font-size:12px;line-height:14px;color:#555555;font-family:Arial,
                    ' helvetica='' neue',='' helvetica,=''
                    sans-serif;text-align:left;'=''>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: center'>Recibirá:</p>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px'>&nbsp;<br>
                    </p>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: center'><span style='font-size:
                        16px; line-height: 19px;'><strong>$montoTotalEnBsfConComaPorqueJorgeEsUnaVeteranaLadilla</strong></span></p>
                  </div>
                </div>
                <!--[if mso]></td></tr></table><![endif]-->
                <!--[if (!mso)&(!IE)]><!--></div>
              <!--<![endif]--> </div>
          </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width:
        500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap:
        break-word;word-wrap: break-word;word-break:
        break-word;background-color: transparent;' class='block-grid
        two-up'>
        <div style='border-collapse: collapse;display: table;width:
          100%;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->
          <!--[if (mso)|(IE)]><td align='center' width='250' style=' width:250px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
          <div class='col num6' style='Float: left;max-width:
            320px;min-width: 250px;width: 250px;width: calc(35250px -
            7000%);background-color: transparent;'>
            <div style='background-color: transparent; width: 100%
              !important;'>
              <!--[if (!mso)&(!IE)]><!-->
              <div style='border-top: 0px solid transparent;
                border-left: 0px solid transparent; border-bottom: 0px
                solid transparent; border-right: 0px solid transparent;
                padding-top:5px; padding-bottom:5px; padding-right: 0px;
                padding-left: 0px;'><!--<![endif]-->
                <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                <div style='padding-right: 10px; padding-left: 10px;
                  padding-top: 10px; padding-bottom: 10px;'>
                  <div
                    style='font-size:12px;line-height:14px;color:#555555;font-family:Arial,
                    ' helvetica='' neue',='' helvetica,=''
                    sans-serif;text-align:left;'=''>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: justify'><span style='font-size:
                        14px; line-height: 16px;'>Si es la <strong><span
                            style='color: rgb(128, 0, 0); font-size:
                            14px; line-height: 16px;'>primera vez</span></strong>
                        que nos vende, verifique que puede enviarnos los
                        siguientes recaudos <span style='color:
                          rgb(128, 0, 0); font-size: 14px; line-height:
                          16px;'><strong>obligatorios</strong></span> :</span></p>
                  </div>
                </div>
                <!--[if mso]></td></tr></table><![endif]-->
                <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                <div style='padding-right: 10px; padding-left: 10px;
                  padding-top: 10px; padding-bottom: 0px;'>
                  <div
                    style='font-size:12px;line-height:14px;color:#555555;font-family:Arial,
                    ' helvetica='' neue',='' helvetica,=''
                    sans-serif;text-align:left;'=''>
                    <ul>
                      <li style='font-size: 12px; line-height: 14px;
                        text-align: justify;'><strong>Foto de la Tarjeta
                          Payoneer</strong> Donde se pueda observar el
                        nombre del titular de la tarjeta y los últimos 4
                        dígitos (Importante: Debe ocultar el resto de los números de su tarjeta).</li>
                    </ul>
                    <ul style='text-align: justify;'>
                      <li style='font-size: 12px; line-height: 14px;'><strong>Foto
                          de documento de identidad</strong> (Puede ser
                        foto de la cédula, pasaporte o licencia de
                        conducir)<br>
                        Foto de buena calidad. No se aceptan copias.</li>
                    </ul>
                    <ul>
        <li style='font-size: 12px; line-height: 14px; text-align: justify;'><strong>Cuenta Bancaria (preferiblemente CORRIENTE)</strong> a donde desea recibir los fondos. <span style='text-decoration: underline; font-size: 12px; line-height: 14px;'><em>Puede ser una cuenta de un familiar o amigo</em></span>. En el siguiente formato de <strong>forma escrita</strong>: Titular, cédula de identidad, banco, tipo de cuenta, y número de cuenta.</li></ul>
        <ul style='text-align: justify;'><li style='font-size: 12px; line-height: 14px;'><strong>Número de teléfono</strong> (lo utilizaremos para notificar que ya hemos procesado su pedido).</li></ul>
                    <ul style='text-align: justify;'><li style='font-size: 12px; line-height: 14px;'><strong style='color: rgb(255, 0, 0);'>NUEVO IMPORTANTE</strong></ul><ul> Indiquenos por acá el número de orden de CLICKBANK luego de concretar su pago.</li></ul>
                    <br>
                  </div>
                </div>
                <!--[if mso]></td></tr></table><![endif]-->
                <!--[if (!mso)&(!IE)]><!--></div>
              <!--<![endif]--> </div>
          </div>
          <!--[if (mso)|(IE)]></td><td align='center' width='250' style=' width:250px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
          <div class='col num6' style='Float: left;max-width:
            320px;min-width: 250px;width: 250px;width: calc(35250px -
            7000%);background-color: transparent;'>
            <div style='background-color: transparent; width: 100%
              !important;'>
              <!--[if (!mso)&(!IE)]><!-->
              <div style='border-top: 0px solid transparent;
                border-left: 0px solid transparent; border-bottom: 0px
                solid transparent; border-right: 0px solid transparent;
                padding-top:5px; padding-bottom:5px; padding-right: 0px;
                padding-left: 0px;'><!--<![endif]-->
                <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                <div style='padding-right: 10px; padding-left: 10px;
                  padding-top: 10px; padding-bottom: 10px;'>
                  <div
                    style='font-size:12px;line-height:14px;color:#555555;font-family:Arial,
                    ' helvetica='' neue',='' helvetica,=''
                    sans-serif;text-align:left;'=''>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: justify'><span style='font-size:
                        14px; line-height: 16px;'>Si es cliente
                        frecuente <span style='color: rgb(0, 128, 0);
                          font-size: 14px; line-height: 16px;'><strong>y
                            ya nos ha enviado los recaudos</strong></span>
                        por favor envíe únicamente lo siguiente:</span></p>
                  </div>
                </div>
                <!--[if mso]></td></tr></table><![endif]-->
                <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                <div style='padding-right: 10px; padding-left: 10px;
                  padding-top: 10px; padding-bottom: 10px;'>
                  <div
                    style='font-size:12px;line-height:14px;color:#555555;font-family:Arial,
                    ' helvetica='' neue',='' helvetica,=''
                    sans-serif;text-align:left;'=''>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: justify'></p>
                    <ul>
        <li style='font-size: 12px; line-height: 14px; text-align: justify;'><strong>Cuenta Bancaria (preferiblemente CORRIENTE)</strong> a donde desea recibir los fondos. <span style='text-decoration: underline; font-size: 12px; line-height: 14px;'><em>Puede ser una cuenta de un familiar o amigo</em></span>. En el siguiente formato de <strong>forma escrita</strong>: Titular, cédula de identidad, banco, tipo de cuenta, y número de cuenta.</li></ul>
                    <ul style='text-align: justify;'><li style='font-size: 12px; line-height: 14px;'><strong style='color: rgb(255, 0, 0);'>NUEVO IMPORTANTE</strong></ul><ul> Indiquenos por acá el número de orden de CLICKBANK luego de concretar su pago.</li></ul>
                      <br>
                  </div>
                </div>
                <!--[if mso]></td></tr></table><![endif]-->
                <!--[if (!mso)&(!IE)]><!--></div>
              <!--<![endif]--> </div>
          </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width:
        500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap:
        break-word;word-wrap: break-word;word-break:
        break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width:
          100%;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->
          <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
          <div class='col num12' style='min-width: 320px;max-width:
            500px;width: 500px;width: calc(18000% -
            89500px);background-color: transparent;'>
            <div style='background-color: transparent; width: 100%
              !important;'>
              <!--[if (!mso)&(!IE)]><!-->
              <div style='border-top: 0px solid transparent;
                border-left: 0px solid transparent; border-bottom: 0px
                solid transparent; border-right: 0px solid transparent;
                padding-top:5px; padding-bottom:5px; padding-right: 0px;
                padding-left: 0px;'><!--<![endif]-->

                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'>
    <p style='margin: 0;font-size: 20px;line-height: 14px;text-align: justify'><strong>REALICE SU PAGO:</strong></p>
    <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'>
    <br>- <strong>INGRESE EN EL SIGUIENTE ENLACE:</strong> <a style='color:#0068A5;text-decoration: underline;' href='$linkArticulo' target='_blank' rel='noopener noreferrer'>CLICK AQUÍ</a> para pagar (es una página nuestra llamada Buencontenido - Publicarte).
    <br>
    &nbsp;Una vez dentro de la página haga click en: <strong>$nombreBoton</strong>. Luego de hacer click se abrirá la pantalla de pago de CLICKBANK, esta empresa de cobros nos procesa los pagos de PayPal, Payoneer y tarjetas de débito.<br>
      - En esa página debe llenar el formulario con sus datos reales, seleccionar el <strong>método de pago TARJETA DE CRÉDITO</strong> y luego colocar los datos correctos de su tarjeta Payoneer: <strong>Número de tarjeta, nombre del titular, fecha de vencimiento, código de seguridad, país y código postal</strong>.
      <br>
      - <strong>Importante:</strong> El país y el código postal debe ser idendico al de su dirección agregada en los AJUSTES DE SU CUENTA PAYONEER (verifiquela antes de realizar la compra). Por último haga click en <strong>PAGAR AHORA o PAY NOW. Si el pago se procesa con éxito, CLICKBANK generará un número de factura o número de orden que debe enviarnos.</strong></p>
  </div>
</div>

<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'>
    <p style='margin: 0;font-size: 20px;line-height: 14px;text-align: justify'><strong>ENVÍENOS SUS RECAUDOS:</strong></p>
    <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'>
    <br>
    <br>- <span style='color: rgb(128, 0, 0); font-size: 14px; line-height: 16px;'><strong>Cliente Nuevo - Envíe todos los recaudos a VYS @ APPBB . CO (Solo la primera vez).</strong></span> Indicando: Número de pedido de RealizarPagos.com, foto de la tarjeta Payoneer, foto de la cédula de identidad del titular de la tarjeta, cuenta bancaria y número de orden de CLICKBANK.
    <br>- <span style='color: rgb(0, 128, 0); font-size: 14px; line-height: 16px;'><strong>Cliente Frecuente - Envíe los recaudos a PAYONEER @ APPBB . CO</strong></span> Indicando: Número de pedido de RealizarPagos.com, cuenta bancaria y número de orden de CLICKBANK.</strong></p></div>
</div>

<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><strong>Información importante:</strong> Los pagos realizados a través de Payoneer son gestionados por una tercera empresa que nos presta servicio, este acuerdo le permite al cliente validar el origen de sus fondos. Al utilizar este servicio está aceptando las condiciones de uso de nuestra tienda y las de nuestro proveedor. Lea detenidamente los detalles del acuerdo descritos en el documento que le hemos solicitado llenar.</p></div>
</div>
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><strong>Nota:</strong> Si realiza el pago con una nueva tarjeta Payoneer desde la cual no haya enviado los recaudos, deberá enviar nuevamente todos los recaudos solicitados.</p></div>
</div>
                <!--[if mso]></td></tr></table><![endif]-->
                <!--[if (!mso)&(!IE)]><!--></div>
              <!--<![endif]--> </div>
          </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width:
        500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap:
        break-word;word-wrap: break-word;word-break:
        break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width:
          100%;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->
          <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
          <div class='col num12' style='min-width: 320px;max-width:
            500px;width: 500px;width: calc(18000% -
            89500px);background-color: transparent;'>
            <div style='background-color: transparent; width: 100%
              !important;'>
              <!--[if (!mso)&(!IE)]><!-->
              <div style='border-top: 0px solid transparent;
                border-left: 0px solid transparent; border-bottom: 0px
                solid transparent; border-right: 0px solid transparent;
                padding-top:5px; padding-bottom:5px; padding-right: 0px;
                padding-left: 0px;'><!--<![endif]-->
                <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                <div style='padding-right: 10px; padding-left: 10px;
                  padding-top: 10px; padding-bottom: 10px;'>
                  <div
                    style='font-size:12px;line-height:14px;color:#555555;font-family:Arial,
                    ' helvetica='' neue',='' helvetica,=''
                    sans-serif;text-align:left;'=''>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: center'><strong>APPBB
                        SERVICES, LLC. Delaware, Estados Unidos</strong></p>
                    <p style='margin: 0;font-size: 12px;line-height:
                      14px;text-align: center'><strong>Appbb.co © 2010 -
                        2018</strong>                  </p>
                  </div>
                </div>
                <!--[if mso]></td></tr></table><![endif]-->
                <!--[if (!mso)&(!IE)]><!--></div>
              <!--<![endif]--> </div>
          </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
  </body>
</html>";

     $sendResult = $client->sendEmail(
      "vys@appbb.co",
      $email_bsf,
      $asuntoPayoneerBsf,
      $msgPayoneer,
      '',
      '',
      '',
      'Payoneer@appbb.co',
      ''
    );



}






?>
<meta http-equiv="refresh" content="0; url=https://www.appbb.co/template-sender2/contingenciaPayoneer.php" />

