
<?php include "header.php" ?>
<body>

<div class="form-group">
		<h1>Cotizaciones de Recarga.</h1>  

		<form id="form1" name="form1" action="https://www.appbb.co/template-sender2/enviadorCotizacionesController.php" method="post">

		<label>Numero de Pedido ( SIN LA N)&nbsp;</label>
			<input class="form-control" type="number" name="numPedido" id= "numPedido"required > 
			</input> 
		<label>Tasa ( en blanco para enviar a tasa de compra de gc)&nbsp;</label>
			<input class="form-control"  type="number" step="any" name="tasa" id= "tasa" > 
			</input> 
		<label>Monto En Bs.&nbsp;</label>
			<input class="form-control"  type="number" step="any" name="montoBS" id= "montoBS" > 
			</input> 	
		<label>Monto en $. &nbsp;</label>
			<input class="form-control"  type="text" name="montoUSD" id= "montoUSD" > 
			</input> </br>
				<input class="btn btn-primary" type="submit">		
  </form>
</div>		
</body>
<?php include "footer.php" ?>