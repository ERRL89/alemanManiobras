<?php

include_once('../../config/config.php');
include_once($root."config/dbConf.php");

$db = conexionPdo();

// Verifica si se ha enviado una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $numBill = isset($_POST['numBill']) ? htmlspecialchars($_POST['numBill']) : '';
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $rfc = isset($_POST['rfc']) ? htmlspecialchars($_POST['rfc']) : '';
    $monto = isset($_POST['monto']) ? htmlspecialchars($_POST['monto']) : '';
    $datePay = isset($_POST['datePay']) ? htmlspecialchars($_POST['datePay']) : '';
    $estatus = isset($_POST['estatus']) ? htmlspecialchars($_POST['estatus']) : '';

    // Desestructura la fecha de promesa de pago en día, mes y año
    $datePayArray = explode('-', $datePay);
    $year = $datePayArray[0];
    $month = $datePayArray[1];
    $day = $datePayArray[2];

    try {
        $query = $db->prepare(
            "INSERT INTO facturas( 
            num_factura, 
            nombre, 
            estatus, 
            rfc, 
            monto, 
            dia, 
            mes, 
            ano
            ) VALUES (?,?,?,?,?,?,?,?)"
        );
        $query->execute([$numBill, $name, $estatus, $rfc, $monto, $day, $month, $year]);
    } catch (PDOException $e) {
        echo "Error en la inserción: " . $e->getMessage();
    }
    
    /*// Imprimir los datos recibidos
    echo "<h2>Datos Recibidos</h2>";
    echo "<p><strong>Número de Factura:</strong> $numBill</p>";
    echo "<p><strong>Estatus de Factura:</strong> $estatus</p>";
    echo "<p><strong>Nombre:</strong> $name</p>";
    echo "<p><strong>RFC:</strong> $rfc</p>";
    echo "<p><strong>Monto:</strong> $$monto</p>";
    echo "<p><strong>Fecha Promesa de Pago:</strong> $datePay</p>";
    echo "<p><strong>Día:</strong> $day</p>";
    echo "<p><strong>Mes:</strong> $month</p>";
    echo "<p><strong>Año:</strong> $year</p>";*/
} else {
    echo "No se han recibido datos.";
}
?>