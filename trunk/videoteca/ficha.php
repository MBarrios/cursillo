<?php
include("includes/inicioHTML.php");
include("includes/cabecera_usuario.php");
echo "<h2>FICHA DE PELICULAS</h2>";
include("includes/menu_usuario.php");
include("includes/crear_conexion.php");
conectar_a("videoteca");
if(isset($_GET["id"])){
	$sql="select p.id, p.titulo as tit, p.cartel as c,p.sinopsis as sin, g.descripcion as ge, s.nombre as so, d.nombre as nom, d.apellidos as apel from pelicula as p, genero as g, director as d, soporte as s where p.id=".$_GET["id"]." and p.idsoporte=s.id and p.idgenero=g.id and p.iddirector=d.id";
	$resultado=mysql_query($sql);
	if($fila=mysql_fetch_array($resultado)){
		//rellenar pagina con los datos
		echo "<div id='ficha'>";
		echo "<span class='negrita'>Titulo:</span> ".$fila["tit"]."<br />";
		echo "<span class='negrita'>Genero:</span> ".$fila["ge"]."<br />";
		echo "<span class='negrita'>Soporte:</span> ".$fila["so"]."<br />";
		echo "<span class='negrita'>Director:</span> ".$fila["nom"]." ".$fila["apel"]."<br />";
		$sinopsis=$fila["sin"];
		$cartel=$fila["c"];
		$sql="select actor.nombre as nom, actor.apellidos as apel from actor, pelicula, actores_por_pelicula as a where pelicula.id=".$fila["id"]." and pelicula.id=a.idpelicula and actor.id=a.idactor";
		$resultado=mysql_query($sql);
		echo "<span class='negrita'>Actores principales:</span><br /><ul id='listaactores'>";
		while($fila=mysql_fetch_array($resultado)){
			echo "<li>".$fila["nom"]." ".$fila["apel"]."</li>";
		}
		echo "</ul>";
		echo "</div>";
		echo "<img id='cartelFicha' src='images/peliculas/".$cartel."' alt='cartel de la pelicula' /><br />";
		echo "<div id='sinopsis'><span class='negrita'>Sinopsis:</span> ".$sinopsis."</div>";
	}
}

?>

  <h2 id="buscador">BUSCADOR DE PELICULAS</h2>
  <form action="" method="get">
  <select name="titulos" id="titulos" onchange="mostrar_ficha();">
  <?php
  $sql="select * from pelicula";
  $resultado=mysql_query($sql);
  while($fila=mysql_fetch_array($resultado))
    echo "<option value=".$fila["id"].">".$fila["titulo"]."</option>";
    ?>
  </select>
  </form>


<?php
include("includes/pie.php");
include("includes/finHTML.php");
?>
