<?php
    //IMPORTACIÓN DE RECURSOS
    include_once('../../config/config.php');
    include_once($root.'config/dbConf.php');
    $db = conexionPdo();

    $menu = true;
    $datatables = true;
    $idTable = 'facturasPendientes';
    $pageTitle = "Facturas Pendientes Aleman Maniobras y Logistica"; 
    $titleMain = "Facturas Pendientes de Pago";
 
    #CONSTRUCCIÓN TABLA
    echo "
          <div class='container p-5'>
                <!-- Comienza tabla  -->
                <table id='$idTable' class='table table-striped table-bordered' style='width:100%; font-size: calc(0.4em + 0.4vw)'>
                    <thead>
                        <tr>        
                            <th>Num. Factura</th>
                            <th>Nombre</th>
                            <th>RFC</th>
                            <th>Monto</th>
                            <th>Fecha</th>
                            <th>Modificar</th>
                        </tr>
                    </thead>  
                    <tbody>
         ";

    #/////// CUERPO DE LA TABLA //////////
    $consultaStr = "SELECT * FROM facturas WHERE estatus=? ORDER BY facturas.id ASC ";

    $consulta = $db->prepare($consultaStr);
    $consulta->execute([0]);

    if ($consulta->rowCount() > 0) {
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $id     = $fila['id']; 
            $numFct = $fila['num_factura']; 
            $name = $fila['nombre'];
            $estatus= $fila['estatus'];
            $rfc    = $fila['rfc'];
            $monto  = $fila['monto'];
            $dia    = $fila['dia'];
            $mes    = $fila['mes'];
            $ano    = $fila['ano'];
            $date  = $dia."/".$mes."/".$ano;

            $actions="
                    <div class='d-flex flex-row gap-2'>
                        <button class='btn btn-success fs-6 btnModify' data-toggle='modal' data-target='#exampleModal' onclick='sendRequestModal($id,0)'>Pagado</button>
                        <button class='btn btn-danger fs-6 btnModify' data-toggle='modal' data-target='#exampleModal' onclick='sendRequestModal($id,1)'>Eliminar</button>
                       
                    </div>";

            echo "
                <tr>
                    <td>$numFct</td>
                    <td>$name</td>
                    <td>$rfc</td>
                    <td>$$monto</td>
                    <td>$date</td>
                    <td>$actions</td>
                </tr>
                ";
        }
    } 
    
    #////////////// FIN DE LA TABLA //////////////////
    echo "
          </tbody>
          </table> 
          <!-- Termina tabla  -->
          <hr class='lineCustom'>
          </div>
          <div class='d-flex justify-content-center align-items-center flex-column principalCustom' id='principal'></div>

          <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Atención</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='modal-body' id='textModalBody'></div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        <button type='button' class='btn btn-primary' id='okModal'>Aceptar</button>
                    </div>
                </div>
            </div>
          </div>
         ";

    echo "
         <script>

            function deleteBill(id){
                var formData = {
                    id: id,
                };
                $.ajax({
                    type: 'POST',
                    url: 'deleteBill.php',
                    data: formData,
                    success: function(result) {
                        $('#principal').html(result)
                        location.reload(true);
                    }
                });
            }

            function changeBill(id){
                var formData = {
                    id: id,
                };
                $.ajax({
                    type: 'POST',
                    url: 'changeBill.php',
                    data: formData,
                    success: function(result) {
                        $('#principal').html(result)
                        location.reload(true);
                    }
                });
            }

            function sendRequestModal(id, action){
                var formData = {
                    id: id,
                    action:action
                };

                 $.ajax({
                    type: 'POST',
                    url: 'textModalBody.php',
                    data: formData,
                    success: function(result) {
                        $('#textModalBody').html(result)
                         $('#okModal').on('click', function() {
                            if(action==1){
                                deleteBill(id)
                            }else{
                                changeBill(id)
                            }
                        });
                    }
                });
            }
                
            $(document).ready(function() 
            {
                $('#$idTable').DataTable( 
                {
                    'order': [[ 0, 'DESC' ]],
                    'scrollY': '30vh',
                    'scrollCollapse': true,
                    'scrollX': true,
                    'language': 
                    {
                        'url': 'https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
                    },
                    dom: 'frtilp',
                });
            });

         </script>
         ";

    include ($root."templates/$theme/footer.php");
    #FIN PÁGINA
?>

<!-- Modal HTML -->


<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>