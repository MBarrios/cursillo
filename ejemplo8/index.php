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
		function factorial($num){
         $result=1;
         for($i=$num;$i>0;$i--){
              $result=$result*$i;
          }
          echo $result;
        }
	  ?>

	</body>
</html>
