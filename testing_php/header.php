<?php
	include_once("instance.php");
?>

<!doctype HTML>
<html>
	<head lang="es">
		<title>La Caxitienda</title>
		<meta charset="utf-8">
		<meta name="author" content="Elena Cuellar">
		<meta name="application-name" content="Venta de productos">
		<meta name="description" content="Ejemplo de web para la venta de productos">
		<link rel="stylesheet" type="text/css" href="estilos.css"/>
		
	</head>
	<body>
		<header width="auto">
			<p>La Caxitienda</p>
			<section id="login">
				<?php
					session_start();
					if(isset($_SESSION["user"])){ ?>
						<form action="logout.php" method="post">
							<fieldset>
								<?php
									echo "Bienvenido/a ". $_SESSION["user"];
								?>
								<br>
								<input type="submit" value="Logout">
							</fieldset>
						</form>
						
					<?php
					}else{ ?>
						<form action="login.php" method="post">
							<fieldset>
								User: <input id="user" type="text" name="user"><br>
								Password: <input id="password" type="password" name="password"><br>
								<input type="submit" value="Login">
							</fieldset>
						</form>
					<?php } ?>
						
			</section>
			<nav>
				<ul>
					<li><a href="index.php?category=inicio">Inicio</a></li>
					<li><a>Informacion</a></li>
					<?php
						if(isset($_SESSION["user"])){ ?>
							<li><a href="index.php?category=perfil">Perfil</a></li>
						<?php
						}else{ ?>
							<li><a href="index.php?category=registro">Registro</a></li>
						<?php } ?>
					<li><a href="index.php?category=contacto">Contacto</a></li>
				</ul>
			</nav>
		</header>