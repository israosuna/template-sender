  <!--  <div class='col-sm-3'>
      <form action='https://www.appbb.co/template-sender2/ppbsfexp.php' method='get'>
      <a href='https://www.appbb.co/template-sender2/ppbsfexp.php'><button type='button' class='btn btn-warning'>PayPal BSF EXP</button></a>
      </form>
    </div>    
  </div> -->

<!-- <div class="form-group">
  <label for="sel1">Lista de selección:</label>
  <select class="form-control" id="seleccionarTemplate" name="seleccionarTemplate">
    <option selected="selected" value="0">Seleccione un Formulario</option>
        <option disabled>──────────</option>

    <option value="1">ENVIAR Gift Card</option>
   <!-- <option value="10">ENVIAR Gift Card (- BETA -) </option> -->
    <!--<option value="2">VERIFICAR pedido datos</option> -->
    <!-- <option value="3">CONFIRMACION ENTREGA Gift Card</option> -->
    <!--<option value="4">NOTIFICAR Ventana Bitcoins</option> -->
    <!-- <option value="5">SOLICITAR PAGO en Bolivares</option> -->
 <!--    <option value="7">SOLICITAR - PAGO En Bolivares</option>-->
 <!--   <option value="13">SOLICITAR - PAGO Verificacion BSF</option>-->
<!--    <option value="11">SOLICITAR - FACTURA PayPal</option>-->
 <!--   <option value="12">SOLICITAR - PayPal a BSF</option>-->
  <!--  <option disabled>──────────</option>-->

 <!--   <option value="6">POS BTC</option> 
  </select>
</div>
<!--<div class="row"> 
<div class = "col-sm-6">
      <form action='https://www.appbb.co/ecwidwebhook/notificationApi/index.php' method='post'>
              <label for="stock">Cantidad de Stock </label>
              <input type="text" class="form-control" id="cantidadPedidos" name="cantidadPedidos" placeholder="Cantidad de Pedidos" required>                           
              <button type="submit" class="btn btn-primary" onclick="return confirm('Si haces click abriras cupos de PayPal a BSF y enviaras un correo avisando!');">Ajustar Stock</button>

      </form>
</div>
</div> -->
<!-- 
*************************************************************************


FORMULARIO DE ENTREGA DE GIFTCARDS MANUAL


*************************************************************************



<div name="EntregarGC" id="EntregarGC">
<h1>ENTREGA DE GIFTCARDS</h1>  
<form action="mailertemplate.php" method="post" onsubmit="return confirm('Revisaste bien antes de enviar?');">
  <input type="hidden" name="EntregarGC" value="EntregarGC">
  <div class="form-group">
    <label for="Name">Nombre</label>
    <input type="text" class="form-control" id="Name" name="Name" placeholder="Nombre de la Persona" required>
  </div>
  <div class="form-group">
    <label for="entregaEmail">Email/s para entrega</label>
    <input type="email" class="form-control" id="entregaEmail" name="entregaEmail" placeholder="ejemplo@email.com" required>
  </div>
  <div class="form-group">
    <label for="NameDest">Nombre del destinatario</label>
    <input type="text" class="form-control" id="NameDest" name="NameDest" placeholder="Dejar en blanco si es él mismo">
  </div>
  <div class="form-group">
  	<label for="NumPedido">Número de #Orden</label>
  	<input type="text" class="form-control" id="NumPedido" name="NumPedido" required>
  </div>
  <div class="form-group">
   <label for="MontoGC">Monto de la Gift Card</label>
   <input type="number" class="form-control" id="MontoGC" name="MontoGC" step="any" required>
 </div>
    <div class="form-group">
    <label for="Monto">Precio de la Compra</label>
    <input type="number" class="form-control" id="Monto" name="Monto" step="any"required>
  </div>

  <div class="form-group">
    <label for="Name">Nombre Confirmacion entrega</label>
    <input type="text" class="form-control" id="NameEnt" name="NameEnt" placeholder="Nombre de la Persona" >
  </div>
  <div class="form-group">
    <label for="ConfirmaEmail">Email Confirmacion de entrega</label>
    <input type="email" class="form-control" id="ConfirmaEmail" name="ConfirmaEmail" placeholder="ejemplo@email.com" >
  </div>

