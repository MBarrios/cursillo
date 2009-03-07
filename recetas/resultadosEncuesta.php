<?php
include("includes/inicioHTML.php");
include("includes/cabecera.php");
include("includes/crear_conexion.php");
conectar_a("recetas");
?>
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
  	<div id="encuesta">
  	<?php if(isset($_GET["enviar"])){
		$sql="update encuesta set ".$_GET["opcion"]."=".$_GET["opcion"]."+1";
  		if(mysql_query($sql)!=0 or isset($_GET["ver"]))
  			{
  			echo $_GET["id"];
  			$sql="select * from encuesta where id_encuesta=".$_GET["id"];
  			$resultado=mysql_query($sql);
  			if($fila=mysql_fetch_array($resultado)){
  				echo $fila["votos1"];
  				echo $fila["votos2"];
  				echo $fila["votos3"];
  				$datosTabla = array(
		array( $fila["respuesta1"], $fila["votos1"], "#BDDA4C"),
		array( $fila["respuesta2"], $fila["votos2"], "#FF9A68"),
		array( $fila["respuesta3"], $fila["votos3"], "#69ABBF"),
);
$maximo = 0;
foreach ( $datosTabla as $ElemArray ) { $maximo += $ElemArray[1]; }
?>
<body>
<table width="400" cellspacing="0" cellpadding="2">
<?php foreach( $datosTabla as $ElemArray ) {
$porcentaje = round((( $ElemArray[1] / $maximo ) * 100),2);
?>
<tr>
	<td width="20%"><strong><?php echo( $ElemArray[0] ) ?></strong></td>
	<td width="10%"><?php echo( $porcentaje ) ?>%</td>
	<td>
		<table width="<?php echo($porcentaje) ?>%" bgcolor="<?php echo($ElemArray[2]) ?>">
		<tr><td> </td></tr>
	</table>
	</td>
	</tr>
	<?php }
  				$cantidad=$fila["votos1"]+$fila["votos2"]+$fila["votos3"];
  				echo $fila["pregunta"]."<br />";
  				echo $fila["respuesta1"]."-".number_format($fila["votos1"]*100/$cantidad,2)."%<br />";
  			echo $fila["respuesta2"]."-".number_format($fila["votos2"]*100/$cantidad,2)."%<br />";
  			echo $fila["respuesta3"]."-".number_format($fila["votos3"]*100/$cantidad,2)."%<br />";
  			echo "total votos:".$cantidad."<br />";
  			echo "gracias por participar<br />";
  			echo "<a href='encuesta.php'>volver</a>";
  			}
  		}

  	}
  	?>
	</div>
<!-- fin CONTENIDO-->
<?php
include("includes/pie.php");
include("includes/finHTML.php");
?>

