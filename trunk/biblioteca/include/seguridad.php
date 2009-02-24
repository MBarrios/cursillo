<?php
//Inicio la sesión
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
if ($_SESSION["autenticado"] == "si") {
//if(!empty($_SESSION["usuario"])){
}
else{
   //si el usuario no está autenticado
   //redirigirlo a la página de inicio de sesión
   header("Location: zona_reservada.php");
   //salimos de este script
   exit();
}
?>