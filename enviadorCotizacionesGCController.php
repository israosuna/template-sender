<?php

require "function.php";
require "prices.php";
include_once 'connect.php';
//Load dependencies from composer
//If this causes an error, run 'composer install'
//require "msgcontent.php";
require_once('./postmarkapp/vendor/autoload.php');
use Postmark\PostmarkClient;
use Postmark\Models\PostmarkException;

setlocale(LC_MONETARY, 'es_VE');
money_format('%.2n',$precioCompraAirtm); 

$client = new PostmarkClient("");

$preciosApiApp = getLastPriceNew();

// Get contents of webhook request
$NUMEROPEDIDO = $_POST["numPedido"];
$precioTasa = money_format('%.2n',$_POST["tasa"]);
$tasa= $_POST["tasa"];
if ($precioTasa == "") {
	
	$precioTasa = money_format('%.2n',$preciosApiApp[1]);
	$tasa =$preciosApiApp[1];
} 

$nombreGC = $_POST['nombreGCManual'];
$montoUSD = $_POST["montoUSD"];


setlocale(LC_MONETARY, 'en_US');
$montoUSDMoney = money_format('%.2n',$montoUSD);
$service_url = 'https://app.ecwid.com/api/v3/13769662/orders/'.$NUMEROPEDIDO.'?token=';
$OrderDetails = file_get_contents($service_url);
$decodeOrder = json_decode($OrderDetails,true); 
$items = $decodeOrder['items'][0];
$montoRealGc = "";

$str = $items['selectedOptions'][0]['value'];
preg_match('/\d+\.\d+/', $str, $montoRealGc);

$sku = $items['sku'];
$skuCompare = substr($sku,0,2);
$email = $decodeOrder['email'];
$montoParaPagar =$decodeOrder['total'];
$numeroPedidoVender= $decodeOrder['vendorOrderNumber'];
$nombreGCApi = strtoupper($items['name']);
setlocale(LC_MONETARY, 'es_VE');
$totalBs = money_format('%.2n',($montoParaPagar * $tasa));
if ($nombreGC == "") {

	$nombreGC = $nombreGCApi;
	# code...
}

  echo("este es el q verifica: ".$sku);
  echo("este es el q verifica con el otro: ".$skuCompare);

$asuntoRecargaBs = 'Informacion de su Compra de gift card en Bs. Order #'.$numeroPedidoVender.' - Tienda de Appbb';

$msgRecargaBs= "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:v='urn:schemas-microsoft-com:vml'>
<head>
<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
<meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
<meta content='width=device-width' name='viewport'/>
<!--[if !mso]><!-->
<meta content='IE=edge' http-equiv='X-UA-Compatible'/>
<!--<![endif]-->
<title></title>
<!--[if !mso]><!-->
<!--<![endif]-->
<style type='text/css'>
		body {
			margin: 0;
			padding: 0;
		}

		table,
		td,
		tr {
			vertical-align: top;
			border-collapse: collapse;
		}

		* {
			line-height: inherit;
		}

		a[x-apple-data-detectors=true] {
			color: inherit !important;
			text-decoration: none !important;
		}
	</style>
<style id='media-query' type='text/css'>
		@media (max-width: 520px) {

			.block-grid,
			.col {
				min-width: 320px !important;
				max-width: 100% !important;
				display: block !important;
			}

			.block-grid {
				width: 100% !important;
			}

			.col {
				width: 100% !important;
			}

			.col>div {
				margin: 0 auto;
			}

			img.fullwidth,
			img.fullwidthOnMobile {
				max-width: 100% !important;
			}

			.no-stack .col {
				min-width: 0 !important;
				display: table-cell !important;
			}

			.no-stack.two-up .col {
				width: 50% !important;
			}

			.no-stack .col.num4 {
				width: 33% !important;
			}

			.no-stack .col.num8 {
				width: 66% !important;
			}

			.no-stack .col.num4 {
				width: 33% !important;
			}

			.no-stack .col.num3 {
				width: 25% !important;
			}

			.no-stack .col.num6 {
				width: 50% !important;
			}

			.no-stack .col.num9 {
				width: 75% !important;
			}

			.video-block {
				max-width: none !important;
			}

			.mobile_hide {
				min-height: 0px;
				max-height: 0px;
				max-width: 0px;
				display: none;
				overflow: hidden;
				font-size: 0px;
			}

			.desktop_hide {
				display: block !important;
				max-height: none !important;
			}
		}
	</style>
