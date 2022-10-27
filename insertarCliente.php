<?php

include_once 'connect.php';



$email= $_POST['email'];
$password = MD5($_POST['password']);


$paypal=$_POST['recaudospaypal'];
$payza=$_POST['recaudospayza'];
$btc=$_POST['recaudosbtc'];
$bofa=$_POST['recaudosbofa'];
$giftcards=$_POST['recaudosgiftcards'];
$payoneer = $_POST['recaudopayoneer'];

// $paypal=$item[0];
// $payza=$item[1];
// $btc=$item[2];
// $bofa=$item[3];
// $giftcards=$item[4];

// if ($_POST['payoneer'] == '1'){

// 	echo $_POST['recaudopayoneer'];

// }

$notas = $_POST['notas']; 

// echo "email: ".$email;
// echo "password: ".$password;
// echo "notas: ".$notas;
// echo "PayPal:".$paypal;
// echo "Payza : ".$payza;
// echo "BTC: ".$btc;
// echo "BOFA: ".$bofa;
// echo "GC :".$giftcards;



if (1==1){
$sql2 = "INSERT INTO `username` (
	username, 
	password, 
	estado,
	verf_pp, 
	verf_payza,
	verf_payoneer,
	verf_bofa,
	verf_giftcards,
	verf_btc,
	notas
	) 
VALUES (
	'$email', 
	'$password', 
	'1',
	'$paypal',
	'$payza',
	'$payoneer',
	'$bofa',
	'$giftcards',
	'$btc',
	'$notas'
	)";
$result = mysqli_query($connectionUser, $sql2);

}




?>

<meta http-equiv="refresh" content="0; url=https://www.appbb.co/template-sender2/registroCliente.php" />
