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
 echo "</div>";
 ?>
<!-- inicio CONTENIDO-->
<div id="contenido">
<?php
//si se ha pulsado el boton de busqueda de receta
if(isset($_GET["enviar"])){
	if($_GET["tipo"]=="todos"){
		$sql="select r.CodReceta,r.Titulo as Titulo, p.icono as Icono,r.comensales as Comensales, r.Elaboracion as Elaboracion from recetario as r inner join platos as p on r.CodPlato=p.CodPlato where Ingredientes like '%".$_GET["palabra"]."%' or Elaboracion like '%".$_GET["palabra"]."%' or p.Tipoplato like '%".$_GET["palabra"]."%'";
	}
	else{
		$sql="select r.CodReceta,r.Titulo as Titulo, p.icono as Icono,r.comensales as Comensales, r.Elaboracion as Elaboracion from recetario as r inner join platos as p on r.CodPlato=p.CodPlato where ".$_GET["tipo"]." like '%".$_GET["palabra"]."%'";
	}
	$cabecera=array("titulo","Tipo de plato","Comensales","Elaboracion");
include("includes/tablaSql.php");
crearTabla($sql,$cabecera,4);
}
else{
//	echo ($nombre=$_GET["nombre"]);
//	echo ($comensales=$_GET["comensales"]);
//	echo ($tipo=$_GET["tipo"]);
//	echo ($tiempo=$_GET["tiempo"]);
//	echo ($elaboracion=$_GET["elaboracion"]);
//	echo ($montaje=$_GET["montaje"]);
//	echo ($portada=0);
//	echo ($ingredientes=$_GET["ingredientes"]);
	$sql="insert into recetario (CodPlato,Titulo,Comensales,Tiempo,Ingredientes,Elaboracion,Montaje,Foto,Portada) values (".$_GET["tipo"].",'".$_GET["nombre"]."',".$_GET["comensales"].",".$_GET["tiempo"].",'".$_GET["ingredientes"]."','".$_GET["elaboracion"]."','".$_GET["montaje"]."','null',0)";
	if(mysql_query($sql)==0)
		echo "error";
	else
		echo "todo bien";


}
?>
<div id="espacio"></div>
<!-- fin CONTENIDO-->
</div>
<?php
include("includes/pie.php");
include("includes/finHTML.php");
?>