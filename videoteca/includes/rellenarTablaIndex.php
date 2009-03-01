<?php
$resultado=mysql_query($sql);
		while($fila=mysql_fetch_array($resultado)){
			echo "<tr>";
			echo "<td>".$fila[0]."</td>";
			echo "<td>".$fila[1]."</td>";
			echo "<td>".$fila[2]."</td>";
			echo "</tr>";
		}
		echo "</tbody></table>";
		?>

