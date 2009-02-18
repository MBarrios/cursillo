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
				<div id="titulo"><h3>INSERTAR > Continente</h3></div>
				<!--inicio CONTENIDO-->
				<div id="contenido">
					<p>Insertar un nuevo continente</p>
					<?php
					$continente=$_GET["pais_continente"];

					$pais=$_GET["nombre"];
					$poblacion=$_GET["poblacion"];
					$superficie=$_GET["superficie"];
						if (!mysql_connect("localhost","root",""))
							die(mysql_error ());

						if (!mysql_select_db("paises"))
							die (mysql_error ());
					$sql="select * from pais where pais_nombre='".$pais."'";
					$resultado=mysql_query($sql);
					if(mysql_affected_rows()==0){
					$sql="insert into pais (pais_nombre,pais_poblacion,pais_superficie,continente) values ('".$pais."','".$poblacion."','".$superficie."','".$continente."')";
					$resultado=mysql_query($sql);
						if(mysql_affected_rows()>0)
							echo $pais." se ha creado correctamente en la base de datos";
					}
					else echo "el pais ya existe";
					?>
				<!--fin CONTENIDO-->
				</div>
				<!--fin CUERPO-->
			</div>
		<!--fin GENERAL-->

		</div>

	</body>
</html>
