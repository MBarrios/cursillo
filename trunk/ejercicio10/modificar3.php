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
				<div id="titulo"><h3>MODIFICAR > Pais 3/3</h3></div>
				<!--inicio CONTENIDO-->
				<div id="contenido">
					<p>Modificar el nombre del pais o su cifra de poblacion:</p>

				<?php
				$pais=$_GET["pais"];
				$poblacion=$_GET["poblacion"];
				$pais_sin_cambio=$_GET["pais_sin_cambio"];
				$id=$_GET["id_pais"];
					if (!mysql_connect("localhost","root",""))
						die(mysql_error ());

					if (!mysql_select_db("paises"))
						die (mysql_error ());
				$sql="update pais set pais_nombre='".$pais."', pais_poblacion=".$poblacion." where pais_id=".$id."";
				$resultado=mysql_query($sql);
				if ($resultado>0){
					echo "Los datos de - $pais_sin_cambio - han sido modificados, gracias";
				}
				?>
				<!--fin CONTENIDO-->
				</div>
				<!--fin CUERPO-->
			</div>
		<!--fin GENERAL-->

		</div>

	</body>
</html>
