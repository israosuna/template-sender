<?php
header("Cache-Control: no-cache");
session_start();
include_once 'connect.php';

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
}

$username = $_SESSION['username'];
require "prices.php";
//Variable Dolar Today
//Agarro el string de jSon de dolar today

$str = file_get_contents('https://s3.amazonaws.com/dolartoday/data.json');
//decodifico el string y lo formateo con json 
$json= json_decode($str,true);

//entro y agarro el valor del dolar

$dolartoday = $json['USD']['transferencia'];
//$dolartoday='';
if ($dolartoday==''){
  $dolartoday= 0;
}

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


  $precioCompraSkrill=$preciosApiApp[15];
  $precioCompraNeteller=$preciosApiApp[16];
  $precioCompraAirtm=$preciosApiApp[17];
  $precioCompraPayeer=$preciosApiApp[18];

  $precioCompraPesoCol=$preciosApiApp[19];
  $precioCompraVentaCol=$preciosApiApp[20];
  $precioCompraPesoChile=$preciosApiApp[21];
  $precioCompraVentaChile=$preciosApiApp[22];
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
            
            <style>

            .button:hover {
              background-color: #ddd;
              color: black;
            }
            .button {
              display: block;
              width: 100%;
              border: none;
              cursor: pointer;

              background-color: #4CAF50; /* Green */
              color: white;
              padding: 15px 32px;
              text-align: center;
              text-decoration: none;
              font-size: 16px;
              margin: 4px 2px;
            }

            .button2 {background-color: #008CBA;} /* Blue */
            .button3 {background-color: #f44336;} /* Red */ 
            .button4 {background-color: #FF4500; color: white;} /* Gray */ 
            .button5 {background-color: #555555;} /* Black */
            </style>
        <meta charset="utf-8">
        <title>Appbb Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">
        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <link rel="stylesheet" href="assets/css/slick/slick.css"> 
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">

        <!-- xsslider slider css -->


        <!--<link rel="stylesheet" href="assets/css/xsslider.css">-->




        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->



                <div class="container"> 
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                            <img src="assets/images/logo1.png" class="logo" alt="">
                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="https://www.appbb.co/template-sender2/index.php">Inicio</a></li>                    
                            <li><a href="https://www.appbb.co/template-sender2/facebooklogin/index.php">Publicar Tasa</a></li>     
                            <li><a href="https://www.appbb.co/template-sender2/enviadorCotizacionesView.php">Enviar Cotizacion BS</a></li>     
                            <li><a href="https://www.appbb.co/template-sender2/enviadorCotizacionesGCView.php">Cotizacion Gift card BS</a></li>     
                            <li><a href="https://www.appbb.co/template-sender2/enviargiftcard.php">Enviar Gift Card's</a></li>                    
                            <li><a href="https://appbb.co/appbbAPI/ui.php/tasas_new/list">Ajustar Tasa</a></li>
                            <!-- <li><a href="https://appbb.co/appbbAPI/ui.php/envio_zoom/list">Adm. Guía de Zoom</a></li> -->
                            <li><a href="https://www.appbb.co/template-sender2/todomini">Tareas Pendientes</a></li>
                            <li><a href="https://www.appbb.co/template-sender2/generarTDC">Gen. TDC</a></li>
                          
                            <li><a href="https://www.appbb.co/template-sender2/contingenciaPayPal.php">Contingencia Cambios en BS</a></li>
                            <li><a href="https://www.appbb.co/template-sender2/registroCliente.php">Registro Cliente</a></li>
                            <li><a href="https://www.appbb.co/template-sender2/clientesadmin/index.php">Admin Cliente</a></li>
                            <li><a href="https://www.appbb.co/template-sender2/calculoenvios.php">Calculadora Envios</a></li>                            
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

            <nav class="navbar navbar-default bootsnav ">
                <div class="navbar-top bg-grey ">
                    <div class="container">
                        <div class="row">
                                <div class="navbar-callus text-center sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-user-circle"></i> Usario:  <?php echo $_SESSION['username'];?></a></li>
                                        <li><a href="logout.php"><i class="fa fa-sign-out"></i> Salir </a></li>                                       
                                    </ul>
                                    
                                </div>
                          
                                <div class="navbar-socail text-center sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-paypal"></i></a> <?php echo $precioCompraPayPal ?></li>
                                        <li><a href=""><i class="fa fa-btc"></i></a><?php echo $precioCompraBTC ?></li>
                                        <li><a href=""><i class="fa fa-usd">AirTM</i></a><?php echo $precioCompraAirtm ?> </li>
                                        <li><a href=""><i class="fa fa-usd">Payoneer</i></a><?php echo $precioCompraPayoneer ?></li>
                                        <li><a href=""><i class="fa fa-usd">Payeer</i></a><?php echo $precioCompraPayeer ?> </li>
                                        <li><a href=""><i class="fa fa-usd">Wise|Zelle|ACH|PiPol|Panama</i></a><?php echo $precioCompraBOFA ?></li>
                                        <li><a href=""><i class="fa fa-usd">UpHold</i></a><?php echo $precioCompraPayza ?></li>
                                        <li><a href=""><i class="fa fa-usd">Peso COP a Bs</i></a><?php echo $precioCompraPesoCol ?> / <?php echo $precioVentaBTC?></li>
                                        <li><a href=""><i class="fa fa-usd">Pesos COP a USD</i></a><?php echo  $precioCompraVentaCol ?> / <?php echo $precioVentaBOFA?></li>
                                        <li><a href=""><i class="fa fa-usd">Pesos CLP</i></a><?php echo $precioCompraPesoChile ?></li>
                                        <li><a href=""><i class="fa fa-amazon"></i></a><?php echo $precioCompraAmazonGC ?> / <?php echo $precioVentaAmazonGC?></li>
                                        <li><a href=""><i class="fa fa-check-circle"></i><i class="fa fa-paypal"></i></a><?php echo $precioVerfPayPal?></li>
                                        <li><a href=""><i class="fa fa-gift">Recargas</i></a><?php echo $precioVentaAmazonGC?> </li>
                                        <li><a href=""><i class="fa fa-usd">Dolar Today</i></a><label name= "respapidt" id= "respapidt"></label></li>

                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>

            </nav>

            <!--Home Sections-->
        </div>
<body>
<div class= "container centered"  >    