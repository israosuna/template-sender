<?php
session_start();
include_once 'connect.php';

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
}

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
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><strong><span style='font-size: 20px; line-height: 24px;'>TIENDA DE APPBB.CO&nbsp;</span></strong></p></div>
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
    <div style='font-size:12px;line-height:14px;font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;color:#555555;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 18px; line-height: 21px;'><strong><span style='line-height: 21px; font-size: 18px;'>Información para su cambio de saldo de PayPal a Bolívares.</span></strong></span></p></div>
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
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
    <div style='font-size:12px;line-height:14px;font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;color:#555555;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><span style='font-size: 12px; line-height: 14px;'>Hola <strong>$nombreCostumer</strong>, hemos recibido su solicitud de cambio de PayPal a bolívares. Pagamos el monto que recibimos en la cuenta, las comisiones corren por cuenta del cliente. Pagamos por <strong>BANESCO</strong>. A continuación la información de su cambio:&nbsp;</span></p></div>
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
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>La tasa para el dia de hoy es de:</p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 19px;'><strong>$tasaDeCambio bsf.</strong></span></p></div>
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
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>Su solicitud de cambio fue de:</p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 19px;'><strong>$montoFacturaConPunto $</strong></span></p></div>
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
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>El monto después de comisiones de PayPal:</p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 19px;'><strong>$motonDespuesDeComision $</strong></span><br></p></div>
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
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>Recibirá en su cuenta bancaria en bolívares:</p><p style='margin: 0;font-size: 12px;line-height: 14px'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 19px;'><strong>$totalEnBSF bsf.</strong></span></p></div>
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
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><span style='font-size: 14px; line-height: 16px;'>Si es la <strong><span style='color: rgb(128, 0, 0); font-size: 14px; line-height: 16px;'>primera vez</span></strong> que nos vende, envíe los siguientes recaudos <span style='color: rgb(128, 0, 0); font-size: 14px; line-height: 16px;'><strong>obligatorios</strong></span> :</span></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><span style='font-size: 14px; line-height: 16px;'><br data-mce-bogus='1'></span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><ul><li style='font-size: 12px; line-height: 14px; text-align: justify;'><strong>Formato Legal</strong> firmado a mano con los datos de la persona dueña de la cuenta de PayPal junto con una foto o de la cédula o pasaporte del dueño de la cuenta ( haga <a style='color:#0068A5;text-decoration: underline;' href='https://drive.google.com/open?id=0ByXnKD0oAiV8aU9HczhaUDlCams' target='_blank' rel='noopener noreferrer'>click acá para descargarlo</a> ).</li></ul><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'>&nbsp;<br></p><ul style='text-align: justify;'><li style='font-size: 12px; line-height: 14px;'><strong>Foto de documento de identidad.</strong> (Puede ser foto de la cédula, pasaporte, licencia de conducir) Foto a color. No se aceptan copias.</li></ul><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'>&nbsp;<br></p><ul style='text-align: justify;'><li style='font-size: 12px; line-height: 14px;'><strong>Comprobante de Pago</strong> de la Factura. (Captura donde se observa el estado de <span style='text-decoration: underline; font-size: 12px; line-height: 14px; color: rgb(51, 51, 51);'><em><strong>PAGADO</strong></em></span> o el PDF con la información del pago.)</li></ul><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'>&nbsp;<br></p><ul><li style='font-size: 12px; line-height: 14px; text-align: justify;'><strong>Cuenta Bancaria</strong> a donde desea recibir los bolívares. <span style='text-decoration: underline; font-size: 12px; line-height: 14px;'><em>Puede ser una cuenta de un familiar o amigo.</em></span></li></ul></div>
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
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><span style='font-size: 14px; line-height: 16px;'>Si es cliente frecuente <span style='color: rgb(0, 128, 0); font-size: 14px; line-height: 16px;'><strong>y ya nos ha enviado el formato legal</strong> </span>por favor envíe únicamente los siguientes recaudos:</span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><ul><li style='font-size: 12px; line-height: 14px; text-align: justify;'><strong>Comprobante de Pago</strong> de la Factura. (Captura donde se observa el estado de <span style='text-decoration: underline; font-size: 12px; line-height: 14px; color: rgb(51, 51, 51);'><em><strong>PAGADO</strong></em></span> o el PDF con la información del pago.)<br>&nbsp;</li><li style='font-size: 12px; line-height: 14px; text-align: justify;'><strong>Cuenta Bancaria</strong> a donde desea recibir los bolívares. <em>Puede ser una cuenta de un familiar o amigo.</em></li></ul></div>
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
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><strong>Nota importante:</strong> Si realiza el pago&nbsp;con una nueva cuenta PayPal desde la cual no haya enviado los recaudos, deberá enviar nuevamente todos los recaudos solicitados, incluido el formato legal.</p></div>
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
    <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><strong>© Amazom.com Gift Cards con PayPal, Bitcoins y Bolívares. Otras Gift Cards y Transferencias Bancos/PayPal/Payza/Neteller/Skrill/Payoneer</strong></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><strong>Importaciones y Servicios Appbb, C.A., Urb. Punta Brava El Mercado, Calle La Pomarrosa. Resd La Quinta, Miranda, Miranda, 1170, Venezuela</strong></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><strong>Tax registration ID: J408027518</strong></p></div>
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


</body></html>";

$asuntoPayPalBsf = 'Informacion Cambio de PayPal a BSF Order #'.$numeroDeOrder.' - Tienda de Appbb';
$msgPayPalBSFVerificado = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml'>
    <head>
        <style type='text/css'>body{font-family:Helvetica,Arial;font-size:13px}</style>
        <title></title>
    </head>
    <body style='word-wrap: break-word; -webkit-nbsp-mode: space; -webkit-line-break: after-white-space;'>
        <div id='bloop_customfont' style='font-family:Helvetica,Arial;font-size:13px; color: rgba(0,0,0,1.0); margin: 0px; line-height: auto;'>
            <b style='font-family: 'helvetica Neue', helvetica;'>Hola <font color='#000000'> $nombreCostumer</font>
                ,</b>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <br />
            </div>
            <div style='font-family: 'helvetica Neue', helvetica;'>Muchas gracias por su solicitud de cambio $montoFacturaConPunto US$ de PayPal ( $motonDespuesDeComision US$ despues de comisiones de PayPal.) a Bolívares con nosotros.
</div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <br />
            </div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <b>
                    <font size='4'>
                        <font color='#000000'>La tasa de cambio de hoy
                             es de:</font>
                         <font color='#FF0000'>$tasaDeCambio</font>
                    </font>
                    <font size='4' color='#000000'> </font>
                    <font color='#000000'>bs.f por dólar</font>
                </b>
            </div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <b>
                    <font size='4' color='#000000'>
                        <br />
                    </font>
                </b>
            </div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <font size='4'>
                    <b>
                        <font color='#000000'>Recibirá en bolívares:</font>
                         <font color='#6AA84F'>$totalEnBSF</font>
                         <font color='#000000'>bs.f</font>
                    </b>
                </font>
            </div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <font color='#000000'>El día de hoy
                     estamos pagando a través de</font>
                 <font color='#000000'>
                    <b>$bancoPago</b>
                </font>
                <font color='#000000'>. Si su cuenta es de otro banco el dinero se la hará efectivo después de las 12p.m.
                </font>

</div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <b>
                    <br />
                </b>
            </div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <b>Pagamos por lo que llegue en nuestra cuenta PayPal</b>
                , es decir, no nos hacemos cargo de las comisiones.
</div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <b>
                    <br />
                </b>
            </div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <b>CONCRETE LA OPERACIÓN</b></br></br>
            </div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <b>
                    <br />
                </b>
            </div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <b>Necesitamos que nos envíe los siguientes recaudos:</b>
            </div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <br />
            </div>
            <div style='font-family: 'helvetica Neue', helvetica;'>-<strong>Comprobante pago de Factura.</strong>&nbsp; Le hemos enviado una factura amparada desde PayPal para que realice el pago. Luego de realizar el pago, por favor adjuntenos por esta vía el comprobante del mismo.
</div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <b>- <strong> Detalles de su cuenta Bancaria en Bolívares. </strong></b>
            </div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <br />
            </div>

            <div style='font-family: 'helvetica Neue', helvetica;'>
                <br />
            </div>
            <div style='font-family: 'helvetica Neue', helvetica;'>Estamos a la orden.
</div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <br />
            </div>
            <div style='font-family: 'helvetica Neue', helvetica;'>Saludos cordiales.
</div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <br />
            </div>
            <div style='font-family: 'helvetica Neue', helvetica;'>
                <div dir='ltr'>
                    <b>
                        <span class='m_1225401598764615292m_3065718062471335754m_8976440843278063628m_-6510147725212905148m_-4356066310544123394m_4536398527650235779m_-784500044593803898m_572554602899778567gmail-m_-5415605344932044622m_-5007554579850212950m_-8723736443495211843m_-6338514394191782437m_453063933619928101m_2987641813044587165m_9181324531887585246m_5950368109822414589m_-5150948666820034167m_-2440090304344939526m_-911703837871309164m_-6667976086260074080gmail-il' style='font-family: arial; font-size: 13.3333px;'>Un</span>
                        <span style='font-family: arial; font-size: 13.3333px;'> </span>
                        <span class='m_1225401598764615292m_3065718062471335754m_8976440843278063628m_-6510147725212905148m_-4356066310544123394m_4536398527650235779m_-784500044593803898m_572554602899778567gmail-m_-5415605344932044622m_-5007554579850212950m_-8723736443495211843m_-6338514394191782437m_453063933619928101m_2987641813044587165m_9181324531887585246m_5950368109822414589m_-5150948666820034167m_-2440090304344939526m_-911703837871309164m_-6667976086260074080gmail-il' style='font-family: arial; font-size: 13.3333px;'>mensaje</span>
                        <span style='font-family: arial; font-size: 13.3333px;'> de </span>
                        <span style='font-family: arial; font-size: 13.3333px;'>Importaciones y Servicios Appbb</span>
                        <span style='font-family: arial; font-size: 13.3333px;'>, C.A.</span>
                    </b>
                    <div style='font-family: arial; font-size: 13.3333px;'>
                        <i>Si nuestro servicio le ha sido útil por favor déjenos una opinión positiva en nuestra página de <a href='https://www.facebook.com/appbb.co/reviews/'>https://www.facebook.com/appbb.co/reviews/</a>
                            o en <a href='https://www.appbb.co/giftcards/'>https://www.appbb.co/giftcards/</a>
                            .</i>
                    </div>
                </div>
            </div>
        </div>
        <div id='bloop_sign_1484109152709107968' class='bloop_sign'>
            <div style='font-family:helvetica,arial;font-size:13px'>
                <br />
            </div>
        </div>
    </body>
</html>";

