<?php
include("conexion_sql.php");

if (strlen($_POST['nombre']) >= 1 &&
   strlen($_POST['correo']) >= 1 &&
   strlen($_POST['contraseña']) >= 1) {

    $Correo = trim($_POST['correo']);
    $Nombre =trim($_POST['nombre']);
    $Contraseña = trim($_POST['contraseña']);

    $consulta = "INSERT INTO `alumnos`(`Correos`, `Contraseñas`, `Nombre`) VALUES ('$Correo','$Contraseña','$Nombre')";
    $resultado = mysqli_query($conex,$consulta);
    if($resultado){
        ?>
        <h3 class="okey">¡Te has registrado correctamente!</h3>
        <?php
    } else {
        ?>
        <h3 class="bad">Ha ocurrido un error!</h3>
        <?php
    }
} else{
    ?>
        <h3 class="bad">Rellena los campos!</h3>
        <?php
}


?>