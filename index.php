<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">

    <title>Tienda</title>
  </head>
  <body>
  <div class="container mt-5">
        <div class="row">
            <div class="col">
                <br>
                <h3 class="text-center mb-3" style="font-family: Roboto Slab;">Ingreso al Sistema</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                
                <?php
                    if (isset($_GET["op"])) { ?>
                        <?php
                            switch($_GET["op"]){
                                case "ERROR":
                                    ?>
                                        <div class="alert alert-danger" role="alert">
                                            <i class="bi bi-info-circle"></i> Usuario o contraseña incorrecto
                                        </div>
                                    <?php
                                    break;
                                case "INACTIVO":
                                    ?>
                                        <div class="alert alert-warning" role="alert">
                                            <i class="bi bi-info-circle"></i> Usuario inactivo
                                        </div>
                                    <?php 
                                    break;
                                case "PROHIBIDO":
                                    ?>
                                        <div class="alert alert-danger" role="alert">
                                            <i class="bi bi-info-circle"></i> Usuario prohibido
                                        </div>
                                    <?php 
                                    break;
                                case "SALIO":
                                    ?>
                                        <div class="alert alert-dark" role="alert">
                                            <i class="bi bi-info-circle"></i> Sesión cerrada
                                        </div>
                                    <?php 
                                    break;
                            }
                        ?>
                   <?php } ?>
                   
                <div class="card">
                    <div class="card-body">
                    <form method="post" action="login.php">
                        <div class="form-group">
                            <label for="usuario"><b>Usuario:</b></label>
                            <input type="text" class="form-control" id="usuario" name="usuario">
                        </div>
                        <div class="form-group">
                            <label for="password"><b>Contraseña:</b></label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </div>
                    </form>
                    </div>
                </div>
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