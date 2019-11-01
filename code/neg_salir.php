<?php 
	session_start();
	$_SESSION["usuario"]='0';
	$_SESSION["admin"]='0';
	$_SESSION["superadmin"]='0';
	header("location:pre_iniciarSesion.php");
 ?>