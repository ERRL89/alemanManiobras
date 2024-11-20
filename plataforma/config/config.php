<?php
	
	$folderBase = 'alemanManiobras/plataforma/';
    $theme = 'acil';
	$root = $_SERVER['DOCUMENT_ROOT'].'/'.$folderBase;
	
    $produccion="no";

    if($produccion=="si"){
         // INFORMACIÓN PARA PRODUCTIVO //
         $host = 'localhost';
         $dbname = 'u274019495_aleman';
         $userDB = 'u274019495_aleman';
         $passDB = 'Erxl5063701489*';
    }else{
        // INFORMACIÓN PARA TEST //
        $host = 'localhost';
        $dbname = 'ovit_soluciones';
        $userDB = 'root';
        $passDB = '';
    }
	

    #DATOS PARA PHPMAIL
    $mailHost = 'smtp.hostinger.com';
    $mailUser = 'ventas@maniobrasylogistica.com';
    $mailPass = 'Erxl5063701489*';
    $mailSender = array('email' => 'ventas@maniobrasylogistica.com', 'name' => 'Aleman Maniobras');
    #
    // INFORMACIÓN PARA TEST //

    
	
?>