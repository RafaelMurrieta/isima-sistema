<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Registro</title>


</head>

<body>
    
    <h1>REGISTRO</h1>
    <div class="registro">
            <form method="post">
            <div class="datos">
                <form action="registro.php">
                <label for="nombre">Nombre:</label> 
                <input type="text" class="dato" id="nombre" name="nombre" placeholder="Nombre">
                <label for="correo">Correo electronico:</label>
                <input type="email" class="dato" id="correo" name="correo" placeholder="Correo">
                <label for="apellido">Contraseña</label>
                <input type="text" class="dato" id="contraseña" name="contraseña" placeholder="Contraseña">
                
       
            </div>
        
        <a href="">¿Ya tienes una cuenta? Inicia sesion aqui</a>
        <button name="registrar" id="registar" > Registrarme</button>
    </form>
    <?php
    include ("registro.php") ;
    ?>
</div>
</body>

</html>