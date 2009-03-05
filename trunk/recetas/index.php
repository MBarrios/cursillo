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
<!--inicio IZQUIERDA-->
<div id="izq">
	<!--inicio PORTADA1-->
	<div id="portada1" class="portada">
		<h4>QUESOS ARTESANALES CANARIOS</H4>
		<p>Los quesos artesanales canarios forman parte del patrimonio cultural las islas; de su produccion dependen numerosas familias de ganaderos repartidos por toda la geografía Canaria, quienes obtienen con la neta de este producto su principal forma de subsistencia.</p>
		<p>Son un lujo alimentario, originados directamente del campo, su forma de elaboración con leche cruda está reconodida en toda Europa bajo diferentes acepciones segun el pais de origen.</p>
		<img id="izq" src="IMAGES/portada/quesos_canarios.jpg" alt="quesos canarios" />
	<!--fin PORTADA1-->
	</div>
	<!--inicio PORTADA2-->
	<div id="portada2" class="portada">
		<h4>DE TEMPORADA:Mermelada de arándanos rojos</h4>
		<p>Elaboracion:<br />
		Poner en una cacerola al fuego el agua con el azúcar  y hervir. Echar los arándanos lavados y dejar que hierva unos 10 minutos, hasta que las bayas exploten y entonces, bajar el fuego hasta que se reduzca a la mitad. Dejar enfriar a temperatura ambiente y poner en el frigorífico hasta que la salsa se espese por completo. Se sirve fría como mermelada o caliente como salsa.</p>
		<p>Ingredientes:<br />
		250g de arándanos rojos americanos frescos, 150g. de azúcar, 200 ml de agua.</p>
		<img id="dcha" src="IMAGES/portada/mermelada.jpg" alt="mermelada de arandanos rojos" />
	<!--fin PORTADA2-->
	</div>
<!--fin IZQUIERDA-->
</div>
<!--inicio DERECHA-->
<div id="dcha">
<h4>El menu de hoy</h4>

<!--rellenando las tres recetas del menu del dia-->
	<?php
	$sql="select count(*) as cantidad from recetario";
	$resultado=mysql_query($sql);
	$numRecetaAnterior="";
	if($fila=mysql_fetch_array($resultado)){
		$i=0;
		$cantidad=$fila["cantidad"];
		//crea tres divs con tres recetas diferentes
		while ($i<3){
			$numReceta=rand(1,$cantidad);
			echo $numReceta."<br />";
			$numReceta=$numReceta-1;
			if($numRecetaAnterior!=$numReceta){
				$sql="select * from recetario limit $numReceta,1";
				$resultado=mysql_query($sql);
				$numRecetaAnterior=$numReceta;
				if($fila=mysql_fetch_array($resultado)){
					echo "<div id='menu_del_dia'>";
						echo $fila["Titulo"]."<br />";
						echo "<img src='IMAGES/fotosrecetas/".$fila["Foto"]."' alt='imagen receta: ".$fila["Titulo"]."' /><br />";
						echo substr($fila["Elaboracion"],0,50)."...<br />";
					echo "</div>";
				}

			}
$i=$i+1;
		}
	}
	?>
<!--fin DERECHA-->
</div>
<!-- fin CONTENIDO-->
</div>
<?php
include("includes/pie.php");
include("includes/finHTML.php");
?>
