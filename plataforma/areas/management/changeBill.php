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
            "UPDATE facturas SET estatus=? WHERE id=?"
        );
        $query->execute([1,$id]);
    } catch (PDOException $e) {
        echo "Error actualizando estatus de factura: " . $e->getMessage();
    }
} else {
    echo "No se han recibido datos.";
}
?>