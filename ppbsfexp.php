<?php
session_start();
include_once 'connect.php';

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
}

require "prices.php";
//Variable Dolar Today
//Agarro el string de jSon de dolar today

$str = file_get_contents('https://s3.amazonaws.com/dolartoday/data.json');
//decodifico el string y lo formateo con json 
$json= json_decode($str,true);

$preciosApiApp= getLastPrice();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Enviador de Templates</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h4>Plataforma Rapida Envios PP - BSF</h4>
<div id="dicpreciodt">
<h4>  Precio de Venta BSF: <strong><?php echo $preciosApiApp[1]?></strong> -- Precio de Compra: <strong><?php echo $preciosApiApp[2] ?></strong> -- Precio compra Giftcards:<strong> <?php echo $preciosApiApp[3] ?> </strong></h4>
</div>
    <div class='form-group'>
      <form action='https://www.appbb.co/template-sender2/' method='get'>
      <a href='https://www.appbb.co/template-sender2/'><button type='button' class='btn btn-success'>Template Sender</button></a>
      </form>
    </div>    

<!-- 
*************************************************************************


FORMULARIO QUE ENVIA LA FACTURA Y LA COTIZACION DE LOS CANJES DE PAYPAL
A BSF

*************************************************************************
-->

<div name="paypalbsf" id="paypalbsf" >
  <h1> PayPal BSF </h1>  

