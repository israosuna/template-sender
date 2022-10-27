<?php 

include_once 'connect.php';

$numpedidoappbb = $_POST['numpedidoappbb'];
$numpedidoconpaca= $_POST['numpedidoconpaca'];
$num_orden= $_POST['guiazoom'];

if ($num_orden!= 0){
$sql2 = "INSERT INTO `envio_zoom` (numero_orden,numero_factura,guia) VALUES ('$numpedidoappbb', '$numpedidoconpaca', '$num_orden')";
$result = mysqli_query($connectionZoom, $sql2);

    $sql = "INSERT INTO `logs` (usuario,accion,pedido) VALUES ('$username', 'Numero de Guia de ZOOM', '$num_orden')";
    $result = mysqli_query($connection, $sql);
}


?>
<?php include "header.php"; ?>

<body>
    <div class="container">
        <form class="bootstrap-form-with-validation"  action="zoom.php" method="post">
            <h2 class="text-center">Administador de Guías de Zoom</h2>
            <div class="form-group">
                <label class="control-label" for="text-input">Numero de Pedido ( Appbb.co )</label>
                <input class="form-control" type="text" name="numpedidoappbb" id="text-input">
            </div>
            <div class="form-group">
                <label class="control-label" for="p">Numero de Factura ( CONPACA )</label>
                <input class="form-control" type="text" name="numpedidoconpaca">
            </div>
            <div class="form-group">
                <label class="control-label" for="email-input">Numero de Guía (Automatico )</label>
                <input class="form-control" type="text" readonly="" name="guiazoom" value= <?php echo "12".rand(10000000,99999999) ?> >
            </div>
            <div class="form-group"></div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Registrar </button>
            </div>
        </form>
    </div>
<?php include "footer.php"; ?>