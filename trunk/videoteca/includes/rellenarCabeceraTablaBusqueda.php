<?php
$pagina=basename($_SERVER ["PHP_SELF"]);
$patron="ordenadas";
if( stripos($pagina, $patron)==true)
echo "<table border=1 class='sortable'>";
else
echo "<table border=1>";
		echo "<thead>";
		echo "<tr><th>Título</th>";
		echo "<th>Soporte</th>";
		echo "<th>Género</th></tr>";
		echo "</thead>";
		echo "<tbody>";
?>
