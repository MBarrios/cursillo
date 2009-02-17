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
				<div id="titulo"><h3>RESULTADOS DE LA BUSQUEDA</h3></div>
				<!--inicio CONTENIDO-->
				<div id="contenido">
				<?php
				$pais=$_GET["pais"];
			if (isset($pais)){
				if($_GET["poblacion"]==1){
					$sql="Select pais_nombre,pais_poblacion from pais where pais_nombre like "."'".$pais."%'";
				}
				else if($_GET["poblacion"]==2){
					$sql="Select pais_nombre,pais_poblacion from pais where pais_nombre like "."'".$pais."%' and pais_poblacion beetween 1000000 and 5000000";
				}
				else if($_GET["poblacion"]==3){
					$sql="Select pais_nombre,pais_poblacion from pais where pais_nombre like "."'".$pais."%' and pais_poblacion beetween 5000000 and 10000000";
				}
				else if($_GET["poblacion"]==4){
					$sql="Select pais_nombre,pais_poblacion from pais where pais_nombre like "."'".$pais."%' and pais_poblacion beetween 10000000 and 30000000";
				}
				else if($_GET["poblacion"]==5){
					$sql="Select pais_nombre,pais_poblacion from pais where pais_nombre like "."'".$pais."%' and pais_poblacion beetween 30000000 and 50000000";
				}
				else if($_GET["poblacion"]==6){
					$sql="Select pais_nombre,pais_poblacion from pais where pais_nombre like "."'".$pais."%' and pais_poblacion>50000000";
				}
			}
			else{
					if($_GET["poblacion"]==1){
					$sql="Select pais_nombre,pais_poblacion from pais";
				}
				else if($_GET["poblacion"]==2){
					$sql="Select pais_nombre,pais_poblacion from pais where pais_poblacion beetween 1000000 and 5000000";
				}
				else if($_GET["poblacion"]==3){
					$sql="Select pais_nombre,pais_poblacion from pais where  pais_poblacion beetween 5000000 and 10000000";
				}
				else if($_GET["poblacion"]==4){
					$sql="Select pais_nombre,pais_poblacion from pais where  pais_poblacion beetween 10000000 and 30000000";
				}
				else if($_GET["poblacion"]==5){
					$sql="Select pais_nombre,pais_poblacion from pais where  pais_poblacion beetween 30000000 and 50000000";
				}
				else if($_GET["poblacion"]==6){
					$sql="Select pais_nombre,pais_poblacion from pais where  pais_poblacion>5000000";
				}
			}
				echo $pais;
					if (!mysql_connect("localhost","root",""))
						die(mysql_error ());

					if (!mysql_select_db("paises"))
						die (mysql_error ());

				$resultado=mysql_query($sql);
					echo "<table>";
					echo "<thead>";
					echo "<th>País</th>";
					echo "<th>Población</th>";
					echo "</thead><tbody>";
					while($fila=mysql_fetch_array($resultado))
						{echo "<tr>";
							echo "<td>".$fila["pais_nombre"]."</td>";
							echo "<td>".number_format($fila["pais_poblacion"],"",",",".")." hab.</td>";
						echo "</tr>";
						}
					echo "</tbody>";

				?>
				<!--fin CONTENIDO-->
				</div>
				<!--fin CUERPO-->
			</div>
		<!--fin GENERAL-->

		</div>

	</body>
</html>
