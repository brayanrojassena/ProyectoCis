<?php 
	session_start();
	if($_SESSION["rol"] < 1){
		header("location:salir.php");
	}
 ?>