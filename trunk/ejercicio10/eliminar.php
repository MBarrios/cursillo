<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3g.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<title>Mi pagina</title>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<link href="estilo.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<!--inicio GENERAL-->
		<div id="general">
			<div id="cabecera"></div>
			<div id="menu">
		     <ul>
			    <li><a href="index.php">Home</a>|</li>
			    <li><a href="buscar.php">Buscar</a>|</li>
			    <li><a href="buscar_combinado.php">Buscar combinado</a>|</li>
			    <li><a href="insertar.php">Insertar</a>|</li>
			    <li><a href="eliminar.php">Eliminar</a>|</li>
			    <li><a href="modificar.php">Modificar</a></li>

			  </ul>
			</div>
			<!--inicio CUERPO-->
			<div id="cuerpo">
				<div id="titulo"><h3>ELIMINAR > Pais 1/2</h3></div>
				<!--inicio CONTENIDO-->
				<div id="contenido">
					<p>Insertar el nombre o la/s inicial/es de un continente, y población</p>
					<form action="" method="get">
						<label for="pais">Elije un pais para eliminar</label>

						  <select name="pais">
						    <option value="value1">option1</option>
						    <option value="value2">option2</option>
						    <option value="value3">option3</option>
						  </select>

						<input type="button" name="buscar" value="Buscar" id="buscar" />
				</form>
				<!--fin CONTENIDO-->
				</div>
				<!--fin CUERPO-->
			</div>
		<!--fin GENERAL-->

		</div>

	</body>
</html>
