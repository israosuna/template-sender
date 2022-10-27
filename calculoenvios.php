
<?php include "header.php" ?>
  <body>

  <form class="form-horizontal" id="calculadora" name="calculadora" action="#" method="post">

    <fieldset>

      <!-- Form Name -->
      <legend>Calculo de Pies Cubicos </legend>

      <!-- Prepended text-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prependedtext">Alto</label>
        <div class="col-md-4">
          <div class="input-group">
            <input id="alto"  class="form-control" placeholder="altura en pulgadas" type="number" required="">
          </div>
        </div>
      </div>

      <!-- Prepended text-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prependedtext">Ancho</label>
        <div class="col-md-4">
          <div class="input-group">
            <input id="ancho"  class="form-control" placeholder="ancho en pulgadas" type="number" required="">
          </div>
        </div>
      </div>

      <!-- Prepended text-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prependedtext">Largo</label>
        <div class="col-md-4">
          <div class="input-group">
            <input id="largo"  class="form-control" placeholder="largo en pulgadas" type="number" required="">
          </div>
        </div>
      </div>
      <!-- Prepended text-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prependedtext">Resultado en pies cubicos</label>
        <div class="col-md-4">
          <div class="input-group">
            <input id="resultado"  class="form-control" placeholder="" type="number" readonly>
          </div>
        </div>
      </div>


      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-4">
          <button id="submit" type="submit"name="submit" class="btn btn-success">Calcular</button>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-4">
          <button id="" type="reset" class="btn btn-warning">Borrar</button>
        </div>
      </div>
    </fieldset>
  </form>

  <form class="form-horizontal" id="calculadoraPV" name="form1" action="#" method="post">

    <fieldset>

      <!-- Form Name -->
      <legend>Calculadora Peso Volumetrico </legend>

      <!-- Prepended text-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prependedtext">Peso del producto en LBS Libras</label>
        <div class="col-md-4">
          <div class="input-group">
            <input id="pesoPV"  class="form-control" placeholder="Peso" type="number" required="">
          </div>
        </div>
      </div>

      <!-- Prepended text-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prependedtext">Alto</label>
        <div class="col-md-4">
          <div class="input-group">
            <input id="altoPV"  class="form-control" placeholder="altura en pulgadas" type="number" required="">
          </div>
        </div>
      </div>

      <!-- Prepended text-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prependedtext">Ancho</label>
        <div class="col-md-4">
          <div class="input-group">
            <input id="anchoPV"  class="form-control" placeholder="ancho en pulgadas" type="number" required="">
          </div>
        </div>
      </div>

      <!-- Prepended text-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prependedtext">Largo</label>
        <div class="col-md-4">
          <div class="input-group">
            <input id="largoPV"  class="form-control" placeholder="largo en pulgadas" type="number" required="">
          </div>
        </div>
      </div>
      <!-- Prepended text-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prependedtext">Resultado </label>
        <div class="col-md-4">
          <div class="input-group">
            <input id="resultadoPV"  class="form-control" placeholder="" type="number" readonly>
          </div>
        </div>
      </div>


      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-4">
          <button id="submitPV" type="submit"name="submit" class="btn btn-success">Calcular</button>
        </div>
      </div>
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-4">
          <button id="" type="reset" class="btn btn-warning">Borrar</button>
        </div>
      </div>
    </fieldset>
  </form>
  <script src="js/main.js"></script>

  </body>
  <?php include "footer.php" ?>
