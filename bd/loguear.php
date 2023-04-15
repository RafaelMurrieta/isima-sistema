<?php
require'conexion.php';
session_start();

 $Correo = $_POST['usuario'];
 $Contraseña = $_POST['clave'];

$q = "SELECT COUNT(*)as contar from alumnos where Correos = '$Correo' and Contraseñas = '$Contraseña'"; 
$consulta = mysqli_query($conexion , $q);
$array = mysqli_fetch_array($consulta);



if($array['contar']>0){
    $_SESSION['username'] = $Correo;
    header("location:../welcome.html");
}else{
    
    echo "Datos INCORRECTOS";
    header("location:../error.html");
}
?>

