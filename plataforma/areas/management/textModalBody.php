<?php

include_once('../../config/config.php');
include_once($root."config/dbConf.php");

$db = conexionPdo();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : '';
    $action = isset($_POST['action']) ? htmlspecialchars($_POST['action']) : '';

    try {
        $consultaStr = "SELECT * FROM facturas WHERE id=?";
        $consulta = $db->prepare($consultaStr);
        $consulta->execute([$id]);

        if ($consulta->rowCount() > 0) {
            while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $numBill = $fila['num_factura']; 
                $name    = $fila['nombre']; 
                $account = $fila['monto']; 
                $rfc= $fila['rfc']; 
            }

            if($action==1){
                echo "
                <div>
                <h5>¿Esta seguro que desea eliminar la siguiente factura?</h5>
                
            ";
            } else{
                echo"
                    <div>
                    <h5>¿Esta seguro que desea marcar como pagada la siguiente factura?</h5>
                ";
            }

            echo "
                <ul>
                    <li><span><strong>Num. factura:</strong> $numBill</span><br></li>
                    <li><span><strong>Rfc:</strong> $rfc</span><br></li>
                    <li><span><strong>Nombre:</strong> $name</span><br></li>
                    <li><span><strong>Monto:</strong> $$account</span><br></li>
                </ul>
                <div/>
            ";
            }
            
    } catch (PDOException $e) {
        echo "Error extrayendo información: " . $e->getMessage();
    }
} else {
    echo "No se han recibido datos.";
}

?>
