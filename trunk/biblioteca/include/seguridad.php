<?php
//Inicio la sesi�n
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
if ($_SESSION["autenticado"] == "si") {
//if(!empty($_SESSION["usuario"])){
}
else{
   //si el usuario no est� autenticado
   //redirigirlo a la p�gina de inicio de sesi�n
   header("Location: zona_reservada.php");
   //salimos de este script
   exit();
}
?>