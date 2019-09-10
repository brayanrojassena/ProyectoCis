<?php
	session_start();
	include("neg_conexion.php");
	$documento=$_POST["documento"];
	$password=$_POST["password"];
	$cont="0";
	$sql="SELECT * FROM Usuario WHERE usuarioDocumento='$documento' AND usuarioPswrd='$password'";
	if (!$result=$db->query($sql)){
		die('Hay un error corriendo en la consulta o datos no encontrados!!! ['.$db->error.']');
	}
	while ($row=$result->fetch_assoc()){
		$ddocumento=$row['usuarioDocumento'];
		$uusuario=$row['usuarioNombre'];
		$sql2="SELECT * FROM Permiso WHERE fk_usuarioDocumento='$ddocumento'";
		if (!$result2=$db->query($sql2)){
		die('Hay un error corriendo en la consulta o datos no encontrados!!! ['.$db->error.']');
		}
		while ($row2=$result2->fetch_assoc()){
			$rrol=$row2["fk_id_Rol"];
		}
		$cont=$cont+1;
		
		switch($rrol){
			case 1:
				$_SESSION["usuario"]=987654321;
			case 2:
				$_SESSION["superadmin"]=987654321;
			case 3:
				$_SESSION["admin"]=987654321;
			break;
			default:
				echo "<strong>Hay un error con la gestión de roles</strong>";
			break;
		}
	}
	
	if($cont!="0"){
			$_SESSION["documento"]=$ddocumento;
			$_SESSION["usuarioNombre"]=$uusuario;
			header("Location:s_indexL.php");
	}

	if($cont=="0"){
		header("Location:pre_iniciarSesionDatosErr.php");
	}
?>