$asuntoEntregaGC= 'Hurra '.$nombre_cliente.'!, has recibido una Gift Card de '.$nom_GC.'! - Tienda de Appbb';
$msgEntregaGC= "<!DOCTYPE HTML PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><!--[if IE]><html xmlns='http://www.w3.org/1999/xhtml' class='ie-browser' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'><![endif]--><!--[if !IE]><!--><html style='margin: 0;padding: 0;' xmlns='http://www.w3.org/1999/xhtml'><!--<![endif]--><head>
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
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><strong><span style='font-size: 26px; line-height: 31px;'>TIENDA DE APPBB.CO</span></strong></p></div>
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

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><strong><span style='font-size: 18px; line-height: 21px;'>Es hora de realizar algunas compras!&nbsp;</span></strong></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid three-up'>
        <div style='border-collapse: collapse;display: table;width: 100%;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='167' style=' width:167px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num4' style='Float: left;max-width: 320px;min-width: 166px;width: 167px;width: calc(77166px - 15400%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 0px;'><![endif]-->
<div style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 0px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 19px;'>Has recibido</span></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><br><span style='font-size: 22px; line-height: 26px; color: rgb(0, 128, 0);'><strong>$ $monto_GC&nbsp;</strong></span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align='center' width='167' style=' width:167px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num4' style='Float: left;max-width: 320px;min-width: 166px;width: 167px;width: calc(77166px - 15400%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'><![endif]-->
<div style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 19px;'>En Gift Cards de</span></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br><span style='line-height: 21px; font-size: 18px;'><strong>$nom_GC</strong></span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align='center' width='167' style=' width:167px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num4' style='Float: left;max-width: 320px;min-width: 166px;width: 167px;width: calc(77166px - 15400%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'><![endif]-->
<div style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 19px;'>Tu Pedido</span></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><br><span style='line-height: 24px; font-size: 20px; color: rgb(128, 0, 0);'><strong>$num_orden</strong></span></p></div>
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
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'><span style='font-size: 20px; line-height: 24px;'>Hola <em><strong><span style='color: rgb(51, 51, 51); font-size: 20px; line-height: 24px;'>$nombre_destinatario</span></strong></em>, esta Gift Card es para ti!</span><br></p></div>
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
  <div style='font-size:12px;line-height:18px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 18px;text-align: center'><span style='font-size: 22px; line-height: 33px;'><strong>$montoGC_1 $codigoGC_1</strong></span></p><p style='margin: 0;font-size: 12px;line-height: 18px;text-align: center'><span style='font-size: 22px; line-height: 33px;'><strong>$montoGC_2 $codigoGC_2</strong></span></p><p style='margin: 0;font-size: 12px;line-height: 18px;text-align: center'><span style='font-size: 22px; line-height: 33px;'><strong>$montoGC_3 $codigoGC_3</strong></span></p><p style='margin: 0;font-size: 12px;line-height: 18px;text-align: center'><span style='font-size: 22px; line-height: 33px;'><strong>$montoGC_4 $codigoGC_4</strong></span></p><p style='margin: 0;font-size: 12px;line-height: 18px;text-align: center'><span style='font-size: 22px; line-height: 33px;'><strong>$montoGC_5 $codigoGC_5</strong></span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 24px; line-height: 28px; color: rgb(0, 128, 0);'><strong><span style='font-size: 24px; line-height: 28px;' id='_mce_caret' data-mce-bogus='true'><span style='color: rgb(51, 51, 51); font-size: 24px; line-height: 28px;'>﻿</span></span><span style='color: rgb(51, 51, 51); font-size: 24px; line-height: 28px;'>Total: </span>$$monto_GC</strong></span></p></div>
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
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 19px;'>&nbsp;</span></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 19px;'><strong>Has recibido una tarjeta de regalo de $nom_GC a través de nuestros servicios. Disfrutala!</strong><br>
  <br>También nos gustaría invitarte a visitar nuestra tienda, tenemos muchos servicios y ofertas que pueden ser utiles para ti <a href='https://www.appbb.co/shop/' style='text-decoration: underline;'>haz clic aquí</a>!</span></p></div>
</div>
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 19px;'>&nbsp;</span></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 19px;'>Recuerda que para utilizar/canjear tu código de Google Play, xBox, PSN u otra similares debes utilizar un VPN con IP de Estados Unidos y cambiar el país de tu cuenta a Estados Unidos. En Google y YouTube hay mucha información al respecto!</span></p></div>
</div>
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 16px; line-height: 19px;'>&nbsp;</span></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 14px; line-height: 19px;'><span style='color: rgb(255, 0, 0);'><strong>¡IMPORTANTE!</strong></span> <strong>No nos hacemos responsables por el mal uso que de a su Tarjeta de Regalo. Nuestro servicio ya está completado.</strong><br><br>
  	<strong>Tenga en cuenta esto especialmente con las Gift Cards de Amazon.com.</strong> Si utiliza únicamente saldo Gift Card para pagar sus compras en Amazon, sin tener una tarjeta de crédito o débito en su cuenta, es muy probable que bloqueen su cuenta por seguridad cuando intente concretar algún pedido. <strong>Nosotros no podremos ayudarle en ese caso, así que tome previsiones.</strong> Las tarjetas de regalo son solo un complemento para hacer compras en Amazon, no se pueden utilizar como método de pago principal o único, para eso existen las tarjetas de crédito o débito. No le aconsejamos acumular altas sumas de saldo Gift Cards en su cuenta Amazon.</span></p></div>
</div>

</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <!--[if (mso)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'><tr><td><![endif]-->
  <div align='center'><div style='border-top: 1px solid #BBBBBB; width:100%; line-height:0px;'>&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>



                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 14px; line-height: 16px;'>Las tarjetas de regalo de Amazon, Google Play, PlayStation, xBox y otras tarjetas ofrecidas en nuestra tienda son propiedad de sus respectivas marcas. Appbb no tiene sociedad con ninguna de estas empresas.</span></p>
    <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 14px; line-height: 16px;'><strong>© APPBB SERVICES LLC. 2010 - 2021</strong></span></p></div>
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


</body></html>";

$asuntoVerificacion= ' Verifica tu pedido #'.$num_orden.' de $'.$monto_TOTAL.' dolares - Appbb.co';
$msgVerifcacion_Extrajero="<!DOCTYPE HTML PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><!--[if IE]><html xmlns='http://www.w3.org/1999/xhtml' class='ie-browser' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'><![endif]--><!--[if !IE]><!--><html style='margin: 0;padding: 0;' xmlns='http://www.w3.org/1999/xhtml'><!--<![endif]--><head>
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
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 24px; line-height: 28px;'>TIENDA DE APPBB&nbsp;</span></p></div>
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

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                    <div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
                      <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>
                        <span style='font-size: 20px; line-height: 24px; color: rgb(128, 0, 0);'>NECESITAMOS VERIFICAR SU PEDIDO</span></p>
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

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <div style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'>
  <!--[if (mso)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 5px;padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'><table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'><tr><td><![endif]-->
  <div align='center'><div style='border-top: 1px solid #BBBBBB; width:100%; line-height:0px;'>&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>



                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                    <div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
                      <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'>
                        <p style='margin: 0;font-size: 12px;line-height: 14px'><span style='font-size: 14px; line-height: 16px;'>Hola <strong><span style='font-size: 16px; line-height: 19px;'>$nombre_cliente</span></strong>, recientemente ha realizado un pedido exitoso en nuestra tienda.</span></p>
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

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                    <div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
                      <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'>
                        <p style='margin: 0;font-size: 14px;line-height: 17px'>Por su seguridad, necesitamos verificar sus datos y comprobar que usted ha realizado la compra para poder procesar su pedido, ya que se ha emitido un pago desde su cuenta <strong>PayPal</strong>.</p>
                      </div>
                    </div>
<!--[if mso]></td></tr></table><![endif]-->



                    <div style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'>
  <!--[if (mso)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 5px;padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'><table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'><tr><td><![endif]-->
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
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid three-up'>
        <div style='border-collapse: collapse;display: table;width: 100%;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='167' style=' width:167px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num4' style='Float: left;max-width: 320px;min-width: 166px;width: 167px;width: calc(77166px - 15400%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'><![endif]-->
<div style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'>
  <div style='font-size:12px;line-height:14px;font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;color:#555555;text-align:left;'><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'><strong><span style='font-size: 14px; line-height: 16px;'>ORDEN:</span></strong><br></p><p style='margin: 0;font-size: 14px;line-height: 16px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 14px;line-height: 16px;text-align: center'><span style='font-size: 18px; line-height: 21px;'>$num_orden</span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align='center' width='167' style=' width:167px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num4' style='Float: left;max-width: 320px;min-width: 166px;width: 167px;width: calc(77166px - 15400%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 0px;'><![endif]-->
<div style='padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 0px;'>
  <div style='font-size:12px;line-height:14px;font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;color:#555555;text-align:left;'><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'><strong><span style='font-size: 14px; line-height: 16px;'>ESTADO</span></strong>:</p><p style='margin: 0;font-size: 14px;line-height: 16px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 14px;line-height: 16px;text-align: center'><span style='color: rgb(255, 153, 0); font-size: 14px; line-height: 16px;'>EN ESPERA DE VERIFICACIÓN</span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align='center' width='167' style=' width:167px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num4' style='Float: left;max-width: 320px;min-width: 166px;width: 167px;width: calc(77166px - 15400%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 0px;'><![endif]-->
<div style='padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 0px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 14px; line-height: 16px;'><strong>MONTO</strong></span>:</p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 18px; line-height: 21px; color: rgb(51, 153, 102);'>$ $monto_TOTAL</span></p></div>
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

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <div style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'>
  <!--[if (mso)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 5px;padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'><table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'><tr><td><![endif]-->
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

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
                    <div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
                      <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'>
                        <p style='margin: 0;font-size: 14px;line-height: 17px'><span style='font-size: 16px; line-height: 19px;'>Necesitamos que nos envíe los siguientes recaudos:</span></p>
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
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid two-up'>
        <div style='border-collapse: collapse;display: table;width: 100%;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='247' style=' width:247px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px dotted #61626F; border-bottom: 0px solid transparent; border-right: 3px dotted #61626F;' valign='top'><![endif]-->
            <div class='col num6' style='Float: left;max-width: 320px;min-width: 250px;width: 247px;width: calc(35250px - 7000%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px dotted #61626F; border-bottom: 0px solid transparent; border-right: 3px dotted #61626F; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><br data-mce-bogus='1'></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 14px; line-height: 16px;'>Por favor envíenos sus detalles de verificación respondiendo a este correo.</span></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;</p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p></div>
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
                      <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'>
                        <p style='margin: 0;font-size: 12px;line-height: 14px'>1. Una foto suya sosteniendo su Cédula de Identidad (ID, DNI) o Pasaporte (los datos deben ser legibles).</p><br>
                        <p style='margin: 0;font-size: 12px;line-height: 14px'>2. Comprobante de dirección: Carta de residencia, recibo de algún servicio, factura, etc.</p><br>
                        <p style='margin: 0;font-size: 12px;line-height: 14px'>3. Número de teléfono móvil o local.</p><br><br>
                        <p style='margin: 0;font-size: 12px;line-height: 14px'>4. Debe descagar, llenar y enviarnos el siguiente formato legal > <a href='https://drive.google.com/open?id=0ByXnKD0oAiV8aU9HczhaUDlCams' style='text-decoration: underline;'>clic aquí para descagar</a> <</p>
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

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'>
    <p style='margin: 0;font-size: 12px;line-height: 14px'><span style='color: rgb(128, 0, 0); font-size: 12px; line-height: 14px;'>IMPORTANTE</span>:</p>
    <ul style='list-style-type: disc;'>
      <li style='font-size: 12px; line-height: 14px;'>El formato debe estar lleno con la información del dueño(a) de la cuenta de PayPal.</li>
      <li style='font-size: 12px; line-height: 14px;'>Los recaudos deben estar a nombre del titular de la cuenta PayPal.</li>
      <li style='font-size: 12px; line-height: 14px;'>Si su cuenta es de empresa, o no está a su nombre, o la creo con datos falsos.<br>NO procesaremos su pedido y recibirá un reembolso total.</li>
      <li style='font-size: 12px; line-height: 14px;'>No esta permitido la compra en nuestro sistema utilizando VPN.</li>
      <li style='font-size: 12px; line-height: 14px;'>No se procesarán pedidos con cuentas PayPal de Estados Unidos No Verificadas.</li>
      <li style='font-size: 12px; line-height: 14px;'>No se procesarán pedidos con cuentas PayPal extranjeras con IP y dirección de Estados Unidos.</li>
    </ul>
    <p style='margin: 0;font-size: 12px;line-height: 14px'><strong>NOTA</strong>: Deben ser datos reales, los mismos serán comparados y verificados.</p><br>
    <p style='margin: 0;font-size: 12px;line-height: 14px'><strong>Si no desea enviar la documentación solicitada puede solicitar una cancelación y reembolso de su pedido.</strong></p>
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

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <div style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'>
  <!--[if (mso)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 5px;padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'><table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'><tr><td><![endif]-->
  <div align='center'><div style='border-top: 1px solid #BBBBBB; width:100%; line-height:0px;'>&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>



                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'>
    <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><span style='font-size: 10px; line-height: 12px;'><strong>Información legal:</strong> Colaboramos activamente con PayPal, Payoneer, Payza, y nuestros Bancos, esto nos obliga a proporcionar sus datos a estas entidades en caso de que estas los soliciten o bien se presenten Controversias, Devoluciones de Cargos o Reclamos. En caso de una infracción a nuestro proceso de ventas sus datos serán utilizados por las autoridades de nuestro país (Estados Unidos) para ser presentados, reportados y denunciados en la embajada de su país.</span></p>
    <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><span style='font-size: 10px; line-height: 12px;'><strong>Controversias y Reclamaciones:</strong> De haber alguna impugnación desde su cuenta PayPal/Payza/Neteller/Payoneer hacía nuestra cuenta, las Tarjetas de Regalo, Recargas o Transferencias serán canceladas y reportadas. El saldo, producto o cuenta será debitado hasta que se resuelva de forma positivo la deuda con nuestra empresa.</span></p>
    <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><span style='font-size: 10px; line-height: 12px;'><strong>Devoluciones de cargo:</strong> En caso de presentarse contra cargos con la empresa emisora de la tarjeta, vamos a investigar y denunciar al responsable de la compra fraudulenta. Bien sea el titular de la cuenta o el autor de una compra sin autorización en nuestra tienda. Datos tales como su identificación, dirección, dirección ip,
    y otros datos de interés para las autoridades serán utilizados. Estos datos también podrían ser publicados en nuestra lista negra publica de estafadores y entregados a la Interpol si lo solicitacen.</span></p>
    <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><span style='font-size: 10px; line-height: 12px;'><strong>Política contra estafas y delitos informáticos:</strong> APPBB SERVICES LLC. (Delaware, Estados Unidos) y sus subsidiarias en Venezuela, México, Chile y Argentina (sin limitación) se reservan el derecho a reportar, denunciar y actuar activamente en contra de cualquier intento de estafa o delito informático o cuando se sospeche que algún comprador
    puede estar haciendo uso no autoizado de nuestras herramientas para activades no permitidas, tales como: Blanqueo de fondos, compras fantasmas, capitalización ilicita, contrabando, venta de artículo hurtados, uso de tarjetas de crédito/débito robadas/clonadas, entre otras actividades penadas por la ley. <strong>Los delitos informáticos comprenden penas que van desde multas hasta penas de prisión por un máximo de 15 años en nuestro país.</strong></span></p>
    <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><span style='font-size: 10px; line-height: 12px;'><strong>Aceptación de responsabilidad:</strong> Al realizar compras en nuestra tienda y utilizar alguna de nuestas herramientas o pasarelas de pago está aceptando nuestros Términos y Condicione, Políticas de Privicdad y Condiciones de uso de nuestra sede principal o de alguna de nuestras subsidarias fuera de los Estados Unidos. De igual forma está aceptando que
      APPBB SERVICES LLC. utilice sus datos en caso de que necesite tomar medidas para proteger sus activos.</span></p>
  </div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 0px;'><![endif]-->
                    <div style='padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 0px;'>
                      <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'>
                        <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 12px; line-height: 14px;'><strong>© Tienda de Appbb - Compra y vende Amazon, Gift Cards, PayPal, Bitcoins, Bolívares, Payoneer, Payza, y más.</strong></span></p><br>
                        <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 12px; line-height: 14px;'><strong>I&S Appbb, C.A. (J408027518) es una entidad juridica subsidiaria de APPBB SERVICES LLC. Delaware, Estados Unidos.</strong></span></p>
                      </div>
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
$msgVerifcacion= "<!DOCTYPE HTML PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><!--[if IE]><html xmlns='http://www.w3.org/1999/xhtml' class='ie-browser' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'><![endif]--><!--[if !IE]><!--><html style='margin: 0;padding: 0;' xmlns='http://www.w3.org/1999/xhtml'><!--<![endif]--><head>
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
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 24px; line-height: 28px;'>TIENDA DE APPBB&nbsp;</span></p></div>
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

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>
    <span style='font-size: 20px; line-height: 24px; color: rgb(128, 0, 0);'>NECESITAMOS VERIFICAR SU PEDIDO</span></p>
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

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <div style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'>
  <!--[if (mso)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 5px;padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'><table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'><tr><td><![endif]-->
  <div align='center'><div style='border-top: 1px solid #BBBBBB; width:100%; line-height:0px;'>&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>



                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'>
    <p style='margin: 0;font-size: 12px;line-height: 14px'><span style='font-size: 14px; line-height: 16px;'>Hola <strong><span style='font-size: 16px; line-height: 19px;'>$nombre_cliente</span></strong>, recientemente ha realizado un pedido exitoso en nuestra tienda.</span></p>
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

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'>
    <p style='margin: 0;font-size: 14px;line-height: 17px'>Por su seguridad, necesitamos verificar sus datos y comprobar que usted ha realizado la compra para poder procesar su pedido, ya que se ha emitido un pago desde su cuenta <strong>PayPal</strong>.</p>
  </div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <div style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'>
  <!--[if (mso)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 5px;padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'><table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'><tr><td><![endif]-->
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
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid three-up'>
        <div style='border-collapse: collapse;display: table;width: 100%;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='167' style=' width:167px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num4' style='Float: left;max-width: 320px;min-width: 166px;width: 167px;width: calc(77166px - 15400%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'><![endif]-->
<div style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'>
  <div style='font-size:12px;line-height:14px;font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;color:#555555;text-align:left;'><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'><strong><span style='font-size: 14px; line-height: 16px;'>ORDEN:</span></strong><br></p><p style='margin: 0;font-size: 14px;line-height: 16px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 14px;line-height: 16px;text-align: center'><span style='font-size: 18px; line-height: 21px;'>$num_orden</span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align='center' width='167' style=' width:167px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num4' style='Float: left;max-width: 320px;min-width: 166px;width: 167px;width: calc(77166px - 15400%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 0px;'><![endif]-->
<div style='padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 0px;'>
  <div style='font-size:12px;line-height:14px;font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;color:#555555;text-align:left;'><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'><strong><span style='font-size: 14px; line-height: 16px;'>ESTADO</span></strong>:</p><p style='margin: 0;font-size: 14px;line-height: 16px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 14px;line-height: 16px;text-align: center'><span style='color: rgb(255, 153, 0); font-size: 14px; line-height: 16px;'>EN ESPERA DE VERIFICACIÓN</span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align='center' width='167' style=' width:167px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num4' style='Float: left;max-width: 320px;min-width: 166px;width: 167px;width: calc(77166px - 15400%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 0px;'><![endif]-->
<div style='padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 0px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 14px; line-height: 16px;'><strong>MONTO</strong></span>:</p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 18px; line-height: 21px; color: rgb(51, 153, 102);'>$ $monto_TOTAL</span></p></div>
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

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <div style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'>
  <!--[if (mso)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 5px;padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'><table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'><tr><td><![endif]-->
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

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'>
    <p style='margin: 0;font-size: 14px;line-height: 17px'><span style='font-size: 16px; line-height: 19px;'>Necesitamos que nos envíe los siguientes recaudos:</span></p>
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
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid two-up'>
        <div style='border-collapse: collapse;display: table;width: 100%;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='247' style=' width:247px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px dotted #61626F; border-bottom: 0px solid transparent; border-right: 3px dotted #61626F;' valign='top'><![endif]-->
            <div class='col num6' style='Float: left;max-width: 320px;min-width: 250px;width: 247px;width: calc(35250px - 7000%);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px dotted #61626F; border-bottom: 0px solid transparent; border-right: 3px dotted #61626F; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 14px; line-height: 16px;'>Por favor envíenos sus detalles de verificación respondiendo a este correo.</span></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;</p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p></div>
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
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'>
    <p style='margin: 0;font-size: 12px;line-height: 14px'>1. Foto o escaneo de la Cédula de Identidad, Pasaporte o Licencia de Conducir del titular de la cuenta PayPal.</p><br>
    <p style='margin: 0;font-size: 12px;line-height: 14px'>2. Comprobante de dirección: RIF, carta de residencia, o recibo de algún servicio.</p><br>
    <p style='margin: 0;font-size: 12px;line-height: 14px'>3. Número de teléfono móvil o local.</p><br><br>
    <p style='margin: 0;font-size: 12px;line-height: 14px'>Si su compra supera los $50 dólares puede que le solicitemos algún recaudo adicional.</p><br>
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

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'>
    <p style='margin: 0;font-size: 12px;line-height: 14px'><strong>NOTA</strong>: Deben ser datos reales, los mismos serán comparados y verificados.</p><br>
    <p style='margin: 0;font-size: 12px;line-height: 14px'><strong>Si no desea enviar la documentación solicitada puede solicitar una cancelación y reembolso de su pedido.</strong></p>
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

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->


                    <div style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'>
  <!--[if (mso)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 5px;padding-left: 5px; padding-top: 5px; padding-bottom: 5px;'><table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'><tr><td><![endif]-->
  <div align='center'><div style='border-top: 1px solid #BBBBBB; width:100%; line-height:0px;'>&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>



                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
<div style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><span style='font-size: 10px; line-height: 12px;'><strong>Información</strong>:SALUDOS  Como empresa de ventas estamos en el deber de colaborar con PayPal, Amazon, Coinbase y con nuestros Bancos, esto nos obliga a proporcionar sus datos a estas entidades en caso de presentarse Controversias, Devoluciones de Cargos o Reclamos. En caso de una infracción a nuestro proceso de ventas sus datos podrían ser utilizados por las autoridades de su país.</span></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><span style='font-size: 10px; line-height: 12px;'>Importante:&nbsp;De haber alguna impugnación desde su cuenta PayPal hacía nuestra cuenta, las Tarjetas de Regalo (Gift Cards)/Recargas/Transferencias o algún otro servicio será cancelado. El saldo de su cuenta Amazon/PayPal/Neteller/Payoneer/Payza/Banco será debitado hasta que el reclamo en PayPal se resuelva de forma positiva para ambas partes.</span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 0px;'><![endif]-->
<div style='padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 0px;'>
  <div style='font-size:12px;line-height:14px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;'>
    <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 12px; line-height: 14px;'><strong>© Tienda de Appbb - Compra y vende Amazon, Gift Cards, PayPal, Bitcoins, Bolívares, Payoneer, Payza, y más.</strong></span></p><br>
    <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 12px; line-height: 14px;'><strong>Importaciones y Servicios Appbb, C.A. (J408027518) es una empresa subsidiaria de APPBB SERVICES LLC. Delaware, Estados Unidos.</strong></span></p>
  </div>
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

$asuntoBitcoin= 'Pague con Bitcoins su pedido #'.$num_orden.' - Tienda de Appbb';
$msgBitcoin="<!DOCTYPE html '-//w3c//dtd xhtml 1.0 transitional //en' 'http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd'><html xmlns='http://www.w3.org/1999/xhtml'><head>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta name='viewport' content='width=device-width'>
    <meta http-equiv='X-UA-Compatible' content='IE=9; IE=8; IE=7; IE=EDGE'>
    <title>Template Base</title>


</head>
<body style='width: 100% !important;min-width: 100%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100% !important;margin: 0;padding: 0;background-color: #FFFFFF'>
  <style id='media-query'>
    /* Client-specific Styles & Reset */
    #outlook a {
        padding: 0;
    }

    /* .ExternalClass applies to Outlook.com (the artist formerly known as Hotmail) */
    .ExternalClass {
        width: 100%;
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
        line-height: 100%;
    }

    #backgroundTable {
        margin: 0;
        padding: 0;
        width: 100% !important;
        line-height: 100% !important;
    }

    /* Buttons */
    .button a {
        display: inline-block;
        text-decoration: none;
        -webkit-text-size-adjust: none;
        text-align: center;
    }

    .button a div {
        text-align: center !important;
    }

    /* Outlook First */
    body.outlook p {
        display: inline !important;
    }

    /*  Media Queries */
@media only screen and (max-width: 500px) {
  table[class='body'] img {
    height: auto !important;
    width: 100% !important; }
  table[class='body'] img.fullwidth {
    max-width: 100% !important; }
  table[class='body'] center {
    min-width: 0 !important; }
  table[class='body'] .container {
    width: 95% !important; }
  table[class='body'] .row {
    width: 100% !important;
    display: block !important; }
  table[class='body'] .wrapper {
    display: block !important;
    padding-right: 0 !important; }
  table[class='body'] .columns, table[class='body'] .column {
    table-layout: fixed !important;
    float: none !important;
    width: 100% !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    display: block !important; }
  table[class='body'] .wrapper.first .columns, table[class='body'] .wrapper.first .column {
    display: table !important; }
  table[class='body'] table.columns td, table[class='body'] table.column td, .col {
    width: 100% !important; }
  table[class='body'] table.columns td.expander {
    width: 1px !important; }
  table[class='body'] .right-text-pad, table[class='body'] .text-pad-right {
    padding-left: 10px !important; }
  table[class='body'] .left-text-pad, table[class='body'] .text-pad-left {
    padding-right: 10px !important; }
  table[class='body'] .hide-for-small, table[class='body'] .show-for-desktop {
    display: none !important; }
  table[class='body'] .show-for-small, table[class='body'] .hide-for-desktop {
    display: inherit !important; }
  .mixed-two-up .col {
    width: 100% !important; } }
 @media screen and (max-width: 500px) {
      div[class='col'] {
          width: 100% !important;
      }
    }

    @media screen and (min-width: 501px) {
      table[class='container'] {
          width: 500px !important;
      }
    }
  </style>
  <table class='body' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 100%;width: 100%;table-layout: fixed' cellpadding='0' cellspacing='0' width='100%' border='0'>
      <tbody><tr style='vertical-align: top'>
          <td class='center' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;background-color: #FFFFFF' align='center' valign='top'>

              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #2C2D37' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid two-up' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #ffffff;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='250'><![endif]--><div class='col num6' style='display: inline-block;vertical-align: top;text-align: center;width: 250px'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 25px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%' border='0'>
    <tbody><tr style='vertical-align: top'>
        <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%' align='center'>
            <div style='font-size:12px' align='center'>

                <img class='center fullwidth' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: 0;height: auto;line-height: 100%;margin: 0 auto;float: none;width: 100% !important;max-width: 250px' align='center' border='0' src='http://www.appbb.co/template-images/cropped-logo.png' alt='Image' title='Image' width='250'>
            </div>
        </td>
    </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='250'><![endif]--><div class='col num6' style='display: inline-block;vertical-align: top;text-align: center;width: 250px'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 20px;padding-right: 0px;padding-bottom: 20px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%' border='0'>
    <tbody><tr style='vertical-align: top'>
        <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%' align='center'>
            <div style='font-size:12px' align='center'>

                <img class='center fullwidth' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: 0;height: auto;line-height: 100%;margin: 0 auto;float: none;width: 100% !important;max-width: 250px' align='center' border='0' src='http://www.appbb.co/template-images/Bitcoin_Logo_Horizontal_Light.png' alt='Image' title='Image' width='250'>
            </div>
        </td>
    </tr>
</tbody></table>
<table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 20px;padding-right: 10px;padding-bottom: 20px;padding-left: 10px'>
        <div style='color:#ffffff;line-height:150%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:18px;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><div style='text-align: right; line-height:18px; font-size:12px;'><strong><span style='font-size: 16px; line-height: 24px;'>Pague seguro y rápido.</span></strong></div></div>
        </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #FFFFFF' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='500'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 30px;padding-right: 0px;padding-bottom: 30px;padding-left: 0px'>
        <div style='font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;text-align: center'><span style='color: rgb(51, 51, 51); font-size: 14px; line-height: 16px;'><strong><span style='font-size: 22px; line-height: 33px;'>Hola $nombre_cliente, env&#237;anos $monto_en_btc BTC</span></strong></span></p><p style='margin: 0;font-size: 14px;line-height: 16px;text-align: center'><span style='color: rgb(51, 51, 51); font-size: 14px; line-height: 16px;'><strong><span style='font-size: 20px; line-height: 33px;'>para pagar tu Gift Card de $$monto_GC dólares</span></strong></span></p></div>
          <hr><div style='font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;text-align: center'><span style='color: rgb(51, 51, 51);'><strong><span style='font-size: 26px; line-height: 33px;'>Número de Orden #$num_orden</span></strong></span></p></div>
          <hr>
        </div>
    </td>
  </tr>
</tbody></table>
<table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%' border='0'>
    <tbody><tr style='vertical-align: top'>
        <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%;padding-top: 0px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px' align='center'>
            <div style='font-size:12px' align='center'>
                <div style='font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;text-align: center'><span style='color: rgb(51, 51, 51);'><strong><span style='font-size: 12px; line-height: 20px;'>Realiza tu pago escaneando el QR o copiando la dirección de nuestra cartera</span></strong></span></p></div>
                <img class='center fullwidth' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: 0;height: auto;line-height: 100%;margin: 0 auto;float: none;width: 100% !important;max-width: 480px' align='center' border='0' src='http://www.appbb.co/template-images/BANER_BTC_EMAIL_new.png' alt='Image' title='Image' width='480'>
            </div>
        </td>
    </tr>
</tbody></table>
<table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 5px;padding-right: 5px;padding-bottom: 5px;padding-left: 5px'>
        <div style='line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'><span style='font-size: 22px; line-height: 30px; color: rgb(51, 51, 51);'><strong>36FiGEfc49DLe5guqHCp6NMxKGoMnGQRJG</strong></span></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #61626F' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #ffffff;background-color: #61626F' cellpadding='0' cellspacing='0' width='100%' bgcolor='#61626F'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='#61626F' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='500'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 0px;padding-right: 0px;padding-bottom: 30px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 25px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
        <div style='line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:14px;color:#ffffff;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><strong>Informaci&#243;n:</strong> Importaciones y Servicios Appbb, C.A. se reserva el derecho de cancelar los pedidos y regresar los Bitcoins a la cartera del cliente, si no se puede verificar el origen de los fondos del mismo. Participamos activamente en la prevención contra fraudes y blanqueo de fondos.</p></div>
          <div style='font-size:12px;line-height:14px;color:#ffffff;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 20px;line-height: 63px;text-align: center'><strong>¡Muchas gracias por su compra!</strong></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
<table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody><tr style='vertical-align: top'>
    <td class='button-container' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 5px;padding-left: 10px' align='center'>
      <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
        <tbody><tr style='vertical-align: top'>
          <td class='button' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%' align='center' valign='middle'>
              <!--[if mso]>
                <v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href=''
                  style='
                    height:42px;
                    v-text-anchor:middle;
                    width:290px;'
                    arcsize='60%'
                    strokecolor='#C7702E'
                    fillcolor='#C7702E' >
                <w:anchorlock/>
                  <center
                    style='color:#ffffff;
                      font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;
                      font-size:16px;'>
              <![endif]-->
             <!--[if !mso]><!- - --><div style='display: inline-block;
              border-radius: 25px;
              -webkit-border-radius: 25px;
              -moz-border-radius: 25px;
              max-width: 55%;
              width: 100%;
              border-top: 0px solid transparent;
              border-right: 0px solid transparent;
              border-bottom: 0px solid transparent;
              border-left: 0px solid transparent;' align='center'>

              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 42' width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;border-radius: 25px;-webkit-border-radius: 25px;-moz-border-radius: 25px;color: #ffffff;background-color: #C7702E;padding-top: 5px;padding-right: 5px;padding-bottom: 5px;padding-left: 5px;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align: center' valign='middle'><!--<![endif]-->
                  <a style='display: inline-block;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;background-color: #C7702E;color: #ffffff' href='https://www.appbb.co/giftcards/' target='_blank'>
                    <span style='font-size: 14px; line-height: 28px;' data-mce-style='font-size: 14px;' mce-data-marked='1'>&nbsp;Clic para realizar otra compra&nbsp;</span>
                  </a>
                <!--[if !mso]><!- - --></td></tr></tbody></table>
              </div><!--<![endif]-->
              <!--[if mso]>
                    </center>
                </v:roundrect>
              <![endif]-->
          </td>
        </tr>
      </tbody></table>
    </td>
  </tr>
</tbody></table>
<table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'>
    <tbody><tr style='vertical-align: top'>
        <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px' align='center'>
            <div style='height: 0px;'>
                <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;border-top: 0px solid transparent;width: 100%' align='center' border='0' cellspacing='0'>
                    <tbody><tr style='vertical-align: top'>
                        <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' align='center'></td>
                    </tr>
                </tbody></table>
            </div>
        </td>
    </tr>
</tbody></table></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #ffffff' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #333;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='500'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 30px;padding-right: 0px;padding-bottom: 30px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'>
<table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' align='center' valign='top'>
      <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' border='0' cellspacing='0' cellpadding='0'>
        <tbody><tr style='vertical-align: top'>
          <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;max-width: 156px' align='center' valign='top'>

            <!--[if (gte mso 9)|(IE)]>
            <table width='166' align='left' border='0' cellspacing='0' cellpadding='0'>
              <tr>
                <td align='left'>
            <![endif]-->
            <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' width='100%' align='left' cellpadding='0' cellspacing='0' border='0'>
              <tbody><tr style='vertical-align: top'>
                <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' align='left' valign='middle'>


                  <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0' align='left' border='0' cellspacing='0' cellpadding='0' height='37'>
                      <tbody><tr style='vertical-align: top'>
                          <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='37' align='left' valign='middle'>
                            <a href='https://www.facebook.com/appbb.co' title='Facebook' target='_blank'>
                                <img style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important' src='http://www.appbb.co/template-images/facebook.png' alt='Facebook' title='Facebook' width='32'>
                            </a>
                          </td>
                      </tr>
                  </tbody></table>
                  <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0' align='left' border='0' cellspacing='0' cellpadding='0' height='37'>
                      <tbody><tr style='vertical-align: top'>
                          <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='37' align='left' valign='middle'>
                            <a href='https://twitter.com/app_bb' title='Twitter' target='_blank'>
                                <img style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important' src='http://www.appbb.co/template-images/twitter.png' alt='Twitter' title='Twitter' width='32'>
                            </a>
                          </td>
                      </tr>
                  </tbody></table>
                  <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0' align='left' border='0' cellspacing='0' cellpadding='0' height='37'>
                      <tbody><tr style='vertical-align: top'>
                          <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='37' align='left' valign='middle'>
                            <a href='https://instagram.com/appbbinc' title='Google+' target='_blank'>
                                <img style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important' src='http://www.appbb.co/template-images/instagram.png' alt='Google+' title='Google+' width='32'>
                            </a>
                          </td>
                      </tr>
                  </tbody></table>

                </td>
              </tr>
            </tbody></table>
            <!--[if (gte mso 9)|(IE)]>
                </td>
              </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
      </tbody></table>
    </td>
  </tr>
</tbody></table><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 15px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
        <div style='color:#959595;line-height:150%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:18px;color:#959595;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 14px;line-height: 21px;text-align: center'>Todos los derechos reservados. Importaciones y Servicios Appbb, C.A.</p></div>
        </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
          </td>
      </tr>
  </tbody></table>


</body></html>";

$asuntoCompEntrega= 'Su pedido #'.$num_orden.' se ha procesado - Tienda de Appbb';
$msgCompEntrega_new="<!DOCTYPE HTML PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'><head>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta name='viewport' content='width=device-width'>
    <!--[if !mso]><!--><meta http-equiv='X-UA-Compatible' content='IE=edge'><!--<![endif]-->
    <title></title>
    
    
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

[owa] .block-grid .col {
  display: table-cell;
  float: none !important;
  vertical-align: top; }

.ie-browser .num12, .ie-browser .block-grid, [owa] .num12, [owa] .block-grid {
  width: 600px !important; }

.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
  line-height: 100%; }

.ie-browser .mixed-two-up .num4, [owa] .mixed-two-up .num4 {
  width: 200px !important; }

.ie-browser .mixed-two-up .num8, [owa] .mixed-two-up .num8 {
  width: 400px !important; }

.ie-browser .block-grid.two-up .col, [owa] .block-grid.two-up .col {
  width: 300px !important; }

.ie-browser .block-grid.three-up .col, [owa] .block-grid.three-up .col {
  width: 200px !important; }

.ie-browser .block-grid.four-up .col, [owa] .block-grid.four-up .col {
  width: 150px !important; }

.ie-browser .block-grid.five-up .col, [owa] .block-grid.five-up .col {
  width: 120px !important; }

.ie-browser .block-grid.six-up .col, [owa] .block-grid.six-up .col {
  width: 100px !important; }

.ie-browser .block-grid.seven-up .col, [owa] .block-grid.seven-up .col {
  width: 85px !important; }

.ie-browser .block-grid.eight-up .col, [owa] .block-grid.eight-up .col {
  width: 75px !important; }

.ie-browser .block-grid.nine-up .col, [owa] .block-grid.nine-up .col {
  width: 66px !important; }

.ie-browser .block-grid.ten-up .col, [owa] .block-grid.ten-up .col {
  width: 60px !important; }

.ie-browser .block-grid.eleven-up .col, [owa] .block-grid.eleven-up .col {
  width: 54px !important; }

.ie-browser .block-grid.twelve-up .col, [owa] .block-grid.twelve-up .col {
  width: 50px !important; }

@media only screen and (min-width: 620px) {
  .block-grid {
    width: 600px !important; }
  .block-grid .col {
    vertical-align: top; }
    .block-grid .col.num12 {
      width: 600px !important; }
  .block-grid.mixed-two-up .col.num4 {
    width: 200px !important; }
  .block-grid.mixed-two-up .col.num8 {
    width: 400px !important; }
  .block-grid.two-up .col {
    width: 300px !important; }
  .block-grid.three-up .col {
    width: 200px !important; }
  .block-grid.four-up .col {
    width: 150px !important; }
  .block-grid.five-up .col {
    width: 120px !important; }
  .block-grid.six-up .col {
    width: 100px !important; }
  .block-grid.seven-up .col {
    width: 85px !important; }
  .block-grid.eight-up .col {
    width: 75px !important; }
  .block-grid.nine-up .col {
    width: 66px !important; }
  .block-grid.ten-up .col {
    width: 60px !important; }
  .block-grid.eleven-up .col {
    width: 54px !important; }
  .block-grid.twelve-up .col {
    width: 50px !important; } }

@media (max-width: 620px) {
  .block-grid, .col {
    min-width: 320px !important;
    max-width: 100% !important;
    display: block !important; }
  .block-grid {
    width: calc(100% - 40px) !important; }
  .col {
    width: 100% !important; }
    .col > div {
      margin: 0 auto; }
  img.fullwidth, img.fullwidthOnMobile {
    max-width: 100% !important; }
  .no-stack .col {
    min-width: 0 !important;
    display: table-cell !important; }
  .no-stack.two-up .col {
    width: 50% !important; }
  .no-stack.mixed-two-up .col.num4 {
    width: 33% !important; }
  .no-stack.mixed-two-up .col.num8 {
    width: 66% !important; }
  .no-stack.three-up .col.num4 {
    width: 33% !important; }
  .no-stack.four-up .col.num3 {
    width: 25% !important; }
  .mobile_hide {
    min-height: 0px;
    max-height: 0px;
    max-width: 0px;
    display: none;
    overflow: hidden;
    font-size: 0px; } }

    </style>
</head>
<body class='clean-body' style='margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #F8F8F8'>
  <style type='text/css' id='media-query-bodytag'>
    @media (max-width: 520px) {
      .block-grid {
        min-width: 320px!important;
        max-width: 100%!important;
        width: 100%!important;
        display: block!important;
      }

      .col {
        min-width: 320px!important;
        max-width: 100%!important;
        width: 100%!important;
        display: block!important;
      }

        .col > div {
          margin: 0 auto;
        }

      img.fullwidth {
        max-width: 100%!important;
      }
			img.fullwidthOnMobile {
        max-width: 100%!important;
      }
      .no-stack .col {
				min-width: 0!important;
				display: table-cell!important;
			}
			.no-stack.two-up .col {
				width: 50%!important;
			}
			.no-stack.mixed-two-up .col.num4 {
				width: 33%!important;
			}
			.no-stack.mixed-two-up .col.num8 {
				width: 66%!important;
			}
			.no-stack.three-up .col.num4 {
				width: 33%!important;
			}
			.no-stack.four-up .col.num3 {
				width: 25%!important;
			}
      .mobile_hide {
        min-height: 0px!important;
        max-height: 0px!important;
        max-width: 0px!important;
        display: none!important;
        overflow: hidden!important;
        font-size: 0px!important;
      }
    }
  </style>
  <!--[if IE]><div class='ie-browser'><![endif]-->
  <!--[if mso]><div class='mso-container'><![endif]-->
  <table class='nl-container' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #F8F8F8;width: 100%' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr style='vertical-align: top'>
		<td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
    <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td align='center' style='background-color: #F8F8F8;'><![endif]-->

    <div style='background-color:#e4f9f7;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid two-up no-stack'>
        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:#e4f9f7;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 600px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='300' style=' width:300px; padding-right: 0px; padding-left: 0px; padding-top:25px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num6' style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:25px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->

                  
                    <div align='left' class='img-container left fixedwidth ' style='padding-right: 0px;  padding-left: 0px;'>
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px;line-height:0px;'><td style='padding-right: 0px; padding-left: 0px;' align='left'><![endif]-->
  <img class='left fixedwidth' align='left' border='0' src='images/APPBB_LOGOH_NARANJA.png' alt='Image' title='Image' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 180px' width='180'>
<!--[if mso]></td></tr></table><![endif]-->
</div>

                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align='center' width='300' style=' width:300px; padding-right: 0px; padding-left: 0px; padding-top:20px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num6' style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:20px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->

                  
                    
<div align='right' style='padding-right: 10px; padding-left: 10px; padding-bottom: 10px;' class=''>
  <div style='line-height:10px;font-size:1px'>&#160;</div>
  <div style='display: table; max-width:156px;'>
  <!--[if (mso)|(IE)]><table width='136' cellpadding='0' cellspacing='0' border='0'><tr><td style='border-collapse:collapse; padding-right: 10px; padding-left: 10px; padding-bottom: 10px;'  align='right'><table width='100%' cellpadding='0' cellspacing='0' border='0' style='border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:136px;'><tr><td width='32' style='width:32px; padding-right: 5px;' valign='top'><![endif]-->
    <table align='left' border='0' cellspacing='0' cellpadding='0' width='32' height='32' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;Margin-right: 5px'>
      <tbody><tr style='vertical-align: top'><td align='left' valign='middle' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
        <a href='https://www.facebook.com/appbb.co' title='Facebook' target='_blank'>
          <img src='images/facebook@2x.png' alt='Facebook' title='Facebook' width='32' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important'>
        </a>
      <div style='line-height:5px;font-size:1px'>&#160;</div>
      </td></tr>
    </tbody></table>
      <!--[if (mso)|(IE)]></td><td width='32' style='width:32px; padding-right: 5px;' valign='top'><![endif]-->
    <table align='left' border='0' cellspacing='0' cellpadding='0' width='32' height='32' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;Margin-right: 5px'>
      <tbody><tr style='vertical-align: top'><td align='left' valign='middle' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
        <a href='https://twitter.com/app_bb' title='Twitter' target='_blank'>
          <img src='images/twitter@2x.png' alt='Twitter' title='Twitter' width='32' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important'>
        </a>
      <div style='line-height:5px;font-size:1px'>&#160;</div>
      </td></tr>
    </tbody></table>
      <!--[if (mso)|(IE)]></td><td width='32' style='width:32px; padding-right: 0;' valign='top'><![endif]-->
    <table align='left' border='0' cellspacing='0' cellpadding='0' width='32' height='32' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;Margin-right: 0'>
      <tbody><tr style='vertical-align: top'><td align='left' valign='middle' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
        <a href='https://instagram.com/appbbinc' title='Instagram' target='_blank'>
          <img src='images/instagram@2x.png' alt='Instagram' title='Instagram' width='32' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important'>
        </a>
      <div style='line-height:5px;font-size:1px'>&#160;</div>
      </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
  </div>
</div>
                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
    <div style='background-image:url(http://www.appbb.co/template-images/transport_animation_2.gif);background-position:top center;background-repeat:no-repeat;;background-color:#e4f9f7'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-image:url('https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/transport_animation_2.gif');background-position:top center;background-repeat:no-repeat;;background-color:#e4f9f7' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 600px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='600' style=' width:600px; padding-right: 25px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 600px;display: table-cell;vertical-align: top;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 25px; padding-left: 0px;'><!--<![endif]-->

                  
                    
<table border='0' cellpadding='0' cellspacing='0' width='100%' class='divider ' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
    <tbody>
        <tr style='vertical-align: top'>
            <td class='divider_inner' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-right: 15px;padding-left: 15px;padding-top: 15px;padding-bottom: 15px;min-width: 100%;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                <table class='divider_content' height='75px' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 0px solid transparent;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                    <tbody>
                        <tr style='vertical-align: top'>
                            <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 75px;line-height: 75px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                                <span>&#160;</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
                  
                  
                    <div class=''>
	<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px;'><![endif]-->
	<div style='color:#555555;font-family:'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px;'>	
		<div style='line-height:14px;font-size:12px;color:#555555;font-family:'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: right'><span style='font-size: 20px; line-height: 24px;'>Tarjeta(s) Enviada(s)!</span></p><p style='margin: 0;font-size: 12px;line-height: 14px'>&#160;</p></div>	
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
</div>
                  
                  
                    <div class=''>
	<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px;'><![endif]-->
	<div style='color:#EB8600;font-family:'Oswald', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;line-height:150%; padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px;'>	
		<div style='line-height:18px;font-family:Oswald, 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:12px;color:#EB8600;text-align:left;'><p style='margin: 0;line-height: 18px;text-align: right;font-size: 12px'>&#160;</p><p style='margin: 0;line-height: 18px;text-align: right;font-size: 12px'><span style='font-size: 34px; line-height: 51px; background-color: rgb(255, 255, 255);'><strong>Aplica tus tarjetas sin demora!</strong></span></p><p style='margin: 0;line-height: 18px;text-align: right;font-size: 12px'>&#160;</p></div>	
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
</div>
                  
                  
                    
<table border='0' cellpadding='0' cellspacing='0' width='100%' class='divider ' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
    <tbody>
        <tr style='vertical-align: top'>
            <td class='divider_inner' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-right: 25px;padding-left: 25px;padding-top: 25px;padding-bottom: 25px;min-width: 100%;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                <table class='divider_content' height='135px' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 0px solid transparent;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                    <tbody>
                        <tr style='vertical-align: top'>
                            <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 135px;line-height: 135px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                                <span>&#160;</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
    <div style='background-image:url(http://www.appbb.co/template-images/stripes-light.png);background-position:top center;background-repeat:repeat;;background-color:transparent'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-image:url('https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/stripes-light.png');background-position:top center;background-repeat:repeat;;background-color:transparent' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 600px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='600' style=' width:600px; padding-right: 0px; padding-left: 0px; padding-top:50px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 600px;display: table-cell;vertical-align: top;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:50px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->

                  
                    <div align='center' class='img-container center  autowidth  fullwidth ' style='padding-right: 0px;  padding-left: 0px;'>
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px;line-height:0px;'><td style='padding-right: 0px; padding-left: 0px;' align='center'><![endif]-->
  <img class='center  autowidth  fullwidth' align='center' border='0' src='https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/rounded_up.png' alt='Image' title='Image' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 600px' width='600'>
<!--[if mso]></td></tr></table><![endif]-->
</div>

              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
    <div style='background-image:url(http://www.appbb.co/template-images/stripes-light.png);background-position:top center;background-repeat:repeat;;background-color:transparent'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;' class='block-grid mixed-two-up '>
        <div style='border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-image:url('https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/stripes-light.png');background-position:top center;background-repeat:repeat;;background-color:transparent' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 600px;'><tr class='layout-full-width' style='background-color:#FFFFFF;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='200' style=' width:200px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid #C3C3C3; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num4' style='display: table-cell;vertical-align: top;max-width: 320px;min-width: 200px;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid #C3C3C3; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->

                  
                    <div align='right' class='img-container right fixedwidth ' style='padding-right: 30px;  padding-left: 0px;'>
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px;line-height:0px;'><td style='padding-right: 30px; padding-left: 0px;' align='right'><![endif]-->
<div style='line-height:30px;font-size:1px'>&#160;</div>  <img class='right fixedwidth' align='right' border='0' src='https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/pickup.png' alt='Image' title='Image' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 110px' width='110'>
<!--[if mso]></td></tr></table><![endif]-->
</div>

                  
                  
                    <div class=''>
	<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 30px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
	<div style='color:#555555;font-family:'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;line-height:120%; padding-right: 30px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>	
		<div style='font-size:12px;line-height:14px;color:#555555;font-family:'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;text-align:left;'><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: right'><strong>No esperes mas, realiza tus compras.</strong></p></div>	
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
</div>
                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align='center' width='399' style=' width:399px; padding-right: 35px; padding-left: 0px; padding-top:30px; padding-bottom:35px; border-top: 0px solid transparent; border-left: 1px dotted #E7E7E7; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num8' style='display: table-cell;vertical-align: top;min-width: 320px;max-width: 400px;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 1px dotted #E7E7E7; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:30px; padding-bottom:35px; padding-right: 35px; padding-left: 0px;'><!--<![endif]-->

                  
                    <div class=''>
	<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
	<div style='color:#555555;font-family:'Oswald', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;line-height:120%; padding-right: 10px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px;'>	
		<div style='font-size:12px;line-height:14px;font-family:Oswald, 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;color:#555555;text-align:left;'><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: left'><span style='font-size: 26px; line-height: 31px;'><strong><span style='line-height: 31px; font-size: 26px;'>Listo para realizar compras?</span></strong></span></p></div>	
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
</div>
                  
                  
                    <div class=''>
	<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 0px;'><![endif]-->
	<div style='color:#555555;font-family:'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 0px;'>	
		<div style='line-height:14px;font-size:12px;color:#555555;font-family:'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;text-align:left;'><ol>
<li style='line-height: 14px; text-align: left; font-size: 12px;'><strong style='font-size: 14px;'>Ingrese&#160;</strong><span style='color: #0068a5;'><span style='font-size: 14px; line-height: 16px;'><strong><u>AQUÍ</u></strong></span></span><span style='font-size: 14px; line-height: 16px;'>.</span><br><br></li>
<li style='font-size: 12px; line-height: 14px; text-align: left;'><span style='background-color: rgb(255, 255, 153); line-height: 14px; font-size: 12px;'><strong style='font-size: 14px;'>&#160;Copie y pegue los </strong><span style='font-size: 14px; line-height: 16px;'><strong>códigos</strong></span><strong style='font-size: 14px;'>&#160;uno a uno!</strong></span><br><br></li>
<li style='font-size: 14px; line-height: 16px; text-align: left;'><strong>Ya estas listo para comprar en Amazon.com!&#160;<br><br></strong></li>
<li style='font-size: 14px; line-height: 16px; text-align: left;'><strong>Si necesitas ahora traer tu compras a Venezuela haz click <a style='color:#0068A5;text-decoration: underline;' href='https://www.appbb.co/Servicio-Puerta-a-Puerta-p105305899' target='_blank' rel='noopener'>AQUI</a></strong></li>
</ol></div>	
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
</div>
                  
                  
                    <div class=''>
	<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
	<div style='color:#555555;font-family:'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;line-height:150%; padding-right: 10px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px;'>	
		<div style='line-height:18px;font-size:12px;color:#555555;font-family:'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;text-align:left;'><p style='margin: 0;line-height: 18px;text-align: left;font-size: 12px'><span style='line-height: 18px; font-size: 12px;'><em><span style='color: #999999;'>*las tarjetas de amazon.com solo funcionan en cuentas de amazon.com y no en otras de sus filiales como amazon.es, amazon.co.jp, entre otras. Es obligación&#160;del cliente aplicar inmediatamente la gift card al recibirla.&#160;</span></em></span></p></div>	
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
</div>
                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
    <div style='background-image:url(http://www.appbb.co/template-images/stripes-light.png);background-position:top center;background-repeat:repeat;;background-color:transparent'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-image:url('https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/stripes-light.png');background-position:top center;background-repeat:repeat;;background-color:transparent' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 600px;'><tr class='layout-full-width' style='background-color:#FFFFFF;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='600' style=' width:600px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 600px;display: table-cell;vertical-align: top;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->

                  
                    
<div align='center' class='button-container center ' style='padding-right: 30px; padding-left: 30px; padding-top:30px; padding-bottom:30px;'>
  <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'><tr><td style='padding-right: 30px; padding-left: 30px; padding-top:30px; padding-bottom:30px;' align='center'><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='https://www.appbb.co/Amazon-com-Gift-Cards-p112305975' style='height:30pt; v-text-anchor:middle; width:292pt;' arcsize='61%' strokecolor='#F29B27' fillcolor='#F29B27'><w:anchorlock/><v:textbox inset='0,0,0,0'><center style='color:#ffffff; font-family:'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:18px;'><![endif]-->
    <a href='https://www.appbb.co/Amazon-com-Gift-Cards-p112305975' target='_blank' style='display: block;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #ffffff; background-color: #F29B27; border-radius: 25px; -webkit-border-radius: 25px; -moz-border-radius: 25px; max-width: 390px; width: 300px;width: auto; border-top: 0px solid transparent; border-right: 0px solid transparent; border-bottom: 0px solid transparent; border-left: 0px solid transparent; padding-top: 5px; padding-right: 45px; padding-bottom: 0px; padding-left: 45px; font-family: 'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;mso-border-alt: none'>
      <span style='font-family:'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:16px;line-height:32px;'><span style='font-size: 18px; line-height: 36px;'><strong>COMPRA MAS HACIENDO CLICK&#160;</strong></span><span style='font-size: 18px; line-height: 36px;'><strong>AQUÍ</strong></span></span>
    </a>
  <!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->
</div>

                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
    <div style='background-image:url(http://www.appbb.co/template-images/stripes-light.png);background-position:top center;background-repeat:repeat;;background-color:transparent'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-image:url('https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/stripes-light.png');background-position:top center;background-repeat:repeat;;background-color:transparent' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 600px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='600' style=' width:600px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 600px;display: table-cell;vertical-align: top;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->

                  
                    <div align='center' class='img-container center  autowidth  fullwidth ' style='padding-right: 0px;  padding-left: 0px;'>
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px;line-height:0px;'><td style='padding-right: 0px; padding-left: 0px;' align='center'><![endif]-->
  <img class='center  autowidth  fullwidth' align='center' border='0' src='https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/rounded_bottom.png' alt='Image' title='Image' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 600px' width='600'>
<div style='line-height:50px;font-size:1px'>&#160;</div><!--[if mso]></td></tr></table><![endif]-->
</div>

                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
    <div style='background-color:#F29B27;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid mixed-two-up no-stack'>
        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:#F29B27;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 600px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='400' style=' width:400px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num8' style='display: table-cell;vertical-align: top;min-width: 320px;max-width: 400px;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->

                  
                    <div class=''>
	<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 40px; padding-bottom: 10px;'><![endif]-->
	<div style='color:#FFFFFF;font-family:'Oswald', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 40px; padding-bottom: 10px;'>	
		<div style='line-height:14px;font-size:12px;color:#FFFFFF;font-family:'Oswald', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;text-align:left;'><p style='margin: 0;line-height: 14px;font-size: 12px'><span style='line-height: 14px; font-size: 12px;'><strong style='font-family: Oswald, 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size: 20px;'>Ayuda con tu orden? </strong><span style='font-size: 20px; line-height: 24px;'><strong>Escríbenos</strong></span><strong style='font-family: Oswald, 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size: 20px;'>.</strong></span></p></div>	
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
</div>
                  
                  
                    <div class=''>
	<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 15px;'><![endif]-->
	<div style='color:#FFFFFF;font-family:'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;line-height:150%; padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 15px;'>	
		<div style='font-size:12px;line-height:18px;color:#FFFFFF;font-family:'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 18px'><span style='font-size: 14px; line-height: 21px;'>Tenemos a tu mano el chat en vivo de appbb.co y nuestras redes sociales, no dudes es aclarar cualquier duda. Nuestro WhatsApp esta disponible para ti</span></p></div>	
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
</div>
                  
                  
                    
<div align='left' class='button-container left ' style='padding-right: 10px; padding-left: 10px; padding-top:0px; padding-bottom:25px;'>
  <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top:0px; padding-bottom:25px;' align='left'><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='' style='height:46pt; v-text-anchor:middle; width:220pt;' arcsize='41%' strokecolor='#FFFFFF' fillcolor='transparent'><w:anchorlock/><v:textbox inset='0,0,0,0'><center style='color:#ffffff; font-family:'Oswald', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:30px;'><![endif]-->
    <div style='color: #ffffff; background-color: transparent; border-radius: 25px; -webkit-border-radius: 25px; -moz-border-radius: 25px; max-width: 324px; width: 284px;width: auto; border-top: 4px solid #FFFFFF; border-right: 4px solid #FFFFFF; border-bottom: 4px solid #FFFFFF; border-left: 4px solid #FFFFFF; padding-top: 0px; padding-right: 20px; padding-bottom: 0px; padding-left: 20px; font-family: 'Oswald', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; text-align: center; mso-border-alt: none;'>
      <span style='font-family:'Oswald', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:16px;line-height:32px;'><strong><span style='font-size: 30px; line-height: 54px;'>+1.786.569.2858</span></strong></span>
    </div>
  <!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->
</div>

                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align='center' width='200' style=' width:200px; padding-right: 0px; padding-left: 0px; padding-top:35px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num4' style='display: table-cell;vertical-align: top;max-width: 320px;min-width: 200px;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:35px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->

                  
                    <div align='center' class='img-container center  autowidth  ' style='padding-right: 0px;  padding-left: 0px;'>
<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px;line-height:0px;'><td style='padding-right: 0px; padding-left: 0px;' align='center'><![endif]-->
<div style='line-height:20px;font-size:1px'>&#160;</div>  <img class='center  autowidth ' align='center' border='0' src='https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/customer_care.png' alt='Image' title='Image' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 152px' width='152'>
<!--[if mso]></td></tr></table><![endif]-->
</div>

                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
    <div style='background-image:url(http://www.appbb.co/template-images/bg_footer_1.png);background-position:top center;background-repeat:repeat;;background-color:#e4f9f7'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-image:url('https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/bg_footer_1.png');background-position:top center;background-repeat:repeat;;background-color:#e4f9f7' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 600px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='600' style=' width:600px; padding-right: 0px; padding-left: 0px; padding-top:30px; padding-bottom:30px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 600px;display: table-cell;vertical-align: top;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:30px; padding-bottom:30px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->

                  
                    <div class=''>
	<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
	<div style='color:#3C82A0;font-family:'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>	
		<div style='line-height:14px;font-size:12px;color:#3C82A0;font-family:'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;text-align:left;'><p style='margin: 0;line-height: 14px;text-align: center;font-size: 12px'><span style='font-family: inherit; background-color: transparent; font-size: 14px; line-height: 16px;'><strong>APPBB LLC</strong></span></p><p style='margin: 0;line-height: 14px;text-align: center;font-size: 12px'><span style='font-size: 12px; font-family: inherit; background-color: transparent; line-height: 14px;'>Amazom.com Gift Cards con PayPal, Bitcoins y Bolívares. Otras Gift Cards y Transferencias Bancos/PayPal/Payza/Neteller/ Skrill/Payoneer</span></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&#160;</p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>Delaware, US.</p></div>	
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
</div>
                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 600px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='600' style=' width:600px; padding-right: 0px; padding-left: 0px; padding-top:15px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 600px;display: table-cell;vertical-align: top;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:15px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->

                  
                    <div class=''>
	<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
	<div style='color:#555555;font-family:'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>	
		<div style='font-size:12px;line-height:14px;color:#555555;font-family:'Catamaran', 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-family: inherit; text-align: left; background-color: transparent; font-size: 12px; line-height: 14px;'>Appbb services llc 2018</span><span style='font-family: inherit; text-align: left; background-color: transparent; font-size: 12px; line-height: 14px;'>&#160;</span></p></div>	
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
</div>
                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
   <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
		</td>
  </tr>
  </tbody>
  </table>
  <!--[if (mso)|(IE)]></div><![endif]-->


</body></html>";
$msgCompEntrega="<!DOCTYPE html '-//w3c//dtd xhtml 1.0 transitional //en' 'http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd'><html xmlns='http://www.w3.org/1999/xhtml'><head>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta name='viewport' content='width=device-width'>
    <meta http-equiv='X-UA-Compatible' content='IE=9; IE=8; IE=7; IE=EDGE'>
    <title>Template Base</title>


</head>
<body style='width: 100% !important;min-width: 100%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100% !important;margin: 0;padding: 0;background-color: #FFFFFF'>
  <style id='media-query'>
    /* Client-specific Styles & Reset */
    #outlook a {
        padding: 0;
    }

    /* .ExternalClass applies to Outlook.com (the artist formerly known as Hotmail) */
    .ExternalClass {
        width: 100%;
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
        line-height: 100%;
    }

    #backgroundTable {
        margin: 0;
        padding: 0;
        width: 100% !important;
        line-height: 100% !important;
    }

    /* Buttons */
    .button a {
        display: inline-block;
        text-decoration: none;
        -webkit-text-size-adjust: none;
        text-align: center;
    }

    .button a div {
        text-align: center !important;
    }

    /* Outlook First */
    body.outlook p {
        display: inline !important;
    }

    /*  Media Queries */
@media only screen and (max-width: 500px) {
  table[class='body'] img {
    height: auto !important;
    width: 100% !important; }
  table[class='body'] img.fullwidth {
    max-width: 100% !important; }
  table[class='body'] center {
    min-width: 0 !important; }
  table[class='body'] .container {
    width: 95% !important; }
  table[class='body'] .row {
    width: 100% !important;
    display: block !important; }
  table[class='body'] .wrapper {
    display: block !important;
    padding-right: 0 !important; }
  table[class='body'] .columns, table[class='body'] .column {
    table-layout: fixed !important;
    float: none !important;
    width: 100% !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    display: block !important; }
  table[class='body'] .wrapper.first .columns, table[class='body'] .wrapper.first .column {
    display: table !important; }
  table[class='body'] table.columns td, table[class='body'] table.column td, .col {
    width: 100% !important; }
  table[class='body'] table.columns td.expander {
    width: 1px !important; }
  table[class='body'] .right-text-pad, table[class='body'] .text-pad-right {
    padding-left: 10px !important; }
  table[class='body'] .left-text-pad, table[class='body'] .text-pad-left {
    padding-right: 10px !important; }
  table[class='body'] .hide-for-small, table[class='body'] .show-for-desktop {
    display: none !important; }
  table[class='body'] .show-for-small, table[class='body'] .hide-for-desktop {
    display: inherit !important; }
  .mixed-two-up .col {
    width: 100% !important; } }
 @media screen and (max-width: 500px) {
      div[class='col'] {
          width: 100% !important;
      }
    }

    @media screen and (min-width: 501px) {
      table[class='container'] {
          width: 500px !important;
      }
    }
  </style>
  <table class='body' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 100%;width: 100%;table-layout: fixed' cellpadding='0' cellspacing='0' width='100%' border='0'>
      <tbody><tr style='vertical-align: top'>
          <td class='center' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;background-color: #FFFFFF' align='center' valign='top'>

              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid two-up' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #333;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='250'><![endif]--><div class='col num6' style='display: inline-block;vertical-align: top;text-align: center;width: 250px'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='250'><![endif]--><div class='col num6' style='display: inline-block;vertical-align: top;text-align: center;width: 250px'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='500'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
      <div style='font-size:12px;line-height:14px;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 14px;line-height: 14px;text-align: center'>Hola <strong>$nombre_cliente</strong>, su pedido fue procesado de forma exitosa.</p><p style='color:#555555;margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;</p><p style='color:#555555;margin: 0;font-size: 12px;line-height: 14px;text-align: center'><br>Es un gusto para nosotros poder atenderle. Todo está en orden por lo que ya hemos procesado su pedido.<p></div>
        <div style='color:006600;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'>
          <p style='color: #006600;margin: 0;font-size: 30px;line-height: 30px;text-align: center'><strong>¡Muchas gracias por su compra!</strong></p>
      <p style='margin: 0;font-size: 20px;line-height: 30px;text-align: center'><strong>Esperamos que disfrute su tarjeta de regalo</strong></p></div>
    </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='500'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 25px;padding-right: 0px;padding-bottom: 30px;padding-left: 0px;border-top: 0px dotted transparent;border-right: 0px dotted transparent;border-bottom: 0px dotted transparent;border-left: 0px dotted transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><hr><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
        <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 20px; line-height: 24px;'>N&#218;MERO DE ORDEN: &nbsp;<strong><span style='font-size: 20px; line-height: 24px;'>$num_orden</span></strong></span></p></div>
        </div>
      </br>
        <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'>Estado:<span style='color: #006600; font-size: 14px; line-height: 16px;'>&nbsp;<strong>PROCESADO Y ENTREGADO</strong></span></p></div>
        </div>
        <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'>Producto:<span style='color: #555555; font-size: 14px; line-height: 16px;'>&nbsp;<strong>$nom_GC Gift Card de $$monto_GC</strong></span></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
<hr></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='500'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
        <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:center;'><p style='margin: 0;font-size: 16px;line-height: 17px'><strong>¿Te ha gustado nuestro servicio y atención?</strong></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td></td>
                </tr></tr>
              </tbody></table></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid mixed-two-up' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #333;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='167'><![endif]--><div class='col num4' style='display: inline-block;vertical-align: top;text-align: center;width: 167px'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 10px;padding-right: 10px;padding-bottom: 15px;padding-left: 10px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
        <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:20px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:center'><p style='margin: 0;font-size: 20px;text-align: center'><strong>¡Ayudanos a crecer!</strong></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;</p><p style='margin: 0;font-size: 12px;line-height: 14px'>&nbsp;<br></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='333'><![endif]--><div class='col num8' style='display: inline-block;vertical-align: top;text-align: left;width: 333px'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='left' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 15px;padding-right: 0px;padding-bottom: 15px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 2px dashed #555555'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
        <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:20px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left'><p style='margin: 0;font-size: 14px;line-height: 14px'>Déjanos una <strong>referencia</strong> en nuestra páginas de Facebook o <strong>habla de nosotros</strong> con tus amigos, tu ayuda es muy importante para nosotros:</p>
            <p style='margin: 0;font-size: 14px;line-height: 30px'>&nbsp;</p>
              <p style='margin: 0;font-size: 14px;line-height: 20px'><strong>Haz un comentario positivo en nuestra</strong></p>
              <p style='color:#0066cc; margin: 0;font-size: 14px;line-height: 25px'><strong><a href='https://www.facebook.com/sharer/sharer.php?u=https://www.appbb.co/giftcards/&t=Appbb' title='Dejar Referencia' target='_blank'>Página de</a> Facebook</strong></p>
            <p style='color:#00cccc; margin: 0;font-size: 14px;line-height: 25px'><strong><a href='https://twitter.com/intent/tweet?text=Compra%20Gift%20Cards%20de%20Amazon%20y%20p%C3%A1galas%20con%20PayPal,%20Bitcoins%20o%20Bol%C3%ADvares&url=https://www.appbb.co/giftcards/' title='Dejar Referencia' target='_blank'>Un tweet</a> en Twitter</strong></p>
        <p style='color:#330066; margin: 0;font-size: 14px;line-height: 25px'><strong><a href='https://instagram.com/appbbinc' title='Dejar Referencia' target='_blank'>O síguenos</a> en Instagram!</strong></p>

          </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td></td>
                </tr></tr>
              </tbody></table></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='500'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'>
    <tbody><tr style='vertical-align: top'>
        <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px' align='center'>
            <div style='height: 1px;'>
                <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;border-top: 1px solid #BBBBBB;width: 100%' align='center' border='0' cellspacing='0'>
                    <tbody><tr style='vertical-align: top'>
                        <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' align='center'></td>
                    </tr>
                </tbody></table>
            </div>
        </td>
    </tr>
</tbody></table></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td></td>
                </tr></tr>
              </tbody></table></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='500'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
        <div style='color:#555555;line-height:120%;font-family:TimesNewRoman, 'Times New Roman', Times, Baskerville, Georgia, serif;'>
          <div style='font-size:12px;line-height:14px;font-family:TimesNewRoman, 'Times New Roman', Times, Baskerville, Georgia, serif;color:#555555;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><strong>Comprobante de entrega:</strong> La recepción y apertura de este correo electrónico representa un compobante de entrega de nuestro servicio como se ha descrito en nuestros Términos y Condiciones.</p></div>
        </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td></td>
                </tr></tr>
              </tbody></table></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td></td>
                </tr></tr>
              </tbody></table></table>
      <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
        <tbody><tr style='vertical-align: top'>
          <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 15px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
              <div style='color:#959595;line-height:150%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
                <div style='font-size:12px;line-height:18px;color:#959595;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><span style='font-size: 14px; line-height: 16px;'><strong>© APPBB SERVICES LLC. 2010 - 2021</strong></span></p></div>
              </div>
          </td>
        </tr>
      </tbody></table>
    </td>
  </tr>
</tbody></table></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
          </td>
      </tr>
  </tbody></table>
</body></html>";

$asuntoBolivares= 'Pague su '.$nom_GC.' de $'.$monto_GC.' en Bolívares. Orden #'.$num_orden.' - Tienda de Appbb';
$msgBolivares="<!DOCTYPE html '-//w3c//dtd xhtml 1.0 transitional //en' 'http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd'><html xmlns='http://www.w3.org/1999/xhtml'><head>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta name='viewport' content='width=device-width'>
    <meta http-equiv='X-UA-Compatible' content='IE=9; IE=8; IE=7; IE=EDGE'>
    <title>Template Base</title>


</head>
<body style='width: 100% !important;min-width: 100%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100% !important;margin: 0;padding: 0;background-color: #FFFFFF'>
  <style id='media-query'>
    /* Client-specific Styles & Reset */
    #outlook a {
        padding: 0;
    }

    /* .ExternalClass applies to Outlook.com (the artist formerly known as Hotmail) */
    .ExternalClass {
        width: 100%;
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
        line-height: 100%;
    }

    #backgroundTable {
        margin: 0;
        padding: 0;
        width: 100% !important;
        line-height: 100% !important;
    }

    /* Buttons */
    .button a {
        display: inline-block;
        text-decoration: none;
        -webkit-text-size-adjust: none;
        text-align: center;
    }

    .button a div {
        text-align: center !important;
    }

    /* Outlook First */
    body.outlook p {
        display: inline !important;
    }

    /*  Media Queries */
@media only screen and (max-width: 500px) {
  table[class='body'] img {
    height: auto !important;
    width: 100% !important; }
  table[class='body'] img.fullwidth {
    max-width: 100% !important; }
  table[class='body'] center {
    min-width: 0 !important; }
  table[class='body'] .container {
    width: 95% !important; }
  table[class='body'] .row {
    width: 100% !important;
    display: block !important; }
  table[class='body'] .wrapper {
    display: block !important;
    padding-right: 0 !important; }
  table[class='body'] .columns, table[class='body'] .column {
    table-layout: fixed !important;
    float: none !important;
    width: 100% !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    display: block !important; }
  table[class='body'] .wrapper.first .columns, table[class='body'] .wrapper.first .column {
    display: table !important; }
  table[class='body'] table.columns td, table[class='body'] table.column td, .col {
    width: 100% !important; }
  table[class='body'] table.columns td.expander {
    width: 1px !important; }
  table[class='body'] .right-text-pad, table[class='body'] .text-pad-right {
    padding-left: 10px !important; }
  table[class='body'] .left-text-pad, table[class='body'] .text-pad-left {
    padding-right: 10px !important; }
  table[class='body'] .hide-for-small, table[class='body'] .show-for-desktop {
    display: none !important; }
  table[class='body'] .show-for-small, table[class='body'] .hide-for-desktop {
    display: inherit !important; }
  .mixed-two-up .col {
    width: 100% !important; } }
 @media screen and (max-width: 500px) {
      div[class='col'] {
          width: 100% !important;
      }
    }

    @media screen and (min-width: 501px) {
      table[class='container'] {
          width: 500px !important;
      }
    }
  </style>
  <table class='body' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 100%;width: 100%;table-layout: fixed' cellpadding='0' cellspacing='0' width='100%' border='0'>
      <tbody><tr style='vertical-align: top'>
          <td class='center' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;background-color: #FFFFFF' align='center' valign='top'>

              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid two-up' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #333;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='250'><![endif]--><div class='col num6' style='display: inline-block;vertical-align: top;text-align: center;width: 250px'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%' border='0'>
    <tbody><tr style='vertical-align: top'>
        <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px' align='center'>
            <div style='font-size:12px' align='center'>

                <img class='center' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: 0;height: auto;line-height: 100%;margin: 0 auto;float: none;width: 190px;max-width: 190px' align='center' border='0' src='http://www.appbb.co/template-images/logo.jpg' alt='Image' title='Image' width='190'>
            </div>
        </td>
    </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='250'><![endif]--><div class='col num6' style='display: inline-block;vertical-align: top;text-align: center;width: 250px'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
        <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><strong><span style='font-size: 16px; line-height: 19px;'>&nbsp;Appbb.co - Importaciones y Servicios Appbb, C.A.</span></strong><br></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='500'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
      <div style='font-size:12px;line-height:14px;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>Hola <strong>$nombre_cliente</strong>, hemos recibido su solicitud para comprar en Bolívares.</p><p style='color:#555555;margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;</p><p style='color:#555555;margin: 0;font-size: 12px;line-height: 14px;text-align: center'><br>Muchas gracias por su interés en nuestros servicios. A continuación detallamos la información para que concrete su compra.<p></div>
        <div style='color:006600;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'>
          <p style='color: #006600;margin: 0;font-size: 26px;line-height: 30px;text-align: center'><strong>¡Es momento de pagar su Gift Card!</strong></p>
      <p style='margin: 0;font-size: 16px;line-height: 30px;text-align: center'><strong>Confirmado su pago le enviaremos su Tarjeta de Regalo</strong></p></div>
    </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='500'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 25px;padding-right: 0px;padding-bottom: 30px;padding-left: 0px;border-top: 0px dotted transparent;border-right: 0px dotted transparent;border-bottom: 0px dotted transparent;border-left: 0px dotted transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><hr><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
        <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 17px;text-align: center'><span style='font-size: 14px; line-height: 35px;'>N&#218;MERO DE ORDEN:&nbsp;<strong>$num_orden</strong></span></p></div>
        </div>
        <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 18px;line-height: 17px;text-align: center'><strong>Monto a pagar:<span style='color: #006600; font-size: 14px; line-height: 16px;'>&nbsp;$monto_a_cancelar Bs.F</strong> ($1 = $dolartoday Bs.F)</span></p></div>
          <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'>Recibe una:<span style='color: #555555; font-size: 14px; line-height: 16px;'>&nbsp;<strong>$nom_GC Gift Card de $$monto_GC dólares</strong></span></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
<hr></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='500'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
        <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:center;'><p style='margin: 0;font-size: 16px;line-height: 17px'><strong>Pague con transferencia o depósito:</strong></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td></td>
                </tr></tr>
              </tbody></table></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid mixed-two-up' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #333;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='167'><![endif]--><div class='col num4' style='display: inline-block;vertical-align: top;text-align: center;width: 167px'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 10px;padding-right: 10px;padding-bottom: 15px;padding-left: 10px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
        <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:20px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:center'><p style='margin: 0;font-size: 16px;text-align: center'><strong>Nuestros datos bancarios</strong></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;&nbsp;<br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><br></p><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&nbsp;</p><p style='margin: 0;font-size: 12px;line-height: 14px'>&nbsp;<br></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='333'><![endif]--><div class='col num8' style='display: inline-block;vertical-align: top;text-align: left;width: 333px'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='left' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 15px;padding-right: 0px;padding-bottom: 15px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 2px dashed #555555'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
        <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:18px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left'>
              <p style='margin: 0;font-size: 14px;line-height: 18px'><strong>Banesco</strong></p>
              <p style='margin: 0;font-size: 14px;line-height: 18px'><strong>Corriente: 0134 0066 1906 6104 7438</strong></p>
              <p style='margin: 0;font-size: 14px;line-height: 18px'>A nombre de: Vaalet Accesorios C.I.: 214707256</p>
            <p style='margin: 0;font-size: 14px;line-height: 18px'>&nbsp;</p>
            <p style='margin: 0;font-size: 14px;line-height: 18px'><strong>Banco Provincial BBVA (Enviar Núm.Cédula de quien transfiere)</strong></p>
            <p style='margin: 0;font-size: 14px;line-height: 18px'><strong>Corriente: 0108 0509 1701 0005 8089</strong></p>
            <p style='margin: 0;font-size: 14px;line-height: 18px'>A nombre de: Israel Osuna C.I.: 19014934</p>
          <p style='margin: 0;font-size: 14px;line-height: 18px'>&nbsp;</p>
          <p style='margin: 0;font-size: 14px;line-height: 18px'><strong>Mercantil</strong></p>
          <p style='margin: 0;font-size: 14px;line-height: 18px'><strong>Ahorro: 0105 0618 2906 1839 2297</strong></p>
          <p style='margin: 0;font-size: 14px;line-height: 18px'>A nombre de: Israel Osuna C.I.: 19014934</p>
        <p style='margin: 0;font-size: 14px;line-height: 18px'>&nbsp;</p>
      <p style='margin: 0;font-size: 14px;line-height: 18px'>&nbsp;</p>
      <p style='margin: 0;font-size: 14px;line-height: 18px'><strong>Banco de Venezuela</strong></p>
      <p style='margin: 0;font-size: 14px;line-height: 18px'><strong>Corriente: 0102 0540 9000 0027 1376</strong></p>
      <p style='margin: 0;font-size: 14px;line-height: 18px'>A nombre de: Vanessa Teran C.I.: 21470725</p>
          </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td></td>
                </tr></tr>
              </tbody></table></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='500'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'>
    <tbody><tr style='vertical-align: top'>
        <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px' align='center'>
            <div style='height: 1px;'>
                <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;border-top: 1px solid #BBBBBB;width: 100%' align='center' border='0' cellspacing='0'>
                    <tbody><tr style='vertical-align: top'>
                        <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' align='center'></td>
                    </tr>
                </tbody></table>
            </div>
        </td>
    </tr>
</tbody></table></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td></td>
                </tr></tr>
              </tbody></table></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='500'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
        <div style='color:#555555;line-height:120%;font-family:TimesNewRoman, 'Times New Roman', Times, Baskerville, Georgia, serif;'>
          <div style='font-size:12px;line-height:14px;font-family:TimesNewRoman, 'Times New Roman', Times, Baskerville, Georgia, serif;color:#555555;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><strong>Comprobante de entrega:</strong> Luego de realizar su pago por favor envíenos adjunto su recibo de depósito o transferencia por esta vía.</p>
          <p style='margin: 0;font-size: 12px;line-height: 14px;text-align: justify'><strong>Importante:</strong> Nuestros precios en bolívares se calculan a tasa de DolarToday.com, procure realizar el pago antes de que el valor del dólar sufra fluctuaciones.</p></div>
        </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td></td>
                </tr></tr>
              </tbody></table></table>
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='500'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody><tr style='vertical-align: top'>
    <td class='button-container' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px' align='center'>
      <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
        <tbody><tr style='vertical-align: top'>
          <td class='button' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%' align='center' valign='middle'>
              <!--[if mso]>
                <v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='https://appbb.co/giftcards'
                  style='
                    height:66px;
                    v-text-anchor:middle;
                    width:168px;'
                    arcsize='7%'
                    strokecolor='#5cb85c'
                    fillcolor='#5cb85c' >
                <w:anchorlock/>
                  <center
                    style='color:#ffffff;
                      font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;
                      font-size:18px;'>
              <![endif]-->
             <!--[if !mso]><!- - --><div style='display: inline-block;
              border-radius: 4px;
              -webkit-border-radius: 4px;
              -moz-border-radius: 4px;
              max-width: 100%;
              width: auto;
              border-top: 0px solid transparent;
              border-right: 0px solid transparent;
              border-bottom: 0px solid transparent;
              border-left: 0px solid transparent;' align='center'>

              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 66' width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;border-radius: 4px;                   -webkit-border-radius: 4px;                   -moz-border-radius: 4px;                  color: #ffffff;                  background-color: #5cb85c;                  padding-top: 15px;                   padding-right: 30px;                  padding-bottom: 15px;                  padding-left: 30px;                  font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align: center' valign='middle'><!--<![endif]-->
                  <a style='display: inline-block;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;background-color: #5cb85c;color: #ffffff' href='https://appbb.co/giftcards/' target='_blank'>
                        <span style='font-size:12px;line-height:24px;'><em><span style='font-size: 18px; line-height: 36px;' data-mce-style='font-size: 18px; line-height: 36px;'>&nbsp;Clic para ir a la Tienda de Appbb!&nbsp;<span style='line-height: 36px; font-size: 18px;' data-mce-style='line-height: 36px; font-size: 18px;'>&#65279;</span></span></em></span>
                  </a>
                <!--[if !mso]><!- - --></td></tr></tbody></table>
              </div><!--<![endif]-->
              <!--[if mso]>
                    </center>
                </v:roundrect>
              <![endif]-->
          </td>
        </tr>
      </tbody></table>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td></td>
                </tr></tr>
              </tbody></table></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='500'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'>
<table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' align='center' valign='top'>
      <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' border='0' cellspacing='0' cellpadding='0'>
        <tbody><tr style='vertical-align: top'>
          <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;max-width: 156px' align='center' valign='top'>

            <!--[if (gte mso 9)|(IE)]>
            <table width='166' align='left' border='0' cellspacing='0' cellpadding='0'>
              <tr>
                <td align='left'>
            <![endif]-->
            <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' width='100%' align='left' cellpadding='0' cellspacing='0' border='0'>
              <tbody><tr style='vertical-align: top'>
                <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' align='left' valign='middle'>


                  <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0' align='left' border='0' cellspacing='0' cellpadding='0' height='37'>
                      <tbody><tr style='vertical-align: top'>
                          <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='37' align='left' valign='middle'>
                            <a href='https://www.facebook.com/appbb.co' title='Facebook' target='_blank'>
                                <img style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important' src='http://www.appbb.co/template-images/facebook.png' alt='Facebook' title='Facebook' width='32'>
                            </a>
                          </td>
                      </tr>
                  </tbody></table>
                  <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0' align='left' border='0' cellspacing='0' cellpadding='0' height='37'>
                      <tbody><tr style='vertical-align: top'>
                          <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='37' align='left' valign='middle'>
                            <a href='https://twitter.com/app_bb' title='Twitter' target='_blank'>
                                <img style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important' src='http://www.appbb.co/template-images/twitter.png' alt='Twitter' title='Twitter' width='32'>
                            </a>
                          </td>
                      </tr>
                  </tbody></table>
                  <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0' align='left' border='0' cellspacing='0' cellpadding='0' height='37'>
                      <tbody><tr style='vertical-align: top'>
                          <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='37' align='left' valign='middle'>
                            <a href='https://instagram.com/appbbinc' title='Instagram' target='_blank'>
                                <img style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important' src='http://www.appbb.co/template-images/instagram.png' alt='Instagram' title='Instagram' width='32'>
                            </a>
                          </td>
                      </tr>
                  </tbody></table>
                </td>
              </tr>
            </tbody></table>
            <!--[if (gte mso 9)|(IE)]>
                </td>
              </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
      </tbody></table>
      <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
        <tbody><tr style='vertical-align: top'>
          <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 15px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
              <div style='color:#959595;line-height:150%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
                <div style='font-size:12px;line-height:18px;color:#959595;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 14px;line-height: 21px;text-align: center'>Todos los derechos reservados. Importaciones y Servicios Appbb, C.A.</p></div>
              </div>
          </td>
        </tr>
      </tbody></table>
    </td>
  </tr>
</tbody></table></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
          </td>
      </tr>
  </tbody></table>
</body></html>";

$asuntoBolivaresManual= 'Pague su '.$nom_GC.' de $'.$monto_GC.' en Bolívares. Orden #'.$num_orden.' - Tienda de Appbb';

$msgBolivaresManual="<!DOCTYPE HTML PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'><head>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta name='viewport' content='width=device-width'>
    <!--[if !mso]><!--><meta http-equiv='X-UA-Compatible' content='IE=edge'><!--<![endif]-->
    <title></title>
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

[owa] .block-grid .col {
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
    max-width: 100% !important;
    display: block !important; }
  .block-grid {
    width: calc(100% - 40px) !important; }
  .col {
    width: 100% !important; }
    .col > div {
      margin: 0 auto; }
  img.fullwidth, img.fullwidthOnMobile {
    max-width: 100% !important; }
  .no-stack .col {
    min-width: 0 !important;
    display: table-cell !important; }
  .no-stack.two-up .col {
    width: 50% !important; }
  .no-stack.mixed-two-up .col.num4 {
    width: 33% !important; }
  .no-stack.mixed-two-up .col.num8 {
    width: 66% !important; }
  .no-stack.three-up .col.num4 {
    width: 33% !important; }
  .no-stack.four-up .col.num3 {
    width: 25% !important; }
  .mobile_hide {
    min-height: 0px;
    max-height: 0px;
    max-width: 0px;
    display: none;
    overflow: hidden;
    font-size: 0px; } }

    </style>
</head>
<body class='clean-body' style='margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #FFFFFF'>
  <style type='text/css' id='media-query-bodytag'>
    @media (max-width: 520px) {
      .block-grid {
        min-width: 320px!important;
        max-width: 100%!important;
        width: 100%!important;
        display: block!important;
      }

      .col {
        min-width: 320px!important;
        max-width: 100%!important;
        width: 100%!important;
        display: block!important;
      }

        .col > div {
          margin: 0 auto;
        }

      img.fullwidth {
        max-width: 100%!important;
      }
      img.fullwidthOnMobile {
        max-width: 100%!important;
      }
      .no-stack .col {
        min-width: 0!important;
        display: table-cell!important;
      }
      .no-stack.two-up .col {
        width: 50%!important;
      }
      .no-stack.mixed-two-up .col.num4 {
        width: 33%!important;
      }
      .no-stack.mixed-two-up .col.num8 {
        width: 66%!important;
      }
      .no-stack.three-up .col.num4 {
        width: 33%!important;
      }
      .no-stack.four-up .col.num3 {
        width: 25%!important;
      }
      .mobile_hide {
        min-height: 0px!important;
        max-height: 0px!important;
        max-width: 0px!important;
        display: none!important;
        overflow: hidden!important;
        font-size: 0px!important;
      }
    }
  </style>
  <!--[if IE]><div class='ie-browser'><![endif]-->
  <!--[if mso]><div class='mso-container'><![endif]-->
  <table class='nl-container' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #FFFFFF;width: 100%' cellpadding='0' cellspacing='0'>
  <tbody>
  <tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
    <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td align='center' style='background-color: #FFFFFF;'><![endif]-->

    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;display: table-cell;vertical-align: top;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->

                  
                    <div class=''>
  <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
  <div style='color:#555555;line-height:200%;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>  
    <div style='font-size:12px;line-height:24px;font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;color:#555555;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 24px;text-align: center'><strong><span style='font-size: 22px; line-height: 44px;'>TIENDA DE APPBB.CO</span></strong></p></div> 
  </div>
  <!--[if mso]></td></tr></table><![endif]-->
</div>
                  
                  
                    
<table border='0' cellpadding='0' cellspacing='0' width='100%' class='divider ' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
    <tbody>
        <tr style='vertical-align: top'>
            <td class='divider_inner' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-right: 10px;padding-left: 10px;padding-top: 10px;padding-bottom: 10px;min-width: 100%;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                <table class='divider_content' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                    <tbody>
                        <tr style='vertical-align: top'>
                            <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                                <span></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;display: table-cell;vertical-align: top;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->

                  
                    <div class=''>
  <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
  <div style='color:#555555;line-height:120%;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>  
    <div style='font-size:12px;line-height:14px;font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;color:#555555;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'>&#160;<strong style='color: rgb(0, 102, 0); font-size: 26px; text-align: center; background-color: transparent;'>¡Es momento de pagar su Pedido!</strong></p><p style='margin: 0;color: rgb(0, 102, 0);font-size: 16px;line-height: 19px;text-align: center'><strong>Confirmado su pago, procesaremos y enviaremos su Pedido</strong></p></div>  
  </div>
  <!--[if mso]></td></tr></table><![endif]-->
</div>
                  
                  
                    
<table border='0' cellpadding='0' cellspacing='0' width='100%' class='divider ' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
    <tbody>
        <tr style='vertical-align: top'>
            <td class='divider_inner' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-right: 10px;padding-left: 10px;padding-top: 10px;padding-bottom: 10px;min-width: 100%;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                <table class='divider_content' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                    <tbody>
                        <tr style='vertical-align: top'>
                            <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                                <span></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;display: table-cell;vertical-align: top;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->

                  
                    <div class=''>
  <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
  <div style='color:#555555;line-height:120%;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>  
    <div style='font-size:12px;line-height:14px;font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;color:#555555;text-align:left;'><div style='font-size:16px; line-height:19px;'><div style='font-size: 12px; line-height: 14px;'><p style='margin: 0;line-height: 14px;text-align: center;font-size: 12px'><span style='font-size: 16px; line-height: 19px;'><strong><span style='line-height: 19px; font-size: 16px;'>NÚMERO DE ORDEN:&#160;$num_orden</span></strong></span></p></div></div><div style='font-size:16px; line-height:19px;'><div style='font-size: 12px; line-height: 14px;'><p style='margin: 0;font-size: 18px;line-height: 21px;text-align: center'><span style='font-size: 16px; line-height: 19px;'><strong>Monto a pagar:<span style='color: rgb(0, 102, 0); line-height: 19px; font-size: 16px;'>&#160;$monto_en_bsf Bs.F</span>&#160;</strong></span></p><p style='margin: 0;font-size: 18px;line-height: 21px;text-align: center'><span style='font-size: 16px; line-height: 19px;'><strong>($1 = $tasaDT Bs.F)</strong></span></p></div><div style='font-size: 12px; line-height: 14px;'><p style='margin: 0;font-size: 14px;line-height: 16px;text-align: center'><span style='font-size: 16px; line-height: 19px;'><strong>Motivo:&#160;<span style='line-height: 19px; font-size: 16px;'>&#160;$nom_GC - $$monto_GC dólares</span></strong></span></p></div></div></div>  
  </div>
  <!--[if mso]></td></tr></table><![endif]-->
</div>
                  
                  
                    
<table border='0' cellpadding='0' cellspacing='0' width='100%' class='divider ' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
    <tbody>
        <tr style='vertical-align: top'>
            <td class='divider_inner' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-right: 10px;padding-left: 10px;padding-top: 10px;padding-bottom: 10px;min-width: 100%;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                <table class='divider_content' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                    <tbody>
                        <tr style='vertical-align: top'>
                            <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                                <span></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;display: table-cell;vertical-align: top;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->

                  
                    <div class=''>
  <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
  <div style='color:#555555;line-height:120%;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>  
    <div style='line-height:14px;font-size:12px;font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;color:#555555;text-align:left;'><p style='margin: 0;line-height: 14px;font-size: 12px;text-align: center'><span style='line-height: 19px; font-size: 16px;'><strong><span style='background-color: transparent; line-height: 19px; font-size: 16px;'>Pague con transferencia o depósito</span></strong></span><br></p></div> 
  </div>
  <!--[if mso]></td></tr></table><![endif]-->
</div>
                  
                  
                    
<table border='0' cellpadding='0' cellspacing='0' width='100%' class='divider ' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
    <tbody>
        <tr style='vertical-align: top'>
            <td class='divider_inner' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-right: 10px;padding-left: 10px;padding-top: 10px;padding-bottom: 10px;min-width: 100%;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                <table class='divider_content' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                    <tbody>
                        <tr style='vertical-align: top'>
                            <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                                <span></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;display: table-cell;vertical-align: top;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->

                  
                    <div class=''>
  <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
  <div style='color:#555555;line-height:120%;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>  
    <div style='font-size:12px;line-height:14px;font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;color:#555555;text-align:left;'><p style='margin: 0;font-size: 12px;line-height: 14px;text-align: center'><strong style='font-size: 14px; background-color: transparent;'>Banesco</strong></p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'><strong>Corriente: 0134 0066 1906 6104 7438</strong></p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'>A nombre de: Vaalet Accesorios</p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'>C.I.: 214707256</p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'>&#160;</p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'><strong>Banco Provincial BBVA (Enviar Núm.Cédula de quien transfiere)</strong></p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'><strong>Corriente: 0108 0509 1701 0005 8089</strong></p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'>A nombre de: Israel Osuna</p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'>C.I.: 19014934</p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'>&#160;</p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'><strong>Mercantil</strong></p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'><strong>Ahorro: 0105 0618 2906 1839 2297</strong></p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'>A nombre de: Israel Osuna</p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'>C.I.: 19014934</p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'>&#160;</p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'><strong>Banco de Venezuela</strong></p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'><strong>Corriente: 0102 0540 9000 0027 1376</strong></p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'>A nombre de: Vanessa&#160;Teran</p><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: center'>C.I.: 21470725</p></div> 
  </div>
  <!--[if mso]></td></tr></table><![endif]-->
</div>
                  
                  
                    
<table border='0' cellpadding='0' cellspacing='0' width='100%' class='divider ' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
    <tbody>
        <tr style='vertical-align: top'>
            <td class='divider_inner' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-right: 10px;padding-left: 10px;padding-top: 10px;padding-bottom: 10px;min-width: 100%;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                <table class='divider_content' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                    <tbody>
                        <tr style='vertical-align: top'>
                            <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                                <span></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style='background-color:transparent;'>
      <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '>
        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
          <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='background-color:transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width: 500px;'><tr class='layout-full-width' style='background-color:transparent;'><![endif]-->

              <!--[if (mso)|(IE)]><td align='center' width='500' style=' width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><![endif]-->
            <div class='col num12' style='min-width: 320px;max-width: 500px;display: table-cell;vertical-align: top;'>
              <div style='background-color: transparent; width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'><!--<![endif]-->

                  
                    <div class=''>
  <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
  <div style='color:#555555;line-height:120%;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>  
    <div style='font-size:12px;line-height:14px;font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;color:#555555;text-align:left;'><p style='margin: 0;line-height: 14px;text-align: justify;font-size: 12px'><span style='line-height: 16px; font-size: 14px;'><span style='text-decoration: underline; line-height: 16px; font-size: 14px;'><strong>Comprobante de entrega</strong></span><strong style='line-height: inherit;'>:</strong>&#160;Luego de realizar su pago por favor envíe el recibo de depósito o transferencia por esta vía.</span></p><p style='margin: 0;line-height: 14px;text-align: justify;font-size: 12px'><span style='line-height: 16px; font-size: 14px;'>&#160;</span><br style='line-height: inherit;'></p><p style='margin: 0;line-height: 14px;text-align: justify;font-size: 12px'><span style='line-height: 16px; font-size: 14px;'><span style='line-height: 16px; color: rgb(128, 0, 0); font-size: 14px;'><strong style='line-height: inherit;'>Importante</strong></span>: Nuestros precios en bolívares fluctúan con el cambio actual del mercado. Realice su pago a la brevedad para garantizar el precio de esta cotización. La cotización es valida por 1 HORA. Las transferencias desde otro banco deben hacerse a Banesco, la tasa se ajustará cuando se haga efectivo el pago.</span></p></div> 
  </div>
  <!--[if mso]></td></tr></table><![endif]-->
</div>
                  
                  
                    
<table border='0' cellpadding='0' cellspacing='0' width='100%' class='divider ' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
    <tbody>
        <tr style='vertical-align: top'>
            <td class='divider_inner' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-right: 10px;padding-left: 10px;padding-top: 10px;padding-bottom: 10px;min-width: 100%;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                <table class='divider_content' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                    <tbody>
                        <tr style='vertical-align: top'>
                            <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                                <span></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
                  
                  
                    <div class=''>
  <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'><![endif]-->
  <div style='color:#555555;line-height:120%;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'>  
    <div style='font-size:12px;line-height:14px;font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;color:#555555;text-align:left;'><p style='margin: 0;line-height: 14px;text-align: center;font-size: 12px'><strong style='line-height: inherit;'>© Amazom.com Gift Cards con PayPal, Bitcoins y Bolívares. Otras Gift Cards y Transferencias Bancos/PayPal/Payza/Neteller/Skrill/Payoneer</strong></p><p style='margin: 0;line-height: 14px;text-align: center;font-size: 12px'><strong style='line-height: inherit;'>Importaciones y Servicios Appbb, C.A., Urb. Punta Brava El Mercado, Calle La Pomarrosa. Resd La Quinta, Miranda, Miranda, 1170, Venezuela</strong></p><p style='margin: 0;line-height: 14px;text-align: center;font-size: 12px'><strong style='line-height: inherit;'>Tax registration ID: J408027518</strong></p></div>  
  </div>
  <!--[if mso]></td></tr></table><![endif]-->
</div>
                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>   <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    </td>
  </tr>
  </tbody>
  </table>
  <!--[if (mso)|(IE)]></div><![endif]-->


</body></html>";





$response="<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Appbb.co - Tienda Virtual</title>
      <meta http-equiv='refresh' content='1; url=https://www.appbb.co/template-sender2' />

  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
</head>
<body>
<p><a href='http://example.com/'>Redirect</a></p>

<div class='jumbotron text-center'>
  <h1>El Mensaje Se ha Enviado de Manera Correcta</h1>
  <p></p>
</div>
";
$asunto_notificar_btc= $nombre_cliente.' realiza el pago de tu pedido #'.$num_orden.' - Tienda de Appbb';
$notificar_btc="<!DOCTYPE html '-//w3c//dtd xhtml 1.0 transitional //en' 'http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd'><html xmlns='http://www.w3.org/1999/xhtml'><head>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv='refresh' content='1; url=https://www.appbb.co/template-sender2' />
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta name='viewport' content='width=device-width'>
    <meta http-equiv='X-UA-Compatible' content='IE=9; IE=8; IE=7; IE=EDGE'>
    <title>Appbb.co</title>
<p><a href='http://example.com/'>Redirect</a></p>

</head>
<body style='width: 100% !important;min-width: 100%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100% !important;margin: 0;padding: 0;background-color: #FFFFFF'>
  <style id='media-query'>
    /* Client-specific Styles & Reset */
    #outlook a {
        padding: 0;
    }

    /* .ExternalClass applies to Outlook.com (the artist formerly known as Hotmail) */
    .ExternalClass {
        width: 100%;
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
        line-height: 100%;
    }

    #backgroundTable {
        margin: 0;
        padding: 0;
        width: 100% !important;
        line-height: 100% !important;
    }

    /* Buttons */
    .button a {
        display: inline-block;
        text-decoration: none;
        -webkit-text-size-adjust: none;
        text-align: center;
    }

    .button a div {
        text-align: center !important;
    }

    /* Outlook First */
    body.outlook p {
        display: inline !important;
    }

    /*  Media Queries */
@media only screen and (max-width: 480px) {
  table[class='body'] img {
    height: auto !important;
    width: 100% !important; }
  table[class='body'] img.fullwidth {
    max-width: 100% !important; }
  table[class='body'] center {
    min-width: 0 !important; }
  table[class='body'] .container {
    width: 95% !important; }
  table[class='body'] .row {
    width: 100% !important;
    display: block !important; }
  table[class='body'] .wrapper {
    display: block !important;
    padding-right: 0 !important; }
  table[class='body'] .columns, table[class='body'] .column {
    table-layout: fixed !important;
    float: none !important;
    width: 100% !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    display: block !important; }
  table[class='body'] .wrapper.first .columns, table[class='body'] .wrapper.first .column {
    display: table !important; }
  table[class='body'] table.columns td, table[class='body'] table.column td, .col {
    width: 100% !important; }
  table[class='body'] table.columns td.expander {
    width: 1px !important; }
  table[class='body'] .right-text-pad, table[class='body'] .text-pad-right {
    padding-left: 10px !important; }
  table[class='body'] .left-text-pad, table[class='body'] .text-pad-left {
    padding-right: 10px !important; }
  table[class='body'] .hide-for-small, table[class='body'] .show-for-desktop {
    display: none !important; }
  table[class='body'] .show-for-small, table[class='body'] .hide-for-desktop {
    display: inherit !important; }
  .mixed-two-up .col {
    width: 100% !important; } }
 @media screen and (max-width: 480px) {
      div[class='col'] {
          width: 100% !important;
      }
    }

    @media screen and (min-width: 481px) {
      table[class='container'] {
          width: 480px !important;
      }
    }
  </style>
  <table class='body' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 100%;width: 100%;table-layout: fixed' cellpadding='0' cellspacing='0' width='100%' border='0'>
      <tbody><tr style='vertical-align: top'>
          <td class='center' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;background-color: #FFFFFF' align='center' valign='top'>

              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='480' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 480px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid two-up' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 480px;color: #333;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='240'><![endif]--><div class='col num6' style='display: inline-block;vertical-align: top;text-align: center;width: 240px'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%' border='0'>
    <tbody><tr style='vertical-align: top'>
        <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%' align='center'>
            <div style='font-size:12px' align='center'>

                <img class='center' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: 0;height: auto;line-height: 100%;margin: 0 auto;float: none;width: 190px;max-width: 190px' align='center' border='0' src='https://www.appbb.co/template-images/logo.jpg' alt='Image' title='Image' width='190'>
            </div>
        </td>
    </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='240'><![endif]--><div class='col num6' style='display: inline-block;vertical-align: top;text-align: center;width: 240px'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
        <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 18px;line-height: 22px;text-align: center'><strong><span style='font-size: 18px; line-height: 21px;'><a style='color:#0000FF;text-decoration: underline;' href='appbb.co' target='_blank'>&nbsp;Appbb.co </a>- Importaciones y Servicios Appbb, C.A.</span></strong></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='480' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 480px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 480px;color: #333;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='480'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 20px;padding-right: 0px;padding-bottom: 20px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 0px;padding-left: 10px'>
        <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 18px;line-height: 22px;text-align: center'><span style='font-size: 20px; line-height: 24px;'><strong><span style='line-height: 24px; font-size: 20px;'>Hola $nombre_cliente,</span></strong></span></p><p style='margin: 0;font-size: 18px;line-height: 21px;text-align: center'><span style='font-size: 20px; line-height: 24px;'><strong><span style='line-height: 24px; font-size: 20px;'>Ya has realizado tu pedido #<span style='line-height: 24px; color: rgb(0, 204, 255); font-size: 20px;'>$num_orden</span>, solo necesitar pagar con Bitcoins para concretar la compra.&nbsp;</span></strong></span></p><p style='margin: 0;font-size: 18px;line-height: 21px;text-align: center'><span style='font-size: 20px; line-height: 24px;'><strong><span style='line-height: 24px; font-size: 20px;'>Realiza el pago ahora!</span></strong></span></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='480' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 480px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 480px;color: #000000;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='480'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%' border='0'>
    <tbody><tr style='vertical-align: top'>
        <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%' align='center'>
            <div style='font-size:12px' align='center'>

                <img class='center fullwidth' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: 0;height: auto;line-height: 100%;margin: 0 auto;float: none;width: 100% !important;max-width: 460px' align='center' border='0' src='https://www.appbb.co/template-images/logo_coin2.png' alt='Image' title='Image' width='460'>
            </div>
        </td>
    </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'>
                <tbody><tr style='vertical-align: top'>
                  <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'>
                    <!--[if gte mso 9]>
                    <table id='outlookholder' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='480' align='center' cellpadding='0' cellspacing='0' border='0'>
                        <tr>
                            <td>
                    <![endif]-->
                    <table class='container' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 480px;margin: 0 auto;text-align: inherit' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%'><table class='block-grid' style='border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 480px;color: #333;background-color: transparent' cellpadding='0' cellspacing='0' width='100%' bgcolor='transparent'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0'><!--[if (gte mso 9)|(IE)]><table width='100%' align='center' bgcolor='transparent' cellpadding='0' cellspacing='0' border='0'><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign='top' width='480'><![endif]--><div class='col num12' style='display: inline-block;vertical-align: top;width: 100%'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' align='center' width='100%' border='0'><tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 30px;padding-right: 0px;padding-bottom: 30px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent'><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 10px'>
        <div style='color:#777777;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:14px;color:#777777;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: justify'><strong><span style='font-size: 16px; line-height: 19px;'>Este proceso puede tomar de 15-45 minutos. Necesitan 2 confirmaciones de transacci&#243;n para que se genere el pedido.</span></strong></p><p style='margin: 0;font-size: 14px;line-height: 16px;text-align: center'><strong><span style='font-size: 16px; line-height: 19px;'>Gracias por tu paciencia.</span></strong></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
<table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 15px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
        <div style='color:#aaaaaa;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:14px;color:#aaaaaa;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 14px;line-height: 17px;text-align: justify'>Las entregas de los pedidos pagados con bitcoins se realizan el mismo d&#237;a. Las transacciones con bitcoins pueden demorar de 15-45 minutos una vez que diga <span style='color: rgb(204, 255, 255); font-size: 14px; line-height: 16px; background-color: rgb(0, 128, 0);'>PAID.</span>&#65279; El pedido se genera de forma autom&#225;tica. Si tienes alguna duda o inconveniente con el pago comun&#237;cate con nosotros al&nbsp;<a style='color:#0000FF;text-decoration: underline;' title='vys@appbb.co' href='mailto:vys@appbb.co'>vys@appbb.co</a>.&nbsp;</p></div>
        </div>
    </td>
  </tr>
</tbody></table>
<table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody><tr style='vertical-align: top'>
    <td class='button-container' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px' align='center'>
      <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
        <tbody><tr style='vertical-align: top'>
          <td class='button' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='100%' align='center' valign='middle'>
              <!--[if mso]>
                <v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='https://www.appbb.co/giftcards'
                  style='
                    height:38px;
                    v-text-anchor:middle;
                    width:334px;'
                    arcsize='11%'
                    strokecolor='#3AAEE0'
                    fillcolor='#3AAEE0' >
                <w:anchorlock/>
                  <center
                    style='color:#ffffff;
                      font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;
                      font-size:14px;'>
              <![endif]-->
             <!--[if !mso]><!- - --><div style='display: inline-block;
              border-radius: 4px;
              -webkit-border-radius: 4px;
              -moz-border-radius: 4px;
              max-width: 100%;
              width: auto;
              border-top: 0px solid transparent;
              border-right: 0px solid transparent;
              border-bottom: 0px solid transparent;
              border-left: 0px solid transparent;' align='center'>

              <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 38' width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tbody><tr style='vertical-align: top'><td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;border-radius: 4px;                   -webkit-border-radius: 4px;                   -moz-border-radius: 4px;                  color: #ffffff;                  background-color: #3AAEE0;                  padding-top: 5px;                   padding-right: 20px;                  padding-bottom: 5px;                  padding-left: 20px;                  font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align: center' valign='middle'><!--<![endif]-->
                  <a style='display: inline-block;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;background-color: #3AAEE0;color: #ffffff' href='https://www.appbb.co/giftcards' target='_blank'>
                        <span style='font-size:12px;line-height:24px;'><span style='font-size: 14px; line-height: 28px;' data-mce-style='font-size: 14px;'><strong>Haz click aqu&#237; para realizar otra compra.</strong></span></span>
                  </a>
                <!--[if !mso]><!- - --></td></tr></tbody></table>
              </div><!--<![endif]-->
              <!--[if mso]>
                    </center>
                </v:roundrect>
              <![endif]-->
          </td>
        </tr>
      </tbody></table>
    </td>
  </tr>
</tbody></table>

<table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' align='center' valign='top'>
      <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' border='0' cellspacing='0' cellpadding='0'>
        <tbody><tr style='vertical-align: top'>
          <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;max-width: 156px' align='center' valign='top'>

            <!--[if (gte mso 9)|(IE)]>
            <table width='166' align='left' border='0' cellspacing='0' cellpadding='0'>
              <tr>
                <td align='left'>
            <![endif]-->
            <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' width='100%' align='left' cellpadding='0' cellspacing='0' border='0'>
              <tbody><tr style='vertical-align: top'>
                <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' align='left' valign='middle'>


                  <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0' align='left' border='0' cellspacing='0' cellpadding='0' height='37'>
                      <tbody><tr style='vertical-align: top'>
                          <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='37' align='left' valign='middle'>
                            <a href='https://www.facebook.com/appbb.co/' title='Facebook' target='_blank'>
                                <img style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important' src='https://www.appbb.co/template-images/facebook.png' alt='Facebook' title='Facebook' width='32'>
                            </a>
                          </td>
                      </tr>
                  </tbody></table>
                  <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0' align='left' border='0' cellspacing='0' cellpadding='0' height='37'>
                      <tbody><tr style='vertical-align: top'>
                          <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='37' align='left' valign='middle'>
                            <a href='http://twitter.com/app_bb' title='Twitter' target='_blank'>
                                <img style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important' src='https://www.appbb.co/template-images/twitter.png' alt='Twitter' title='Twitter' width='32'>
                            </a>
                          </td>
                      </tr>
                  </tbody></table>
                  <table style='border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0' align='left' border='0' cellspacing='0' cellpadding='0' height='37'>
                      <tbody><tr style='vertical-align: top'>
                          <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top' width='37' align='left' valign='middle'>
                            <a href='https://instagram.com/appbbinc' title='Instagram' target='_blank'>
                                <img style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important' src='https://www.appbb.co/template-images/instagram.png' alt='Instagram' title='Instagram' width='32'>
                            </a>
                          </td>
                      </tr>
                  </tbody></table>

                </td>
              </tr>
            </tbody></table>
            <!--[if (gte mso 9)|(IE)]>
                </td>
              </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
      </tbody></table>
    </td>
  </tr>
</tbody></table><table style='border-spacing: 0;border-collapse: collapse;vertical-align: top' cellpadding='0' cellspacing='0' width='100%'>
  <tbody><tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px'>
        <div style='color:#bbbbbb;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;'>
          <div style='font-size:12px;line-height:14px;color:#bbbbbb;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'><p style='margin: 0;font-size: 18px;line-height: 22px;text-align: center'><span style='font-size: 14px; line-height: 16px;'>Todos los derechos reservados. Importaciones y Servicios Appbb, C.A.</span></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
          </td>
      </tr>
  </tbody></table>


</body></html>";

$posbtcentrega="<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Appbb.co - Tienda Virtual</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
</head>
<body>
direccion para pagar btc: $url_pagobtc
monto en $ : $montoUSD
nombre: $nombre_cliente
email: $email_btcpos
</body>
</html>
";

$service_url = "https://app.ecwid.com/api/v3/7571385/orders/$num_orden?token=";
$service_url2 = "https://app.ecwid.com/api/v3/7571385/orders/$numeroDeOrder?token=";
$apiURL= "https://app.ecwid.com/api/v3/7571385/orders";
$order_number= "6420";
$secret_token= "token=";
$email = "";
function CallApiPUT($url, $data)
{
        $ch = curl_init($url);

        $data_json= json_encode($data);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
}



?>
