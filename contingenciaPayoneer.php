
<?php include "header.php" ?>
<body>

<div class="form-group">
		<h1>Contingencia de Payoneer</h1>  

		<form id="form1" name="form1" action="https://www.appbb.co/template-sender2/contingenciaPayo.php" method="post">

		<label>Numero de Pedido</label>
			<input class="form-control" type="text" name="numPedido" id= "numPedido"required > </input> 
		<label>email</label>
			<input class="form-control" required type="text" name="email" id= "email" > </input> 
		<label>Monto Cambio ( 2.50, 5, monto exacto )</label>
			<input class="form-control" required type="text" name="montoConComision" id= "montoConComision" > </input> </br>
				<input class="btn btn-primary" type="submit">		
		</form>
</div>		
</body>
<?php include "footer.php" ?>