<label for="divGC">Códigos de la Gift Card</label>
 <div class="form-group" id="divGC">
   <label for="codigoGC1" class="col-xs-12 col-sm-2 control-label">Gift Card 1</label>
   <div class="col-xs-5 col-sm-4 col-md-3">
               <input type="text" class="form-control" id="montoGC1" name="montoGC1" placeholder="Monto Ej: $50.00" required>
   </div>
   <div class="col-xs-7 col-sm-6 col-md-7">
               <input type="text" class="form-control" id="codigoGC1" name="codigoGC1" placeholder="Código Ej: 5NRG-D2MT9F-9TK6" required>
   </div>
 </div>
 <div class="form-group">
   <label for="codigoGC2" class="col-xs-12 col-sm-2 control-label">Gift Card 2</label>
   <div class="col-xs-5 col-sm-4 col-md-3">
               <input type="text" class="form-control" id="montoGC2" name="montoGC2">
   </div>
   <div class="col-xs-7 col-sm-6 col-md-7">
               <input type="text" class="form-control" id="codigoGC2" name="codigoGC2">
   </div>
 </div>
 <div class="form-group">
   <label for="codigoGC3" class="col-xs-12 col-sm-2 control-label">Gift Card 3</label>
   <div class="col-xs-5 col-sm-4 col-md-3">
               <input type="text" class="form-control" id="montoGC3" name="montoGC3">
   </div>
   <div class="col-xs-7 col-sm-6 col-md-7">
               <input type="text" class="form-control" id="codigoGC3" name="codigoGC3">
   </div>
 </div>
 <div class="form-group">
   <label for="codigoGC4" class="col-xs-12 col-sm-2 control-label">Gift Card 4</label>
   <div class="col-xs-5 col-sm-4 col-md-3">
               <input type="text" class="form-control" id="montoGC4" name="montoGC4">
   </div>
   <div class="col-xs-7 col-sm-6 col-md-7">
               <input type="text" class="form-control" id="codigoGC4" name="codigoGC4">
   </div>
 </div>
 <div class="form-group">
   <label for="codigoGC5" class="col-xs-12 col-sm-2 control-label">Gift Card 5</label>
   <div class="col-xs-5 col-sm-4 col-md-3">
               <input type="text" class="form-control" id="montoGC5" name="montoGC5">
   </div>
   <div class="col-xs-7 col-sm-6 col-md-7">
               <input type="text" class="form-control" id="codigoGC5" name="codigoGC5">
   </div>
 </div>
 <div class="form-group">
  <label for="NombreGC">Tienda de la Gift Card</label>
  <input type="text" class="form-control" id="NombreGC" name="NombreGC" placeholder="Ej: Amazon, Ebay, iTunes" required>
 </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>

<!-- 
*************************************************************************


FORMULARIO DE ENTREGA DE GIFTCARDS BETA Y SOLO SIRVE PARA AMAZON


*************************************************************************



 <div name="EntregarGCBeta" id="EntregarGCBeta">
<h1>ENTREGA DE GIFTCARDS ( BETA )</h1>  
<form action="mailertemplate.php" method="post" onsubmit="return confirm('Revisaste bien antes de enviar?');">
  <input type="hidden" name="EntregarBETA" value="EntregarBETA">
  <div class="form-group">
    <label for="NumPedido">Número de #Orden</label>
    <input type="text" class="form-control" id="betaPedido" name="betaPedido" required>
  </div>
  <div class="form-group">
    <label for="Name">Nombre PayPal</label>
    <input type="text" class="form-control" id="namePaypal" name="namePaypal" placeholder="Nombre de la Persona" >
  </div>
  <div class="form-group">
    <label for="ConfirmaEmail">Email Confirmacion de entrega ( PayPapl )</label>
    <input type="email" class="form-control" id="emailPaypal" name="emailPaypal" placeholder="ejemplo@email.com" >
  </div>

