<?php
	include("include/seguridad.php");
	/*definición doctype, head(hoja de estilo), inicio del body y del div general*/
	include("include/inicioHTML.php");
	/*cabecera para un usuario sin permisos*/
	include("include/cabecera_usuario.php");
	/*menu para un usuario sin permisos e inicio del contenido*/
	include("include/menu_usuario.php");
	/*crea la conexion a la base de datos utilizando una funcion*/
	include("include/crear_conexion.php");
	conectar_a("biblioteca2");

if(isset($_GET["buscar"])){
echo "<h4>Modificar disponibilidad 2/3</h4>";
echo "<p>Modificar campo prestado del titulo y ver su disponibilidad.<a href='javascript:history.back();'>volver</a></p>";
  echo "<table border=1>";
  echo "<tr>";
  echo "<th>Titulo</th>
      <th>Autor</th>
      <th>Páginas</th>
      <th>Editorial</th>
      <th>Prestado</th>
      <th>Idioma</th>
      <th>Claves</th>
      <th>Miniatura</th>
      <th></th>
    </tr>";


    $sql="select * from libros inner join editoriales on libros.id_editorial=editoriales.id_editorial where id=".$_GET["libro"];
$resultado=mysql_query($sql);
		while($fila=mysql_fetch_array($resultado)){
			echo "<tr>";
			echo "<td>".$fila["titulo"]."</td>";
			echo "<td>".$fila["autor"]."</td>";
			echo "<td>".$fila["paginas"]."</td>";
			echo "<td>".$fila["editorial"]."</td>";
			if($fila["prestado"]==0)
				echo "<td>No</td>";
			else
				echo "<td>Si</td>";
			echo "<td>".$fila["idioma"]."</td>";
			echo "<td>".$fila["claves"]."</td>";
			echo "<td><img src='fotos/minis/".$fila["wfoto"]."' /></td>";
			echo "<td>";
			echo "<form action='modificar_disponibilidad2.php' method='get'>";
			//si no esta prestado se marca el radio de no prestado y si no el de prestado
			if($fila["prestado"]==0){
				echo "<input type='radio' name='estado' id='estado' value=1";
				echo "<label for='estado'>Prestado</label><br />";
				echo "<input type='radio' name='estado' id='estado' checked value=0";
				echo "<label for='estado'>No prestado</label>";
			}
			else{
				echo "<input type='radio' name='estado' id='estado' checked value=1";
				echo "<label for='estado'>Prestado</label><br />";
				echo "<input type='radio' name='estado' id='estado' value=0";
				echo "<label for='estado'>No prestado</label>";
			}
			echo "<input type='hidden' name='titulo' id='titulo' value='".$fila["titulo"]."'>";
			echo "<input type='submit' value='Modificar'>";
			echo "</form>";
			echo "</tr>";
		}
		echo "</tbody></table>";

 echo "</table>";}
 else
 {echo "<h4>Modificar disponibilidad 3/3</h4>";
	$sql="update libros set prestado='".$_GET["estado"]."' where titulo='".$_GET["titulo"]."'";
	$resultado=mysql_query($sql);
	if(mysql_affected_rows()>0){
		echo "el estado del libro ".$_GET["titulo"]." ha sido modificado";
	}
	else {
		echo "ha habido un error durante el proceso";
	}
 }
?>
<!-- fin CONTENIDO-->
</div>
<?php
include("include/cerrar_conexion.php");
	include("include/pie.php");
	include("include/finHTML.php");
?>

