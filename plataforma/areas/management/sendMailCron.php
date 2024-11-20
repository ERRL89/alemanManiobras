<?php
    //CREA ARRAY PARA RECIPIENTS
    $recipients = array();   

    if($produccion=="no"){
        $nombreUsuario1 = "Melibea Krishna López Hernandez";
        $emailUsuario1 =  "krish.lopez.90@gmail.com";
        $nombreUsuario2 = "Edson Roberto Rubio López";
        $emailUsuario2 =  "edsonrobertorubiolopez@gmail.com";
    }else{
        $nombreUsuario1 = "Francisco Javier Manjarrez González";
        $emailUsuario1 =  "manjarrezgonzalez42@gmail.com";
        $nombreUsuario2 = "Sonia Sanchez";
        $emailUsuario2 =  "soniasanchez3105@gmail.com";    
    }
    
    //Usuario a quien se envia la cotización
    $dataUserMail1 = array("email" => "{$emailUsuario1}", "name" => "{$nombreUsuario1}");
    array_push($recipients, $dataUserMail1);
    $dataUserMail2 = array("email" => "{$emailUsuario2}", "name" => "{$nombreUsuario2}");
    array_push($recipients, $dataUserMail2);

    #ENVIO DE CORREO
   
    if($facturas==1){
        $mailSubject = "Recordatorio de cobro de factura - ".$numFct;
        $mailPath = $root.'templates/acil/email/mailCron.php';
        $mailData = array(
            array("var_name" => "numFct", "var_val" => "{$numFct}"),
            array("var_name" => "name", "var_val" => "{$name}"),
            array("var_name" => "rfc", "var_val" => "{$rfc}"),
            array("var_name" => "monto", "var_val" => "{$monto}")
        );
    }else{
        $mailData = array();
        $mailSubject = "Sin facturas por cobrar";
        $mailPath = $root.'templates/acil/email/mailCronFalse.php';        
    }

    sendEmail($recipients, $mailSender, $mailSubject, $mailPath, $mailData, $mailHost, $mailUser, $mailPass); 
    
?>