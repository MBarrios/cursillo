<?php
	include("include/seguridad.php");
	/*definición doctype, head(hoja de estilo), inicio del body y del div general*/
	include("include/inicioHTML.php");
	/*cabecera para un usuario sin permisos*/
	include("include/cabecera_administrador.php");
	/*menu para un usuario sin permisos e inicio del contenido*/
	include("include/menu_administrador.php");
	/*crea la conexion a la base de datos utilizando una funcion*/
	include("include/crear_conexion.php");
	/*llamada a la funcion pasandole como parametro el nombre de la bbdd*/
	conectar_a("biblioteca2");

	// Subiendo archivo...

if($_FILES["foto"] != null){
$filename= $_FILES["foto"]["name"];
move_uploaded_file($_FILES["foto"]["tmp_name"], "fotos/grandes/".$_FILES["foto"]["name"]);
$filename.resizeImage  ( 171  , 213  , "jpg"  , 1);
}else{
echo "no !!!";
}

	$sql="insert into libros (titulo,autor,paginas,idioma,descripcion,cd,prestado,claves,wfoto,id_editorial) values ('".$_POST["titulo"]."','".$_POST["autor"]."',".$_POST["paginas"].",'".$_POST["idioma"]."','".$_POST["descripcion"]."',".$_POST["cd"].",".$_POST["prestado"].",'".$_POST["claves"]."','".$_FILES["foto"]["name"]."',".$_POST["editorial"].")";
		$resultado=mysql_query($sql);
	if(mysql_affected_rows()>0)
		echo "el libro se ha guardado en la base de datos";
	else
		echo "a ocurrido un error al guardar el libro";
?>

<!-- fin CONTENIDO-->
</div>
<?php
	include("include/pie.php");
	include("include/finHTML.php");
?>
