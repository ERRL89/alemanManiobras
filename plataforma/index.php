<?php
	session_start();
    if(!isset($_SESSION['partnerId']))
    {
    	include('login.php');
    }
    else
    {
    	include('validateLogin.php');
    }
?>