<label for="divGC">Códigos de la Gift Card</label>
 <div class="form-group" id="divGC">
   <label for="codigoGC1" class="col-xs-12 col-sm-2 control-label">Gift Card 1</label>
   <div class="col-xs-5 col-sm-4 col-md-3">
               <input type="text" class="form-control" id="montoGC1" name="montoGC1" placeholder="Monto Ej: $50.00" required>
   </div>
   <div class="col-xs-7 col-sm-6 col-md-7">
               <input type="text" class="form-control" id="codigoGC1" name="codigoGC1" placeholder="Código Ej: 5NRG-D2MT9F-9TK6" required>
   </div>
 </div>
 <div class="form-group">
   <label for="codigoGC2" class="col-xs-12 col-sm-2 control-label">Gift Card 2</label>
   <div class="col-xs-5 col-sm-4 col-md-3">
               <input type="text" class="form-control" id="montoGC2" name="montoGC2">
   </div>
   <div class="col-xs-7 col-sm-6 col-md-7">
               <input type="text" class="form-control" id="codigoGC2" name="codigoGC2">
   </div>
 </div>
 <div class="form-group">
   <label for="codigoGC3" class="col-xs-12 col-sm-2 control-label">Gift Card 3</label>
   <div class="col-xs-5 col-sm-4 col-md-3">
               <input type="text" class="form-control" id="montoGC3" name="montoGC3">
   </div>
   <div class="col-xs-7 col-sm-6 col-md-7">
               <input type="text" class="form-control" id="codigoGC3" name="codigoGC3">
   </div>
 </div>
 <div class="form-group">
   <label for="codigoGC4" class="col-xs-12 col-sm-2 control-label">Gift Card 4</label>
   <div class="col-xs-5 col-sm-4 col-md-3">
               <input type="text" class="form-control" id="montoGC4" name="montoGC4">
   </div>
   <div class="col-xs-7 col-sm-6 col-md-7">
               <input type="text" class="form-control" id="codigoGC4" name="codigoGC4">
   </div>
 </div>
 <div class="form-group">
   <label for="codigoGC5" class="col-xs-12 col-sm-2 control-label">Gift Card 5</label>
   <div class="col-xs-5 col-sm-4 col-md-3">
               <input type="text" class="form-control" id="montoGC5" name="montoGC5">
   </div>
   <div class="col-xs-7 col-sm-6 col-md-7">
               <input type="text" class="form-control" id="codigoGC5" name="codigoGC5">
   </div>
 </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>


<!-- 
*************************************************************************


FORMULARIO DE VERIFICACION DE PEDIDO


*************************************************************************


<div name="verificarPedido" id="verificarPedido" >
  <h1>VERIFICAR PEDIDO </h1>  

<form action="mailertemplate.php" method="post" onsubmit="return confirm('Revisaste bien antes de enviar?');">
  <input type="hidden" name="verificarpedido" value="verificarpedido">
  <div class="form-group">
    <label for="Name">Nombre</label>
    <input type="text" class="form-control" id="Name" name="Name" placeholder="Nombre de la Persona" required>
  </div>
  <div class="form-group">
    <label for="verificarEmail">Email</label>
    <input type="email" class="form-control" id="verificarEmail" name="verificarEmail" placeholder="ejemplo@email.com" required>
  </div>
  <div class="form-group">
  	<label for="NumPedido">Número de #Orden</label>
  	<input type="text" class="form-control" id="NumPedido" name="NumPedido" required>
  </div>
   <div class="form-group">
  	<label for="Monto">Precio de la Compra</label>
  	<input type="number" class="form-control" id="Monto" name="Monto" step="any" required>
  </div>
   <div class="form-group">
    <label for="cbox2">Extranjero? Fuera de Venezuela?</label>
  <input class= "form-control" type="checkbox" id="cbox2" name= "chckExtranjero" value="extranjero"> 
</div>  
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>

<!-- 
*************************************************************************


FORMULARIO QUE ENVIA LA FACTURA Y LA COTIZACION DE LOS CANJES DE PAYPAL
A BSF

*************************************************************************


<div name="paypalbsf" id="paypalbsf" >
  <h1> PayPal BSF </h1>  

