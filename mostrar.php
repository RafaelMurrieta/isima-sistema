<?php

require 'conexion_sql.php';
$Correo = isset($_GET['Correo']) ? $_GET['Correo'] : '';
    $id = "SELECT Id from 'alumnos'where Correos = '$Correo'";
    $consulta = "SELECT `Español`, `Matematicas`, `Ciencias`, `Artes`, `Ingles` FROM `alumnos` WHERE Id = 1";
    $resultado = mysqli_query($conex, $consulta);
    $array = mysqli_fetch_array($resultado);
?>