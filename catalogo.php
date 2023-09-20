<?php
  require "protec.php";
  // ucfirst() convierte la primera letra de una cadena a mayúscula
  $usuario = ucfirst($_SESSION["usuario"]);
  require "conexion.php";
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">

    <title>Tienda</title>
  </head>
  <body>
<!-- Comienzo Barra -->
    <?php
      include "menu.php";
    ?>
<!-- Fin Barra -->
    <div class="container">
        <div class="row">
            <div class="col mt-4 mb-4">
                <br>
                <h1 class="text-center" style="font-family: Roboto Slab">Bienvenido/a <?php echo $usuario; ?>!</h1>
            </div>
        </div>
    </div>

    <!-- cards de artículos -->
    <div class="container-fluid mb-5">
      <div class="row d-grid justify-content-center">
        <?php
          $sql = "SELECT * FROM articulos ORDER BY nombre";
          $rec = mysqli_query($link,$sql);
          while($u = mysqli_fetch_array($rec)) {
        ?>

        <div class="card column ml-2 mt-2" style="width: 260px;">
          <img src="./imgs/question-mark-icon-free-vector.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center"><?php echo $u["nombre"]; ?></h5>
            <hr>
            <p class="card-text">
              <b>En stock: </b><?php echo $u["stock_actual"]; ?> unidades <br>
              <b>Stock mínimo: </b><?php echo $u["stock_minimo"]; ?> unidades <br>
              <b>Rubro: </b>
              <?php
                switch($u["rubro_id"]) {
                  case 1:
                    echo "Electrónica";
                    break;
                  case 2:
                    echo "Ropa";
                    break;
                  case 3:
                    echo "Hogar";
                    break;
                  case 4:
                    echo "Deportes";
                    break;
                  case 5:
                    echo "Juguetes";
                    break;
                }
              ?>
            </p>
            <div class="d-flex">
              <a href="#" class="btn btn-primary"><i class="bi bi-cart4"></i> &nbspComprar</a>
              <h5 class="ml-4">$<?php echo $u["precio"]; ?></h5>
            </div>
          </div>
        </div>

        <?php
          }
        ?>
      </div>
    </div>

      <div class="card-header d-flex justify-content-end bg-dark text-white" style="font-family: Roboto Slab;">
        Made by Ivo Piccinini
      </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>