<form name="fees" id="fees" action="mailertemplate.php" method="post" onsubmit="return confirm('Revisaste bien antes de enviar?');">
  <center>            <table border="0">
                        <tbody>
                          <tr>
                            <td align="center">
                            <input id="percentage" name="percentage" size="3" type="text" value="5.4" onKeyUp="numericFilter(this);" style="height:40px; width:60px; font-size:20px;"/> % FEE 
                            <input name="fee" id="fee" size="3" type="text" value="0.30" onKeyUp="numericFilter(this);" style="height:40px; width:60px; font-size:20px; visibility: hidden;"/>
                           <input id="tasaCambio" required name="tasaCambio" size="3" type="text" value="<?echo $precioCompraPayPal?>" onKeyUp="numericFilter(this);" style="height:40px; width:60px; font-size:20px;"/>Tasa Dolar BSF
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
                       <tr> 
                          <td align="right">Banco (Banesco" por Default):</td>
                          <td><input name="bancoPago" type="text" style="height:40px; width:150px; font-size:20px;" id="bancoPago" /> </td>
                        </tr>                             
                        <!--<tr>
                          <td align="right">Total Final:</td>
                          <td><input name="totalEnBSF" type="text" style="height:40px; width:150px; font-size:20px;" /> BSF</td>
                        </tr>                         
                       <tr>
                       
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



<!-- 
*************************************************************************


FORMULARIO QUE CREA UNA FACTURA DE PAYPAL PARA USOS VARIOS


*************************************************************************


<div name="enviarInvoice" id="enviarInvoice" >
  <h1>ENVIAR INVOICE DE PAYPAL </h1>  

<form action="/appbbAPI/vendor/paypal/rest-api-sdk-php/restapi/invoice/CreateAndSend.php" method="post" onsubmit="return confirm('Revisaste bien antes de enviar?');">
  <input type="hidden" name="enviarInvoice" value="enviarInvoice">
  <div class="form-group">
    <label for="Name">Nombre Completo</label>
    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Nombre Completo" required>
  </div>
  <div class="form-group">
    <label for="verificarEmail">Email de PayPal</label>
    <input type="email" class="form-control" id="emailPayPal" name="emailPayPal" placeholder="ejemplo@email.com" required>
  </div>
   <div class="form-group">
    <label for="Monto">Precio de La Factura.</label>
    <input type="number" class="form-control" id="amount" name="amount" step="any" required>
  </div>
   <div class="form-group">
    <label for="Name">Razon de Factura</label>
    <input type="text" class="form-control" id="razonInvoice" name="razonInvoice" required>
  </div>
 
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>

<!-- 
*************************************************************************


FORMULARIO INFORMAR AL CLIENTE QUE PAGUE EN BTC 


*************************************************************************

<div name="infoBTC" id="infoBTC">
  <h1>AVISO VENTANA BITCOINS</h1>  

<form action="mailertemplate.php" method="post"  onsubmit="return confirm('Revisaste bien antes de enviar?');">
  <input type="hidden" name="infobtc" value="infobtc">
  <div class="form-group">
    <label for="Name">Nombre</label>
    <input type="text" class="form-control" id="Name" name="Name" placeholder="Nombre de la Persona" required>
  </div>
  <div class="form-group">
    <label for="solicitudEmailBTC">Email</label>
    <input type="email" class="form-control" id="solicitudEmailBTC" name="solicitudEmailBTC" placeholder="ejemplo@email.com" required>
  </div>
  <div class="form-group">
  	<label for="NumPedido">Número de #Orden</label>
  	<input type="text" class="form-control" id="NumPedido" name="NumPedido" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>


<!-- 
*************************************************************************


FORMULARIO PARA NOTIFICAR LA ENTREGA DE PEDIDO.


*************************************************************************

<div name="ConfirmaEntrega" id="ConfirmaEntrega">
  <h1>CONFIRMACION DE ENTREGA DE ORDEN</h1>  

<form action="mailertemplate.php" method="post" onsubmit="return confirm('Revisaste bien antes de enviar?');">
  <input type="hidden" name="ConfirmaEntrega" value="ConfirmaEntrega">
  <div class="form-group">
    <label for="Name">Nombre</label>
    <input type="text" class="form-control" id="Name" name="Name" placeholder="Nombre de la Persona" required>
  </div>
  <div class="form-group">
    <label for="ConfirmaEmail">Email</label>
    <input type="email" class="form-control" id="ConfirmaEmail" name="ConfirmaEmail" placeholder="ejemplo@email.com" required>
  </div>
  <div class="form-group">
  	<label for="NumPedido">Número de #Orden</label>
  	<input type="text" class="form-control" id="NumPedido" name="NumPedido" required>
  </div>
   <div class="form-group">
  	<label for="Monto">Precio de la Compra</label>
  	<input type="number" class="form-control" id="Monto" name="Monto" step="any"required>
  </div>
  <div class="form-group">
   <label for="MontoGC">Monto de la Gift Card</label>
   <input type="number" class="form-control" id="MontoGC" name="MontoGC" step="any"required>
 </div>
 <div class="form-group">
  <label for="NombreGC">Tienda de la Gift Card</label>
  <input type="text" class="form-control" id="NombreGC" name="NombreGC" placeholder="Ej: Amazon, Ebay, iTunes" required>
 </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>



<!-- 
*************************************************************************


FORMULARIO PARA SOLICITAR UN PAGO EN BSF DE CUALQUIER PRODUCTO


*************************************************************************



<div name="infoBOLIVARESMANUAL" id="infoBOLIVARESMANUAL">
  <h1>SOLICITAR PAGO EN BOLIVARES</h1>  

<form action="mailertemplate.php" method="post" onsubmit="return confirm('Revisaste bien antes de enviar?');">
  <input type="hidden" name="infoBOLIVARES" value="infoBOLIVARES">
  <div class="form-group">
    <label for="Name">Nombre</label>
    <input type="text" class="form-control" id="Name" name="Name" placeholder="Nombre de la Persona" required>
  </div>
  <div class="form-group">
    <label for="BolivaresEmail">Email</label>
    <input type="email" class="form-control" id="BolivaresEmailManual" name="BolivaresEmailManual" placeholder="ejemplo@email.com" required>
  </div>
  <div class="form-group">
    <label for="NumPedido">Número de #Orden</label>
    <input type="text" class="form-control" id="NumPedido" name="NumPedido" required>

  <div class="form-group">
    <label for="MontoBsF">Monto a pagar en Bolivares (opcional)</label>
    <input type="number" class="form-control" id="MontoBsF" name="MontoBsF"  step="any" placeholder=""  value="">
  </div>
  <div class="form-group">
   <label for="DolarToday">Tasa por $  ( BOFA <?php echo $precioVentaBOFA?>Bsf.)(Requerido) </label>
   <input type="number" class="form-control"  min="1"id="DolarToday" value="<?php print $precioVentaBOFA?>" name="DolarToday" required step="any">

 </div>
  <div class="form-group">
   <label for="MontoGC">Monto de la operacion en $ (requerido) </label>
   <input type="number" class="form-control" id="MontoGC" name="MontoGC" step="any"required>
 </div>
 <div class="form-group">
  <label for="NombreGC">Motivo de la Solicitud del Pago ( Verificacion, recarga,  tienda gift card )</label>
  <input type="text" class="form-control" id="NombreGC" name="NombreGC" value="" placeholder="Ej: Amazon, Ebay, iTunes, Recarga PayPal, Verificacion PayPal." required>
 </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>




<!-- 
*************************************************************************


FORMULARIO PARA SOLICITAR UN PAGO DE VERIFICACION


*************************************************************************



<div name="infoBOLIVARESMANUALVERF" id="infoBOLIVARESMANUALVERF">
  <h1>SOLICITAR PAGO - Verificacion PayPal </h1>  

<form action="mailertemplate.php" method="post" onsubmit="return confirm('Revisaste bien antes de enviar?');">
  <input type="hidden" name="infoBOLIVARES" value="infoBOLIVARES">
  <div class="form-group">
    <label for="Name">Nombre</label>
    <input type="text" class="form-control" id="Name" name="Name" placeholder="Nombre de la Persona" required>
  </div>
  <div class="form-group">
    <label for="BolivaresEmail">Email</label>
    <input type="email" class="form-control" id="BolivaresEmailManual" name="BolivaresEmailManual" placeholder="ejemplo@email.com" required>
  </div>
  <div class="form-group">
    <label for="NumPedido">Número de #Orden</label>
    <input type="text" class="form-control" id="NumPedido" name="NumPedido" required>
  </div>
  <div class="form-group">
    <label for="MontoBsF">Precio de la Verificacion (default <?php echo $precioVerfPayPal?>Bsf. No borrar el -1 salvo q se vaya a enviar a un precio distino.) </label>
    <input type="number" class="form-control" id="MontoBsF" name="MontoBsF"  step="any" placeholder="SE DEJA EN BLANCO SALVO QUE SE QUIERA DAR OTRO PRECIO" value="-1">
  </div>
  <div class="form-group">
  <!-- <label for="DolarToday">Precio por $ (default <?php echo $preciosApiApp[1]?>Bsf.) </label> 
   <input type="hidden" class="form-control"  min="1"id="DolarToday" value="" name="DolarToday" step="any">

 </div>
  <div class="form-group">
 <!--  <label for="MontoGC">Monto de la Gift Card ( Monto de la operacion en $ )</label> 
   <input type="hidden" class="form-control" id="MontoGC" name="MontoGC" value="0" step="any"required>
 </div>
 <div class="form-group">
  <!-- <label for="NombreGC">Motivo de la Solicitud del Pago ( Verificacion, recarga,  tienda gift card )</label> 
  <input type="hidden" class="form-control" id="NombreGC" name="NombreGC" value="Verificacion De Cuenta De Paypal" placeholder="Ej: Amazon, Ebay, iTunes, Recarga PayPal, Verificacion PayPal." required>
 </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>





<!-- 
*************************************************************************


#TODO

PUNTO DE VENTA EN BTC NO FUNCIONAL

*************************************************************************


<div name="posBTC" id="posBTC">
  <h1>POS BITCOINS</h1>  

<form action="mailertemplate.php" method="post"  onsubmit="return confirm('Revisaste bien antes de enviar?');">
  <input type="hidden" name="infobtc" value="infobtc">
  <div class="form-group">
    <label for="Name">Nombre</label>
    <input type="text" class="form-control" id="Name" name="Name" placeholder="Nombre de la Persona" required>
  </div>
  <div class="form-group">
    <label for="solicitudEmailBTCPOS">Email</label>
    <input type="email" class="form-control" id="solicitudEmailBTCPOS" name="solicitudEmailBTCPOS" placeholder="ejemplo@email.com" required>
  </div>
  <div class="form-group">
    <label for="NumPedido">Número de #Orden</label>
    <input type="text" class="form-control" id="NumPedido" name="NumPedido" required>
  </div>
  <div class="form-group">
    <label for="MontoPOS">Monto en USD</label>
    <input type="number" class="form-control" id="montoUSD" name="montoUSD" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
</div>-->
<?php include "header.php" ?>

<a href="https://www.appbb.co/template-sender2/enviadorCotizacionesView.php" style="text-decoration:none;"><button class="button button5">RECARGAS CON BS</button></a>
<a href="https://www.appbb.co/template-sender2/enviadorCotizacionesGCView.php" style="text-decoration:none;"><button class="button button3">ENVIAR COTIZ. GIFT CARDL</button></a>
<a href="https://www.appbb.co/template-sender2/enviargiftcard.php" style="text-decoration:none;"><button class="button button">ENVIAR GIFT CARD'S</button></a>
<a href="https://appbb.co/appbbAPI/ui.php/tasas_new/list" style="text-decoration:none;"><button class="button button2">AJUSTAR TASAS</button></a>
<a href="https://www.appbb.co/template-sender2/contingenciaPayPal.php" style="text-decoration:none;"><button class="button button3">ENVIAR CONTINGENCIA CAMBIOS A BS</button></a>
<a href="https://www.appbb.co/template-sender2/registroCliente.php" style="text-decoration:none;"><button class="button button5">REGISTRAR CLIENTES</button></a>

<?php include "footer.php"; ?>