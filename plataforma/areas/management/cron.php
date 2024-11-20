<?php
    $cronProduction="no";

    if($cronProduction=="si"){
        $root = "/home/u274019495/domains/maniobrasylogistica.com/public_html/plataforma/";
        include_once($root.'config/config.php');
    }else{
        include_once('../../config/config.php');
    }

    include_once($root.'config/dbConf.php');
    include_once($root.'areas/functions.php');
    include $root.'resources/PHPMailer/src/Exception.php';
	include $root.'resources/PHPMailer/src/PHPMailer.php';
	include $root.'resources/PHPMailer/src/SMTP.php';

    $db = conexionPdo();
    
    #Extrae fecha de hoy
    date_default_timezone_set('America/Mexico_City');
    $dia = date('j'); 
    $mes = date('n'); 
    $ano = date('Y'); 
    /*echo "Día: $dia<br>";
    echo "Mes: $mes<br>";
    echo "Año: $ano<br>";*/

    #Extrae datos para ver si el dia de hoy existen facturas por pagar
    try {
        $consultaStr = "SELECT * FROM facturas WHERE dia=? AND mes=? AND ano=?";
        $consulta = $db->prepare($consultaStr);
        $consulta->execute([$dia,$mes,$ano]);

        if ($consulta->rowCount() > 0) {
            while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $numFct = $fila['num_factura']; 
                $name   = $fila['nombre'];
                $estatus= $fila['estatus'];
                $rfc    = $fila['rfc'];
                $monto  = $fila['monto'];
                echo "Si hay facturas por cobrar";
                $facturas=1;
                require($root.'areas/management/sendMailCron.php');
            }
        }else{
            echo "No hay facturas por cobrar";
            $facturas=0;
            require($root.'areas/management/sendMailCron.php');
        }
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
    
?>