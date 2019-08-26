<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>INICIAR SESION</title>
</head>
<body>
	<div class="banner">
		<?php include("est_banner.php"); ?>
	</div>
	<div class="sesion container-fluid px-4 mt-3" width="100%">
		<div class="row">
			<div class="col">
			</div>
			<div class="col-sm-4 mx-auto bg-light border">
				<h4 class="mt-2 py-4 text-center">Iniciar Sesión</h4>
				<form action="neg_evaluarsesion.php" autocomplete="off" method="post">
					<div class="form-group px-5">
						<label>Documento</label>
						<input type="text" class="form-control" name="documento" placeholder="Número de Documento" pattern="[0-9 ]+" + required>
					</div>
					<div class="form-group px-5">
						<label>Contraseña</label>
						<input type="password" class="form-control" name="password" placeholder="Contraseña" + required>
					</div>
					<div class="m-4 text-center">
						<input type="submit" class="btn btn-primary" name="boton" value="Iniciar Sesión">
					</div>
				</form>
				<p class="p-4">¿No tienes cuenta? <a href="pre_formregistro.php">Registrate</a></p>
			</div>
			<div class="col">

			</div>
		</div>
	</div>
	<div class="footer">
		<?php include("est_footer.php"); ?>
	</div>
</body>
</html>