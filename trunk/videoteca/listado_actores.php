<?php
include("includes/inicioHTML.php");
include("includes/cabecera_usuario.php");
echo "<h2>LISTADO de actores</h2>";
include("includes/menu_usuario.php");
include("includes/crear_conexion.php");
conectar_a("videoteca");
?>
<a href="listado_actores.php?letra=a">A</a>|<a href="listado_actores.php?letra=b">B</a>|<a href="listado_actores.php?letra=c">C</a>|<a href="listado_actores.php?letra=d">D</a>|<a href="listado_actores.php?letra=e">E</a>|<a href="listado_actores.php?letra=f">F</a>|<a href="listado_actores.php?letra=g">G</a>|<a href="listado_actores.php?letra=h">H</a>|<a href="listado_actores.php?letra=i">I</a>|<a href="listado_actores.php?letra=j">J</a>|<a href="listado_actores.php?letra=k">K</a>|<a href="listado_actores.php?letra=l">L</a>|<a href="listado_actores.php?letra=m">M</a>|<a href="listado_actores.php?letra=n">N</a>|<a href="listado_actores.php?letra=ñ">&Ntilde;</a>|<a href="listado_actores.php?letra=o">O</a>|<a href="listado_actores.php?letra=p">P</a>|<a href="listado_actores.php?letra=q">Q</a>|<a href="listado_actores.php?letra=r">R</a>|<a href="listado_actores.php?letra=s">S</a>|<a href="listado_actores.php?letra=t">T</a>|<a href="listado_actores.php?letra=u">U</a>|<a href="listado_actores.php?letra=v">V</a>|<a href="listado_actores.php?letra=x">X</a>|<a href="listado_actores.php?letra=y">Y</a>|<a href="listado_actores.php?letra=z">Z</a>|

<?php
if (isset($_GET["letra"])){
	$sql="select nombre, apellidos, id from actor where nombre like '".$_GET["letra"]."%'";
	$resultado=mysql_query($sql);
	echo "<ul id='listaactores'>";
	while ($fila=mysql_fetch_array($resultado))
		echo "<li><a href='listado_actores.php?letra=".$_GET["letra"]."& id=".$fila["id"]."'>".$fila["nombre"]." ".$fila["apellidos"]."</a></li>";
	echo "</ul>";}
	if (isset($_GET["id"])){
		$sql="select * from actor where id=".$_GET["id"];
		$resultado=mysql_query($sql);

		while ($fila=mysql_fetch_array($resultado)){
			echo "<p id='nombreActor'>::".$fila["nombre"]." ".$fila["apellidos"]."::</p>";
			echo "<div id='imagenactor'><img src='images/actores/".$fila["foto"]."' alt='imagen actor' /></div>";
	}
}
include("includes/pie.php");
include("includes/finHTML.php");
?>
