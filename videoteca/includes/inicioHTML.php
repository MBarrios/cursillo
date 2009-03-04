<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3g.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<title>Mi pagina</title>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<link href="estilo.css" rel="stylesheet" type="text/css" />
      <script type="text/javascript"  src="sorttable.js"></script>
<script language="JavaScript" type="text/javascript">


  function mostrar_ficha(){
  	alert(document.getElementById("titulos").value);
  	var id=document.getElementById("titulos").value;
  	var direccion="ficha.php?id="+id;
  	location.href=direccion;
  }
</script>

</head>
	<body>
		<!--inicio GENERAL-->
		<div id="general">