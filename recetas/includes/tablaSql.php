<?php
function crearTabla($_pagi_sql,$arrayCabecera){
$pagina=basename($_SERVER ["PHP_SELF"]);
$patron="ordenadas";
$patron2="links";
$patron3="paginado";
//si la labla se ordena por columnas al clicar
if( stripos($pagina, $patron)==true)
	echo "<table border=0 width='100%' class='sortable'>";
else
	echo "<table border=0 width='100%'>";
echo "<thead>";
echo "<tr>";
foreach ($arrayCabecera as $elemento =>$valor){
	echo "<th class='negrita'>$valor</th>";
	}
echo "</tr>";
echo "</thead>";
echo "<tbody>";
if( stripos($pagina, $patron3)==true){
	$_pagi_cuantos=3;
	$_pagi_separador=" ";
	$_pagi_nav_anterior="&laquo;";
	$_pagi_nav_siguiente="&raquo;";
	$_pagi_nav_primera="";
	$_pagi_nav_ultima="";
//	include("paginator.inc.php");
	}
else
	$_pagi_result=mysql_query($_pagi_sql);
	$id=0;
while($fila=mysql_fetch_array($_pagi_result)){
	$i=1;


	echo "<tr>";
	while ($i<count($fila)/2){
	//si queremmos que la primera columna tenga enlaces

		if($i==1 && stripos($pagina, $patron2)==true)
			echo "<td><a href='ficha.php?id=".$fila["0"]."'>".$fila[$i]."</a></td>";
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