</head>
<body class='clean-body' style='margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #FFFFFF;'>
<!--[if IE]><div class='ie-browser'><![endif]-->
<table bgcolor='#FFFFFF' cellpadding='0' cellspacing='0' class='nl-container' role='presentation' style='table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF; width: 100%;' valign='top' width='100%'>
<tbody>
<tr style='vertical-align: top;' valign='top'>
<td style='word-break: break-word; vertical-align: top;' valign='top'>
<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td align='center' style='background-color:#FFFFFF'><![endif]-->
<div style='background-color:transparent;'>
<div class='block-grid two-up' style='Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:500px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
<!--[if (mso)|(IE)]><td align='center' width='250' style='background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num6' style='max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<div align='center' class='img-container center autowidth' style='padding-right: 0px;padding-left: 0px;'>
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 0px;padding-left: 0px;' align='center'><![endif]--><img align='center' alt='Alternate text' border='0' class='center autowidth' src='https://res.cloudinary.com/israosuna/image/upload/v1594158187/unnamed_prl0wc.png' style='text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 250px; display: block;' title='Alternate text' width='250'/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align='center' width='250' style='background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num6' style='max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<div align='center' class='img-container center autowidth' style='padding-right: 0px;padding-left: 0px;'>
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 0px;padding-left: 0px;' align='center'><![endif]--><img align='center' alt='Alternate text' border='0' class='center autowidth' src='https://res.cloudinary.com/israosuna/image/upload/v1594158187/realizarpagops_1_miguq5.png' style='text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 199px; display: block;' title='Alternate text' width='199'/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style='background-color:transparent;'>
<div class='block-grid' style='Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:500px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
<!--[if (mso)|(IE)]><td align='center' width='500' style='background-color:transparent;width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num12' style='min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Trebuchet MS', Tahoma, sans-serif'><![endif]-->
<div style='color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
<div style='line-height: 1.2; font-size: 12px; color: #555555; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 14px;'>
<p style='font-size: 24px; line-height: 1.2; word-break: break-word; text-align: center; mso-line-height-alt: 29px; margin: 0;'><span style='font-size: 24px;'>GIFT CARD DE:</span></p>
<p style='font-size: 24px; line-height: 1.2; word-break: break-word; text-align: center; mso-line-height-alt: 29px; margin: 0;'><span style='font-size: 24px;'> $nombreGC</span></p>
<p style='font-size: 24px; line-height: 1.2; word-break: break-word; text-align: center; mso-line-height-alt: 29px; margin: 0;'><span style='font-size: 24px;'>#$numeroPedidoVender </span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style='background-color:transparent;'>
<div class='block-grid four-up' style='Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:500px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
<!--[if (mso)|(IE)]><td align='center' width='125' style='background-color:transparent;width:125px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num3' style='max-width: 320px; min-width: 125px; display: table-cell; vertical-align: top; width: 125px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<div align='center' class='img-container center autowidth' style='padding-right: 0px;padding-left: 0px;'>
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 0px;padding-left: 0px;' align='center'><![endif]--><img align='center' alt='Alternate text' border='0' class='center autowidth' src='https://res.cloudinary.com/israosuna/image/upload/v1594182688/netflixlogo.0.0_lsqabr.jpg' style='text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 125px; display: block;' title='Alternate text' width='125'/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align='center' width='125' style='background-color:transparent;width:125px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num3' style='max-width: 320px; min-width: 125px; display: table-cell; vertical-align: top; width: 125px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<div align='center' class='img-container center autowidth' style='padding-right: 0px;padding-left: 0px;'>
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 0px;padding-left: 0px;' align='center'><![endif]--><img align='center' alt='Alternate text' border='0' class='center autowidth' src='https://res.cloudinary.com/israosuna/image/upload/v1594182687/spoti_yfc0in.png' style='text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 125px; display: block;' title='Alternate text' width='125'/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align='center' width='125' style='background-color:transparent;width:125px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num3' style='max-width: 320px; min-width: 125px; display: table-cell; vertical-align: top; width: 125px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<div align='center' class='img-container center autowidth' style='padding-right: 0px;padding-left: 0px;'>
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 0px;padding-left: 0px;' align='center'><![endif]--><img align='center' alt='Alternate text' border='0' class='center autowidth' src='https://res.cloudinary.com/israosuna/image/upload/v1594182687/playstore_ycr1wl.png' style='text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 125px; display: block;' title='Alternate text' width='125'/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align='center' width='125' style='background-color:transparent;width:125px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num3' style='max-width: 320px; min-width: 125px; display: table-cell; vertical-align: top; width: 125px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<div align='center' class='img-container center autowidth' style='padding-right: 0px;padding-left: 0px;'>
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 0px;padding-left: 0px;' align='center'><![endif]--><img align='center' alt='Alternate text' border='0' class='center autowidth' src='https://res.cloudinary.com/israosuna/image/upload/v1594182688/Untitled-1_zgqass.png' style='text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 125px; display: block;' title='Alternate text' width='125'/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style='background-color:transparent;'>
<div class='block-grid' style='Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:500px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
<!--[if (mso)|(IE)]><td align='center' width='500' style='background-color:transparent;width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num12' style='min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Trebuchet MS', Tahoma, sans-serif'><![endif]-->
<div style='color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
<div style='line-height: 1.2; font-size: 12px; color: #555555; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 14px;'>
<p style='font-size: 16px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 19px; margin: 0;'><span style='font-size: 16px;'>Estás a un paso de concretar su solicitud. A continuación se encuentra la información de interés para realizar su pago:</span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style='background-color:transparent;'>
<div class='block-grid three-up' style='Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:500px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
<!--[if (mso)|(IE)]><td align='center' width='166' style='background-color:transparent;width:166px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num4' style='max-width: 320px; min-width: 166px; display: table-cell; vertical-align: top; width: 166px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Trebuchet MS', Tahoma, sans-serif'><![endif]-->
<div style='color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
<div style='line-height: 1.2; font-size: 12px; color: #555555; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 14px;'>
<p style='line-height: 1.2; word-break: break-word; font-size: 14px; mso-line-height-alt: 17px; margin: 0;'><span style='font-size: 14px;'>Tasa de Compra.</span></p>
<p style='line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;'> </p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align='center' width='166' style='background-color:transparent;width:166px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num4' style='max-width: 320px; min-width: 166px; display: table-cell; vertical-align: top; width: 166px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Trebuchet MS', Tahoma, sans-serif'><![endif]-->
<div style='color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
<div style='line-height: 1.2; font-size: 12px; color: #555555; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 14px;'>
<p style='font-size: 14px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 17px; margin: 0;'>Monto de la gift card.</p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align='center' width='166' style='background-color:transparent;width:166px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num4' style='max-width: 320px; min-width: 166px; display: table-cell; vertical-align: top; width: 166px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Trebuchet MS', Tahoma, sans-serif'><![endif]-->
<div style='color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
<div style='line-height: 1.2; font-size: 12px; color: #555555; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 14px;'>
<p style='font-size: 14px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 17px; margin: 0;'>Monto a pagar en Bs.<br/> </p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style='background-color:transparent;'>
<div class='block-grid three-up' style='Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:500px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
<!--[if (mso)|(IE)]><td align='center' width='166' style='background-color:transparent;width:166px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num4' style='max-width: 320px; min-width: 166px; display: table-cell; vertical-align: top; width: 166px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Trebuchet MS', Tahoma, sans-serif'><![endif]-->
<div style='color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
<div style='line-height: 1.2; font-size: 12px; color: #555555; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 14px;'>
<p style='line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;'><strong><span style='font-size: 18px; color: #008000;'>$precioTasa</span></strong></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align='center' width='166' style='background-color:transparent;width:166px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num4' style='max-width: 320px; min-width: 166px; display: table-cell; vertical-align: top; width: 166px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Trebuchet MS', Tahoma, sans-serif'><![endif]-->
<div style='color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
<div style='line-height: 1.2; font-size: 12px; color: #555555; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 14px;'>
<p style='font-size: 14px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 17px; margin: 0;'><strong><span style='font-size: 18px; color: #008000;'>USD $. $montoRealGc[0]</span></strong></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align='center' width='166' style='background-color:transparent;width:166px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num4' style='max-width: 320px; min-width: 166px; display: table-cell; vertical-align: top; width: 166px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Trebuchet MS', Tahoma, sans-serif'><![endif]-->
<div style='color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
<div style='line-height: 1.2; font-size: 12px; color: #555555; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 14px;'>
<p style='font-size: 14px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 17px; margin: 0;'><strong><span style='font-size: 18px; color: #ff6600;'>$totalBs</span></strong></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style='background-color:transparent;'>
<div class='block-grid' style='Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:500px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
<!--[if (mso)|(IE)]><td align='center' width='500' style='background-color:transparent;width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num12' style='min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<table border='0' cellpadding='0' cellspacing='0' class='divider' role='presentation' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' valign='top' width='100%'>
<tbody>
<tr style='vertical-align: top;' valign='top'>
<td class='divider_inner' style='word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;' valign='top'>
<table align='center' border='0' cellpadding='0' cellspacing='0' class='divider_content' role='presentation' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; width: 100%;' valign='top' width='100%'>
<tbody>
<tr style='vertical-align: top;' valign='top'>
<td style='word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' valign='top'><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style='background-color:transparent;'>
<div class='block-grid two-up' style='Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:500px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
<!--[if (mso)|(IE)]><td align='center' width='250' style='background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num6' style='max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<div align='center' class='img-container center fixedwidth' style='padding-right: 0px;padding-left: 0px;'>
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 0px;padding-left: 0px;' align='center'><![endif]--><img align='center' alt='Alternate text' border='0' class='center fixedwidth' src='https://res.cloudinary.com/israosuna/image/upload/v1594158187/Banco_Occidental_de_Descuento_BOD_2008-logo-D7F6799FAF-seeklogo.com_pp16q6.png' style='text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 87px; display: block;' title='Alternate text' width='87'/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align='center' width='250' style='background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num6' style='max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<div align='center' class='img-container center fixedwidth' style='padding-right: 0px;padding-left: 0px;'>
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 0px;padding-left: 0px;' align='center'><![endif]--><img align='center' alt='Alternate text' border='0' class='center fixedwidth' src='https://res.cloudinary.com/israosuna/image/upload/v1594158188/unnamed_2_doqr7o.png' style='text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 175px; display: block;' title='Alternate text' width='175'/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style='background-color:transparent;'>
<div class='block-grid two-up' style='Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:500px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
<!--[if (mso)|(IE)]><td align='center' width='250' style='background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num6' style='max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Trebuchet MS', Tahoma, sans-serif'><![endif]-->
<div style='color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
<div style='line-height: 1.2; font-size: 12px; color: #555555; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 14px;'>
<p style='text-align: center; line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;'><strong><span style='font-size: 14px;'>Carma CA</span></strong></p>
<p style='text-align: center; line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;'> </p>
<p style='text-align: center; line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;'><strong><span style='font-size: 14px;'>0116 0200 2300 1155 3138</span></strong></p>
<p style='text-align: center; line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;'><strong><span style='font-size: 14px;'>RIF: J-298715901</span></strong></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align='center' width='250' style='background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num6' style='max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Trebuchet MS', Tahoma, sans-serif'><![endif]-->
<div style='color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
<div style='line-height: 1.2; font-size: 12px; color: #555555; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 14px;'>
<p style='font-size: 14px; line-height: 1.2; word-break: break-word; text-align: center; mso-line-height-alt: 17px; margin: 0;'><strong>PAGO MÓVIL</strong><br/><strong>MERCANTIL, PROVINCIAL</strong><br/><strong>Nombre: Appbb Services LLC</strong><br/><strong>Teléfono: 04142252689</strong><br/><strong>CI: V19014934</strong></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style='background-color:transparent;'>
<div class='block-grid two-up' style='Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:500px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
<!--[if (mso)|(IE)]><td align='center' width='250' style='background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num6' style='max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<div align='center' class='img-container center fixedwidth' style='padding-right: 0px;padding-left: 0px;'>
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 0px;padding-left: 0px;' align='center'><![endif]--><img align='center' alt='Alternate text' border='0' class='center fixedwidth' src='https://res.cloudinary.com/israosuna/image/upload/v1594158190/kisspng-banesco-venezuelan-bolvar-bank-money-5b1a61cc2ad112.4653677215284556281754_kz1ozl.png' style='text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 137px; display: block;' title='Alternate text' width='137'/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align='center' width='250' style='background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num6' style='max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<div align='center' class='img-container center fixedwidth' style='padding-right: 0px;padding-left: 0px;'>
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 0px;padding-left: 0px;' align='center'><![endif]--><img align='center' alt='Alternate text' border='0' class='center fixedwidth' src='https://res.cloudinary.com/israosuna/image/upload/v1594158187/mapndco_cydntk.png' style='text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 125px; display: block;' title='Alternate text' width='125'/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style='background-color:transparent;'>
<div class='block-grid two-up' style='Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:500px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
<!--[if (mso)|(IE)]><td align='center' width='250' style='background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num6' style='max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Trebuchet MS', Tahoma, sans-serif'><![endif]-->
<div style='color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
<div style='line-height: 1.2; font-size: 12px; color: #555555; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 14px;'>
<p style='text-align: center; line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;'><strong><span style='font-size: 14px;'>Jineth Del Carmen CA</span></strong></p>
<p style='text-align: center; line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;'> </p>
<p style='text-align: center; line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;'><strong><span style='font-size: 14px;'>0134 0347 3634 7303 1077</span></strong></p>
<p style='text-align: center; line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;'><strong><span style='font-size: 14px;'>  J-301335341</span></strong><br/><strong><span style='font-size: 14px;'> </span></strong></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align='center' width='250' style='background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num6' style='max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Trebuchet MS', Tahoma, sans-serif'><![endif]-->
<div style='color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
<div style='line-height: 1.2; font-size: 12px; color: #555555; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 14px;'>
<p style='text-align: center; line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;'><strong><span style='font-size: 14px;'>PAGO A TRAVÉS DE MPANDCO</span></strong></p>
<p style='text-align: center; line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;'><strong><span style='font-size: 14px;'>Usuario de mPandco:</span></strong></p>
<p style='text-align: center; line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;'><strong><span style='font-size: 14px;'>compaca</span></strong></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style='background-color:transparent;'>
<div class='block-grid' style='Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:500px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
<!--[if (mso)|(IE)]><td align='center' width='500' style='background-color:transparent;width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num12' style='min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<table border='0' cellpadding='0' cellspacing='0' class='divider' role='presentation' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' valign='top' width='100%'>
<tbody>
<tr style='vertical-align: top;' valign='top'>
<td class='divider_inner' style='word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;' valign='top'>
<table align='center' border='0' cellpadding='0' cellspacing='0' class='divider_content' role='presentation' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; width: 100%;' valign='top' width='100%'>
<tbody>
<tr style='vertical-align: top;' valign='top'>
<td style='word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' valign='top'><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style='background-color:transparent;'>
<div class='block-grid' style='Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:500px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
<!--[if (mso)|(IE)]><td align='center' width='500' style='background-color:transparent;width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num12' style='min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Trebuchet MS', Tahoma, sans-serif'><![endif]-->
<div style='color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
<div style='line-height: 1.2; font-size: 12px; color: #555555; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 14px;'>
<p style='text-align: center; line-height: 1.2; word-break: break-word; font-size: 16px; mso-line-height-alt: 19px; margin: 0;'><span style='font-size: 16px;'><strong>Realice su pago</strong></span></p>
<p style='line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;'> </p>
<p style='line-height: 1.2; word-break: break-word; font-size: 16px; mso-line-height-alt: 19px; margin: 0;'><span style='font-size: 16px;'><strong>-</strong> Responda a este correo<strong> (vys@appbb.co)</strong>  con los y comprobantes necesarios. Recuerde incluir el correo a donde enviaremos su gift card.</span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table border='0' cellpadding='0' cellspacing='0' class='divider' role='presentation' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' valign='top' width='100%'>
<tbody>
<tr style='vertical-align: top;' valign='top'>
<td class='divider_inner' style='word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;' valign='top'>
<table align='center' border='0' cellpadding='0' cellspacing='0' class='divider_content' role='presentation' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; width: 100%;' valign='top' width='100%'>
<tbody>
<tr style='vertical-align: top;' valign='top'>
<td style='word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' valign='top'><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style='background-color:transparent;'>
<div class='block-grid' style='Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:500px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
<!--[if (mso)|(IE)]><td align='center' width='500' style='background-color:transparent;width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
<div class='col num12' style='min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;'>
<div style='width:100% !important;'>
<!--[if (!mso)&(!IE)]><!-->
<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
<!--<![endif]-->
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Trebuchet MS', Tahoma, sans-serif'><![endif]-->
<div style='color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
<div style='line-height: 1.2; font-size: 12px; color: #555555; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 14px;'>
<p style='text-align: center; line-height: 1.2; word-break: break-word; font-size: 9px; mso-line-height-alt: 11px; margin: 0;'><span style='font-size: 9px;'> Al utilizar este servicio está aceptando las condiciones de uso de nuestra tienda y las de nuestro proveedor. </span></p>
<p style='text-align: center; line-height: 1.2; word-break: break-word; font-size: 9px; mso-line-height-alt: 11px; margin: 0;'><span style='font-size: 9px;'>APPBB SERVICES, LLC. Delaware, Estados Unidos</span></p>
<p style='text-align: center; line-height: 1.2; word-break: break-word; font-size: 9px; mso-line-height-alt: 11px; margin: 0;'><span style='font-size: 9px;'>Appbb.co © 2020</span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
</td>
</tr>
</tbody>
</table>
<!--[if (IE)]></div><![endif]-->
</body>
</html>"; 

if ($skuCompare=='GC') {
	# code...

     $sendResult = $client->sendEmail(
      "vys@appbb.co",
      $email,
      $asuntoRecargaBs,
      $msgRecargaBs,
      '',
      '',
      '',
      'vys@appbb.co',
      'vys@appbb.co'
    );
 }else {

 	echo "No es un pedido de Gift Card, verificar pedido.";
 }
?>
 <meta http-equiv="refresh" content="0; url=https://www.appbb.co/template-sender2/enviadorCotizacionesGCView.php" /> 


