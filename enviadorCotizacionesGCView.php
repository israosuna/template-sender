
<?php include "header.php" ?>
<body>

<div class="form-group">
		<h1>Cotizaciones de Gift Card.</h1>  

		<form id="form1" name="form1" action="https://www.appbb.co/template-sender2/enviadorCotizacionesGCController.php" method="post">

		<label>Numero de Pedido ( SIN LA N)&nbsp;</label>
			<input class="form-control" type="number" name="numPedido" id= "numPedido"required > 
			</input> 
		<label>Tasa ( en blanco para enviar a tasa de compra de gc)&nbsp;</label>
			<input class="form-control"  type="number" name="tasa" id= "tasa" > 
			</input> 
		<label>Nombre de la Gift Card ( si es manual ).&nbsp;</label>
			<input class="form-control"  type="number" name="nombreGCManual" id= "nombreGCManual" > 
			</input> 	
		<label>Monto en $. &nbsp;</label>
			<input class="form-control"  type="text" name="montoUSD" id= "montoUSD" > 
			</input> </br>
				<input class="btn btn-primary" type="submit">		
  </form>
</div>		
</body>
<?php include "footer.php" ?>