<?php
function crearTabla($_pagi_sql,$arrayCabecera){
$pagina=basename($_SERVER ["PHP_SELF"]);
$patron="ordenadas";
$patron2="links";
$patron3="paginado";
//si la labla se ordena por columnas al clicar
if( stripos($pagina, $patron)==true)
	echo "<table border=1 class='sortable'>";
else
	echo "<table border=1>";
echo "<thead>";
echo "<tr>";
foreach ($arrayCabecera as $elemento =>$valor){
	echo "<th>$valor</th>";
	}
echo "</tr>";
echo "</thead>";
echo "<tbody>";
if( stripos($pagina, $patron3)==true){
	$_pagi_cuantos=3;
	include("paginator.inc.php");}
else
	$_pagi_result=mysql_query($_pagi_sql);
while($fila=mysql_fetch_array($_pagi_result)){
	$i=0;
	echo count($fila);
	echo "<tr>";
	while ($i<count($fila)/2){
	//si queremmos que la primera columna tenga enlaces
		if($i==0 && stripos($pagina, $patron2)==true)
			echo "<td><a href='#'>".$fila[$i]."</a></td>";
		else
			echo "<td>".$fila[$i]."</td>";
						$i=$i+1;
				}
		echo "</tr>";
	}
echo "</tbody></table>";
if( stripos($pagina, $patron3)==true)
	if(isset($_pagi_navegacion))
		echo"<p>".$_pagi_navegacion."</p>";
}


?>
