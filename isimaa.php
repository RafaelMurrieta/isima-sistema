<?php
require'mostrar.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="isima.css">
  <script src="js/bootstrap.min.js"></script>
  <title>Isima</title>
</head>
<body>
  <nav class="navbar bg-body-tertiary fixed-top" >
    <div class="container-fluid" id="barra">
      <a class="navbar-brand" href="Index.html"><img src="isma.png" alt="" id="logo"></a>    
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Index.html">Isima</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="QuienesSomos.html">
              ¿Quienes somos?
              </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="IndexT.html">Salir</a>
            </li>
        </div>
      </div>
    </div>
  </nav>
            <div class="titulo">
              <h1>LISTA DE CALIFICACIONES</h1>
            </div> 

            <table class="table table-light table-bordered border-primary">
              <thead>
                <tr>
                 
                  <th scope="row">Español</th>
                  <th scope="row">Matematicas</th>
                  <th scope="row">Ciencias</th>
                  <th scope="row">Artes</th>
                  <th scope="row">Ingles</th>
                </tr>
              </thead>
              <tbody id="datos">
                <?php
                foreach($resultado as $row){ ?>
                  <tr>
                    
                   
                    <td><?php echo $row['Español']; ?></td>
                    <td><?php echo $row['Matematicas'];?></td>
                    <td><?php echo $row['Ciencias'];?></td>
                    <td><?php echo $row['Artes'];?></td>
                    <td><?php echo $row['Ingles'];?></td>

                  <tr>
                
                
                </tbody>


              <?php
            }
              ?>
            </table>
    <div id= "opciones">
      <button type="button" class="btn btn-dark"><a href="planes.html"> Conocer las misiones de isima</button></a>
      <button type="button" class="btn btn-dark"><a href="https://www.isima.com.mx/flyer/pacifico/isc.pdf"> Consultar el plan de estudios</button></a>
    </div>
 
</body>
</html>

