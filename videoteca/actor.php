<?php
include("includes/inicioHTML.php");
include("includes/cabecera_usuario.php");
echo "<h2>INSERTAR ACTOR</h2>";
include("includes/menu_usuario.php");
include("includes/crear_conexion.php");
conectar_a("videoteca");


?>

  <form action="actor.php" method="get">
  	<label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" size="40" maxlength="40"/><br />
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos" size="40" maxlength="40"/><br />
    <input type="submit" name="insertar" value="Insertar"/>
  </form>
<?php

if ($_GET){
	$sql="select * from actor where nombre='".$_GET["genero"]."'";
	$resultado=mysql_query($sql);
	if (mysql_num_rows($resultado)>0)
		echo "el actor que esta intentando introducir, ya esta en la base de datos";
	else{
		$sql="insert into actor (nombre,apellidos) values('".$_GET["nombre"]."','".$_GET["apellidos"]."')";
	$resultado=mysql_query($sql);
	if(mysql_affected_rows()==0)
		echo "error";
	else
		echo "ok";
	}
}
?>
  <p>Actores LISTADOS</p>

  <textarea name="actores" rows="10" cols="25" wrap="off">
  <?php
  $sql="select * from actor order by nombre";
$resultado=mysql_query($sql);
echo "\n";
  while ($fila=mysql_fetch_array($resultado))
  	echo $fila["nombre"]." ".$fila["apellidos"]."\n";
   ?>

 </textarea>

<?php
include("includes/pie.php");
include("includes/finHTML.php");
?>