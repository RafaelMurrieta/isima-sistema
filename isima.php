<?php

session_start();
$Correo = $_SESSION['username'];

if(!isset($Correo)){
    header("location: isima.php");
}else{
echo"<h1>Bienvenido usuario<h1>";
echo"<a href='index.html'>SALIR</a>";
}
?>