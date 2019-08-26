<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>INICIAR SESION</title>
</head>
<body>
	<div class="banner">
		<?php include("est_banner.php"); ?>
	</div>
	<div class="sesion">
		<h1>Iniciar Sesión</h1>
		<form action="neg_evaluarsesion.php" autocomplete="off" method="post">
			<label>Documento</label>
			<input type="text" name="documento" placeholder="Número de Documento" pattern="[0-9 ]+" + required>
			<label>Contraseña</label>
			<input type="password" name="password" placeholder="Contraseña" + required>
			</br>
			<input type="submit" name="boton" value="Iniciar Sesión">
		</form>
		<center><h4>¿No tienes cuenta? <a href="pre_formregistro.php">Registrate</a></h4></center>
	</div>
	<div class="footer">
		<?php include("est_footer.php"); ?>
	</div>
</body>
</html>