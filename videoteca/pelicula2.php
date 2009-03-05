<?php
include("includes/inicioHTML.php");
include("includes/cabecera_usuario.php");
echo "<h2 class='colorRojo'>INSERTAR PELICULA</h2>";
include("includes/menu_usuario.php");
include("includes/crear_conexion.php");
conectar_a("videoteca");
include("includes/redimensionar.php");

	//if(isset($_POST["continuar"])){
	echo $_POST["cartel"];
	if($_FILES["cartel"]!=null){
		echo "a entrado";
		copy($_FILES["cartel"]["tmp_name"], "images/peliculas/".$_FILES["cartel"]["name"]);
		redimensionar("jpg","images/peliculas/".$_FILES["cartel"]["name"],"images/peliculas/".$_FILES["cartel"]["name"],150,200,95);
	}
	//}
	if(!isset($_POST["continuar2"])){
?>

   <form action="pelicula2.php" method="post" enctype="multipart/form-data">
   <span id="pasos">Completar los siguientes datos del formulario.<span class="colorRojo">Pagina 1/2</span></span><br />
<?php
//creacion de checkBox mediante una consulta a la tabla actor
$sql="select count(*) as cantidad from actor";
$resultado=mysql_query($sql);
$fila=mysql_fetch_array($resultado);
$total=$fila["cantidad"];
$inicio=0;
$cantidad=ceil($total/3);
$sql="select * from actor limit $inicio,$cantidad";
$inicio=$cantidad;
$resultado=mysql_query($sql);
$i=0;
echo "<div id='col1'>";
while($fila=mysql_fetch_array($resultado)){
	echo "<input type='checkbox' name='actor[]' id='actor'  value=".$fila["id"]." />";
	echo "<label for='actor' >".$fila["nombre"]." ".$fila["apellidos"]."</label><br />";
	}
	echo "</div>";

$sql="select * from actor limit $inicio,$cantidad";
$resultado=mysql_query($sql);
$i=0;
$inicio=$cantidad*2;
echo "<div id='col2'>";
while($fila=mysql_fetch_array($resultado)){
	echo "<input type='checkbox' name='actor[]' id='actor'  value=".$fila["id"]." />";
	echo "<label for='actor' >".$fila["nombre"]." ".$fila["apellidos"]."</label><br />";
	}
	echo "</div>";
	$sql="select * from actor limit $inicio,$total";
$resultado=mysql_query($sql);
$i=0;
echo "<div id='col3'>";
while($fila=mysql_fetch_array($resultado)){
	echo "<input type='checkbox' name='actor[]' id='actor'  value=".$fila["id"]." />";
	echo "<label for='actor' >".$fila["nombre"]." ".$fila["apellidos"]."</label><br />";
	}
echo "</div>";
//if get
?>
 <fieldset>
 <legend>Insertar nuevos actores</legend>
  	<label class="etiquetas" for="nombre1">Nombre:</label>
    <input class="alinear" type="text" name="nombre1" id="nombre1" size="40" maxlength="40"/><br />
  	<label class="etiquetas" for="apellidos1">Apellidos:</label>
    <input class="alinear" type="text" name="apellidos1" id="apellidos1" size="40" maxlength="40"/><br />
    <label class="etiquetas" for="nombre2">Nombre:</label>
    <input class="alinear" type="text" name="nombre2" id="nombre2" size="40" maxlength="40"/><br />
 <label class="etiquetas" for="apellidos2">Apellidos:</label>
    <input class="alinear" type="text" name="apellidos2" id="apellidos2" size="40" maxlength="40"/><br />
  	<label class="etiquetas" for="nombre3">Nombre:</label>
    <input class="alinear" type="text" name="nombre3" id="nombre3" size="40" maxlength="40"/><br />
    <label class="etiquetas" for="apellidos3">Apellidos:</label>
    <input class="alinear" type="text" name="apellidos3" id="apellidos3" size="40" maxlength="40"/><br />
    </fieldset>

  <input type="hidden" name="titulo" id="titulo" value="<?php echo $_POST["titulo"];?>" size="40" maxlength="40"/>
  <input type="hidden" name="soporte" id="soporte" value="<?php echo $_POST["soporte"];?>" size="40" maxlength="40"/>
  <input type="hidden" name="genero" id="genero" value="<?php echo $_POST["genero"];?>" size="40" maxlength="40"/>
  <input type="hidden" name="director" id="director" value="<?php echo $_POST["director"];?>" size="40" maxlength="40"/>
  <input type="hidden" name="sinopsis" id="sinopsis" value="<?php echo $_POST["sinopsisForm"];?>" size="40" maxlength="40"/>
  <input type="hidden" name="cartel" id="cartel" value="<?php echo $_POST["cartel"];?>" size="40" maxlength="40"/>
  <input type="submit" name="continuar2" id="continuar2" class="boton" value="Continuar..."/>
  </form>
<?php
}
else{
	$error=false;
	$codigoError="";
	//introdudir datos en la tabla pelicula
	$sql="insert into pelicula (titulo,idsoporte,idgenero,iddirector,sinopsis,cartel) values ('".$_POST["titulo"]."',".$_POST["soporte"].",".$_POST["genero"].",".$_POST["director"].",'".$_POST["sinopsis"]."','".$_POST["cartel"]."')";
	$resultado=mysql_query($sql);
	$id_pelicula=mysql_insert_id();
	if($resultado==0){
		$error=true;
		$codigoError="pelicula";
	}
	else {
		//si se a seleccionado algun checkbox
		if(isset($_POST["actor"])){
			$actores=$_POST["actor"];
			//si todo ha ido bien al introducir la pelicula, rellenar los datos de actores por pelicula
			foreach($actores as $elem=>$id){
				$sql="insert into actores_por_pelicula (idpelicula,idactor) values ($id_pelicula,$id)";
				if(mysql_query($sql)==0){
					$error=true;
					$codigoError="checks";
					//en caso de que haya ocurrido un error al insertar en la
					//tabla actores_por_pelicula, se borraran las lineas que se
					//han registrado en pelicula
					$sql="delete from pelicula where id=".$id_pelicula;
				}
			}
		}
		//si introducimos actores nuevos
		if($_POST["nombre1"]!=""){
			$sql="insert into actor (nombre,apellidos) values ('".$_POST["nombre1"]."','".$_POST["apellidos1"]."')";
			if(mysql_query($sql)==0){
				$error=true;
				$codigoError="actor1";
				//en caso de que haya ocurrido un error al insertar en la
					//tabla actor, se borraran las lineas que se
					//han registrado en pelicula
				$sql="delete from pelicula where id=".$id_pelicula;
			}
			else{
			$id_actor=mysql_insert_id();
			$sql="insert into actores_por_pelicula (idpelicula,idactor) values ($id_pelicula,$id_actor)";
				if(mysql_query($sql)==0){
					$error=true;
					$codigoError="actor1 pelicula";
					//en caso de que haya ocurrido un error al insertar en la
					//tabla actores_por_pelicula, se borraran las lineas que se
					//han registrado en actor y pelicula
					$sql="delete from pelicula where id=".$id_pelicula;
					$sql="delete from actor where id=".$id_actor;
				}
			}
		}
		if($_POST["nombre2"]!=""){
			$sql="insert into actor (nombre,apellidos) values ('".$_POST["nombre2"]."','".$_POST["apellidos2"]."')";
			if(mysql_query($sql)==0){
					$error=true;
					$codigoError="actor2";
					//en caso de que haya ocurrido un error al insertar en la
					//tabla actor, se borraran las lineas que se
					//han registrado en pelicula
					$sql="delete from pelicula where id=".$id_pelicula;
			}
			else{
			$id_actor=mysql_insert_id();
			$sql="insert into actores_por_pelicula (idpelicula,idactor) values ($id_pelicula,$id_actor)";
				if(mysql_query($sql)==0){
					$error=true;
					$codigoError="actor2 pelicula";
					//en caso de que haya ocurrido un error al insertar en la
					//tabla actores_por_pelicula, se borraran las lineas que se
					//han registrado en actor y pelicula
					$sql="delete from pelicula where id=".$id_pelicula;
					$sql="delete from actor where id=".$id_actor;
				}
			}
		}
		if($_POST["nombre3"]!=""){
			$sql="insert into actor (nombre,apellidos) values ('".$_POST["nombre3"]."','".$_POST["apellidos3"]."')";
			if(mysql_query($sql)==0){
					$error=true;
				$codigoError="actor3";
				//en caso de que haya ocurrido un error al insertar en la
					//tabla actor, se borraran las lineas que se
					//han registrado en pelicula
				$sql="delete from pelicula where id=".$id_pelicula;
			}
		else{
			$id_actor=mysql_insert_id();
			$sql="insert into actores_por_pelicula (idpelicula,idactor) values ($id_pelicula,$id_actor)";
				if(mysql_query($sql)==0){
					$error=true;
					$codigoError="actor3 pelicula";
					//en caso de que haya ocurrido un error al insertar en la
					//tabla actores_por_pelicula, se borraran las lineas que se
					//han registrado en actor y pelicula
					$sql="delete from pelicula where id=".$id_pelicula;
					$sql="delete from actor where id=".$id_actor;
				}
			}
		}
	}
	if ($error==true){
		echo "a ocurrido algun error durante el proceso";
		echo "<br />".$codigoError."<br />";
	}
	else
		echo "La informacion a sido correctamente guardada en la base de datos";

}
?>

<?php
include("includes/pie.php");
include("includes/finHTML.php");
?>