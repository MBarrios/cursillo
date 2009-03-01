<?php
include("includes/inicioHTML.php");
include("includes/cabecera_usuario.php");
echo "<h1>INSERTAR PELICULA</h1>";
include("includes/menu_usuario.php");
include("includes/crear_conexion.php");
conectar_a("videoteca");


?>

  <form action="pelicula2.php" method="get">
  <span>Completar los siguientes datos del formulario.Pagina 1/2</span><br />
  	<label for="titulo">Titulo:</label>
    <input type="text" name="titulo" id="titulo" size="40" maxlength="40"/><br />
    <label>Soporte</label>
    <input type="radio" name="soporte" id="soporte" value="1"/>
  	<label for="soporte">DVD</label>
  	<input type="radio" name="soporte" id="soporte" value="2"/>
  	<label for="soporte">VHS</label>
  	<input type="radio" name="soporte" id="soporte" checked value="3"/>
  	<label for="soporte">LD</label><br />
  	<?php
  		$sql="select * from genero";
  		$resultado=mysql_query($sql);
  	?>
  	<select name="genero" id="genero">
  	<?php
  		while ($fila=mysql_fetch_array($resultado))
  		 echo "<option value=".$fila["id"].">".$fila["descripcion"]."</option>";
  	?>
 	</select><br />
 	  	<?php
  		$sql="select * from director";
  		$resultado=mysql_query($sql);
  	?>
  	<select name="director" id="director">
  	<?php
  		while ($fila=mysql_fetch_array($resultado))
  		 echo "<option value=".$fila["id"].">".$fila["nombre"]." ".$fila["apellidos"]."</option>";
  	?>
 	</select><br />
  <label for="sinopsis">Sinopsis</label>
  <textarea name="sinopsis" id="sinopsis" rows="10" cols="50" wrap="off">
  </textarea><br />
<label for="foto">Cartel</label>
    <input type="file" name="cartel" id="cartel" value="Examinar" accept="image/jpg" size="40" maxlength="40"/><br />
    <input type="submit" name="continua" value="Continuar..."/>
  </form>



<?php
include("includes/pie.php");
include("includes/finHTML.php");
?>