<?php
// Variables que indican el archivo de la imagen y el nuevo tamano
//$filename = 'test.jpg';
//$percent = 0.5;

//// Content-type para el navegador
//header('Content-type: image/jpeg');

// Se obtienen las nuevas dimensiones
list($width, $height) = getimagesize($filename);
$newwidth = 171;
$newheight = 213;

// Cargar la imagen
$thumb = imagecreate($newwidth, $newheight);
$source = imagecreatefromjpeg($filename);

// Redimensionar
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// Mostrar la nueva imagen
imagejpeg($thumb);
?>

