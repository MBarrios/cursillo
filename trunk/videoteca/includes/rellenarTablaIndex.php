<?php
$resultado=mysql_query($sql);
		while($fila=mysql_fetch_array($resultado)){
			echo "<tr>";
			echo "<td>".$fila["titulo"]."</td>";
			echo "<td>".$fila["nombre"]."</td>";
			echo "<td>".$fila["descripcion"]."</td>";
			echo "</tr>";
		}
		echo "</tbody></table>";
		?>


