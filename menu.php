<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Libros</title>

	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}

		header {
			width: 100%;
		}

		.navegacion {
			width: 1000px;
			margin: 30px auto;
			background: #89759a;
		}

		.navegacion ul {
			list-style: none;
		}

		.menu>li {
			position: relative;
			display: inline-block;
		}

		.menu>li>a {
			display: block;
			padding: 15px 20px;
			color: #353535;
			font-family: 'Open sans';
			text-decoration: none;
		}

		.menu li a:hover {
			color: #CE7D35;
			transition: all .3s;
		}

		/* Submenu*/

		.submenu {
			position: absolute;
			background: #333333;
			width: 120%;
			visibility: hidden;
			opacity: 0;
			transition: opacity 1.5s;
		}

		.submenu li a {
			display: block;
			padding: 15px;
			color: #fff;
			font-family: 'Open sans';
			text-decoration: none;
		}

		.menu li:hover .submenu {
			visibility: visible;
			opacity: 1;
		}
	</style>

</head>

<body>
	<header>
		<nav class="navegacion">
			<ul class="menu">
				<li><a href="?p=pages/inicio">Inicio</a></li>
				<li><a>Libros</a>
					<ul class="submenu">
						<li><a href="?p=pages/agregar">Agregar</a></li>
						<li><a href="?p=pages/mod">Modificar</a></li>
						<li><a href="?p=pages/del">Eliminar</a></li>
					</ul>
				</li>

				<li><a href="?p=pages/ver">Ver Libros</a></li>
			</ul>
		</nav>
	</header>
</body>