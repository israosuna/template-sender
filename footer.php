
        <!-- JS includes -->

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>

        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/css/slick/slick.js"></script>
        <script src="assets/css/slick/slick.min.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>



        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
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
    <script type="text/javascript">



var getJSON = function(url) {
  return new Promise(function(resolve, reject) {
    var xhr = new XMLHttpRequest();
    xhr.open('get', url, true);
    xhr.responseType = 'json';
    xhr.onload = function() {
      var status = xhr.status;
      if (status == 200) {
        resolve(xhr.response);
      } else {
        reject(status);
      }
    };
    xhr.send();
  });
};




getJSON('https://s3.amazonaws.com/dolartoday/data.json').then(function(data) {
      document.getElementById('respapidt').innerHTML=data['USD']['transferencia'];

    //you can comment this, i used it to debug
    
    //result.innerText = data.result; //display the result in an HTML element
}, function(status) { //error detection....
  alert('Something went wrong.');
});

    $("#verificarPedido").hide();
    $("#infoBTC").hide();
    $("#ConfirmaEntrega").hide();

        $(document).ready(function (){
            toggleFields();

            $("#seleccionarTemplate").change(function(){
                toggleFields();
            });
        });

    function resetAllValues() {

    $('#verificarPedido').find('input').val('');
    $('#infoBTC').find('input').val('');
    $('#ConfirmaEntrega').find('input').val('');
    $('#infoBOLIVARES').find('input').val('');
    //$('#EntregarGC').find('input').val('');
    $('#EntregarGCBeta').find('input').val('');
    $('#posBTC').find('input').val('');
    $('#infoBOLIVARESMANUAL').find('input').val('');
    //$('#infoBOLIVARESMANUALVERF').find('input').val('');
    $('#enviarInvoice').find('input').val('');
    //$('#paypalbsf').find('input').val('');
          


}

function limpiarForm() {
    document.getElementById("fees").reset();
}

function putDT(){
var getJSON = function(url) {
  return new Promise(function(resolve, reject) {
    var xhr = new XMLHttpRequest();
    xhr.open('get', url, true);
    xhr.responseType = 'json';
    xhr.onload = function() {
      var status = xhr.status;
      if (status == 200) {
        resolve(xhr.response);
      } else {
        reject(status);
      }
    };
    xhr.send();
  });
};

getJSON('https://s3.amazonaws.com/dolartoday/data.json').then(function(data) {
      document.getElementById("DolarToday").value=data['USD']['transferencia'];
    //you can comment this, i used it to debug
    
    //result.innerText = data.result; //display the result in an HTML element
}, function(status) { //error detection....
  alert('Something went wrong.');
});
}
    function toggleFields(){
    if($("#seleccionarTemplate").val()=="1"){
            $("#EntregarGC_").show();

        }
        else{
            $("#EntregarGC_").hide();
      resetAllValues();
        }
    if($("#seleccionarTemplate").val()=="10"){
      $("#EntregarGCBeta").show();

    }
    else{
      $("#EntregarGCBeta").hide();
      resetAllValues();
    }
        if($("#seleccionarTemplate").val()=="2"){
            $("#verificarPedido").show();

        }
        else{
            $("#verificarPedido").hide();
      resetAllValues();
        }
    if($("#seleccionarTemplate").val()=="12"){
      $("#paypalbsf").show();

    }
    else{
      $("#paypalbsf").hide();
      resetAllValues();
    }

    if($("#seleccionarTemplate").val()=="13"){
      $("#infoBOLIVARESMANUALVERF").show();

    }
    else{
      $("#infoBOLIVARESMANUALVERF").hide();
      resetAllValues();
    }
        

    if($("#seleccionarTemplate").val()=="3"){
            $("#ConfirmaEntrega").show();
        }
        else{
            $("#ConfirmaEntrega").hide();
      resetAllValues();
        }

        if($("#seleccionarTemplate").val()=="4"){
            $("#infoBTC").show();
        }
        else{
            $("#infoBTC").hide();
      resetAllValues();
        }

    if($("#seleccionarTemplate").val()=="5"){
      $("#infoBOLIVARES").show();
    }
    else{
      $("#infoBOLIVARES").hide();
      resetAllValues();
    }
        if($("#seleccionarTemplate").val()=="11"){
      $("#enviarInvoice").show();
    }
    else{
      $("#enviarInvoice").hide();
      resetAllValues();
    }

    if($("#seleccionarTemplate").val()=="7"){

      $("#infoBOLIVARESMANUAL").show();
    }
    else{
      $("#infoBOLIVARESMANUAL").hide();
      resetAllValues();
    }    
    if($("#seleccionarTemplate").val()=="6"){
      $("#posBTC").show();
    }
    else{
      $("#posBTC").hide();
      resetAllValues();
    }
    }

    </script>
  </div>
  <br><br><br><br>
    </body>
</html>
