
<?php include "header.php" ?>
<body>

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

</body>
<?php include "footer.php" ?>