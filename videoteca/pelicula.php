<?php
include("includes/inicioHTML.php");
include("includes/cabecera_usuario.php");
echo "<h2 class='colorRojo'>INSERTAR PELICULA</h2>";
include("includes/menu_usuario.php");
include("includes/crear_conexion.php");
conectar_a("videoteca");
?>

  <form action="pelicula2.php" method="post" enctype="multipart/form-data>
  <span id="pasos">Completar los siguientes datos del formulario.<span class="colorRojo">Pagina 1/2</span></span><br />
  	<label class="etiquetas" for="titulo">Titulo:</label>
    <input type="text" name="titulo" id="titulo" class="alinear"/><br />
    <label class="etiquetas">Soporte</label>
    <!--Cargar los distintos generos en el combo-->
  	<?php
  		echo "<div class='alinear'>";
  		$sql="select * from soporte";
  		$resultado=mysql_query($sql);
  		while ($fila=mysql_fetch_array($resultado)){
  			if($fila["id"]==1)
  				 echo "<input type='radio' name='soporte' id='soporte' checked value=".$fila["id"]." checked />";
  			 else
  		 		 echo "<input type='radio' name='soporte' id='soporte' value=".$fila["id"]." />";
  		 	echo "<label for='soporte'>".$fila["nombre"]."</label>";
  		}
  		echo "</div>";
  	?>
  	<br />
  	<!--Cargar los distintos generos en el combo-->
  	<?php
  		$sql="select * from genero";
  		$resultado=mysql_query($sql);
  	?>
  	<label for"genero" class="etiquetas">Genero</label>
  	<select class="alinear" name="genero" id="genero">
  	<?php
  		while ($fila=mysql_fetch_array($resultado))
  		 echo "<option value=".$fila["id"].">".$fila["descripcion"]."</option>";
  	?>
 	</select><br />
 	<!--Cargar los distintos directores en el combo-->
 	  	<?php
  		$sql="select * from director";
  		$resultado=mysql_query($sql);
  	?>
  	<label for"director" class="etiquetas">Director</label>
  	<select class="alinear" name="director" id="director">
  	<?php
  		while ($fila=mysql_fetch_array($resultado))
  		echo "<option value=".$fila["id"].">".$fila["nombre"]." ".$fila["apellidos"]."</option>";
  	?>
 	</select><br />
  <label for="sinopsisForm" class="etiquetas">Sinopsis:</label>
  <textarea name="sinopsisForm" id="sinopsisForm" class="alinear" wrap="off">
  </textarea><br />
<label for="cartel" class="etiquetas">Cartel</label>
    <input type="file" name="cartel" id="cartel" class="alinear" value="Examinar" accept="image/jpg"/><br />
    <input type="submit" name="continuar" id="continuar" class="boton" value="Continuar..."/>
  </form>
<?php
include("includes/pie.php");
include("includes/finHTML.php");
?>