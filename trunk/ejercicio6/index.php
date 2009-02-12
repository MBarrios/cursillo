<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3g.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<title>Mi pagina</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="estilo.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php
		$agenda=array( "pepe"=>"111111", "luis"=>"222222", "ana"=>"333333", "maria"=>"444444");
		$encontrado=false;
		$nom;
		foreach($agenda as $nombre=>$tfno){
			echo "<ul>";
		    echo "<li>  $nombre: $tfno</li>";
		    echo "</ul>";
		    if($tfno=="333333"){
		    	$encontrado=true;
		    	$nom=$nombre;
		    }
		}
		if ($encontrado)
			echo "el telefono 333333 pertenece a $nom";
		else
			echo "ese nombre no se haya en la agenda";
		?>
	</body>
</html>