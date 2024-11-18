<?php

include_once('../../config/config.php');
include_once($root."config/dbConf.php");

$db = conexionPdo();

// Verifica si se ha enviado una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : '';

    try {
        $query = $db->prepare(
            "DELETE FROM facturas WHERE id=?"
        );
        $query->execute([$id]);
    } catch (PDOException $e) {
        echo "Error borrando factura: " . $e->getMessage();
    }
} else {
    echo "No se han recibido datos.";
}
?>