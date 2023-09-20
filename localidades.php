<?php
  require "protec.php";
  // ucfirst() convierte la primera letra de una cadena a mayúscula
  $usuario = ucfirst($_SESSION["usuario"]);
  require "protec_admin.php";
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
            <div class="col">
                <br>
                <h1>Lista de localidades</h1>
                <br>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Localidad ID</th>
                        <th scope="col">Provincia ID</th>
                        <th scope="col">Localidad</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                        // Acá creamos un bucle para poner una fila por provincia con toda su info  
                        $sql = "SELECT * FROM localidades ORDER BY provincia_id";
                        $rec = mysqli_query($link,$sql);
                        while($u = mysqli_fetch_array($rec)){
                      ?>
                        <tr>
                          <th scope="row"><?php echo $u["localidad_id"]; ?></th>
                          <td><?php echo $u["provincia_id"]; ?></td>
                          <td><?php echo $u["localidad"]; ?></td>
                        </tr>
                      <?php
                        }
                      ?>
                      
                    </tbody>
              </table>
            </div>
        </div>
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