<?php
include("includes/inicioHTML.php");
include("includes/cabecera_usuario.php");
echo "<h1>LISTADO de películas</h1>";
include("includes/menu_usuario.php");
include("includes/crear_conexion.php");
conectar_a("videoteca");
//contenido
echo "<h3>Listado de películas</h3>";
include("includes/rellenarCabeceraTablaBusqueda.php");
$sql="select p.titulo,s.nombre,g.descripcion from pelicula as p,soporte as s ,genero as g where p.idgenero=g.id and p.idsoporte=s.id";
include("includes/rellenarTablaIndex.php");
?>



<?php
include("includes/pie.php");
include("includes/finHTML.php");
?>
