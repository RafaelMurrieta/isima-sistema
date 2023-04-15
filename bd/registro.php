<?php
include("conexion.php");
session_start();

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$consulta= "INSERT INTO `alumnos`(`Id`,`Correos`, `Contraseñas`, `Nombre`) VALUES (,$nombre,$correo, $contraseña)";
$resultado =mysqli_query($conexion,$consulta);
if($resultado){
    ?>
    <h3 class="okey">¡Te has registrado correctamente!</h3>
    <?php
} else {
    ?>
    <h3 class="bad">Ha ocurrido un error!</h3>
    <?php
}
?>