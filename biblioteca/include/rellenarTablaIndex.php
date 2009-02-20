<?php
$resultado=mysql_query($sql);
		while($fila=mysql_fetch_array($resultado)){
			session_start();
			$_SESSION["titulo"]=$fila["titulo"];
			$_SESSION["autor"]=$fila["autor"];
			$_SESSION["paginas"]=$fila["paginas"];
			$_SESSION["idioma"]=$fila["idioma"];
			$_SESSION["cd"]=$fila["cd"];
			$_SESSION["estado"]=$fila["prestado"];
			$_SESSION["descripcion"]=$fila["descripcion"];
			$_SESSION["wfoto"]=$fila["wfoto"];
			echo "<tr>";
			echo "<td>".$fila["titulo"]."</td>";
			echo "<td>".$fila["autor"]."</td>";
			echo "<td>".$fila["paginas"]."</td>";
			echo "<td>".$fila["idioma"]."</td>";
			echo "<td>".$fila["cd"]."</td>";
			echo "<td>".$fila["prestado"]."</td>";
			echo "<td>".$fila["descripcion"]."</td>";
			echo "<td><a href='detalle_libro.php'><img src='fotos/minis/".$fila["wfoto"]."' /></a></td>";
			echo "</tr>";

		}
		echo "</tbody></table>";
?>
