<!-- Comienzo Barra -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
  <a class="navbar-brand text-white" href="./catalogo.php">Tienda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="catalogo.php"><i class="bi bi-house-fill" style="font-family: Roboto Slab"></i> Inicio</a>
      </li>
      <?php
        if ($_SESSION["rol_id"] == 1) { ?>
            <li class="nav-item dropdown" >
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-gear-fill"></i> Admin options
              </a>
              <div class="dropdown-menu bg-dark">
                  <a class="nav-link dropdown-item text-white" href="usuarios.php"><i class="bi bi-people-fill"></i> Admin Usuarios <span class="sr-only">(current)</span></a>
                  <a class="nav-link dropdown-item text-white" href="provincias.php"><i class="bi bi-globe-americas"></i> Provincias <span class="sr-only">(current)</span></a>
                  <a class="nav-link dropdown-item text-white" href="localidades.php"><i class="bi bi-geo-alt-fill"></i> Localidades <span class="sr-only">(current)</span></a>
              </div>
            </li>
        <?php } ?>
      
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-fill"></i> <?php echo $usuario; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="configuracion.php">Configuración</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="salir.php">Salir</a>
            </div>
        </li>

    </ul>
  </div>
</nav>
<!-- Fin Barra -->