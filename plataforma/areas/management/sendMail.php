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
    $nombre_cliente = $nombre;
    $email_cliente =  $email;
   
    $dataUserMail_cliente = array("email" => "{$email_cliente}", "name" => "{$nombre_cliente}");
    array_push($recipients, $dataUserMail_cliente);
    $dataUserMail1 = array("email" => "{$emailUsuario1}", "name" => "{$nombreUsuario1}");
    array_push($recipients, $dataUserMail1);
    $dataUserMail2 = array("email" => "{$emailUsuario2}", "name" => "{$nombreUsuario2}");
    array_push($recipients, $dataUserMail2);

    #ENVIO DE CORREO
    $mailSubject = "Cotización - ".$nombre;
    $mailPath = $root.'templates/acil/email/mail.php';
    $mailData = array(
        array("var_name" => "nombre", "var_val" => "{$nombre}")
    );
   
    $routeCot=$root."docs/cotizaciones/".$fecha."-".$nombre.".pdf";
    
    $attachments=array($routeCot);

    ##SE EJECUTA FUNCIÓN
    sendEmail($recipients, $mailSender, $mailSubject, $mailPath, $mailData, $mailHost, $mailUser, $mailPass, $attachments); 
?>