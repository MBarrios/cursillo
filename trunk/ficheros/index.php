<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3g.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<title>Mi pagina</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="estilo.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
  <form action="index.php" method:"get">
  <select name="archivo" id="archivo">
  <?php
  $path="ficheros";
  $dir=opendir($path);
	while($elemento=readdir($dir))
		if($elemento!="." && $elemento!="..")
			if($_GET && $_GET["archivo"]==$elemento)
   			 echo "<option value=".$elemento." selected>".$elemento."</option>";
   			else
   			  echo "<option value=".$elemento.">".$elemento."</option>";
    Closedir($dir);
   ?>
  </select><br />
  <input type="submit" name="load" id="load" value="Load"/>
  <input type="submit" name="nuevo" id="nuevo" value="Nuevo"/>
 <br />
  <?php
  if(isset($_GET["nuevo"])){
  	echo "<label for='nombre'>Nombre del archivo:</label>";
  	echo "<input type='text' name='nombre' id='nombre' /><br />";
  }
  	echo "<textarea name='texto' id='texto' rows='10' cols='50' wrap='soft'>";
  		if(isset($_GET["load"]))
  {
  		$archivo=$_GET["archivo"];
  		$tamaño=filesize($path."/".$archivo);
  		$puntero=fopen($path."/".$archivo,"r");
  		echo fread($puntero,$tamaño);
  		fclose($puntero);
  }
  if(isset($_GET["guardar"])){
  	if(isset($_GET["nombre"]))
  		$archivo=$_GET["nombre"];
  	else
  		$archivo=$_GET["archivo"];
  	$puntero=fopen($path."/".$archivo,"w+");
  	$texto=$_GET["texto"];
  	fwrite($puntero,$texto);
  	fclose($puntero);
  	//ajax
	header("location:index.php");
  }
  	echo "</textarea><br />";
  ?>
  <input type="submit" name="guardar" id="guardar" value="Guardar"/>




</form>
	</body>
</html>
