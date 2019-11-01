<img style="padding: 10px 10px 10px; width: 20%; height: 20%"; src="img/logo/logoPred.JPG">
	<?php 
		$estado_session = session_status();

		if($estado_session == PHP_SESSION_NONE){
			session_start();
		}
		if($estado_session != PHP_SESSION_NONE){
			if($_SESSION["rol"] > 0){
				echo "<center style='position: absolute; top: 30px; transform: translate(50%, 0);'>";
				echo "<a href='index.php'><input class='opcion' type='submit' name='' value='Inicio'></a>";
				echo "<a href='salas.php'><input class='opcion' type='submit' name='' value='Salas'></a>";
				echo "<a href='comedores.php'><input class='opcion' type='submit' name='' value='Comedores' ></a>";
				echo "<a href='contactenos.php'><input class='opcion' type='submit' name='' value='Contactenos'></a>";
				echo "</center>";
				echo "<samp style='color: #fff; position: absolute; top: 30px; right: 100px;'>";
				echo $_SESSION["nombres"];
				echo "<br>";
				echo $_SESSION["apellidos"];
				echo "<br><a href='salir.php'>Cerrar Sesión</a>";
			}
		}
		
	?>
</samp>