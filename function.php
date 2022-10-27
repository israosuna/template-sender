<?php
function getDataToSendGCAmazon($url,$order,$token){

      $getOrder = $url."/".$order."?".$token;
      
      // Hago el request y lo gurado en json
      $jsonOrderDetails = file_get_contents($getOrder);
      // Verifico que no Haya Error!
      list($version,$status_code,$msg) = explode(' ',$http_response_header[0], 3);
      // Check the HTTP Status code
      switch($status_code) {
        case 200:
          // Success
          break;
        case 503:
          die('Hay un error en el server 503');
          break;
        case 403:
          die('Hay error 403 o Forbidden');
          break;
        case 400:
          // You may want to fall through here and read the specific XML error
          die(' Error 400 - Numero de Orden Invalido.');
          break;
        default:
          die('Error desconocido:' . $status_code);
      }
      $responseDecoded =json_decode($jsonOrderDetails,true);
      $sku= $responseDecoded["items"][0]["sku"];
      $nombre_costumer = $responseDecoded["items"][0]["selectedOptions"][0]["value"];
      $email_costumer = $responseDecoded["email"];

      if ($sku == "GCAMAZON_con_BSF"){

      $nombre_entrega = $responseDecoded["items"][0]["selectedOptions"][3]["value"];
      // si esta vacio el nombre de entrega eligo el otro
      $nombre_entrega_blanco = $responseDecoded["items"][0]["selectedOptions"][0]["value"]; 
      $email_entrega = $responseDecoded["items"][0]["selectedOptions"][1]["value"];
              if ($nombre_entrega==""){
          $nombre_entrega= $nombre_entrega_blanco;
        }
  
      
      for ($i=0; $i < count($responseDecoded["items"]); $i++) {


           if ($responseDecoded["items"][$i]["selectedOptions"][2]["name"]== "Monto"){

              $strMonto = $responseDecoded["items"][$i]["selectedOptions"][2]["value"];
              preg_match('/([0-9]+[\.]*[0-9]*)/', $strMonto, $montoGC); 
               $totalEngGC[] = $montoGC[$i] * $responseDecoded["items"][0]['quantity'];
           }

        }
              $total = array_sum($montoGC);  

      }

      else {
      $total = $responseDecoded["usdTotal"];  

      $nombre_entrega = $responseDecoded["items"][0]["selectedOptions"][2]["value"];
      // si esta vacio el nombre de entrega eligo el otro
      $nombre_entrega_blanco = $responseDecoded["items"][0]["selectedOptions"][0]["value"]; 
      $email_entrega = $responseDecoded["email"];//[0]["selectedOptions"][1]["value"];
        if ($nombre_entrega==""){
          $nombre_entrega= $nombre_entrega_blanco;
        }
      $strMonto = $responseDecoded["items"][0]["name"];
      preg_match('/([0-9]+[\.]*[0-9]*)/', $strMonto, $montoGC); 

      
      for ($i=0; $i < count($responseDecoded["items"]); $i++) {

           $montos = $responseDecoded["items"][$i]["name"];
           preg_match('/([0-9]+[\.]*[0-9]*)/', $montos, $montoGC);
           $totalEngGC[] = $montoGC[$i];

        }
          
      }
      
      $arrayData = [
      'sku' => $sku,
      'order' => $order,
      'orderTotal' => $total,
      'totalGC'=>array_sum($totalEngGC), 
      'totalGCBSF'=>array_sum($montoGC), 
      'customer' => $nombre_costumer, 
      'emailCustomer' => $email_costumer,
      'nombreEntrega'=> $nombre_entrega,
      'emailEntrega'=> $email_entrega,
      'tienda'=> 'Amazon.com',


      ];
      return $arrayData;
}

function CallApiPayPal($data){
      
      # Create a connection
      $url = 'https://www.appbb.co/appbbAPI/vendor/paypal/rest-api-sdk-php/restapi/invoice/CreateAndSend.php';
      $ch = curl_init($url);
      # Form data string
      $postString = http_build_query($data, '', '&');
      # Setting our options
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      # Get the response
      $response = curl_exec($ch);
      curl_close($ch);
}


function getBSFtoPaypal($url,$order,$token,$razonInvoice,$monto_paypal){

      $getOrder = $url."/".$order."?".$token;
      // Hago el request y lo gurado en json
      $jsonOrderDetails = file_get_contents($getOrder);
      // Verifico que no Haya Error!
      list($version,$status_code,$msg) = explode(' ',$http_response_header[0], 3);
      // Check the HTTP Status code
      switch($status_code) {
        case 200:
          // Success
          break;
        case 503:
          die('Hay un error en el server 503');
          break;
        case 403:
          die('Hay error 403 o Forbidden');
          break;
        case 400:
          // You may want to fall through here and read the specific XML error
          die(' ERROR EN EL REQUEST HTTP status of 400. That means:  Bad request.');
          break;
        default:
          die('Error desconocido:' . $status_code);
      }
      $responseDecoded =json_decode($jsonOrderDetails,true);
      $email_costumer = $responseDecoded["email"];
      $nombre_costumer = $responseDecoded["billingPerson"]["name"];
      $sku= $responseDecoded["items"][0]["sku"];
      $nombre_paypal = $responseDecoded["items"][0]["selectedOptions"][0]["value"];
      $email_paypal = $responseDecoded["items"][0]["selectedOptions"][1]["value"];

      $arrayData = [
      'customer' => $nombre_costumer,
      'emailCustomer' => $email_costumer,
      'sku'=>$sku, 
      'nombrePaypal' => $nombre_paypal, 
      'emailPaypal' => $email_paypal,
      'montoFactura'=> $monto_paypal,
      'fullName' =>$nombre_paypal,
      'emailPayPal' =>$email_paypal,
      'amount' => $monto_paypal,
      'razonInvoice' => $razonInvoice      
      ];

      //print_r($dataPayPal);
      return $arrayData;

}

?>