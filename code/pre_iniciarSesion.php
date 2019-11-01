<!DOCTYPE html>
<html lang="es">
<head>
	<title>Iniciar Sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/bootstrap-material-design.min.css">
</head>
<body>
	<div class="full-box login-container cover p-3">
		<form action="" method="" autocomplete="off" class="logInForm">
            <h2 class="text-center text-uppercase">Iniciar Sesión</h2>
            <br>
			<div class="form-group label-floating">
			  <label class="control-label" for="UserDoc" style="color:#ffffff;">Documento</label>
			  <input class="form-control" style="color:#ffffff;" id="UserDoc" name="documento" type="text">
			  <p class="help-block">Escribe tu número de identificación</p>
			</div>
			<div class="form-group label-floating">
			  <label class="control-label" for="UserPass" style="color:#ffffff;">Contraseña</label>
			  <input class="form-control" style="color:#ffffff;" id="UserPass" name="password" type="password">
			  <p class="help-block">Escribe tu contraseña</p>
			</div>
			<div class="form-group text-center">
				<input type="submit" value="Iniciar sesión" class="btn btn-info" style="color: #FFF;">
			</div>
			<div class="">
            	<p>¿No tienes cuenta? <a href="">Regístrate</a></p>   
        	</div>
        </form>
    </div>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>