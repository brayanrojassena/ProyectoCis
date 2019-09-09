<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<!-- Barra de la izquierda -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Muebles NGR <i class="zmdi zmdi-close btn-menu-dashboard"></i>
			</div>
			<!-- SideBar -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
                    <div class="form-group">
                        <figcaption class="text-center text-titles mb-2">Rol de Usuario</figcaption>
                        <select class="form-control" name="rol" id="rol" onchange="location = this.value">
                            <option value="" title="select" label="" selected disabled>(Rol en que se encuentra)</option>
                            <option value="">Usuario</option>
                            <option value="">Administrador</option>
                            <option value="">Super Administrador</option>
                        </select>
                    </div>
				</figure>
			</div>
			<!-- Menú interno del sideBar -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="">
						<i class="zmdi zmdi-home zmdi-hc-fw"></i> Inicio
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-seat zmdi-hc-fw"></i> Submenú con Despliegue 1 <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href=""><i class="zmdi zmdi-assignment-check zmdi-hc-fw"></i> Opción 1 con icono</a>
						</li>
						<li>
							<a href="" class="ml-2"> Opción 2 sin icono</a>
						</li>
						<li>
							<a href=""><i class="zmdi zmdi-album zmdi-hc-fw"></i> Opción 3 con icono</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="">
						<i class="zmdi zmdi-check zmdi-hc-fw"></i> Cosa Random
					</a>
				</li>
			</ul>
		</div>
	</section>

	<!-- Contenido del tablero -->
	<section class="full-box dashboard-contentPage">
		
		<!-- NavBar (Banner) -->
		<nav class="full-box dashboard-Navbar fijar" style="">

			<!-- Despliegue del sideBar -->
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>

			<div class="dropdown correr fijar" style="margin-right: 10px;">
				<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="zmdi zmdi-account"></i>
				</button>
				
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left fijar" style="min-width: 230px; background-color: #FFF;">
					<center style="margin-bottom: 12px;">
						<div class="dorpdown-item">
							<img src="./img/perfil/hola.png" style="border-radius: 100px;width: 150px;height: 150px; border: black 2px solid; margin-top: 15px; margin-bottom: 5px;">	
						</div>
						<p>Nombre del Usuario</p>
						<h6 class="dropdown-header">Rol del Usuario</h6>
						<hr>
						<div class="dorpdown-item">
							<a href="" title="Usuarios" class="btn btn-info">
								<i class="zmdi zmdi-accounts"></i>
							</a>
							<a href="" title="Configuración" class="btn btn-success">
								<i class="zmdi zmdi-settings"></i>
							</a>
							<a href="#!" title="Salir del sistema" class="btn btn-danger btn-exit-system">
								<i class="zmdi zmdi-power"></i>
							</a>
						</div>
					</center>
				</div>
			</div>
		</nav>
		
		<!-- Contenido de la página -->
		<div class="container-fluid" style="margin-top: 15px;">
			<div class="page-header">
			  <h1 class="text-titles"><span class="text-info">Sistema</span> Control de Inventarios</h1>
			</div>
		</div>
		
		
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles text-center">Últimas Actualizaciones</h1>
			</div>
			<section id="" class="container">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                    <caption>Lista de los últimos cambios en el sistema</caption>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mesa</td>
                            <td>01/09/2019</td>
                            <td>Mesa principal - comedor</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Silla</td>
                            <td>26/08/2019</td>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Sillón</td>
                            <td>05/08/2019</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint itaque unde sit.</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Cama</td>
                            <td>15/07/2019</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Armario</td>
                            <td>10/07/2019</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
			</section>
			<hr>
			<section>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam assumenda quae unde necessitatibus repellat debitis enim dolorem, temporibus mollitia nemo velit aspernatur excepturi ut esse pariatur reprehenderit eos nisi natus?</p>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam assumenda quae unde necessitatibus repellat debitis enim dolorem, temporibus mollitia nemo velit aspernatur excepturi ut esse pariatur reprehenderit eos nisi natus?</p>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam assumenda quae unde necessitatibus repellat debitis enim dolorem, temporibus mollitia nemo velit aspernatur excepturi ut esse pariatur reprehenderit eos nisi natus?</p>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam assumenda quae unde necessitatibus repellat debitis enim dolorem, temporibus mollitia nemo velit aspernatur excepturi ut esse pariatur reprehenderit eos nisi natus?</p>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam assumenda quae unde necessitatibus repellat debitis enim dolorem, temporibus mollitia nemo velit aspernatur excepturi ut esse pariatur reprehenderit eos nisi natus?</p>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam assumenda quae unde necessitatibus repellat debitis enim dolorem, temporibus mollitia nemo velit aspernatur excepturi ut esse pariatur reprehenderit eos nisi natus?</p>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam assumenda quae unde necessitatibus repellat debitis enim dolorem, temporibus mollitia nemo velit aspernatur excepturi ut esse pariatur reprehenderit eos nisi natus?</p>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam assumenda quae unde necessitatibus repellat debitis enim dolorem, temporibus mollitia nemo velit aspernatur excepturi ut esse pariatur reprehenderit eos nisi natus?</p>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam assumenda quae unde necessitatibus repellat debitis enim dolorem, temporibus mollitia nemo velit aspernatur excepturi ut esse pariatur reprehenderit eos nisi natus?</p>
			</section>
		</div>
	</section>

	



	<script src="./js/bootstrap.bundle.min.js"></script>
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/popper.min.js"></script>
	<script>
		$.material.init();
	</script>
	<script>
		$(document).ready(function(){
			$(".dropdown-toggle").dropdown();
		});	
	</script>
</body>
</html>