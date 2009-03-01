<?php
include("includes/inicioHTML.php");
include("includes/cabecera_usuario.php");
echo "<h1>INSERTAR GENERO</h1>";
include("includes/menu_usuario.php");
include("includes/crear_conexion.php");
conectar_a("videoteca");


?>

  <form action="genero.php" method="get">
  	<label for="abreviatura">Abreviatura</label>
    <input type="text" name="abreviatura" id="abrebiatura" size="40" maxlength="40"/><br />
    <label for="genero">Genero</label>
    <input type="text" name="genero" id="genero" size="40" maxlength="40"/><br />
    <input type="submit" name="insertar" value="Insertar"/>
  </form>
<?php

if ($_GET){
	$sql="select * from genero where descripcion='".$_GET["genero"]."'";
	$resultado=mysql_query($sql);
	if (mysql_num_rows($resultado)>0)
		echo "el genero que esta intentando introducir, ya esta en la base de datos";
	else{
		$sql="insert into genero (nombre,descripcion) values('".$_GET["abreviatura"]."','".$_GET["genero"]."')";
	$resultado=mysql_query($sql);
	if(mysql_affected_rows()==0)
		echo "error";
	else
		echo "ok";
	}
}
?>
  <p>GENEROS LISTADOS</p>

  <ul>
  <?php
  $sql="select * from genero order by descripcion";
$resultado=mysql_query($sql);
  while ($fila=mysql_fetch_array($resultado))
  	echo "<li>".$fila["nombre"]." - ".$fila["descripcion"]."</li>";
  ?>
<?php
include("includes/pie.php");
include("includes/finHTML.php");
?>
