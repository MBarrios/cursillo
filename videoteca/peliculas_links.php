<?php
include("includes/inicioHTML.php");
include("includes/cabecera_usuario.php");
echo "<h1>LISTADO de películas</h1>";
include("includes/menu_usuario.php");
include("includes/crear_conexion.php");
conectar_a("videoteca");
//contenido
echo "<h3>Listado de películas</h3>";
$cabecera=array("titulo","genero","valor");
$sql="select p.titulo,s.nombre,g.descripcion from pelicula as p,soporte as s ,genero as g where p.idgenero=g.id and p.idsoporte=s.id";
include("includes/tablaSql.php");
crearTabla($sql,$cabecera);
?>



<?php
include("includes/pie.php");
include("includes/finHTML.php");
?>
