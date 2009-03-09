<?php
include("includes/inicioHTML.php");
include("includes/cabecera.php");
include("includes/crear_conexion.php");
conectar_a("recetas");
?>
<!--DIV en el que aparece la seccion en la que estas-->
 <div id="actual">
  <?php
   if(basename($_SERVER["PHP_SELF"])=="index.php")
   		echo "<p>Portada</p>";
   else{
   		$pagina =explode(".",basename($_SERVER["PHP_SELF"]));
   		echo "<p>".ucfirst($pagina[0])."</p>";
   	   }
   ?>
   </div>
<!-- inicio CONTENIDO-->
<div id="contenido">
<?php
$sql="select count(*) as total from glosario";
$resultado=mysql_query($sql);
//numero total de registros en la tabla
if($fila=mysql_fetch_array($resultado))
	$total=$fila["total"];
//numero total de paginas
$pag_total=ceil($total/10);
if(!isset($_GET["pagina"]))
	$pagina=1;
else
	$pagina=$_GET["pagina"];
$limite_inf=($pagina-1)*10;
$sql="select * from glosario limit ".$limite_inf.",10";
$resultado=mysql_query($sql);
echo "Pagina $pagina de $pag_total ";
echo "<table border='0'>";
while($fila=mysql_fetch_array($resultado)){
	echo "<tr>";
	echo "<td>".$fila[0].".-</td>";
	echo "<td>".$fila[1]."</td>";
	echo "<td>".$fila[2]."</td>";
	echo "</tr>";
}
echo "</table>";
echo "totalpag: ".$pag_total."<br />";
echo "actual: ".$pagina."<br />";
if($pagina!=1){
	$anterior=$pagina-1;
	echo "<a href='glosario.php?pagina=$anterior'>Anterior </a>";
}
for($i=1;$i<=$pag_total;$i++){
	if($pagina!=$i)
		echo "<a href='glosario.php?pagina=$i'>  $i</a>";
	else
		echo " [$i] ";
}
if($pagina!=$pag_total){
	$siguiente=$pagina+1;
	echo "<a href='glosario.php?pagina=$siguiente'> Siguiente</a>";
}
?>
<!-- fin CONTENIDO-->
</div>
<?php
include("includes/pie.php");
include("includes/finHTML.php");
?>
