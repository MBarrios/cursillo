<?php
$resultado=mysql_query($sql);
		while($fila=mysql_fetch_array($resultado)){
			echo "<tr>";
			echo "<td>".$fila["titulo"]."</td>";
			echo "<td>".$fila["autor"]."</td>";
			echo "<td>".$fila["paginas"]."</td>";
			echo "<td>".$fila["idioma"]."</td>";
			if($fila["cd"]==0)
				echo "<td>No</td>";
			else
				echo "<td>Si</td>";
			if($fila["prestado"]==0)
				echo "<td>No</td>";
			else
				echo "<td>Si</td>";
			echo "<td>".$fila["descripcion"]."</td>";
			echo "<td><form action='detalle_libro.php' method='get'><input type='hidden' id='identificador' name='identificador' value='".$fila["id"]."'/><input type='image' src='fotos/minis/".$fila["wfoto"]."' /></form></td>";
			//echo "<td><a href='detalle_libro.php'><img id='imagen' src='fotos/minis/".$fila["wfoto"]."' /></td>";
			echo "</tr>";
		}
		echo "</tbody></table>";
?>
