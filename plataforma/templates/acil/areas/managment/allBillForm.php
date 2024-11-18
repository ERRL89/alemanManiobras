<?php
    //IMPORTACIÓN DE RECURSOS
    include_once('../../config/config.php');
    include_once($root.'config/dbConf.php');
    $db = conexionPdo();

    $menu = true;
    $datatables = true;
    $idTable = 'historialFacturas';
    $pageTitle = "Historial de Facturas Pendientes Aleman Maniobras y Logistica"; 
    $titleMain = "Historial de Facturas";
 
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
                            <th>Estatus</th>
                        </tr>
                    </thead>  
                    <tbody>
         ";

    #/////// CUERPO DE LA TABLA //////////
    $consultaStr = "SELECT * FROM facturas ORDER BY facturas.estatus DESC";

    $consulta = $db->prepare($consultaStr);
    $consulta->execute([]);

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

            if($estatus==0){
                $estatus="<span style='color: red;'>Pendiente de pago</span>";
            }else{
                $estatus="<span style='color: green;'>Pagada</span>";
            }

            echo "
                <tr>
                    <td>$numFct</td>
                    <td>$name</td>
                    <td>$rfc</td>
                    <td>$$monto</td>
                    <td>$date</td>
                    <td>$estatus</td>
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
         ";

    echo "
         <script>
  
            $(document).ready(function() 
            {
                $('#$idTable').DataTable( 
                {
                    'order': [[ 0, 'ASC' ]],
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