<form name="fees" id="fees" action="mailertemplateppbsf.php" method="post" >
  <center>            <table border="0">
                        <tbody>
                          <tr>
                            <td align="center">
                            <input id="percentage" name="percentage" size="3" type="text" value="5.4" onKeyUp="numericFilter(this);" style="height:40px; width:60px; font-size:20px;"/> % FEE 
                            <input name="fee" id="fee" size="3" type="text" value="0.30" onKeyUp="numericFilter(this);" style="height:40px; width:60px; font-size:20px; visibility: hidden;"/>
                           <input id="tasaCambio" required name="tasaCambio" size="3" type="text" value="<?echo $preciosApiApp[2]?>" onKeyUp="numericFilter(this);" style="height:40px; width:60px; font-size:20px;"/>Tasa Dolar BSF
                          </td>   
                        </tr>
                        <tr><td><center><p id="mensajex" style="display:none;color:#0079AD; font-weight:bold;"></p></center></td></tr>
                      </tbody>
                    </table>
                      <table border="0">
                      <tbody>
                                                <tr>
                          <td align="right"><strong>Numero de Orden:</strong></td>
                          <td><input name="numOrder" type="text" required id="valor2"   autofocus style="height:40px; width:150px; font-size:20px;"/> </td>
                        </tr>
                        <tr>
                          <td align="right"><strong>Monto Factura (utilizar comas):</strong></td>
                          <td><input name="amountSent" type="text" placeholder= "ej 20,55" required id="valor2" onKeyUp="numericFilter(this, this.form, 'fees');" style="height:40px; width:150px; font-size:20px;"/> USDs</td>
                        </tr>
                        <tr><td></td><td><p id="mensaje1" style="display:none;color:#0079AD; font-weight:bold;"></p></td></tr>
                        <tr style="">
                          <td align="right">Comision PayPal:</td>
                          <td><input name="fees" type="text" style="height:40px; width:150px; font-size:20px;" readonly/> USDs</td>
                        </tr>
                        <tr>
                          <td align="right">Total Recibido:</td>
                          <td><input name="amountAfterFees" type="text" style="height:40px; width:150px; font-size:20px;"  readonly/> USDs</td>
                        </tr>
                        
                        <tr>
                          <td align="right">Se Paga En BSF:</td>
                          <td><input name="amountBSF" type="text" style="height:40px; width:150px; font-size:20px;" readonly /> BSF</td>
                        </tr>
                        <!--<tr>
                          <td align="right">Motivo Factura ("Operaciones con Bolivares" por default):</td>
                          <td><input name="motivoFactura" type="text" style="height:40px; width:150px;" id="motivoFactura"  /> </td>
                        </tr>   
                       <tr> -->
                          <td align="right">Banco (Banesco" por Default):</td>
                          <td><input name="bancoPago" type="text" style="height:40px; width:150px; font-size:20px;" id="bancoPago" /> </td>
                        </tr>                             
                        <!--<tr>
                          <td align="right">Total Final:</td>
                          <td><input name="totalEnBSF" type="text" style="height:40px; width:150px; font-size:20px;" /> BSF</td>
                        </tr>                         
                       <tr>
                       -->
                          <td align="right">Verificado:</td>
                          <td><input name="verificado" type="checkbox"  value= "Yes" style="height:40px; width:150px; font-size:20px;" /> </td>
                        </tr>                         
                                              </tbody>
                    </table>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                      <button type="button" onclick="limpiarForm()" class="btn btn-danger">Limpiar</button>

                    </center>
          
                  </form>
</div>


                    <script type="text/javascript">

                    function calculatefees (form) {


                    var percc = document.getElementById('percentage').value;
                    var pfee = document.getElementById('fee').value;

                    if(percc == '' || pfee == ''){
                    document.getElementById('mensajex').style.display="inherit";
                    document.getElementById('mensajex').innerHTML = 'Debes agregar el porcentaje y/o la comisión fija de PayPal';
                      form.amountAfterFees.value = '';
                      form.fees.value = '';
                    return;
                    }


                    document.getElementById('mensajex').style.display="none";
                    document.getElementById('mensajex').innerHTML = '';

                    var amountSent = 0;

                    amountSent = parseFloat(filterPuntos(form.amountSent.value));

                    var toGeet = form.amountSent;
                    var e1 = document.getElementById('mensaje1');

                    if (toGeet.value == null || toGeet.value.length == 0 || /^\s*$/.test(toGeet.value)){
                      document.getElementById('mensaje1').style.display="inherit";
                      e1.innerHTML = 'Indica cuánto vas a Enviar';
                      form.amountAfterFees.value = '';
                      form.fees.value = '';
                      return;
                    }
                    

                    var filtro = toGeet.value.indexOf(".");
                    if(filtro != -1){
                      document.getElementById('mensaje1').style.display="inherit";
                      e1.innerHTML = 'Hubo un error. Refresca la página e inténtalo nuevamente';
                      var remplazo = toGeet.value.replace(",", ".");
                      toGeet.value = remplazo;
                      return;
                    }


                    document.getElementById('mensaje1').style.display="none";
                    e1.innerHTML = '';
                    var percentage = 0;
                    percentage = parseFloat(filterPuntos(document.fees.percentage.value));

                    var tasaCambio =0;
                    tasaCambio = parseFloat(filterPuntos(document.fees.tasaCambio.value));

                    var fee = 0;
                    fee = parseFloat(filterPuntos(document.fees.fee.value));


                    var totalfees = 0;
                    var getAmount = 0;

                    var totalBSF= 0;

                    getAmount = amountSent - (((percentage * amountSent) / 100) + fee);
                    totalfees = ((percentage * amountSent) / 100) + fee;


                    sendAmount = Math.round(getAmount*100)/100;
                    sendTotalfees = Math.round(totalfees*100)/100;
                    
                    totalBSF = Math.round(sendAmount * tasaCambio);

                    form.amountBSF.value =numberWithCommas(totalBSF.toString().replace(',', '.'));
                    form.amountAfterFees.value = numberWithCommas(sendAmount.toString().replace(',', '.'));
                    form.fees.value = numberWithCommas(sendTotalfees.toString().replace(',', '.'));


                    }

                    function numericFilter(txb, form, type) {
                      txb.value = txb.value.replace(/[^\0-9]/ig, "");
                      txb.value = txb.value.replace(".", ",");

                      if (typeof form != 'undefined') {
                        if (type == 'charge') {
                          calculatetocharge(form);
                        } else if (type == 'fees') {
                          calculatefees(form);
                        }

                        form = $(form);
                        $.each(form.find('input[disabled]'), function(index, originalInput) {
                          input = $(originalInput);
                          //var parent = input.parent();

                          if (input.val() != '') {
                            input.removeAttr('disabled');
                            input.attr('readonly', 'readonly');
                            input.attr('title', 'Presione Ctrl+C para copiar');

                            var instance = input.tooltipster({}).tooltipster('instance');
                            instance.on('before', function(){
                                originalInput.setSelectionRange(0, originalInput.value.length);
                            });
                          } else {
                            input.removeAttr('title');
                            input.tooltipster('destroy');
                          }
                        });
                      }
                    }

                    function filterPuntos(valor){
                      var valor = valor.replace(",", ".");
                      return valor;
                    }

                    function filterComas(valor){
                      var valor = valor.replace(".", ",");
                      return valor;
                    }

                    function numberWithCommas(x) { return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."); }
                    </script>
	
</body>
</html>
