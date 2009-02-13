<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3g.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<title>Mi pagina</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="estilo.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div>
		<?php
		 session_start();//iniciar sesion


		 ?>
			<form action="p2.php" method="get">
			<label for="usuario"> Introduce nombre:</label>
			<label for="password"> Introduce apellido:</label>
			<input type="text" name="usuario" />
			<input type="password" name="password"/>
			<input type="submit" value="aceptar"/>

<input type="hidden" name="<?php echo (session_name());?>" value="<?php echo (session_id());?>" />

			</form>

		</div>
	</body>
</html>
