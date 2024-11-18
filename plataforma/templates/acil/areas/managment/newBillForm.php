<!-- Formulario de Contrato -->
<div id="formulario" class="container p-5 mb-5">
  <form id="form">
    <div class="container-sm container_form_custom">
        <!-- Fecha -->
        <div class="d-flex justify-content-end align-items-center gap-2">
            <?php
                date_default_timezone_set('America/Mexico_City');
                $fecha = date('d-m-Y');
            ?>
            <label for="fecha" class="form-label label-custom">Fecha:</label>
            <div class="col-md-2 mb-2">
                <input type="text" class="text-center form-control form-input" id="fecha" name="fecha" value='<?php echo $fecha?>' disabled>
            </div>
        </div>
        <hr><center><p class="fs-5"><b>DATOS DE FACTURA</b></p></center><hr>
        <!-- --- DATOS DE LA FACTURA --- -->
        <div class="mb-3">
            <div class="row mb-3">
                <!-- Número de Factura -->
                <div class="col-md-5 mb-2">
                    <input type="text" class="form-control form-input" id="numBill" name="numBill" placeholder="Número de Factura" required>
                    <div class="invalid-feedback">Introduce el # de factura</div>
                </div>
                <!-- Nombre -->
                <div class="col-md-4 mb-2">
                    <input type="text" class="form-control form-input" placeholder="Nombre" id="name" name="name" required>
                    <div class="invalid-feedback">Introduce el nombre</div>
                </div>
                <!-- Estatus -->
                <div class="col-md-3 mb-2">
                <select class="form-select" name="estatus" id="estatus" aria-label="Default select example">
                    <option value="" selected>Estatus factura:</option>
                    <option value="0">Pendiente de pago</option>
                    <option value="1">Pagada</option>
                </select>
            <div class="invalid-feedback">Ingrese estatus de factura</div>
                </div>
            </div>
            <div class="row mb-3">
                <!-- RFC -->
                <div class="col-md-4 mb-2">
                    <input type="text" class="form-control form-input" placeholder="RFC" id="rfc" name="rfc" required>
                    <div class="invalid-feedback">Introduce rfc</div>
                </div>
                <!-- Monto -->
                <div class="col-md-4 mb-2">
                    <input type="number" class="form-control form-input" id="monto" name="monto" placeholder="Ingrese monto $" required>
                    <div class="invalid-feedback">Introduce el monto ($) de la factura</div>
                </div>
                <!-- Fecha promesa de Pago -->
                <div class="col-md-4 mb-2">
                    <input type="date" class="form-control form-input" placeholder="Fecha promesa de pago" id="datePay" name="datePay" required>
                    <div class="invalid-feedback">Introduce fecha promesa de pago</div>
                </div>
            </div>
        </div><hr>
        <div>
        <center><button type="button" id="saveBillBtn" class="btn btn-primary btn-custom text-center" onclick="saveBill()">Guardar factura</button><center>
        </div>
    </div>
  </form>
</div>

<!-- ------------------- Barra de progreso ------- -->
<div class="progressBarContainer mt-5 ms-center" id="progressB">
    <center><div class="progress" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 100%"></div>
    </div></center>
    <h4 class="mt-3 text-center">Guardando factura ...</h4>
</div>

<div id="facturaOk">
    <center><h6 style="color:green;">Factura almacenada correctamente</h6></center>
</div>

<div class="d-flex justify-content-center align-items-center flex-column principalCustom" id="principal"></div>

<script>
    $(document).ready(function() {
        $('#progressB').hide() 
        $('#facturaOk').hide()
    });

    function hideMsg(){
        setTimeout(function() {
            // Enviar los datos mediante AJAX
           $('#facturaOk').hide()
            }, 2000);
    }

    function saveBill() {
        // Obtener los valores de los campos del formulario
        $('#formulario').hide() 
        $('#progressB').show() 

        let numBill = $("#numBill").val()
        let name= $('#name').val()
        let rfc= $('#rfc').val()
        let monto= $('#monto').val()
        let datePay = $('#datePay').val()
        let estatus = $('#estatus').val()
        
        // Objeto con los datos del formulario
        var formData = {
            numBill: numBill,
            name: name,
            rfc: rfc,
            monto: monto,
            datePay: datePay,
            estatus:estatus
        };

        setTimeout(function() {
            // Enviar los datos mediante AJAX
            $.ajax({
                type: "POST",
                url: "newBillProcess.php",
                data: formData,
                success: function(result) {
                    $('#principal').html(result)
                    $("#numBill").val("")
                    $('#name').val("")
                    $('#rfc').val("")
                    $('#monto').val("")
                    $('#estatus').val("")
                    $('#datePay').val("")
                    $('#progressB').hide() 
                    $('#formulario').show() 
                    $('#facturaOk').show()
                    hideMsg()
                }
            });
            }, 2000);
    }
</script>
