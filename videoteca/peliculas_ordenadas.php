<?php
$orden="p.titulo";
include("includes/inicioHTML.php");
include("includes/cabecera_usuario.php");
echo "<h2>LISTADO de películas ordenado</h2>";
include("includes/menu_usuario.php");
include("includes/crear_conexion.php");
conectar_a("videoteca");
//contenido
echo "<span class='cursiva'>Listado de películas</span>";
$cabecera=array("titulo","soporte","genero");
$sql="select p.id,p.titulo,s.nombre,g.descripcion from pelicula as p,soporte as s ,genero as g where p.idgenero=g.id and p.idsoporte=s.id";
include("includes/tablaSql.php");
crearTabla($sql,$cabecera);
?>



<?php
include("includes/pie.php");
include("includes/finHTML.php");
?>
