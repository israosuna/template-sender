
<?php include "header.php" ?>
<body>

<form class="form-horizontal" id="form1" name="form1" action="https://www.appbb.co/template-sender2/insertarCliente.php" method="post">

<fieldset>

<!-- Form Name -->
<legend>Registro de Cliente</legend>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prependedtext">Correo</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">@</span>
      <input id="prependedtext" name="email" class="form-control" placeholder="email" type="text" required="">
    </div>
    <p class="help-block">correo en miniscula</p>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">**</span>
      <input id="password" name="password" class="form-control" placeholder="contrasena" type="text" required="">
    </div>
    <p class="help-block">correo sin el @ minusculas</p>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="recaudos">Recaudos Enviados</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="recaudos-0">
      <input type="checkbox" name="recaudospaypal" id="recaudos-0" value="1">
      Paypal
    </label>
	</div>
  <div class="checkbox">
    <label for="recaudos-1">
      <input type="checkbox" name="recaudospayza" id="recaudos-1" value="1">
      Payza
    </label>
	</div>
  <div class="checkbox">
    <label for="recaudos-2">
      <input type="checkbox" name="recaudosbtc" id="recaudos-2" value="1">
      BTC
    </label>
	</div>
  <div class="checkbox">
    <label for="recaudos-3">
      <input type="checkbox" name="recaudosbofa" id="recaudos-3" value="1">
      BOFA
    </label>
  </div>
  <div class="checkbox">
    <label for="recaudos-4">
      <input type="checkbox" name="recaudosgiftcards" id="recaudos-4" value="1">
      Gift Cards
    </label>
  </div>  
  </div>
</div>

<!-- Prepended checkbox -->
<div class="form-group">
  <label class="col-md-4 control-label" for="recaudopayoneer">Recaudos Payoneer</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">     
        <input type="checkbox" name="payoneer" id="payoneer" value="1">
      </span>
      <input id="recaudopayoneer" name="recaudopayoneer" class="form-control" type="text" placeholder="ultimos 4 digitos de la tarjeta(s)">
    </div>
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="notas">Notas</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="notas" name="notas" placeholder="Notas adicionales del cliente"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" type="submit"name="submit" class="btn btn-success">Registar</button>
  </div>
</div>

</fieldset>
</form>
	
</body>
<?php include "footer.php" ?>